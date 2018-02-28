<div class="heid_min">
       
                            <div class="w">Exam Grade Point Configuration </div>
                            <div id="deletel" class="w4" style="text-decoration:none; background:rgba(0,153,51,.5); border:rgba(0,102,0,1) 1px solid;">
                            <div  id="shoee">
                              <table cellspacing="1" cellpadding="0" width="80%" style="margin:0px auto 0px auto;" >
                                  <thead>
                                    <?php 
									$sele=$obj->SelectAllByVal("ams_marks_shite_chos","school_id",$school,"grading_system_id");
									$chk_current_grade=$obj->exists_multiple("ams_grading_system_dateils",array("school_id"=>$school));
									if($sele!=0)
									{ ?>
										<th>Selected Table</th>
										<th></th>
										<th colspan="1">
										<a title="edit" style="color:rgba(255,255,255,1);" href="grading_system_list.php?id=<?php echo $sele; ?>&amp;school=<?php echo $school; ?>"><i class="fa fa-edit"></i></a>
										</th>
									<?php } ?>
                                  </th>
                                  </thead>
                                  <thead>
                                   
                                    <th>Range of marks(%)</th>
                                    <th>Letter Grade</th>
                                    <th>Grade Point</th>
                                   </thead>
                                  <tbody class="">
                                  
                                   <?php
								    if($sele!=0)
									{
										if($chk_current_grade==0)
										{
											$arrays=array("category_id"=>$sele);
											$datas=$obj->SelectAllByID_Multiple("ams_grading_system_dateils",$arrays);
											$x=1;
											if(!empty($datas))
											foreach($datas as $row):
											?>  
										   <tr>
											<td class="ll"><?php echo $row->range_1; ?> - below - <?php echo $row->range_2; ?></td>
											<td class="ll" class="center"><?php echo $row->letter; ?></td>
											<td class="ll" class="center"><?php echo $row->point; ?> - <?php echo $row->point_2; ?></td>
										   </tr>
											<?php  
											endforeach;
										}
										else
										{
											$arrays=array("school_id"=>$school);
											$datas=$obj->SelectAllByID_Multiple("ams_grading_system_dateils",$arrays);
											$x=1;
											if(!empty($datas))
											foreach($datas as $row):
											?>  
										   <tr>
											<td class="ll"><?php echo $row->range_1; ?> - below - <?php echo $row->range_2; ?></td>
											<td class="ll" class="center"><?php echo $row->letter; ?></td>
											<td class="ll" class="center"><?php echo $row->point; ?> - <?php echo $row->point_2; ?></td>
										   </tr>
											<?php  
											endforeach;
											
										}
									}
									else
									{
										?>
                                        <tr>
                                        <td class="ll" colspan="3"> You Havn't Selected Any Grading System  Yet.</td>
                                       </tr>
                                        <?php
									}
								  	?>
                                   </tbody>
                                 </table>
                                 </thead>  
                            </div>
                            <div class="w4" style="text-decoration:none; width:100%;">
                               <div class="w_w">Exam Grading System Select Like your Chooses </div>
                               <div class="height-15"></div>
                                 <?php include("../include/table.php");?>
                                <div class="cl"></div>  
                            </div>
                              <div class="cl"></div>    
                            </div>