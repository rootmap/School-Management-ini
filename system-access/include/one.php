 <div id="option" class="heid_min">
                            
                            	<ul style="height:60px;" class="margin_left125">
                            	<li class="add_st_form_div_label_view_details width-label-70 left">Session:</li>
                                <li class="add_st_form_div_label_view_details width-label-100 left">
                                <select name="session" class="border_red1" id="session" onchange="showcls(this.value)" >
                                <option>Session</option>
                                <?php
									$array=array("school_id"=>$school); 
									 $session=$obj->SelectAllByID("ams_session",$array);
									  if(!empty($session))
									  foreach($session as $ses):
									 ?>
										<option value="<?php echo $ses->id;?>"><?php echo $ses->name;?></option>
									<?php 
									endforeach; 
								?>
                                </select>
                                </li>
                           		<li class="add_st_form_div_label_view_details width-label-7 left">Class/Course:</li>
                                <li class="add_st_form_div_label_view_details width-label-100 left">
                                    <select name="class" id="class" onchange="showexam(this.value)" class="border_red1" >
                                        <option>Class/Course</option>
                                       
                                        
                                    </select>
                                </li>
                                </ul>
                               
                               
                      <div class="w">Exam Modules Configuration</div>
                      <div class="ww">
                        <div class="w1">Modules of Exam</div>
                        <div class="w3">Selected Exam Module</div>
                        <div class="cl"></div>   
                      </div>
                      
                      <div class="www">
                         <div id="exam" class="w2 left"></div>
                         <div id="sexam" class="w2 right"></div>
                         <div class="cl"></div> 
                      </div>
                      
                               
                           <div class="cl"></div>    
                          </div> 