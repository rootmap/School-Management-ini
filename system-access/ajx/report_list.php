<?php
include_once('../class/auth.php');
$table2="ams_report";
$table3="ams_report2";
extract($_GET);
if($rept!='')
{
	
	?>
    <div class="w12 left">
                           
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
                              
                              <li id="reportt" class="margin-top-10" style="font-size:11px;">
                              
                                <label style="padding-left:5px;">
                                
                                  
                                   
                                   <span class="colore-red" ><input type="checkbox" value="<?php echo $rowe->id; ?>" name="subjec"  />  <?php echo $rowe->name; ?></span>> 
								  
                                 </label>
                              </li>
                              
                              <?php endforeach; ?>
                              </ul>
                             
                            </div>
    <?php
}else{ echo "ss";}

?>