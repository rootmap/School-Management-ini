<?php
include("../class/auth.php");
$table="ams_transport_setting_profile";
extract($_GET);
if($p!='')
{
    $array=array("id"=>$p,"school_id"=>$school);
    $data=$obj->SelectAllByID_Multiple($table,$array);
    foreach( $data as $in ):
   
    ?>                        <div class="label_block" style="left:157px;margin-top:-90px;">
                        	<div class="label_block_flag">Details</div>
                        </div>
                              <table class="TFtable" align="center" style="z-index:-1;">
                                        <tr>
                                                <td colspan="2" class="center width-label-150">Profile: (Personal)</td>
                                        </tr>
                                        <tr>
                                                <td class="width-label-150">Name</td>
                                                <td class="center"><?php echo $in->name;?></td>
                                        </tr>
                                        <tr>
                                                <td>Father’s Name</td>
                                                <td class="center"><?php echo $in->f_name; ?></td>
                                        <tr>
                                                <td>Mother’s Name</td>
                                                <td class="center"><?php echo $in->m_name; ?></td>
                                        </tr>
                                        <tr>
                                                <td>Date of Birth</td>
                                                <td class="center">
												<?php echo $in->dob; ?>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>Blood Group</td>
                                                <td class="center">
												<?php echo $obj->SelectAllByVal("ams_blood_group","id",$in->blood_group_id,"name"); ?></td>
                                        </tr>
                                        <tr>
                                                <td>Marital Status</td>
                                                <td class="center">
												<?php echo $obj->SelectAllByVal("ams_marital","id",$in->marital_status_id,"name"); ?></td>
                                        </tr>
                                        <tr>
                                                <td>Spouse Name</td>
                                                <td class="center"><?php echo $in->spouse_name;?></td>
                                        </tr>
                                        <tr>
                                                <td>No of Children</td>
                                                <td class="center"><?php echo $in->children;?></td>
                                        </tr>
                                        <tr>
                                                <td>Nationality</td>
                                                <td class="center"><?php echo $in->nationality; ?></td>
                                        </tr>
                                        <tr>
                                                <td>Religion</td>
                                                <td class="center"><?php echo $in->religion; ?></td>
                                        </tr>
                                        <tr>
                                                <td>Mobile No</td>
                                                <td class="center"><?php echo $in->number; ?></td>
                                        </tr>
                                       
                                </table>
    <?php endforeach; ?>
    <?php
   
}
else
{
    ?>
<option value="">Not Selected</option>
    <?php
}
?>
