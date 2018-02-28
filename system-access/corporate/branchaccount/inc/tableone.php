<div class="mws-panel-body no-padding">
                        
                            <form id="mws-validate" name="frmMr"  class="mws-form" action="" method="post">
                            
                              
                                                       
                                    
                      <div class="mws-panel-body no-padding">
                        <table class="mws-table">
                            <tr>
                              <td>Patient ID </td>
                              <td><input type="text" style="width:60px;" value="<?php echo $pid; ?>" name="pid" id="pid" placeholder="ID"> <button class="btn btn-danger" type="button" onClick="chack('2')">Check</button></td>
                              <td colspan="2">Patient Name </td>
                              <td colspan="2"><input type="text" placeholder="Patient Name" name="pname" id="pname" value="<?php echo $obj->SelectAllByVal("amsit_heamatological_report","pid",$pid,"pname"); ?>"></td>
                              
                            </tr>
                            <tr>
                             
                              <td>Age </td>
                              <td> 
                              <select name="age" id="age" style="font-weight:bold;">
                               <option value="<?php echo $obj->SelectAllByVal("amsit_heamatological_report","pid",$pid,"age"); ?>"><?php echo $obj->SelectAllByVal("amsit_heamatological_report","pid",$pid,"age"); ?></option>
                               <?php for ($i=1; $i <=200; $i++) { ?>
                               <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                               <?php } ?>     
                              </select></td>
                              <td>Sex</td>
                              <td><select name="sex" id="sex" style="font-weight:bold;">
                               <option value="<?php echo $obj->SelectAllByVal("amsit_heamatological_report","pid",$pid,"sex"); ?>"><?php $gender=$obj->SelectAllByVal("amsit_heamatological_report","pid",$pid,"sex"); if($gender==1) { echo "Male";}elseif($gender==2){ echo "Female";}else{ echo "None";}?></option>
                               <option value="1">Male</option>
                               <option value="2">FeMale</option>
                              </select></td>
                              <td>Appoinment Date </td>
                              <td><input type="text" class="mws-datepicker" name="joiningdate" id="joiningdate" style="width:80px;" value="<?php echo date('Y-m-d');?>" ></td>
                            </tr>
                            
                            <tr>
                             
                              <td>Refferred By Prof/Dr. </td>
                              <td colspan="5"><input value="<?php echo $obj->SelectAllByVal("amsit_heamatological_report","pid",$pid,"dname"); ?>" type="text" placeholder="Refferred By Prof/Dr." style="width:600px;" name="dname" id="dname"></td>
                            </tr>
                        </table>
                        <table class="mws-table">
                            <tr style="font-weight:bolder;">
                              <td>TEST</td>
                              <td>NORMAL VALUE</td>
                              <td>RUSELT</td>
                              <td>TEST</td>
                              <td>NORMAL VALUE</td>
                              <td>RUSELT</td>
                            </tr>
                            
                            <tr>
                              <td>ESR</td>
                              <td>M 0-10mm F 1-15mm</td>
                              <td><input type="text" value="mm fall end of 1st hour" style="width:150px;" placeholder=" mm fall end of 1st hour" name="esc" id="age" value="<?php echo $obj->SelectAllByVal("amsit_heamatological_report","pid",$pid,"esc"); ?>" /></td>
                              <td colspan="3"> <a class="btn btn-danger"> DEFFERENTIAL COUNTS (WBC)</a></td>
                            </tr>
                            
                            <tr>
                              <td>HEAMOGLOBIN</td>
                              <td>M 12-16gm/dl F 10-12gm/dl</td>
                              <td><input type="text"  style="width:100px;" value="gm/dl %" placeholder="gm/dl %"  name="hemo" id="hemo" value="<?php echo $obj->SelectAllByVal("amsit_heamatological_report","pid",$pid,"hemo"); ?>" /></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            
                            <tr>
                             <td colspan="3"><a class="btn btn-danger"> TOTAL COUNTS</a></td>
                             <td>Polymorphs</td>
                              <td>40-75%</td>
                              <td><input type="text"  style="width:100px;" value="%" name="poly" id="poly" value="<?php echo $obj->SelectAllByVal("amsit_heamatological_report","pid",$pid,"poly"); ?>" /></td>
                            </tr>
                            
                            <tr>
                             <td>RBC</td>
                             <td>4.5-6.5*10 <sup>12</sup> L</td>
                             <td><input type="text"  style="width:100px;" value="/cmm" name="rbc" id="rbc" value="<?php echo $obj->SelectAllByVal("amsit_heamatological_report","pid",$pid,"rbc"); ?>"/></td>
                             <td>Lymphocyte</td>
                              <td>20-50%</td>
                              <td><input type="text"  style="width:100px;" value="%" name="lym" id="lym" value="<?php echo $obj->SelectAllByVal("amsit_heamatological_report","pid",$pid,"lym"); ?>" /></td>
                            </tr>
                            
                            <tr>
                             <td>WBC</td>
                             <td>4.11-*10<sup>9</sup>  L</td>
                             <td><input type="text"  style="width:100px;"  value="/cmm" name="wbc" id="wbc" value="<?php echo $obj->SelectAllByVal("amsit_heamatological_report","pid",$pid,"wbc"); ?>" /></td>
                             <td>Monocyte</td>
                              <td>2-10%</td>
                              <td><input type="text"  style="width:100px;" value="%" name="mono" id="mono" value="<?php echo $obj->SelectAllByVal("amsit_heamatological_report","pid",$pid,"mono"); ?>" /></td>
                            </tr>
                            
                            <tr>
                             <td>PLATELETS COUNT</td>
                             <td>4150,000-400,000/cumm</td>
                             <td><input type="text"  style="width:100px;"  value="/cmm" name="pleat" id="pleat" value="<?php echo $obj->SelectAllByVal("amsit_heamatological_report","pid",$pid,"pleat"); ?>" /></td>
                             <td>Eosinophil</td>
                              <td>1-8%</td>
                              <td><input type="text"  style="width:100px;" value="%" name="eosi" id="eosi" value="<?php echo $obj->SelectAllByVal("amsit_heamatological_report","pid",$pid,"eosi"); ?>" /></td>
                            </tr>
                            
                            <tr>
                             <td>CIRCULATING EOSINOPHIL</td>
                             <td>400cmm</td>
                             <td><input type="text"  style="width:100px;"  value="/cmm" name="circu" id="circu" value="<?php echo $obj->SelectAllByVal("amsit_heamatological_report","pid",$pid,"circu"); ?>" /></td>
                             <td>Basophil</td>
                              <td>0-1%</td>
                              <td><input type="text"  style="width:100px;" value="%" name="baso" id="baso" value="<?php echo $obj->SelectAllByVal("amsit_heamatological_report","pid",$pid,"baso"); ?>" /></td>
                            </tr>
                            
                            <tr>
                             <td colspan="2">RETICULOCYTESL</td>
                             <td><input type="text"  style="width:100px;"  value="/cmm" name="reticu" id="reticu" value="<?php echo $obj->SelectAllByVal("amsit_heamatological_report","pid",$pid,"reticu"); ?>" /></td>
                             <td colspan="2">Others</td>
                              <td><input type="text"  style="width:100px;" value="%" name="other" id="other" value="<?php echo $obj->SelectAllByVal("amsit_heamatological_report","pid",$pid,"other"); ?>"/></td>
                            </tr>
                            
                            <tr>
                             <td colspan="3"></td>
                             
                             <td>Bleeding Time</td>
                             <td>2-6 min</td>
                              <td><input type="text"  style="width:100px;" value="   min   sec" name="btime" id="btime" value="<?php echo $obj->SelectAllByVal("amsit_heamatological_report","pid",$pid,"btime"); ?>"/></td>
                            </tr>
                            
                            <tr>
                             <td colspan="3"></td>
                             
                             <td>Cloting Time</td>
                             <td>2-11 min</td>
                              <td><input type="text"  style="width:100px;" value="   min   sec" name="ctime" id="ctime" value="<?php echo $obj->SelectAllByVal("amsit_heamatological_report","pid",$pid,"ctime"); ?>"/></td>
                            </tr>
                            
                            <tr>
                             <td colspan="3"></td>
                            
                             <td colspan="2">Phothomdin Time</td>
                              <td><input type="text"  style="width:100px;" value="   min   sec" name="ptime" id="ptime" value="<?php echo $obj->SelectAllByVal("amsit_heamatological_report","pid",$pid,"ptime"); ?>"/></td>
                            </tr>
                            
                            <tr>
                             <td>MALARIAL PARASITE (MP)</td>
                              <td colspan="5"><input type="text"  style="width:700px;" placeholder="MALARIAL PARASITE (MP)" name="malay" id="malay" value="<?php echo $obj->SelectAllByVal("amsit_heamatological_report","pid",$pid,"malay"); ?>"/></td>
                            </tr>
                            
                            </table>
                        
                    </div>
                                   
                                <div class="mws-button-row" style="padding-left:400px;">
                                
                                    
                                    <input type="reset" value="RESET" class="btn btn-danger">
                                    <input type="submit" value="ADD" class="btn btn-success">
                                    <input type="submit"  id="btn1" value="SAVE" class="btn btn-success" name="submit">
                                    <input type="reset" value="CLOSE" class="btn btn-danger">
                                </div>
                            </form>
                        </div>