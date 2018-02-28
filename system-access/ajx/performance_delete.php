<?php
include_once('../class/auth.php');
$table4="ams_performance";
$table5="ams_performance2";
extract($_GET);
if($sel!='')
{
	if($obj->delete($table5,array("id"=>$iddel))==1);
?>
<div>
    <span style="font-size:12px; color:rgba(0,102,0,1);">Successfully Deleted...</span>                    
    <ul>
       <?php 
     $array=array("school_id"=>$school);
     $data=$obj->SelectAllByID($table5,$array);
     if(!empty($data))
     foreach ($data as $roww ):
    ?>
      
      <li class="margin-top-10" style="font-size:11px;">
        <label style="padding-left:5px;">
           <input checked="checked" type="checkbox" value="<?php echo $roww->id; ?>" name="subjec"  /> <?php echo $obj->SelectAllByVal($table4,"id",$roww->performance_id,"name"); ?>
         </label>
         <span class="right" ><a onclick="performancedelet('3','<?php echo $roww->id; ?>')"  href="#" name="creat" class="colore-red"><i class="fa fa-times"></i></a></span>
      </li>
      
      <?php endforeach; ?>
     </ul>
 </div>
<?php
}else{
	echo "Delete Failed";
}
?>