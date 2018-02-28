<div class="w12 left"  id="reportt">                   
 <ul>
   <li class="margin-top-10 center">
        <input type="text" class="width-label-100 height-30 font_11 center" placeholder="Create Tex" id="name" name="name"  />
        <button onClick="reportsave('3')" style="height:20px; width:20px; float:right;" type="button" name="creat" class=""><i class="fa fa-check-square-o"></i></button>
      </li>
			<?php 
            $array=array("school_id"=>$school);
            $data=$obj->SelectAllByID($table2,$array);
            if(!empty($data))
            foreach ($data as $rowe ):
            ?>
      
    <li class="margin-top-10" style="font-size:11px; padding-right:3px;">
     <label style="padding-left:5px;">
      
           <input onclick="reportselect('5','<?php echo $rowe->id; ?>')" type="checkbox" value="<?php              echo $rowe->id; ?>" name="subjec"  /> <?php echo $rowe->name; ?>
           </label> 
          <span class="right" ><a onClick="newdelet('3','<?php echo $rowe->id; ?>')" href="#" name="creat" class="colore-red"><i class="fa fa-times"></i></a></span>
     
     </li> 
           <?php endforeach; ?>
  </ul>
</div>
                            
                            
<div id="select"  class="w12 ll2 left" style="margin-left:5px;">
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
                            
                       
                            
                            
<div class="w12 left" id="reportt1"  style="margin-left:25px;">
 <ul>
  <li class="margin-top-10 center">
    <input type="text" id="namesave" class="width-label-100 height-30 font_11 center" placeholder="Create Tex" name="namesave"  />
    <button onClick="performancesave('3')" style="height:20px; width:20px; float:right;" type="button" name="creat" id="creat" class=""><i class="fa fa-check-square-o"></i></button>
  </li>
		<?php 
        $array=array("school_id"=>$school);
        $data=$obj->SelectAllByID($table4,$array);
        if(!empty($data))
        foreach ($data as $row ):
        ?>
          <li class="margin-top-10" style="font-size:11px; padding-right:3px;">
         <label style="padding-left:5px;">
            <input type="checkbox" onclick="performanceselect('1','<?php echo $row->id; ?>')" value="<?php echo $row->id; ?>" name="subjec"  /> <?php echo $row->name; ?>
         </label>
         <span class="right" ><a onclick="pernewdelet('3','<?php echo $row->id; ?>')"  href="#" name="creat" class="colore-red"><i class="fa fa-times"></i></a></span>
         </li>
       <?php endforeach; ?>
 </ul>
</div>
                            
                            
<div class="w12 left ll2" id="select1"  style="margin-left:5px; padding-right:3px;">
 <ul>
	<?php 
    $array=array("school_id"=>$school);
    $data=$obj->SelectAllByID($table5,$array);
    if(!empty($data))
    foreach ($data as $roww ):
    ?>
      <li class="margin-top-10" style="font-size:11px;">
     <label style="padding-left:5px;">
        <input type="checkbox" value="<?php echo $roww->id; ?>" checked="checked" name="subjec"  /> <?php echo $obj->SelectAllByVal($table4,"id",$roww->performance_id,"name"); ?>
     </label>
     <span class="right" ><a onclick="performancedelet('3','<?php echo $roww->id; ?>')"  href="#" name="creat" class="colore-red"><i class="fa fa-times"></i></a></span>
     </li>
   <?php endforeach; ?>
 </ul>
</div>