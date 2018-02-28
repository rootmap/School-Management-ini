<?php
include("../class/auth.php");
$table="ams_admission";
extract($_GET);
if($d!='')
{
	
	
	?>
   
     <?php
          $array=array("id"=>$d);
          $data=$obj->SelectAllByID($table,$array);
		  $s=1;
		  if(!empty($data))
		  foreach($data as $row)

{        ?>

    <form action="" method="post" name="print">
   
<table class="Fees_table shadow_inner" width="70%" cellspacing="1" align="center" style="font-family:Tahoma, Geneva, sans-serif; font-weight:100; color:rgba(0,0,0,1); font-size:12px; margin-left:auto; margin-right:auto;background:rgba(255,255,255,1);" >
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
                                            <td colspan="3" style="padding-left:25px;padding-bottom:5px; padding-top:5px;" class="a-left">
                                            <span style="color:#333;">Class:</span>
											<?php echo $obj->SelectAllByVal("ams_class","id",$row->class_id,"name");?>
											
                                            </td>
                                            
                                            <td colspan="3"  class="a-left" style="padding-left:25px;padding-bottom:5px; padding-top:5px;">
                                            <span style="color:#333;">Date :</span>
                                            
											<?php echo $row->date;?>
                                            </td>
                                            
                                            
                                        </tr>
                                            <tr>
                                            <td></td>
                                            <td colspan="3" style="padding-left:25px;padding-bottom:5px; padding-top:5px;" class="a-left">
                                            <span style="color:#333;">Roll:</span>
											<?php echo $row->roll;?>
                                            <input type="hidden" name="roll" value="<?php echo $row->roll;?>"/></td>
                                            
                                            <td colspan="2" style="padding-left:25px;padding-bottom:5px; padding-top:5px;" class=" a-left">
                                            <span style="color:#333;">Receipt No:</span>
                                            <input type="hidden" id="receipt" name="receipt" value="<?php echo $obj->RandNumber(3);?>"/>
                                            <?php echo $obj->RandNumber(3);?>
                                            </td>
                                            
                                        </tr>
                                        
                                        
                                        
                                        
                                        <tr>
                                        <td></td>
                                            <td colspan="3" class=" a-left " style="padding-left:25px; padding-bottom:5px; padding-top:5px;">
                                            <span style="color:#333;">Section:</span>
                                            <?php echo $obj->SelectAllByVal("ams_section","id",$row->section_id,"name");?>
                                            </td>
                                            
                                            
                                            
                                            <td colspan="2" style="padding-left:25px;padding-bottom:5px; padding-top:5px;" class=" a-left ">
                                            <span style="color:#333;">Session:</span>
											<?php echo $obj->SelectAllByVal("ams_session","id",$row->session_id,"name");?>
                                            </td>
                                          
                                        </tr>
                                        <tr>
                                             <td></td>
                                            <td colspan="3" class=" a-left " style="padding-left:25px;padding-bottom:5px; padding-top:5px;">
                                            <span style="color:#333;">Shift:</span>
                                            <?php echo $obj->SelectAllByVal("ams_shift","id",$row->shift_id,"name");?>
                                            </td>
                                        
                                        
                                            <td colspan="2" class=" a-left " style="padding-left:25px;padding-bottom:5px; padding-top:5px;">
                                            <span style="color:#333;">Group:</span>
											<?php echo $obj->SelectAllByVal("ams_student_group","id",$row->group_id,"name");?>
                                            </td>
                                        </tr>
                                        <tr>
                                        <td></td>
                                          
                                           <td colspan="3" class=" a-left " style="padding-left:25px;padding-bottom:5px; padding-top:5px;">
                                            <span style="color:#333;">Student Name :</span><?php echo $row->name;?></td>
                                        
                                        
                                            <td colspan="2" class=" a-left " style="padding-left:25px;padding-bottom:5px; padding-top:5px;">
                                            <span style="color:#333;">Adm No:</span>
											<input type="hidden" name="admission" value="<?php echo $row->admition;?>"/>
											<?php echo $row->admition;?>
                                            </td>
                                            
                                            
                                        </tr>
                                        
                                           
                                      
                                          
                                            <tr style="background:#d8d8d8; color:#000; font-weight:900; font-size:12px;">
                                                <td class="center" style="width:50px; padding:10px;">S/L.</td>
                                                <td class="center" style="width:50px;">Select</td>
                                                <td class="center">Accounts Title</td>
                                                <td class="center">Amount</td>
                                                 <td class="center">Paid Amount</td>

                                            </tr>
                                            <?php
											$array=array("school_id"=>$school); 
											 $rrr=$obj->SelectAllByID("ams_student_account",$array);
											 $c=1;
											 if(!empty($rrr))
											 foreach($rrr as $rt):
											?>
                                             <tr style="background:#ececec;">
                                                <td  class="center "><?php echo $c;?></td>
                                                <td  class="center "><input name="taka_t[]" type="checkbox" value="<?php echo $rt->taka;?>"/></td>
                                                <td  class=" a-left">
												<input name="account_name[]" type="hidden" value="<?php echo $rt->id;?>" />
                                                
												<?php echo $rt->name;?>
                                                </td>
                                                <td  class="center"><?php echo $rt->taka;?></td>
                                                 <td class="center">
                                                 <input style="width:70px; text-align:center; height:30px;" type="text" name="taka[]" placeholder="amount"/>
                                                 </td>
                                                 
                                            </tr>
                                            

                                            <?php $c++; endforeach;?>
                                            <tr style="background:#ececec;">
                                                <td  class="center "><?php echo $s++; ?>1</td>
                                                <td  class="center "><input name="" type="checkbox"/></td>
                                                <td  class=" a-left">Tuition Fee <input name="totall_name" placeholder="00/00/00" style="width:70px; text-align:center; height:30px;" /> TO <input name="to" placeholder="00/00/00" style="width:70px; text-align:center; height:30px;" /></td>
                                                <td  class="center"><input style="width:70px; text-align:center; height:30px;" type="text" name="totall" placeholder="Fee"/></td>
                                                 <td class="center">
                                                 <input style="width:70px; text-align:center; height:30px;" type="text" name="totall_taka" placeholder="amount"/>
                                                 </td>
                                                 
                                            </tr>
                                            <tr style="background:#d8d8d8; color:#000; font-weight:900; font-size:12px;">
                                                <td class="center"></td>
                                                <td colspan="3" style="padding:10px;" class="center">Total</td>
                                                 <td class="center"></td>

                                            </tr>

                                               <?php $s++; } ?>
                                         </table>
<ul style="margin-left:30px;">
                            <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                   
                                    <button type="submit" id="save" name="save" onclick="showrecept('2')" class=" height-35 div_btn">Submit</button>
                                   
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
