
                            <div id="" ></div>
                            <?php 
							
							for($i=1; $i<=6; $i++):
							?>
                            <!------------------table One-------------------->
                            <div style="width:50%; min-height:350px; float:left; height:auto; ">
                            <table cellspacing="1" cellpadding="0" id="" class="left" width="95%">
                                  <thead>
                                    <th><?php echo $obj->SelectAllByVal("ams_grading_system_name","id",$i,"name"); ?></th>
                                    <th><label> <input type="radio" <?php if($i==$sele){ ?> checked="checked" <?php } ?> name="mss" id="dd" onclick="selecttable('<?php echo $i; ?>','<?php echo $school; ?>')" /> Select</label></th>
                                   <th><a title="edit" style="color:rgba(255,255,255,1);" href="grading_system_list.php?id=<?php echo $i; ?>&amp;school=<?php echo $school; ?>"><i class="fa fa-edit"></i></a></th>
                                  </thead>
                                  <thead >
                                    <th style="font-size:11px;">Range of marks(%)</th>
                                    <th style="font-size:11px;">Letter Grade</th>
                                    <th style="font-size:11px;">Grade Point</th>
                                   </thead>
                          		  <tbody>
                                  <?php
								  $array=array("category_id"=>$i,"school_id"=>0,"status"=>1);
									$data=$obj->SelectAllByID_Multiple("ams_grading_system_dateils",$array);
									$x=1;
									if(!empty($data))
									foreach($data as $row):
									?> 
                                    <?php $fffggg=$row->school_id; ?>
                                    
                                  <tr>
                                    <td><?php echo $row->range_1; ?> - below - <?php echo $row->range_2; ?></td>
                                    <td class="center"><?php echo $row->letter; ?></td>
                                    <td class="center" style="font-size:10px;"><?php echo $row->point; ?> - <?php echo $row->point_2; ?></td>
                                    
                                  </tr>
                                 <?php  endforeach;  ?>
                               
                                  </tbody>
                                </table>
                                </div>
                                <?php endfor; ?>
                               