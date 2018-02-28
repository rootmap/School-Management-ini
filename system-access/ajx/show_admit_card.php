<?php
include("../class/auth.php");
$table="ams_admission";
extract($_GET);
if($k!='')
{
	
	?>
     <div class="result_sheet">
     <?php 
						$array=array("roll"=>$roll);
                         $data=$obj->SelectAllByID($table,$array);
						   if(!empty($data))
                             foreach($data as $ting){
					
					?>
     
                   <div class="result_sheet_1 shadow_inner" style="margin-left:auto;margin-right:auto; height:350px; background:#FFF; padding:10px;">
                   
                              <?php 
						      $array=array("eiin_number"=>$school);
                              $data=$obj->SelectAllByID("ams_singup",$array);
						      if(!empty($data))
                              foreach($data as $trow):
					          ?>
                             <div class="result_sheet_1_img left">
                              <img src="photo/<?php echo $trow->photo; ?>" />
                             </div>
                            <?php endforeach; ?>
                             <div class="result_sheet_name left">
                                <div class="result_sheet_name_1 shadow_inner" style="color:#09f; text-align:center; line-height:10px;">
							   <p style="text-decoration:underline; padding-top:10px; font-size:20px;"> 
							    <?php echo $obj->SelectAllByVal("ams_singup","eiin_number",$ting->school_id,"acount_name"); ?>
                               </p>
                                <br />
                                <p style="font-size:12px; color:#006;">
                                  <?php echo $trow->address; ?>
                                </p>
                              </div>
                              <div class="result_sheet_name_2 shadow_inner" style="width:60%; font-size:16px; font-weight:normal; border-radius:8px;"> <?php echo $obj->SelectAllByVal("ams_exam_category","id",$category,"name");?></div>
                               <div class="result_sheet_name_3 shadow_inner" style="width:50%;"><strong>ADMIT CARD</strong></div>
                             </div>
                             
                             <div class="result_sheet_photo left">
                              <div class="result_sheet_photo_id">ID No: <?php echo $ting->admition;?></div>
                              <div class="result_sheet_photo_img">
                               <img src="photo/<?php echo $ting->photo;?>" />
                              </div>
                             </div>
                              
                              <div class="result_sheet_table left" style="margin-left:12px;">
                              <style type="text/css">
							   #ff tr>td:nth-of-type(3){  padding-left:80px; }   
							  </style>
                                <table id="ff">
                                 
                                  <tr>
                                    <td  style="width:23%; font-size:16px;">Name of Examinee   :</td>
                                    <td style="font-size:16px;"><?php echo $ting->name;?></td>
                                    <td style="width:20%;">Class </td>
                                    <td style="width:20%;"> : <?php echo $obj->SelectAllByVal("ams_class","id",$ting->class_id,"name");?></td>
                                    
                                  </tr>
                                  
                                  <tr>
                                    <td>Father’s Name :</td>
                                    <td><?php echo $ting->father_name;?></td>
                                    <td>Roll</td>
                                    <td> : <?php echo $ting->roll; ?></td>
                                  </tr>
                                  
                                  <tr>
                                    <td>Mother’s Name :</td>
                                    <td><?php echo $ting->mother_name;?></td>
                                    <td>Section</td>
                                    <td> : <?php echo $obj->SelectAllByVal("ams_section","id",$ting->section_id,"name");?></td>
                                  </tr>
                                  
                                  <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Group</td>
                                    <td> : <?php echo $obj->SelectAllByVal("ams_group","id",$ting->group_id,"name");?></td>
                                  </tr>
                                   
                                </table>
                                
                              </div>
                            <div style="height:40px; width:30%;float:left; color:#06C; padding-left:20px; margin-top:20px;">
                               Signature of Principal : </div>
                                 <div style="height:40px; margin-left:-30px; width:40%;background:#FFF; border-radius:8px;  border:#C30 1px solid; float:left; line-height:40px; margin-top:10px;""></div>   
                            
                          </div>
                          
                           <ul>
                             <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                <a href="#" style="text-decoration:none">
   <button type="submit" name="save" class="height-35 div_btn">Print</button>
                                </a>
                            </li>
                        </ul>
                          
          
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
