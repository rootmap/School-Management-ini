<?php
include("../class/auth.php");
$table="ams_contact";
extract($_GET);
if($s!='')
{
	

   
	?>
    <?php
	$array=array("id"=>$s);
   $data=$obj->SelectAllByID($table,$array);
	
	foreach ($data as $ro):
    
    ?>
<form action="" method="post" name="ediit">
     <div class="dvi_test left">&lowast; Select To Group :</div>
                            <div class="dvi_test left">
                              <select class="hh_inpput" name="group" id="single" onchange="showcategory(this.value)">
                                <option>Select Group</option>
                                           <?php 
										  $array=array("school_id"=>$school); 
										 $group=$obj->SelectAllByID('ams_management_group',$array);
										 if(!empty($group))
										 foreach($group as $grp):
										 ?>
                                        <option value="<?php echo $grp->id; ?>"><?php echo $grp->name; ?></option>
                                        <?php
                                          endforeach;
										?>
                            </select>
                            </div>
                            
                            <div class="dvi_test left">&lowast; Contact Name :</div>
                            <div class="dvi_test left">
                              <input name="name" value="<?php echo $ro->name; ?>"  class="textbox " placeholder="Type a contact name here"/>
                              <input id="id" name="id" value="<?php echo $ro->id; ?>" type="hidden" />
                            </div>
                            
                            <div class="dvi_test left">&lowast;Category:</div>
                            <div class="dvi_test left">
                              <select class="hh_inpput" id="category" name="category" >
                                <option value="">Select Category</option>
                                 <?php 
										  $array=array("school_id"=>$school); 
										 $group=$obj->SelectAllByID('ams_category',$array);
										 if(!empty($group))
										 foreach($group as $grp):
										 ?>
                                        <option value="<?php echo $grp->id; ?>"><?php echo $grp->name; ?></option>
                                        <?php
                                          endforeach;
										?>
                                
                            </select>
                            </div>
                            
                            <div class="dvi_test left">&lowast; Information :</div>
                            <div class="dvi_test left">
                              <input name="info" value="<?php echo $ro->name; ?>" class="textbox " placeholder="Type contact information here"/>
                            </div>
                            
                            <div class="dvi_test left">&lowast;Gender:</div>
                            <div class="dvi_test left">
                              <select class="hh_inpput" name="gener">
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                 <option value="Female">Female</option>
                              </select>
                            </div>
                            
                             <div class="dvi_test left">&lowast;Mobile Number:</div>
                            <div class="dvi_test left">
                              <input name="number" value="<?php echo $ro->number; ?>" class="textbox " placeholder="Type Mobile Number here"/>
                            </div>
          

   
   
    
    <ul>
                    <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                          <button type="submit" name="update" class=" height-35 div_btn">Update</button>
                    </li>

                            </ul>
</form>

      
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
