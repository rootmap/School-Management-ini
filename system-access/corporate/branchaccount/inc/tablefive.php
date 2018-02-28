<!-- Panels Start -->
                        <div class="mws-panel-body no-padding" id="chackchack">
                        
                            <form id="mws-validate" name="frmMr"  class="mws-form" action="" method="post">
                                    
                      <div class="mws-panel-body no-padding">
                        <table class="mws-table">
                            <tr>
                              <td>Patient ID </td>
                              <td><input type="text" style="width:60px;" value="<?php echo $pid; ?>" name="pid" id="pid" placeholder="ID"> <button class="btn btn-danger" type="button" onClick="chack('2')">Check</button></td>
                              <td colspan="2">Patient Name </td>
                              <td colspan="2"><input type="text" placeholder="Patient Name" name="pname" id="pname" value="<?php echo $obj->SelectAllByVal("amsit_stool_report","pid",$pid,"pname"); ?>"></td>
                              
                            </tr>
                            <tr>
                             
                              <td>Age </td>
                              <td> 
                              <select name="age" id="age" style="font-weight:bold;">
                               <option value="<?php echo $obj->SelectAllByVal("amsit_stool_report","pid",$pid,"age"); ?>"><?php echo $obj->SelectAllByVal("amsit_stool_report","pid",$pid,"age"); ?></option>
                               <?php for ($i=1; $i <=200; $i++) { ?>
                               <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                               <?php } ?>     
                              </select></td>
                              <td>Sex</td>
                              <td><select name="sex" id="sex" style="font-weight:bold;">
                               <option value="<?php echo $obj->SelectAllByVal("amsit_stool_report","pid",$pid,"sex"); ?>"><?php $gender=$obj->SelectAllByVal("amsit_stool_report","pid",$pid,"sex"); if($gender==1) { echo "Male";}elseif($gender==2){ echo "Female";}else{ echo "None";}?></option>
                               <option value="1">Male</option>
                               <option value="2">FeMale</option>
                              </select></td>
                              <td>Appoinment Date </td>
                              <td><input type="text" class="mws-datepicker" name="joiningdate" id="joiningdate" style="width:80px;" value="<?php echo date('Y-m-d');?>" ></td>
                            </tr>
                            
                            <tr>
                             
                              <td>Refferred By Prof/Dr. </td>
                              <td colspan="5"><input value="<?php echo $obj->SelectAllByVal("amsit_stool_report","pid",$pid,"dname"); ?>" type="text" placeholder="Refferred By Prof/Dr." style="width:600px;" name="dname" id="dname"></td>
                            </tr>
                        </table>
                        
                        <table class="mws-table">
                            <tr style="font-weight:bolder;">
                              <td>TEST</td>
                              <td>RUSELT</td>
                              <td>TEST</td>
                              <td>RUSELT</td>
                            </tr>
                             <tr>
                              <td colspan="4" style="text-align:center;"><a class="btn btn-danger" style="padding-left:200px; font-weight:bolder; padding-right:200px;"> STOOL R/M/E </a></td>
                            </tr>
                            
                            <tr style="text-align:center;">
                              <td colspan="2"><a class="btn btn-danger" style="padding-left:100px; font-weight:bolder; padding-right:100px;">Physical and chemical :</a></td>
                              <td colspan="2"><a class="btn btn-danger" style="padding-left:100px; font-weight:bolder; padding-right:100px;"> Microscopic : </a></td>
                            </tr>
                            
                            <tr>
                              <td>Consistency :</td>
                              <td><input type="text"  style="width:200px;" placeholder="Consistency"  name="consistency" id="consistency" value="<?php echo $obj->SelectAllByVal("amsit_stool_report","pid",$pid,"consistency"); ?>"/></td>
                              <td>Ova of :</td>
                              <td><input type="text"  style="width:200px;" placeholder="Ova of" name="ova" id="ova" value="<?php echo $obj->SelectAllByVal("amsit_stool_report","pid",$pid,"ova"); ?>"/></td>
                            </tr>
                            
                            <tr>
                              <td>Colour :</td>
                              <td><input type="text"  style="width:200px;" placeholder="Colour"  name="colour" id="colour" value="<?php echo $obj->SelectAllByVal("amsit_stool_report","pid",$pid,"colour"); ?>"/></td>
                              <td>Cysts of :</td>
                              <td><input type="text"  style="width:200px;" placeholder="Cysts of "  name="cysts" id="cysts" value="<?php echo $obj->SelectAllByVal("amsit_stool_report","pid",$pid,"cysts"); ?>"/></td>
                            </tr>
                            
                            <tr>
                              <td>Reaction :</td>
                              <td><input type="text"  style="width:200px;" placeholder="Reaction" name="reaction" id="reaction" value="<?php echo $obj->SelectAllByVal("amsit_stool_report","pid",$pid,"reaction"); ?>"/></td>
                              <td>Larva of :</td>
                              <td><input type="text"  style="width:200px;" placeholder="Larva of"  name="larva" id="larva" value="<?php echo $obj->SelectAllByVal("amsit_stool_report","pid",$pid,"larva"); ?>"/></td>
                            </tr>
                            
                            <tr>
                              <td>Mucus :</td>
                              <td><input type="text"  style="width:200px;" placeholder="Mucus"  name="mucus" id="mucus" value="<?php echo $obj->SelectAllByVal("amsit_stool_report","pid",$pid,"mucus"); ?>"/></td>
                              <td>RBC :</td>
                              <td><input type="text"  style="width:200px;" placeholder="RBC"  name="rbc" id="rbc" value="<?php echo $obj->SelectAllByVal("amsit_stool_report","pid",$pid,"rbc"); ?>"/></td>
                            </tr>
                            
                            <tr>
                              <td>Blood :</td>
                              <td><input type="text"  style="width:200px;" placeholder="Blood"  name="blood" id="blood" value="<?php echo $obj->SelectAllByVal("amsit_stool_report","pid",$pid,"blood"); ?>"/></td>
                              <td>Pus cell :</td>
                              <td><input type="text"  style="width:200px;" placeholder="Pus cell"  name="pus" id="pus" value="<?php echo $obj->SelectAllByVal("amsit_stool_report","pid",$pid,"pus"); ?>"/></td>
                            </tr>
                            
                            <tr>
                              <td>Occult blood :</td>
                              <td><input type="text"  style="width:200px;" placeholder="Occult blood"  name="occult" id="occult" value="<?php echo $obj->SelectAllByVal("amsit_stool_report","pid",$pid,"occult"); ?>"/></td>
                              <td>Vegetable cell :</td>
                              <td><input type="text"  style="width:200px;" placeholder="Vegetable cell "  name="vegetable" id="vegetable" value="<?php echo $obj->SelectAllByVal("amsit_stool_report","pid",$pid,"vegetable"); ?>"/></td>
                            </tr>
                            
                            <tr>
                              <td>Reducing :</td>
                              <td><input type="text"  style="width:200px;" placeholder="Reducing"  name="reducing" id="reducing" value="<?php echo $obj->SelectAllByVal("amsit_stool_report","pid",$pid,"reducing"); ?>"/></td>
                              <td>Fat Globules :</td>
                              <td><input type="text"  style="width:200px;" placeholder="Fat Globules"  name="fat" id="fat" value="<?php echo $obj->SelectAllByVal("amsit_stool_report","pid",$pid,"fat"); ?>"/></td>
                            </tr>
                            
                            <tr>
                              <td>Substance :</td>
                              <td><input type="text"  style="width:200px;" placeholder="Substance"  name="substance" id="substance" value="<?php echo $obj->SelectAllByVal("amsit_stool_report","pid",$pid,"substance"); ?>"/></td>
                              <td>Others :</td>
                              <td><input type="text"  style="width:200px;" placeholder="Others"  name="others" id="others" value="<?php echo $obj->SelectAllByVal("amsit_stool_report","pid",$pid,"others"); ?>"/></td>
                            </tr>
                            
                        </table>
                        
                    </div>
                                   
                          <div class="mws-button-row" style="padding-left:400px;"> 
                            <input type="reset" value="RESET" class="btn btn-danger">
                            <input type="submit" value="ADD" class="btn btn-success">
                            <input type="submit"  id="btn1" value="SAVE" class="btn btn-success" name="submit">
                            <input type="reset" value="CLOSE" class="btn btn-danger">
                          </div>
                        </div>
                        </form>
                
<!-- Panels End -->