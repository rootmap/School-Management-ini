
<?php
include("../class/auth.php");
$table="ams_management_profile";
extract($_GET);
if($k!='')
{
	
	?>
    
   
   
<table cellpadding="0" cellspacing="1" border="0" class="display" id="">
    <thead>
         <tr>
             <th>S/L</th>
            <th>Name</th>
            <th>Category</th>
            <th>Information</th>
            <th>Mobile Number</th>
            <th>Group Name</th>
            <th>View Details</th>
        </tr>
    </thead>
     <?php
          $array=array("group_id"=>$k);
          $data=$obj->SelectAllByID($table,$array);
		  $r=1;
		  if(!empty($data))
		  foreach($data as $row)

{        ?>

    <tbody style="text-align:center; font-weight:100; font-size:12px; color:rgba(0,0,0,1);">
		

       <tr>
        <td style="background:rgba(153,255,255,.5);"><?php echo $r; ?></td>
        <td style="background:rgba(153,255,255,.5);"><?php echo $row->name; ?></td>
        <td style="background:rgba(153,255,255,.5);"><?php echo $obj->SelectAllByVal("ams_category","id",$row->category_id,"name"); ?></td>
        <td style="background:rgba(153,255,255,.5);"><?php echo $row->department_id; ?></td>
        <td class="center" style="background:rgba(153,255,255,.5);"><?php echo $row->number; ?></td>
        <td class="center" style="background:rgba(153,255,255,.5);">
        <?php echo $obj->SelectAllByVal("ams_management_group","id",$row->group_id,"name"); ?></td>
        <td class="center" style="background:rgba(153,255,255,.5);"><a target="new" href="manage_user_profile_info.php?id=<?php echo $row->id;?>&amp;school=<?php echo $school; ?>"><img src="images/contact_new.png" /></a></td>
</tr>
                                             
    </tbody>
    <?php $r++; } ?>
</table>
          
    <?php
}

else
{
    ?>
Not Selected
    <?php
}
?>
