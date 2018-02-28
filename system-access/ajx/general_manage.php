<?php
include("../class/auth.php");
$table="ams_management_profile";
extract($_GET);
if($t!='')
{
    $array=array("id"=>$t,"school_id"=>$school);
    $data=$obj->SelectAllByID_Multiple($table,$array);
    foreach( $data as $in ):
   
    ?>                         <div class="label_block" style="left:157px;margin-top:-90px;">
                        	<div class="label_block_flag">Details</div>
                        </div>
                              <table class="TFtable" align="center" style="z-index:-1;">
                                        <tr>
                                                <td colspan="2" class="center width-label-150">Profile: (General) </td>
                                        </tr>
                                        <tr>
                                                <td class="width-label-150">Name</td>
                                                <td class="center"><?php echo $in->name;?></td>
                                        </tr>
                                        <tr>
                                                <td>Joining Date</td>
                                                <td class="center"><?php echo $in->joining_date; ?></td>
                                        <tr>
                                                <td>User ID</td>
                                                <td class="center"><?php echo $in->id_number; ?></td>
                                        </tr>
                                        
                                        <tr>
                                                <td>Category</td>
                                                <td class="center"><?php echo $obj->SelectAllByVal("ams_category","id",$in->category_id,"name"); ?></td>
                                        </tr>
                                        <tr>
                                                <td>Gender</td>
                                                <td class="center"><?php echo $in->gender; ?></td>
                                        </tr>
                                        <tr>
                                                <td>qualification</td>
                                                <td class="center"><?php echo $in->qualification;?></td>
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
