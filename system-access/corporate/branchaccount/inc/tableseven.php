<!-- Panels Start -->
                
           	 
                        <div class="mws-panel-body no-padding" id="chackchack">
                        
                            <form id="mws-validate" name="frmMr"  class="mws-form" action="" method="post">
                            
                      <div class="mws-panel-body no-padding">
                        <table class="mws-table">
                            <tr>
                              <td>Patient ID </td>
                              <td><input type="text" style="width:60px;" value="<?php echo $pid; ?>" name="pid" id="pid" placeholder="ID"> <button class="btn btn-danger" type="button" onClick="chack('2')">Check</button></td>
                              <td colspan="2">Patient Name </td>
                              <td colspan="2"><input type="text" placeholder="Patient Name" name="pname" id="pname" value="<?php echo $obj->SelectAllByVal("amsit_biochamistryt_report","pid",$pid,"pname"); ?>"></td>
                              
                            </tr>
                            <tr>
                             
                              <td>Age </td>
                              <td> 
                              <select name="age" id="age" style="font-weight:bold;">
                               <option value="<?php echo $obj->SelectAllByVal("amsit_biochamistryt_report","pid",$pid,"age"); ?>"><?php echo $obj->SelectAllByVal("amsit_biochamistryt_report","pid",$pid,"age"); ?></option>
                               <?php for ($i=1; $i <=200; $i++) { ?>
                               <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                               <?php } ?>     
                              </select></td>
                              <td>Sex</td>
                              <td><select name="sex" id="sex" style="font-weight:bold;">
                               <option value="<?php echo $obj->SelectAllByVal("amsit_biochamistryt_report","pid",$pid,"sex"); ?>"><?php $gender=$obj->SelectAllByVal("amsit_biochamistryt_report","pid",$pid,"sex"); if($gender==1) { echo "Male";}elseif($gender==2){ echo "Female";}else{ echo "None";}?></option>
                               <option value="1">Male</option>
                               <option value="2">FeMale</option>
                              </select></td>
                              <td>Appoinment Date </td>
                              <td><input type="text" class="mws-datepicker" name="joiningdate" id="joiningdate" style="width:80px;" value="<?php echo date('Y-m-d');?>" ></td>
                            </tr>
                            
                            <tr>
                             
                              <td>Refferred By Prof/Dr. </td>
                              <td colspan="5"><input value="<?php echo $obj->SelectAllByVal("amsit_biochamistryt_report","pid",$pid,"dname"); ?>" type="text" placeholder="Refferred By Prof/Dr." style="width:600px;" name="dname" id="dname"></td>
                            </tr>
                        </table>
                        <table class="mws-table" style="width:80%; margin:70px auto 70px auto;">
                            <tr>
                              <td colspan="2"  style="font-weight:bolder;">Route : </td>
                              <td colspan="2">Indradermal</td>
                            </tr>
                            <tr>
                              <td colspan="2"  style="font-weight:bolder;">Reagent : </td>
                              <td colspan="2">ppd Standised by who</td>
                            </tr>
                            <tr>
                              <td colspan="4"  style="font-weight:bolder;">Amount of injections 5 tu 0.1 ml</td>
                            </tr>
                            <tr>
                              <td>Injection Give :at:</td>
                              <td><input type="text" placeholder="Injection Give :at:" name="injection" id="injection" value="<?php echo $obj->SelectAllByVal("amsit_biochamistryt_report","pid",$pid,"injection"); ?>"/></td>
                              <td>Am/Pm/On</td>
                              <td><input type="text" placeholder="Am/Pm/On" name="am" id="am" value="<?php echo $obj->SelectAllByVal("amsit_biochamistryt_report","pid",$pid,"am"); ?>"/></td>
                            </tr>
                            
                            <tr>
                              <td>Result Taken :At :</td>
                              <td><input type="text" placeholder="Result Taken :At :" name="resutl" id="resutl" value="<?php echo $obj->SelectAllByVal("amsit_biochamistryt_report","pid",$pid,"resutl"); ?>"/></td>
                              <td>Am/Pm/On</td>
                              <td><input type="text" placeholder="Am/Pm/On" name="pm" id="pm" value="<?php echo $obj->SelectAllByVal("amsit_biochamistryt_report","pid",$pid,"pm"); ?>"/></td>
                            </tr>
                            
                            <tr>
                              <td>Result : At :</td>
                              <td><input type="text" placeholder="Result : At :" name="resultat" id="resultat" value="<?php echo $obj->SelectAllByVal("amsit_biochamistryt_report","pid",$pid,"resultat"); ?>"/></td>
                              <td>Home The Injection Is </td>
                              <td><input type="text" placeholder="Home The Injection Is" name="injectionis" id="injectionis" value="<?php echo $obj->SelectAllByVal("amsit_biochamistryt_report","pid",$pid,"injectionis"); ?>"/> mm Diameter</td>
                            </tr>
                            
                            <tr>
                              <td colspan="4"  style="font-weight:bolder;">Comment : Normal 6-10 mm Diameter </td>
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