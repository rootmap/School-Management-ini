<?php
include("../class/auth.php");
$table1="ams_marks_mode";
extract($_GET);
if($df!='')
{
	?>
    <form action="" method="post" name="mode">
  <div class="w9 left"> 
  <ul>
	 <?php 
     $array=array("group_id"=>$df,"school_id"=>$school);
     $data=$obj->SelectAllByID_Multiple("ams_annual_final",$array);
     if(!empty($data))
     foreach ($data as $row ):
    ?>
      <li class="margin-top-10" style="width:100%; height:40px;">
        <label class="left" style="line-height:30px; width:63%; text-align:left; padding-left:5px;">
          <input type="checkbox" name="exam[]" value="<?php echo $row->id; ?>"  /> 
             <span ><?php echo $row->name; ?></span>
          </label>
          
        <label class="left">
          <input type="text" placeholder="Select (%)" class="width-label-70 center font_1 height-30" style="border:#C30 1px solid" name="modee[]"  />
          </label>
           <!--<input type="hidden" name="group" value="<?php //echo $row->group_id; ?>" />-->
           <input type="hidden" name="class" value="<?php echo $row->class_id; ?>" />
      </li>
      <?php endforeach; ?>
      </ul>
   </div> 
    <div class="height-auto width-label-150 right center" style="margin-right:60px;" >
       
      <?php 
     $array=array("group_id"=>$df,"school_id"=>$school);
     $data=$obj->SelectAllByID_Multiple($table1,$array);
     $ff=100;
     $ro=0;
     if(!empty($data))
     foreach ($data as $rowe ):
    ?>
          
  <?php  $ss=$rowe->mode; $ro+=$ss;  ?>
  
  <?php endforeach; ?>
  
    <div class="bg1 font_1 height-40 width-label-150 center" style="border:#C30 1px solid; margin-bottom:10px;">100%
    </div>
    
    <div class="bg1 font_1 height-40 width-label-150 center" style="border:#C30 1px solid; margin-bottom:10px;"><?php  echo $ro; ?>%
<a href="edit_marks_mode.php?group=<?php echo $df; ?>&amp;school=<?php echo $school; ?>"><i class="fa fa-edit right"></i></a>
    </div>
    
    <div class="bg1 font_1 height-40 width-label-150 center" style="border:#C30 1px solid; margin-bottom:10px;"><?php $ff-=$ro; echo $ff; ?>%
   
    </div>
    
  
    <div class="height-50 width-label-150 center">
     <button name="mode" type="submit" class="div_btn">Save</button>
    </div>
   
    </div>
   </form>                     
    <?php
	
}else{
	echo "Empty";
}

?>
