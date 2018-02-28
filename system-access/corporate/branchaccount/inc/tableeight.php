<!-- Panels Start -->
                
           	
                        <div class="mws-panel-body no-padding" id="chackchack">
                        
                            <form id="mws-validate" name="frmMr"  class="mws-form" action="" method="post">
                            
                              
                                    
                      <div class="mws-panel-body no-padding">
                        <table class="mws-table">
                            <tr>
                              <td>Patient ID </td>
                              <td><input type="text" style="width:60px;" value="<?php echo $pid; ?>" name="pid" id="pid" placeholder="ID"> <button class="btn btn-danger" type="button" onClick="chack('2')">Check</button></td>
                              <td colspan="2">Patient Name </td>
                              <td colspan="2"><input type="text" placeholder="Patient Name" name="pname" id="pname"></td>
                              
                            </tr>
                            <tr>
                             
                              <td>Age </td>
                              <td> 
                              <select name="age" id="age" style="font-weight:bold;">
                               <option >Age</option>
                               <?php for ($i=1; $i <=200; $i++) { ?>
                               <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                               <?php } ?>     
                              </select></td>
                              <td>Sex</td>
                              <td><select name="sex" id="sex" style="font-weight:bold;">
                               <option >Sex</option>
                               <option value="1">Male</option>
                               <option value="2">FeMale</option>
                              </select></td>
                              <td>Appoinment Date </td>
                              <td><input type="text" class="mws-datepicker" name="joiningdate" id="joiningdate" style="width:80px;" value="<?php echo date('Y-m-d');?>" ></td>
                            </tr>
                            
                            <tr>
                             
                              <td>Refferred By Prof/Dr. </td>
                              <td colspan="5"><input type="text" placeholder="Refferred By Prof/Dr." style="width:600px;" name="dname" id="dname"></td>
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
                              <td colspan="4"> <a class="btn btn-danger"> PHYSICAL</a></td>
                            </tr>
                            
                            <tr>
                              <td>C.REACTIVE PROTINE</td>
                              <td><input type="text" placeholder="C.REACTIVE PROTINE" name="cprotine" /></td>
                              <td>Widal Test :</td>
                              <td><input type="text" placeholder="Widal Test" name="wtest" /></td>
                            </tr>
                            
                            <tr>
                              <td>A S O TITRE</td>
                              <td><input type="text" placeholder="A S O TITRE" name="aso" /></td>
                              <td>To :</td>
                              <td><input type="text" placeholder="TO" name="to" /></td>
                            </tr>
                            
                            <tr>
                              <td>GROUP RH</td>
                              <td><input type="text" placeholder="GROUP RH" name="group" /></td>
                              <td>TH :</td>
                              <td><input type="text" placeholder="TH" name="th" /></td>
                            </tr>
                            
                            <tr>
                              <td>VDRL</td>
                              <td><input type="text" placeholder="vdrl" /></td>
                              <td>AH</td>
                              <td><input type="text" placeholder="AH" name="ah"/></td>
                            </tr>
                            
                            <tr>
                              <td>HBs Ag</td>
                              <td><input type="text" name="hbs" placeholder="HBs Ag" /></td>
                              <td>BH :</td>
                              <td><input type="text" name="bh" placeholder="BH" /></td>
                            </tr>
                            
                            <tr>
                              <td>RA (RF)</td>
                              <td><input type="text" name="ra" placeholder="RA (RF)" /></td>
                              <td>OPINION</td>
                              <td><input type="text" name="opinion" placeholder="OPINION" /> </td>
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
                        </form>
                    </div>
                
                
                <!-- Panels End -->