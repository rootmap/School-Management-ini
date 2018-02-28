<?php 
class sms_gateway
{
	function brand($brand)
	{
		return $brand;	
	}
	
	/*function brand()
	{
		return "DreamsTech";	
	}*/
	
	function sms_available($school)
	{
		$obj= new db_class();
		$sms_availavle=$obj->SelectAllByID("ams_admin_sms_stteing",array("eiin_number"=>$school));
		$sms=0;
		if(!empty($sms_availavle))
		{
		foreach($sms_availavle as $av):
			$sms+=$av->cline_quantity;
		endforeach;
		}
		else
		{
			$sms+=0;	
		}
		
		$sms_used=$obj->SelectAllByID_Multiple("sms",array("eiin_number"=>$school));
		$used=0;
		if(!empty($sms_used))
		{
		foreach($sms_used as $us):
			$dapistatus=$us->api_status;
			$apistatus=intval(substr($dapistatus,2,4));
			if($apistatus==1701)
			{
				$arrays= explode('|88',$us->phone1);
				$arrays2= str_replace("S|",",",$us->api_status);
				$arraystwo= explode(',',$arrays2);
				$rq=0;
				$a=1;
				foreach($arrays as $ww):
					$checksms=substr($arraystwo[$a],0,4);
					if($checksms==1701)
					{
						$rq+=1;
					}
					else
					{
						$rq+=0;	
					}
				$a+=2;	
				endforeach;
				$quantity=$rq;
				$used+=$rq;
			}
			else
			{
				$used+=0;	
			}
		endforeach;
		}
		else
		{
			$used+=0;	
		}
		
		$available=$sms-$used;
		
		return $available;
	}
	
	function sms_status($st)
	{
		if($st==1)
		{
			return "<label class='label label-success'>Successfully Send</label>";	
		}
		elseif($st==2)
		{
			return "<label class='label label-warning'>Failed for Insufficient Sms Quantity</label>";	
		}
		elseif($st==0)
		{
			return "<label class='label label-danger'>Failed for Number Not in correct Format</label>";	
		}
	}
	
	
	function sms($number,$sms,$brand,$eiin_number)
	{
	
		$obj= new db_class();
		if($this->sms_available($eiin_number)>1)
		{
			$smsuid = 'dreamstech'; // your userid
			$smspass = '123456'; // your password
			$phone ="88".$number;
			$sender =$this->brand($brand);
			//$sender =$this->brand();
			$message =urlencode($sms);
			$link ="http://sms.creativeitsoft.com/multismsapi.php?sender=".$sender."&userid=".$smsuid."&password=".$smspass."&type=0&dlr=1&destination=".$phone."&message=".$message."";
			
			$link="http://bulksms.creativeitsoft.com/multismsapi.php?userid=".$smsuid."&password=".$smspass."&phone=".$phone."&senderid=".$sender."&message=".$message."&type=1";
			
			$api_status=file_get_contents($link);
			//sms gateway
			$time=date("g:i:s A");
			if($api_status)
			{
				
				$obj->insert("sms",array("phone1"=>$number,"eiin_number"=>$eiin_number,"sms"=>$sms,"time"=>$time,"date"=>date('Y-m-d'),"api_status"=>$api_status));
				return 1;
			}
			else
			{
				$obj->insert("sms",array("phone1"=>$number,"eiin_number"=>$eiin_number,"sms"=>$sms,"time"=>$time,"date"=>date('Y-m-d'),"api_status"=>$api_status));
				return 0;
			}
		}
		
	}
	
	
	
	//sms code start from here
	
	
	/*function available_sms()
	{
		$obj= new db_class();
		$data=$obj->SelectAllByID("sms_inventory",array("status"=>1));
		if(!empty($data))
		$purchase=0;
		foreach($data as $pur):
			$purchase+=$pur->sms;
		endforeach;	
		
		$datas=$obj->SelectAll("sms");
		$expense=0;
		if(!empty($datas))
		foreach($datas as $ex):
			$dapistatus=$ex->api_status;
			$apistatus=intval(substr($dapistatus,2,4));
			if($apistatus==1701)
			{
				$arrays= explode('|88',$ex->phone1);
				$arrays2= str_replace("S|",",",$ex->api_status);
				$arraystwo= explode(',',$arrays2);
				$rq=0;
				$a=1;
				foreach($arrays as $ww):
					$checksms=substr($arraystwo[$a],0,4);
					if($checksms==1701)
					{
					$rq+=1;
					}
					else
					{
					$rq+=0;	
					}
				$a+=2;	
				endforeach;
				$quantity=$rq;
				$expense+=$rq;
			}
			else
			{
				$expense+=0;	
			}
		endforeach;			
		
		$available=$purchase-$expense;
		return $available;
	}
	
	function branding()
	{
		return "BDGOODLUCK";	
	}
	
	function branding_user()
	{
		return "bdgood";	
	}
	
	function branding_pass()
	{
		return "123456";	
	}
	
	function sms_status($st)
	{
		if($st==1)
		{
			return "<label class='label label-success'>Successfully Send.</label>";	
		}
		else
		{
			return "<label class='label label-warning'>Failed, Not Send.</label>";	
		}
	}
	

	
	function amsit_sms_uniaid($number,$sms) 
	{
		$obj= new db_class();
    	$phone =$number;
		$sender =$this->branding();
		$message =urlencode($sms);
		
		$smsuid =$this->branding_user();
		$smspass =$this->branding_pass();
		
		if($this->available_sms()!=0)
		{
			$link="http://bulksms.creativeitsoft.com/multismsapi.php?userid=".$smsuid."&password=".$smspass."&phone=".$phone."&senderid=".$sender."&message=".$message."&type=1";
			$api_status=file_get_contents($link);
			if($api_status=="Destination Not Allowed")
			{
				$obj->insert("sms",array("phone1"=>$number,"sms"=>$sms,"date"=>date('Y-m-d'),"status"=>0));
				return 0;
			}
			else
			{
				$obj->insert("sms",array("phone1"=>$number,"sms"=>$sms,"date"=>date('Y-m-d'),"status"=>1));
				return 1;	
			}
		
		}
		else
		{
			return 2;
		}
		
    }
	
	
	function amsit_sms($number,$sms) 
	{
		$obj= new db_class();
    	$phone =urlencode("88".$number);
		$sender =$this->branding();
		$message =urlencode($sms);
		
		$smsuid =$this->branding_user();
		$smspass =$this->branding_pass();
		
		if($this->available_sms()!=0)
		{
		
			$link="http://bulksms.creativeitsoft.com/multismsapi.php?userid=".$smsuid."&password=".$smspass."&phone=".$phone."&senderid=".$sender."&message=".$message."&type=1";
			
			$api_status=file_get_contents($link);
			if($api_status=="Destination Not Allowed")
			{
				$obj->insert("sms",array("phone1"=>$number,"sms"=>$sms,"date"=>date('Y-m-d'),"api_status"=>$api_status));
				return 0;
			}
			else
			{
				$obj->insert("sms",array("phone1"=>$number,"sms"=>$sms,"date"=>date('Y-m-d'),"api_status"=>$api_status));
				return 1;	
			}
		
		}
		else
		{
			return 2;
		}
		
    }
	
	
	function amsit_sms_send($number,$sms) 
	{
		$obj= new db_class();
		if($this->amsit_sms($number,$sms)==1)
		{
			$obj->Success("Successfully Send",$obj->filename());	
		}
		elseif($this->amsit_sms($number,$sms)==2)
		{
			$obj->Error("Failed to Send, Insufficient SMS Quantity in Stock, Contact With <a target='_blank' href='http://www.amsitsoft.com'>AMS IT</a>",$obj->filename());	
		}
		else
		{
			$obj->Error("Failed to Send, System Error",$obj->filename());		
		}
    }
	
	function amsit_sms_send_multiple($number,$sms) 
	{
		$obj= new db_class();
		if($this->amsit_sms($number,$sms)==1)
		{
			return 1;	
		}
		elseif($this->amsit_sms($number,$sms)==2)
		{
			return 0;
		}
		else
		{
			return 0;		
		}
    }*/
	
	
	//sms code end from here
	
	
	
}
?>