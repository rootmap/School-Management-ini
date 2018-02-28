<?php 
include('class/auth.php');
include('class/eiin_Class.php');	
$obj_eiin = new eiin_class();
$table="ams_admin_eiin_number";
$table2="ams_admin_sms_stteing";
$table3="ams_singup";

$table4="ams_singup";

if(@$_GET['del'])
{
	if($obj->delete("ams_singup",array("eiin_number"=>$_GET['del']))==1)
	{
		$obj->delete($table,array("eiin"=>$_GET['del']));
		$obj->Success("Eiin Number Successfully Deleted From System.",$obj->filename());	
	}
	else
	{
		$obj->delete($table,array("eiin"=>$_GET['del']));
		$obj->Error("Error Occur During Delete",$obj->filename());	
	}
}


if(isset($_POST['save']))
{
	$time= date('h:i:s a');
	if($obj->exists($table,array("eiin"=>$_POST['eiin']))==0 && !empty($_POST['eiin']))
	{
		
		if($obj->insert($table,array("eiin"=>$_POST['eiin'],"time"=>$time,"date"=>date('Y-m-d'),"status"=>1))==1)
		{
			echo $obj->Success("Data Saved Successfully",$obj->filename());	
		  }
			 else
		  {
			echo $obj->Error("Data Saved Failed",$obj->filename());	
		  }
	}
	else
	{
		echo $obj->Error("Already Exists ",$obj->filename());	
	}
	
	  
	
}

if(isset($_POST['login']))
{
	if($obj->exists_multiple("ams_admin_eiin_chk",array("name"=>$_POST['name'],"password"=>$_POST['password']))==1)
	{
		session_regenerate_id();
		$_SESSION['SESS_AMSIT_EIIN_KEY']=$obj->SelectAllByVal("ams_admin_eiin_chk","name",$_POST['name'],"id");
		
		
		
		
		session_write_close();
		header('location: eiin_number_setting.php');
		exit();	
	}
	else
	{
		$error_data[]="<div class='error_msg'>Login Failed, Please Try Again</div>";
		$error_flag=true;
		if($error_flag)
		{
			$_SESSION['ERRMSG_ARR']=$error_data;
			session_write_close();
			header('location: eiin_number_setting.php');
			exit();
			
		}	
	}
}


if(isset($_POST['confarm']))
{
	$time1= date('h:i:s a');
	if(!empty($_POST['t_quantity']))
	{
		if($balance>$_POST['t_quantity'])
		{
			$obj->insert($table2,array("eiin_number"=>$_POST['eiin_number'],"school_id"=>$_POST['school'],"time"=>$time1,"company_id"=>$company,"cline_quantity"=>$_POST['t_quantity'],"date"=>date('Y-m-d'),"status"=>1));
			
			echo $obj->Success("SMS Send Successfully ",$obj->filename());	
		}
		else
		{
			echo $obj->Error("Failed, Insufficient SMS Quantity ",$obj->filename());	
		}
		
	}
	else
	{
		echo $obj->Error("Failed, Please Try Agian ",$obj->filename());	
	}
	

	  
	
}

if(@$_GET['action']=='delete')
{
    if($obj->delete($table,array("id"=>$_GET['id']))==1)
    
    $count=count($_GET['id']);
      if($count!==0)
	  {
			echo $obj->Success("Data Delete Successfully",$obj->filename());	
		}
		else
		{
			echo $obj->Error("Data Delete Failed",$obj->filename());	
		}
            
}
if(isset($_GET['update']))
{
	
	$array=array("id"=>$_GET['id'],"eiin"=>$_GET['eiin'],"date"=>date('Y-m-d'),"status"=>$_GET['status']);
	if($obj->update($table,$array)==1)
	
	
	  $count=count($_GET['eiin']);
      if($count!==0)
	  {
		echo $obj->Success("EIIN Number Active Successfully",$obj->filename());	
	  }
	     else
	  {
		echo $obj->Error("EIIN Number Active Failed",$obj->filename());	
	  }
	  
	
}

if(isset($_GET['update1']))
{
	
	$array=array("id"=>$_GET['id'],"eiin"=>$_GET['eiin'],"date"=>date('Y-m-d'),"status"=>$_GET['status']);
	if($obj->update($table,$array)==1)
	
	
	  $count=count($_GET['eiin']);
      if($count!==0)
	  {
		echo $obj->Success("EIIN Number Active Successfully",$obj->filename());	
	  }
	     else
	  {
		echo $obj->Error("EIIN Number Active Failed",$obj->filename());	
	  }
	  
	
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
	
<title>ADMINISTRATION</title>
<link href="css/dreams.css" rel="stylesheet" type="text/css" />
<link href="css/dreams_admin.css" rel="stylesheet" type="text/css" />
<link rel='stylesheet' type='text/css' href='css/admin_menu.css' />
<link rel='stylesheet' type='text/css' href='css/amsit_style.css' />
<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css'>
<script>
            function showschool(str)
            {
                if (str == "")
                {
                    document.getElementById("school").innerHTML = "";
                    return;
                }
                if (window.XMLHttpRequest)
                {// code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                }
                else
                {// code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        document.getElementById("school").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajx/school.php?s=" + str, true);
                xmlhttp.send();
            }
        </script>
        <script>
            function showsquantity(str)
            {
                if (str == "")
                {
                    document.getElementById("sms").innerHTML = "";
                    return;
                }
                if (window.XMLHttpRequest)
                {// code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                }
                else
                {// code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        document.getElementById("sms").innerHTML = xmlhttp.responseText;
                    }
                }
				
				number=document.getElementById('number').value;
				t_quantity=document.getElementById('t_quantity').value;
                xmlhttp.open("GET", "ajx/quantity.php?q=" + str+"&t_quantity="+t_quantity+"&number="+number, true);
                xmlhttp.send();
            }
        </script>


</head>

<body>
	<!-- body starts from here-->
        <?php include('include/head.php');?>
<div class="height-100 width_960 auto-position"> 
   <?php include('include/manu.php');?>
</div>
<div class="width_960 marging_left_right" >
  <?php include_once('class/esm.php'); ?>
</div>
<!----------body_all strart------------------------------------------------->
<div id="body_all" class="padding_butttom_5 padding_left_5 padding_right5 shadow_inset_1">
   <!-----input fild start--------->
   <?php
   if(@$_SESSION['SESS_AMSIT_EIIN_KEY']=='')
   {
   ?>
     <div class="input_fild height_50 backgroung_3 padding_top_15">
     <form action="" method="post" name="logivn">
       <ul class="padding_left_10">
         <li class="left line-height_30 font_2 color_w">User ID   :</li>
         <li class="left margin_left10">
       <input type="text" class="input font_1 height-30 padding_left_10 padding_right10" placeholder="Type Suer ID" name="name" />
         </li> 
         <li class="left line-height_30 font_2 color_w margin_left10">Password   :</li> 
         <li class="left margin_left10">
         <input class="font_1 input height-30 padding_left_10 padding_right10" name="password" type="password" placeholder="Type New Password" />
         </li>
         <li class="left margin_left10">
         <button type="submit" name="login" class="padding_5 backgroung_4 borber2 font_2 color_w">LOGIN</button>
         </li>
       </ul>
       </form>
     </div>
     <?php }else{  ?>
   <!-----input fild end--------->
   
   <!-----table_body start--------->
     <div class="table_body">
     <!-----table_body_left start--------->
     <form action="" method="post" name="eiin">
       <div class="width_20 padding_5 left">
        <ul>
        <input maxlength="8" class="borber1 text_aling_center height-40 width_90 padding_left_10 padding_right10 left font_2" placeholder="Create New EIIN Number" name="eiin" />
        <button type="submit" class="borber2 padding_5 marging_top_5 backgroung_4 color_w width_40 margin_left50 font_2" name="save"> Submit </button>
        </ul>
        <div style="overflow:scroll; height:300px;">
        <table cellpadding="0" class="width_100 font_3 text_aling_center marging_top_5" cellspacing="1" border="0">
          <thead class="backgroung_1 color_red">
            <th class="padding_5">S.L</th>
            <th class="padding_5">EIIN Number</th>
            <th class="padding_5">Status</th>
          </thead>
          <tbody class="backgroung_2">
          <?php 
		    $data=$obj->SelectAll($table);
			$s=1;
			if(!empty($data))
			foreach ($data as $row):
			
			if($obj->exists_multiple("ams_singup",array("eiin_number"=>$row->eiin))==0)
			{
		  ?>
            <tr>
              <td class="padding_5"><?php echo $s; ?></td>
              <td class="padding_5"><?php echo $row->eiin; ?></td>
              <td class="padding_5">
                <div id="manu2">
                                <ul>
                                  <li>
                                  <?php $ex=$obj->exists_multiple($table,array("status"=>3,"eiin"=>$row->eiin));
				if($ex==0){
				 ?>
                 <span class="color_red">Inactive</span>
				 <?php }else{ ?>
                 <span class="color_gr"><font color="#009900">Active</font></span>
				 <?php } ?>
                                    <ul class="backgroung_5">
                                      <li><a name="update" href="eiin_number_setting.php?update=yes&amp;eiin=<?php echo $row->eiin; ?>&amp;status=3&amp;id=<?php echo $row->id; ?>">
												<?php 
				$ex=$obj->exists_multiple($table,array("status"=>3,"eiin"=>$row->eiin));
				if($ex==0){
				 ?>
                 <span class="color_w">Active</span>
				 <?php }else{ ?>
                 <span class="color_gr">Active</span>
				 <?php } ?>
                 </a>
                 </li>
                                      <li><span>
                                      <a name="update" href="eiin_number_setting.php?update1=yes&amp;eiin=<?php echo $row->eiin; ?>&amp;status=2&amp;id=<?php echo $row->id; ?>" >
												<?php 
				$ex=$obj->exists_multiple($table,array("status"=>2,"eiin"=>$row->eiin));
				if($ex==0){
				 ?><span class="color_w">Inactive</span><?php }else{ ?><span class="color_red">Inactive</span><?php } ?></a></span></li>
                      <li><a href="<?php echo $obj->filename(); ?>?del=<?php echo $row->eiin; ?>"><font color="#990000">Delete</font></a></li>               
                                    </ul>
                                    
                                  </li>
                                  
                                </ul>
                             </div>
              </td>
            </tr>
            <?php 
			$s++;
			}
			 endforeach; ?>
          </tbody>
        </table>
        </div>
       </div>
       </form>
      <!-----table_body_left end--------->
      
      <!-----table_body_center start--------->
       <div class="width_40_5 height_auto padding_5 left">
          <ul class="height_auto width_auto">
            <li class="width_95 color_w text_aling_center font_2 padding backgroung_3">
              Recent Active EIIN Number List
            </li>
          </ul>
          <div style="height:300px; overflow:scroll;">
          <!--<table cellpadding="0" class="width_100 font_3 marging_top_5 text_aling_center" cellspacing="1" border="0">
          <thead class="backgroung_1 color_red">
            <th class="padding_5">S.L</th>
            <th class="padding_5">EIIN Number</th>
            <th class="padding_5">SMS Quantity</th>
            <th class="padding_5">Time</th>
            <th class="padding_5">Date</th>
          </thead>
          <tbody class="backgroung_2">
          <?php 
		    /*$data=$obj->SelectAll_limit_order_20($table2);
			$s=1;
			$x=0;
			if(!empty($data))
			foreach ($data as $row2):
			$total=$x+=$row2->cline_quantity;*/
		  ?>
            <tr>
              <td class="padding_5"><?php //echo $s; ?></td>
              <td class="padding_5"><?php //echo $row2->eiin_number; ?></td>
              <td class="padding_5"><?php //echo $row2->cline_quantity;?></td>
              <td class="padding_5"><?php //echo $row2->time;  ?></td>
              <td class="padding_5"><?php //echo $row2->date; ?></td>
            </tr>
            <?php //$s++; endforeach; ?>
             <tr class="backgroung_1">
              
              <td colspan="2" class="padding_5">Total=</td>
              <td class="padding_5"><?php //echo $total; ?></td>
              <td colspan="3" class="padding_5"></td>
            </tr>
          </tbody>
        </table>-->
        <table cellpadding="0" style="width:auto;" class="font_3 text_aling_center marging_top_5" cellspacing="1" border="0">
          <thead class="backgroung_1 color_red">
            <th class="padding_5">S.L</th>
            <th class="padding_5">EIIN Number</th>
            <th>School Name</th>
            <th class="padding_5">District</th>
            <th class="padding_5">Thana</th>
            <th class="padding_5">Active Date</th>
          </thead>
          <tbody class="backgroung_2">
          <?php 
		    $data=$obj_eiin->RecentLoadByLast($table3,"id");
			$s=1;
			if(!empty($data))
			foreach ($data as $row):
		  ?>
            <tr>
              <td class="padding_5"><?php echo $s; ?></td>
              <td class="padding_5"><?php echo $row->eiin_number; ?></td>
              <td><?php echo $obj->SelectAllByVal("ams_singup","eiin_number",$row->eiin_number,"sms_sander_id"); ?></td>
              <td class="padding_5"><?php $dat=$obj->SelectAllByVal("division","id",$row->divition,"name"); echo $dat;  ?></td>
              <td class="padding_5"><?php $dat=$obj->SelectAllByVal("thana","id",$row->zip_code,"name"); echo $dat;  ?></td>
              <td class="padding_5"><?php echo $row->date; ?></td>
            </tr>
            <?php $s++; endforeach; ?>
            
          </tbody>
        </table>
        </div>
       </div>
      <!-----table_body_center start--------->
      
      <!-----table_body_right start--------->
        <div class="width_37 height_auto left">
          <ul class="height_auto width_auto marging_top_5">
            <li class="width_94 color_w font_2 text_aling_center padding backgroung_3">
     <!-------------------manu start------------------------------------>
               <div id='cssmenu' class="left" style="margin-top:-6px;">
                <ul>
                     <li class='has-sub last'><a href='#'><span>Sort by</span></a>
                      <ul>
                         <li><a href='#'><span>Type EIIN</span></a></li>
                         <li><a href='#'><span>Name</span></a></li>
                         <li><a href='#'><span>Date</span></a></li>
                         <li class='last'><a href='#'><span>Total Size</span></a></li>
                      </ul>
                   </li>
                </ul>
                </div>  
     <!-------------------manu End------------------------------------>       
                All EIIN Number Lists
            </li>
          </ul>
          <div style="height:300px; width:100%; overflow:scroll;">
          <table cellpadding="0" class="width_100 font_3 text_aling_center marging_top_5" cellspacing="1" border="0">
          <thead class="backgroung_1 color_red">
            <th class="padding_5">S.L</th>
            <th class="padding_5">EIIN Number</th>
            <th class="padding_5">District</th>
            <th class="padding_5">Thana</th>
            <th class="padding_5">Active Date</th>
          </thead>
          <tbody class="backgroung_2">
          <?php 
		    $data=$obj_eiin->LoadByLast($table3,"id");
			$s=1;
			if(!empty($data))
			foreach ($data as $row):
		  ?>
            <tr>
              <td class="padding_5"><?php echo $s; ?></td>
              <td class="padding_5"><?php echo $row->eiin_number; ?></td>
              <td class="padding_5"><?php $dat=$obj->SelectAllByVal("division","id",$row->divition,"name"); echo $dat;  ?></td>
              <td class="padding_5"><?php $dat=$obj->SelectAllByVal("thana","id",$row->zip_code,"name"); echo $dat;  ?></td>
              <td class="padding_5"><?php echo $row->date; ?></td>
            </tr>
            <?php $s++; endforeach; ?>
            
          </tbody>
        </table>
        </div>
       </div>
      <!-----table_body_right start--------->
      
      <div class="celr"></div>
     </div>
   <!-----table_body end--------->
   <div class="celr"></div>
   
   <!-----table_sms_setting start--------->
     <div class="table_sms_setting width_100 height_auto padding_butttom_5">
    
       <!-----SMS Inbox  start--------->
       <div class="width_30 height_auto left padding_left_5">
          <div class="backgroung_3 width_100 height-30 font_2 color_w text_aling_center">
            Administration SMS Inbox
          </div>
          
          <div class="width_95 backgroung_12">
              <ul class="padding">
                <li class="borber2 backgroung_5 marging_left_right width_70 height-40 text_aling_center font_2 color_red">Quantity of SMS
                </li>
                <li class="marging_left_right width_70 height-40 text_aling_center">
                 <input disabled="disabled" name="" value="<?php  echo $balance;  ?> " type="text" placeholder="Quantity" class="borber2 marging_left_right width_70 font_11 color_red height-25 padding_5 text_aling_center font_3" />
                </li>
              </ul>
          </div>
       </div>  
     <!-----SMS Inbox  end--------->
     
     <!-----SMS Settings  start--------->
        <div class="width_69 right height_auto">
           <div class="backgroung_3 width_100 height-30 font_2 color_w text_aling_center">SMS Settings</div>
           
           <div class="backgroung_12 width_99 marging_left_right height-100">
             <ul class="padding_5">
               <li class="height-30 font_2 left color_b">EIIN Number :  </li>
               <li class="height-30 font_2 left margin_left10">
                 <select id="number" class="borber2 padding_4 width-label-150 font_11 color_b" name="number" onchange="showschool(this.value)">
                   <option>EIIN Number</option> 
                   <?php
				     $data=$obj->SelectAll('ams_singup');
					 if(!empty($data))
					 foreach ($data as $row1):
				   ?>
                   <option value="<?php echo $row1->eiin_number;?>"><?php echo $row1->eiin_number;?></option>
                   <?php endforeach; ?>
                 </select>
               </li>
               <li  id="school" class="height-30 width_55 font_2 left margin_left25">
                <input name="school" class="borber2 padding_5 width_94" type="text" placeholder="School/Collage Name"  />
               </li>
               
               <li class="height-30 font_2 left margin-top-10 color_b">
                SMS Quantity   :
               </li>
               <li class="height-30 font_2 left margin_left10 margin-top-10">
                 <input class="borber2 padding_5" type="text" id="t_quantity" placeholder="Text Quantity" name="t_quantity" />
               </li>
               
               <li class="height-30 font_2 left margin_left10 margin-top-10">
                <button class="borber2 padding_5 font_1 color_w backgroung_4" id="send" onclick="showsquantity('4')" type="submit" name="send" />Send </button>
               </li>
               
               <li id="sms" class="height-30 font_2 left margin_left10 margin-top-10">
                  <input class="borber2 padding_5" value="" type="text" placeholder="Text Quantity" id="t_quantity" name="t_quantity" />
               </li>
               <!--<li class="height-30 font_2 left margin_left10 margin-top-10">
               <button class="borber2 padding_5 font_1 color_w backgroung_4" type="submit" name="confarm" />Conform </button>
               </li>-->
              
               
               <div class="celre"></div>
             </ul>
             <div class="celre"></div>
           </div>
             
        </div>
     <!-----SMS Settings  end--------->
    
       <div class="celr"></div>
     </div><div class="position_fixed_1 top_830 backgroung_12 padding_5 ">
       <a class="font_11 color_b" href="logout_eiin.php">Log out</a>
     </div>
    
   <!-----table_sms_setting end--------->
   <?php } ?>
   
</div>
<!----------body_all end------------------------------------------------->  
   <?php include('include/admin.php');?>           
 <?php include ('./class/footer.php'); ?>
               
</body>
</html>