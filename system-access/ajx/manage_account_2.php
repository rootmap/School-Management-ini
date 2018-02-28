<?php
include("../class/auth.php");
$table="ams_management_profile";
extract($_GET);
if($d!='')
{
	$array=array("id"=>$d);
    $data=$obj->SelectAllByID($table,$array);
	
	?>
   
     <?php
          
		  $s=1;
		  if(!empty($data))
		  foreach($data as $row)

{        ?>

    <form action="" method="post" name="print">
   
<table class="Fees_table shadow_inner" width="70%" cellspacing="1" align="center" style="font-family:Tahoma, Geneva, sans-serif; font-weight:100; color:rgba(0,0,0,1); padding-bottom:10px; font-size:12px; margin-left:auto; margin-right:auto;background:rgba(255,255,255,1);" >
                                     <tr>
                                            <td colspan="5" class="center height-40" style="padding:10px;">
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
                                            <td  colspan="3" style="padding-left:25px;" class=" a-left ">
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
                                            <td colspan="3" style="padding-left:25px;" class=" a-left ">
                                            <span style="color:#333;">Category :</span>
                                            <?php echo $obj->SelectAllByVal("ams_category","id",$row->category_id,"name");?>
                                            </td>
                                             
                                            <td colspan="2" style="padding-left:25px;"  class=" a-left">
                                            <span style="color:#333;">Receipt No:</span>
                                            <input type="hidden" name="receipt" value="<?php echo $obj->RandNumber(3);?>"/>
                                            <?php echo $obj->RandNumber(3);?>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                        <td></td>
                                            <td colspan="3" style="padding-left:25px;" class=" a-left "><span style="color:#333;"> Name:</span>
                                            <input type="hidden" name="number" value="<?php echo $row->id_number;?>"/>
											<?php echo $row->name;?></td>
											
                                            
                                            <td colspan="3" style="padding-left:25px;" class=" a-left ">
                                            <span style="color:#333;">ID number:
											<?php echo $row->id_number; ?>
                                            </td>
                                            
                                        
                                        </tr>
                                       
                                        
                                           
											<input type="hidden" name="group" value="<?php echo $row->group_id; ?>"/>
                                            <input type="hidden" name="ac_id" value="<?php echo $row->id; ?>"/>
											
                                            
                                        
                                       
                                          
                                            <tr style="background:#d8d8d8; color:#000; font-weight:900; font-size:12px;">
                                                <td  class="center ">S/L.</td>
                                                <td class=" a-left">Select</td>
                                                <td class=" a-left">Accounts Title</td>
                                                <td  class="center">Amount</td>
                                                 <td class="center">Total</td>

                                            </tr>
                                            <?php 
											$array=array("school_id"=>$school);
											 $rrr=$obj->SelectAllByID("ams_manage_account",$array);
											 $c=1;
											 if(!empty($rrr))
											 foreach($rrr as $rt):
											?>
                                             <tr style="background:#ececec;">
                                                <td width="42" class="center "><?php echo $c;?></td>
                                                <td width="42" class="center "><input name="taka_t[]"  value="<?php echo $rt->taka; ?>" type="checkbox" /></td>
                                                <td width="208" class=" a-left">
												<input name="account_name[]" type="hidden" value="<?php echo $rt->id; ?>"/>
                                                
												<?php echo $rt->name;?>
                                                </td>
                                                <td width="185" class="center"><?php echo $rt->taka;?></td>
                                                 <td width="185" class="center">
                                                 <input style="width:70px; text-align:center; height:30px;" type="text" name="taka[]" placeholder="amount"/>
                                                 </td>

                                            </tr>
                                            <?php $c++; endforeach;?>
                                            <tr style="background:#d8d8d8; color:#000; font-weight:900; font-size:12px;">
                                                <td  class="center "></td>
                                                <td colspan="4" class=" a-left">Total</td>

                                            </tr>

<?php $s++; } ?>
</table>
<ul style="margin-left:30px;">
                            <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                    <a href="#" style="text-decoration:none">
                                    <button type="submit" name="save" class=" height-35 div_btn">Submit</button>
                                    </a>
                                </li>
                                </ul>
                                </form>
    <?php
}

else
{
    ?>
Not Selected
    <?php
}
?>
