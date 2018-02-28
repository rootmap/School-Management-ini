<?php
include("../class/auth.php");
$table="ams_student_group";
extract($_GET);
if($s!='')
{
    $array=array("id"=>$s);
    $data=$obj->SelectAllByID($table,$array);
	?>
	
	
	<option value="">Select Please</option>
	
    <?php
    foreach($data as $row)
    {
    ?>
       <td  style="width:20px;">
        <input name="group" type="checkbox" value="<?php echo $row->id; ?>" />
        </td>
            <td><?php echo $row->name; ?></td>
            <td><?php echo $row->date; ?></td>
            <td class="center">edit</td>
            <td class="center"><a href="st_profile_info.php">View Details</a></td>

       
       </option>
    <?php
    }
}
else
{
    ?>
Not Selected
    <?php
}
?>
