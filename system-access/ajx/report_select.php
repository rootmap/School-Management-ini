<?php
include_once('../class/auth.php');
$table2="ams_report";
$table3="ams_report2";
extract($_GET);
if($sel!='')
{
	if($obj->exists_multiple($table3,array("report_id"=>$id,"school_id"=>$school))==0)
			
	{
        	if($obj->insert($table3,array("report_id"=>$id,"school_id"=>$school,"date"=>date('Y-m-d'),"status"=>1))==1) 
?>
<div>
    <span style="font-size:12px; color:rgba(0,102,0,1);">Successfully Selected...</span>                    
    <ul>
       <?php 
     $array=array("school_id"=>$school);
     $data=$obj->SelectAllByID($table3,$array);
     if(!empty($data))
     foreach ($data as $roww ):
    ?>
      
      <li class="margin-top-10" style="font-size:11px; padding-right:3px;">
        <label style="padding-left:5px;">
           <input checked="checked" type="checkbox" value="<?php echo $roww->id; ?>" name="subjec"  /> <?php echo $obj->SelectAllByVal($table2,"id",$roww->report_id,"name"); ?>
         </label>
         <span class="right" ><a onclick="reportdelet('3','<?php echo $roww->id; ?>')"  href="#" name="creat" class="colore-red"><i class="fa fa-times"></i></a></span>
      </li>
      
      <?php endforeach; ?>
     </ul>
 </div>
<?php } else {  ?>
<div>
    <span style="font-size:12px; color:rgba(204,0,0,1);">Already Selected...</span>                    
    <ul>
       <?php 
     $array=array("school_id"=>$school);
     $data=$obj->SelectAllByID($table3,$array);
     if(!empty($data))
     foreach ($data as $roww ):
    ?>
      
      <li class="margin-top-10" style="font-size:11px; padding-right:3px;">
        <label style="padding-left:5px;">
           <input checked="checked" onclick="reportdelet('3','<?php echo $roww->id; ?>')" type="checkbox" value="<?php echo $roww->id; ?>" name="subjec"  /> <?php echo $obj->SelectAllByVal($table2,"id",$roww->report_id,"name"); ?>
         </label>
         <span class="right" ><a onclick="reportdelet('3','<?php echo $roww->id; ?>')"  href="#" name="creat" class="colore-red"><i class="fa fa-times"></i></a></span>
      </li>
      
      <?php endforeach; ?>
     </ul>
 </div>
<?php
     }	
}else {
	echo "Failed";
}
?>