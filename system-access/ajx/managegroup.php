<?php
include("../class/auth.php");
$table="ams_contact";
extract($_GET);
if($m!='')
{
	
	?>
    
   <form action="" method="post" name="promot">
   
<table cellpadding="0" cellspacing="1" border="0" class="display" id="example">
                                    <thead>
                                        <tr>
                                            <th>S/L</th>
                                            <th>Name</th>
                                            
                                            <th>Category</th>
                                            <th>Information </th>
                                            <th>Number</th>
                                            <th>Group Name</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
     <?php
          $array=array("group_id"=>$m,"school_id"=>$school);
          $data=$obj->SelectAllByID_Multiple($table,$array);
		  $x=1;
		  if(!empty($data))
		  foreach($data as $row)

{        ?>

  <tr class="">
                                                <td class="shadow_inner center" style="background:#b40909; color:#FFF;"><?php echo $x; ?></td>
                                                <td class="center" style="background:#f6baa0;"><?php echo $row->name; ?></td>
                                                
                                                
                                                
                                                <td style="background:#d4f7f2;" class="center">
                                                <?php echo $obj->SelectAllByVal("ams_category","id",$row->category_id,"name"); ?>
                                                </td>
                                                <td class="center" style="background:#f6baa0;"><?php echo $row->info; ?></td>
                                                
                                                <td style="background:#d4f7f2;" class="center">
                                                <?php echo $row->number; ?>
                                                </td>
                                                <td class="center" style="background:#f6baa0;">
												<?php echo $obj->SelectAllByVal("ams_management_group","id",$row->group_id,"name"); ?>
                                                </td>
                                                <td style="background:#d4f7f2;" class="center">
                                                <?php echo $row->date; ?>
                                                </td>
                                        </tr>
                                
                               
                                        </tr>
                                        <?php 
                                       $x++;
}
                                        ?>
                                                                             
                                    </tbody>
                                    <tfoot>
                                       
                                    </tfoot>
                                </table>
                                 
                               
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
