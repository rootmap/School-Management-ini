<?php
include("../class/auth.php");
include('../class/currency_class.php');
$table="ams_stationery_paymant";
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

                   <tr>
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
                                        </tr>
                                        
                                        <tr style="height:10px;"><td></td>
                                        
                                        <td colspan="2" class=" a-left " style="padding-left:25px;padding-bottom:5px; padding-top:5px;">
                                            <span style="color:#333;">Class:</span>
                                            
							<?php 
							$class_id=$obj->SelectAllByVal("ams_admission","admition",$row->admission,"class_id"); 
							$session_id=$obj->SelectAllByVal("ams_admission","admition",$row->admission,"session_id"); 
							$section_id=$obj->SelectAllByVal("ams_admission","admition",$row->admission,"section_id"); 
							$shift_id=$obj->SelectAllByVal("ams_admission","admition",$row->admission,"shift_id"); 
							$group_id=$obj->SelectAllByVal("ams_admission","admition",$row->admission,"group_id");
							$name=$obj->SelectAllByVal("ams_admission","admition",$row->admission,"name");  
							
							echo $obj->SelectAllByVal("ams_class","id",$class_id,"name");
							?>
											
                                            </td>
                                            <td colspan="2"  class="a-left" style="padding-left:25px;padding-bottom:5px; padding-top:5px;">
                                            <span style="color:#333;">Date :</span> <?php echo $row->date; ?></td>
                                            
                                            
                                            
                                        </tr>
                                            <tr><td></td>
                                             <td colspan="2" class=" a-left " style="padding-left:25px;padding-bottom:5px; padding-top:5px;">
                                            <span style="color:#333;">Class Roll:</span>
											<?php echo $row->roll;?>
                                            </td>
                                            
                                           
                                            <td colspan="2" class="a-left" style="padding-left:25px;padding-bottom:5px; padding-top:5px;">
                                            <span style="color:#333;">Receipt No:</span> <?php echo $row->receipt;?></td>
                                        </tr>
                                        <tr><td></td>
                                            <td colspan="2" class=" a-left" style="padding-left:25px;padding-bottom:5px; padding-top:5px;">
                                            <span style="color:#333;">Section:</span>
                                            <?php echo $obj->SelectAllByVal("ams_section","id",$section_id,"name");?>
                                            </td>
                                           
                                            
                                             
                                            <td colspan="2" class="a-left " style="padding-left:25px;padding-bottom:5px; padding-top:5px;">
                                            <span style="color:#333;">Session:</span>
											<?php echo $obj->SelectAllByVal("ams_session","id",$session_id,"name");?>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td></td> 
                                             <td colspan="2" class=" a-left " style="padding-left:25px;padding-bottom:5px; padding-top:5px;"> 
                                            <span style="color:#333;">Shift:</span>
                                            <?php echo $obj->SelectAllByVal("ams_shift","id",$shift_id,"name");?>
                                            </td>
                                            
                                           
                                            <td colspan="2" class=" a-left " style="padding-left:25px;padding-bottom:5px; padding-top:5px;">
											<span style="color:#333;">Group:</span>
											<?php echo $obj->SelectAllByVal("ams_student_group","id",$group_id,"name");?>
											</td>
                                        </tr>
                                      
                                            
                                            
                                            
                                            <input type="hidden" name="roll" value="<?php echo $row->roll;?>"/>
                                           
                                       
                                        <tr>
                                        <td></td>
                                            <td class="a-left" colspan="2" style="padding-left:25px;padding-bottom:5px; padding-top:5px;">
                                            <span style="color:#333;">Student Name :</span> <?php echo $name;?></td>
                                          
                                          
                                          <td colspan="2" class=" a-left "style="padding-left:25px;padding-bottom:5px; padding-top:5px;">
                                            <span style="color:#333;">Adm No:</span>
											<input type="hidden" name="admission" value="<?php echo $row->admition;?>"/>
											<?php echo $row->admission;?>
                                            </td>
                                          
                                        </tr>
                                          
                                            <tr style="background:#d8d8d8; color:#000; font-weight:900; font-size:12px;">
                                                 <td class="center" style="padding-left:25px;">S/L.</td>
                                                <td class="center">Accounts Title</td>
                                                <td class="center">Amount</td>
                                                 <td class="center">Paid Amount</td>

                                            </tr>

									 
                                     <?php  ?>
                                     <?php 
									    $array=array("receipt_number"=>$row->receipt);
										$data=$obj->SelectAllByID('ams_stationery_paymant_details',$array);
										$s=1;
										$sum=0;
										$sum1=0;
										if(!empty($data))
										 foreach($data as $rww):
										 $sum+=$rww->amount;
										 $sum1+=$rww->total;
												
									 ?>
                                     
                                             <tr style="background:#ececec;">
                                             

                                                <td  class="center "><?php echo $s;?></td>
                                                <td  class=" a-left">
                                                <?php echo $obj->SelectAllByVal("ams_stationery","id",$rww->account_name_id,"name");?>
                                                </td>
                                                
                                                 <td  class="center" style="padding-left:10px;">
                                                 <?php echo $rww->total; ?>
                                                 </td>
                                                 
                                                 <td  class="center">
                                                 <?php echo $rww->amount; ?>
                                                 </td>
                                         
                                               
                                            </tr>
                                            
                                            <?php $s++; endforeach ; ?>
                                            <tr style="background:#d8d8d8; color:#000;">
                                            <td></td>
                                            <td colspan="2" class="center">Total Paid = </td>
                                            <td class="center"><?php echo $sum; ?> Tk</td>
                                            </tr>
                                            
                                            <tr style="background:#d8d8d8; color:#000;">
                                            <td></td>
                                            <td  colspan="2" class="center">Total Due =</td>
                                            <td class="center">
                                            <?php $due=$sum1-$sum; echo $due; ?> Tk
                                            </td>
                                            </tr>
                                            
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
