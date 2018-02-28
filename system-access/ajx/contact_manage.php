<?php
include("../class/auth.php");
$table="ams_management_profile";
extract($_GET);
if($c!='')
{
    $array=array("id"=>$c,"school_id"=>$school);
    $data=$obj->SelectAllByID_Multiple($table,$array);
    foreach( $data as $in ):
   
    ?>                       <div class="label_block" style="left:157px;margin-top:-90px;">
                        	<div class="label_block_flag">Details</div>
                        </div>
                              <table class="TFtable" align="center" style="z-index:-1;">
                                        <tr>
                                                <td colspan="2" class="center width-label-150">Profile: (Contact Address)</td>
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
