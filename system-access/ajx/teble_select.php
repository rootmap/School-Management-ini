<?php
include("../class/auth.php");
$table="ams_marks_shite_chos";
extract($_GET);
if($dd!='')
{
			if($obj->exists_multiple($table,array("school_id"=>$school))==0)
	         {
					if($obj->insert($table,array("grading_system_id"=>$dd,
					"school_id"=>$school,
					"date"=>date('Y-m-d'),
					"status"=>1))==1)
					{
						$obj->delete("ams_grading_system_dateils",array("school_id"=>$school));
						$sqlgradinginsert=$obj->SelectAllByID_Multiple("ams_grading_system_dateils",array("category_id"=>$dd));
						$d=1;
						if(!empty($sqlgradinginsert))
						foreach($sqlgradinginsert as $newgrade):
							$obj->insert("ams_grading_system_dateils",array(
						   "letter"=>$newgrade->letter,
						   "point"=>$newgrade->point,
						   "point_2"=>$newgrade->point_2,
						   "category_id"=>$dd,
						   "range_1"=>$newgrade->range_1,
						   "range_2"=>$newgrade->range_2,
						   "date"=>date('Y-m-d'),
						   "school_id"=>$school,
						   "status"=>2));
						endforeach;
					?>
					   <table cellspacing="1" cellpadding="0" width="80%" style="margin:0px auto 0px auto;" >
                                  <thead>
                                    <th>Selected Table</th>
                                    <th>Selected</th>
                    <th colspan="1"><a title="edit" style="color:rgba(255,255,255,1);" href="grading_system_list.php?id=<?php echo $dd; ?>&amp;school=<?php echo $school; ?>"><i class="fa fa-edit"></i></a></th>
                                  </th>
                                  </thead>
                                  <thead>
                                   
                                    <th>Range of marks(%)</th>
                                    <th>Letter Grade</th>
                                    <th>Grade Point</th>
                                   </thead>
                                  <tbody class="">
                                  
                                   <?php
								    $sele=$obj->SelectAllByVal("ams_marks_shite_chos","school_id",$school,"grading_system_id");
								    $array=array("school_id"=>$school);
									$data=$obj->SelectAllByID_Multiple("ams_grading_system_dateils",$array);
									$x=1;
									if(!empty($data))
									foreach($data as $row):
									?>  
                                   <tr>
                                    <td class="ll"><?php //echo $sele; ?><?php echo $row->range_1; ?> - below - <?php echo $row->range_2; ?></td>
                                    <td class="ll" class="center"><?php echo $row->letter; ?></td>
                                    <td class="ll" class="center"><?php echo $row->point; ?> - <?php echo $row->point_2; ?></td>
                                    
                                   </tr>
                                  <?php  endforeach;  ?>
                                   </tbody>
                                 </table>
					<?php
						}
						else
						{
							echo "Selected Failed";
						}
	         		}
		         else
                    {
      				
						$ll=$obj->SelectAllByVal($table,"school_id",$school,"id");
						if($obj->update($table,array("id"=>$ll,"grading_system_id"=>$dd))==1)
						{
							$obj->delete("ams_grading_system_dateils",array("school_id"=>$school));
							$sqlgradinginsert=$obj->SelectAllByID_Multiple("ams_grading_system_dateils",array("category_id"=>$dd));
							$d=1;
							if(!empty($sqlgradinginsert))
							foreach($sqlgradinginsert as $newgrade):
							   $obj->insert("ams_grading_system_dateils",array(
							   "letter"=>$newgrade->letter,
							   "point"=>$newgrade->point,
							   "point_2"=>$newgrade->point_2,
							   "category_id"=>$dd,
							   "range_1"=>$newgrade->range_1,
							   "range_2"=>$newgrade->range_2,
							   "date"=>date('Y-m-d'),
							   "school_id"=>$school,
							   "status"=>2));
							endforeach;
						?>
					 <table cellspacing="1" cellpadding="0" width="80%" style="margin:0px auto 0px auto;" >
                                  <thead>
                                    <th>Selected Table</th>
                                    <th>Selected</th>
                    				<th colspan="1"><a title="edit" style="color:rgba(255,255,255,1);" href="grading_system_list.php?id=<?php echo $dd; ?>&amp;school=<?php echo $school; ?>"><i class="fa fa-edit"></i></a></th>
                                  </th>
                                  </thead>
                                  <thead>
                                   
                                    <th>Range of marks(%)</th>
                                    <th>Letter Grade</th>
                                    <th>Grade Point</th>
                                   </thead>
                                  <tbody class="">
                                  
                                   <?php
								    $sele=$obj->SelectAllByVal("ams_marks_shite_chos","school_id",$school,"grading_system_id");
								    $array=array("school_id"=>$school);
									$data=$obj->SelectAllByID("ams_grading_system_dateils",$array);
									$x=1;
									if(!empty($data))
									foreach($data as $row):
									?>  
                                   <tr>
                                    <td class="ll"><?php //echo $sele; ?><?php echo $row->range_1; ?> - below - <?php echo $row->range_2; ?></td>
                                    <td class="ll" class="center"><?php echo $row->letter; ?></td>
                                    <td class="ll" class="center"><?php echo $row->point; ?> - <?php echo $row->point_2; ?></td>
                                    
                                   </tr>
                                  <?php  endforeach;  ?>
                                   </tbody>
                                 </table>
					<?php
							}
							else
							{
								echo "Update Failed";
							}
		   
                   
					} 
}
else
{
    
     echo "f";
   
}

	
?>
