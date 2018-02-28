<?php
include("../class/auth.php");
include('../class/currency_class.php');
$table="ams_manage_account_paymant";
extract($_GET);
if($r!='')
{
?>
   
    
<?php
$data=$obj->SelectAllByID($table,array("receipt"=>$r));
if(!empty($data))
foreach($data as $row):
?>  


  
<table class="Fees_table shadow_inner" width="70%" cellspacing="1" align="center" style="font-family:Tahoma, Geneva, sans-serif; font-weight:100; color:rgba(0,0,0,1); padding-bottom:10px; font-size:12px; margin-left:auto; margin-right:auto;background:rgba(255,255,255,1);" >
                                     <tr><td colspan="5" class="center height-40" style="padding:10px;">
                                            <ul style="background:rgba(153,153,153,.5); border-radius:6px; height:100px;">
                                             <li style="width:15%; padding-top:10px; float:left;">
                                              <img style="border-radius:6px;width:70px; height:70px;" src="photo/<?php echo $obj->SelectAllByVal("ams_singup","eiin_number",$school,"photo"); ?>" />
                                               
                                             </li>
                                            
                                            <li style="width:78%;float:left;font-size:19px;color:#036; margin-right:10px;">
                                            
											<a style=" padding:10px; color:#036; border-bottom:#036 2px solid;"><?php echo $obj->SelectAllByVal("ams_singup","eiin_number",$row->school_id,"acount_name"); ?></a>
                                            </li>
                                            <li style="width:80%;float:left;color:#036;">
                                           
                                            <?php echo $obj->SelectAllByVal("ams_singup","eiin_number",$row->school_id,"address"); ?>
                                           Phone :  <?php echo $obj->SelectAllByVal("ams_singup","eiin_number",$row->school_id,"number"); ?>
                                            </li>
                                            </ul>
											</td>
                                        </tr>
                                        
                                        <tr>
                                            <td></td>
                                            <td  colspan="1" style="padding-left:25px;" class=" a-left ">
                                            <span style="color:#333;">Group:</span>
											<?php echo $obj->SelectAllByVal("ams_management_group","id",$row->group_id,"name");?>
                                            </td>
                                        
                                        
                                            <td colspan="2"  class="a-left" style="padding-left:25px;">
                                            <span style="color:#333;">Date :</span>
											<?php echo $row->date;?>
                                            </td>
                                           
                                            
                                        </tr>
                                            <tr>
                                            
                                           <td></td>
                                            <td colspan="1" style="padding-left:25px;" class=" a-left ">
                                            <span style="color:#333;">Category :</span>
                                            <?php
											 $rr=$obj->SelectAllByVal("ams_management_profile","id_number",$row->id_number,"category_id");
											 echo $obj->SelectAllByVal("ams_category","id",$rr,"name");?>
                                            </td>
                                             
                                            <td colspan="2" style="padding-left:25px;"  class=" a-left">
                                            <span style="color:#333;">Receipt No:</span>
                                            <input type="hidden" name="receipt" value="<?php echo $obj->RandNumber(3);?>"/>
                                            <?php echo $obj->RandNumber(3);?>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                        <td></td>
                                            <td colspan="1" style="padding-left:25px;" class=" a-left "><span style="color:#333;"> Name:</span>
                                            <input type="hidden" name="number" value="<?php echo $row->id_number;?>"/>
											<?php
											  echo $obj->SelectAllByVal("ams_management_profile","id_number",$row->id_number,"name");
											?>
											
                                            
                                            <td colspan="3" style="padding-left:25px;" class=" a-left ">
                                            <span style="color:#333;">ID number:
											<?php echo $row->id_number; ?>
                                            </td>
                                            
                                        
                                        </tr>
                                       
                                        
                                           
											<input type="hidden" name="group" value="<?php echo $row->group_id; ?>"/>
                                            <input type="hidden" name="ac_id" value="<?php echo $row->id; ?>"/>
											
                                            
                                        
    
      
        <tr style="background:#d8d8d8; color:#000; font-weight:900; font-size:12px;">
            <td class="center ">S/L.</td>
            <td class=" a-left">Accounts Title</td>
            <td class="center">Amount</td>
             <td class="center">Total</td>

        </tr>
 
 <?php  ?>
 <?php 
    $array=array("receipt_number"=>$r);
    $data=$obj->SelectAllByID('ams_manage_account_paymant_details',$array);
    $s=1;
    $sum=0;
	$sum1=0;
    if(!empty($data))
     foreach($data as $rww):
     $sum+=$rww->amount;
	 $sum1+=$rww->total;
            
 ?>
 
        <tr style="background:#ececec;">
         

            <td width="50" class="center "><?php echo $s;?></td>
            <td width="700" class=" a-left">
            <?php echo $obj->SelectAllByVal("ams_manage_account","id",$rww->account_name_id,"name");?>
            </td>
            
             <td width="185" class="center">
             <?php echo $rww->total;?>
             </td>
             
             <td width="185" class="center">
             <?php echo $rww->amount;?>
             </td>
     
           
        </tr>
        
        <?php $s++; endforeach ; ?>
        <tr>
        <td></td>
        <td colspan="2">Total Paid</td>
        <td>= <?php echo $sum; ?> Tk</td>
        </tr>
        <tr>
        <td></td>
        <td colspan="2">Total Due</td>
        <td>= <?php $due=$sum-$sum1; echo $due; ?> Tk</td>
        <tr style="background:#d8d8d8; color:#000;">
                                            <td style="padding-left:20px;" colspan="4">In Word: <?php echo convert_number_to_words($sum)." Taka Only."; ?></td>
                                            </tr>
                                            
                                           <tr style="color:#000;">
                                            <td colspan="2" style="padding-left:20px; padding-top:40px;">
                                              <a style="border-top:#666 dotted 2px;">Teken By</a>
                                            </td>
                                            <td colspan="2" style=" padding-top:40px;" class="center">
                                              <a style="border-top:#666 dotted 2px;">Given By</a>
                                            </td>
                                            </tr>
                                            
        </tr>


</table>


    <?php
endforeach;	
}
else
{
    ?>
Not Selected
    <?php
}
?>
