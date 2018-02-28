<?php
include("../class/auth.php");
$table="ams_singup";
extract($_GET);
if($s!=='')
{
?>
  
   <form action="" method="get" name="en">
     <table border="0" cellpadding="0" cellspacing="1" class="width_100 text_aling_center height_auto">
       <thead class="backgroung_1 font_1 color_red">
         <th class="padding">SL no.</th>
         <th class="padding">EIIN Number</th>
         <th class="padding">Time</th>
         <th class="padding">Active</th>
         <th class="padding">Deactive</th>
         <th class="padding">Delete</th>
       </thead>
       <tbody>
        <?php 
   $array=array("zip_code"=>$s);
    $date=$obj->SelectAllByID($table, $array);
	 $s=1;
	 if(!empty($date))
	  foreach ($date as $row):
   ?>
         <tr class="backgroung_6 font_11">
           <td class="padding_5"><?php echo $s; ?></td>
           <td class="padding_5"><?php echo $row->eiin_number; ?></td>
           <td class="padding_5"><?php echo $row->time; ?></td>
           <td class="padding_5 font_14">
             <a name="edit" href="search_eiin.php?statuss=yes&amp;eiin=<?php echo $row->eiin_number; ?>&amp;status=3&amp;id=<?php echo $row->id; ?>">
												<?php 
				$ex=$obj->exists_multiple($table,array("status"=>3,"eiin_number"=>$row->eiin_number));
				if($ex==0){
				 ?><span class="color_w">Active</span><?php }else{ ?><span class="color_gr">Active</span><?php } ?></a>
           </td>
           
           <td class="padding_5 font_14">
             <a name="edit" href="search_eiin.php?statuss1=yes&amp;eiin=<?php echo $row->eiin_number; ?>&amp;status=2&amp;id=<?php echo $row->id; ?>">
												<?php 
				$ex=$obj->exists_multiple($table,array("status"=>2,"eiin_number"=>$row->eiin_number));
				if($ex==0){
				 ?><span class="color_w">Deactive</span><?php }else{ ?><span class="color_red">Deactive</span><?php } ?></a>
           </td>
           <td class="padding_5"><a href="<?php echo $obj->filename();?>?id=<?php echo $row->id;?>&amp;action=delete"><img src="../images/delete.gif" /></a></td>
         </tr>
         <?php $s++; endforeach; ?>
         
       </tbody>
     </table>
     </form>
   
       
   
<?php
}


else
{
    ?>
<input type="radio" value="">Not Selected
    <?php
}

?>
