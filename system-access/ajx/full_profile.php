<?php
include("../class/auth.php");
$table="ams_transport_setting_profile";
extract($_GET);
if($f!='')
{
    $array=array("id"=>$f,"school_id"=>$school);
    $data=$obj->SelectAllByID_Multiple($table,$array);
    foreach( $data as $in ):
   
    ?>
    <div class="label_block" style="left:157px;margin-top:-90px;">
                        	<div class="label_block_flag">Details</div>
                        </div>
    <table class="TFtable" align="center" style="z-index:-1;">
                                        
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
                                        <tr>
                                                <td class="width-label-150">Name</td>
                                                <td class="center"><?php echo $in->name;?></td>
                                        </tr>
                                        <tr>
                                                <td>Joining Date</td>
                                                <td class="center"><?php echo $in->joining_date; ?></td>
                                        <tr>
                                                <td>Transport Number</td>
                                                <td class="center"><?php echo $in->transport_number; ?></td>
                                        </tr>
                                        <tr>
                                                <td>Location/Area</td>
                                                <td class="center">
												<?php echo $in->area; ?>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>Category</td>
                                                <td class="center"><?php echo $obj->SelectAllByVal("ams_category","id",$in->category_id,"name"); ?></td>
                                        </tr>
                                        <tr>
                                                <td>Gender</td>
                                                <td class="center"><?php echo $in->gnder; ?></td>
                                        </tr>
                                        <tr>
                                                <td>Qualification</td>
                                                <td class="center"><?php echo $in->qualification_id;?></td>
                                        </tr>
                                        <tr>
                                                <td>Total Experience</td>
                                                <td class="center"><?php echo $in->experience_start;?>--AND--
												<?php echo $in->experience_end;?></td>
                                        </tr>
                                        <tr>
                                                <td>Experience Info</td>
                                                <td class="center"><?php echo $in->experience_info; ?></td>
                                        </tr>
                                        <tr>
                                                <td class="width-label-150">Name</td>
                                                <td class="center"><?php echo $in->name;?></td>
                                        </tr>
                                        <tr>
                                                <td>Present Address</td>
                                                <td class="center"><?php echo $in->present_address; ?></td>
                                        <tr>
                                                <td>Permanent Address</td>
                                                <td class="center"><?php echo $in->permanent_address; ?></td>
                                        </tr>
                                        <tr>
                                                <td>Division / State</td>
                                                <td class="center">
												<?php echo $obj->SelectAllByVal("ams_division","id",$in->state,"name"); ?>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>District / City</td>
                                                <td class="center">
												<?php echo $obj->SelectAllByVal("ams_city","id",$in->city,"name"); ?></td>
                                        </tr>
                                        <tr>
                                                <td>Thana / Zip code</td>
                                                <td class="center">
												<?php echo $in->zip_code; ?></td>
                                        </tr>
                                        <tr>
                                                <td>Country</td>
                                                <td class="center"><?php echo $in->countryr; ?></td>
                                        </tr>
                                        <tr>
                                                <td>Mobile Number</td>
                                                <td class="center"><?php echo $in->number; ?></td>
                                        </tr>
                                        <tr>
                                                <td>Email</td>
                                                <td class="center"><?php echo $in->email; ?></td>
                                        </tr>
                                       
                                </table>
                                <div class="clear"></div>
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
