<!-- Panels Start -->
 
                        <div class="mws-panel-body no-padding" id="chackchack">
                        
                            <form id="mws-validate" name="frmMr"  class="mws-form" action="" method="post">
                            
                      <div class="mws-panel-body no-padding">
                        <table class="mws-table">
                            <tr>
                              <td>Patient ID </td>
                              <td><input type="text" style="width:60px;" value="<?php echo $pid; ?>" name="pid" id="pid" placeholder="ID"> <button class="btn btn-danger" type="button" onClick="chack('2')">Check</button></td>
                              <td colspan="2">Patient Name </td>
                              <td colspan="2"><input type="text" placeholder="Patient Name" name="pname" id="pname" value="<?php echo $obj->SelectAllByVal("amsit_semen_report","pid",$pid,"pname"); ?>"></td>
                              
                            </tr>
                            <tr>
                             
                              <td>Age </td>
                              <td> 
                              <select name="age" id="age" style="font-weight:bold;">
                               <option value="<?php echo $obj->SelectAllByVal("amsit_semen_report","pid",$pid,"age"); ?>"><?php echo $obj->SelectAllByVal("amsit_semen_report","pid",$pid,"age"); ?></option>
                               <?php for ($i=1; $i <=200; $i++) { ?>
                               <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                               <?php } ?>     
                              </select></td>
                              <td>Sex</td>
                              <td><select name="sex" id="sex" style="font-weight:bold;">
                               <option value="<?php echo $obj->SelectAllByVal("amsit_semen_report","pid",$pid,"sex"); ?>"><?php $gender=$obj->SelectAllByVal("amsit_semen_report","pid",$pid,"sex"); if($gender==1) { echo "Male";}elseif($gender==2){ echo "Female";}else{ echo "None";}?></option>
                               <option value="1">Male</option>
                               <option value="2">FeMale</option>
                              </select></td>
                              <td>Appoinment Date </td>
                              <td><input type="text" class="mws-datepicker" name="joiningdate" id="joiningdate" style="width:80px;" value="<?php echo date('Y-m-d');?>" ></td>
                            </tr>
                            
                            <tr>
                             
                              <td>Refferred By Prof/Dr. </td>
                              <td colspan="5"><input value="<?php echo $obj->SelectAllByVal("amsit_semen_report","pid",$pid,"dname"); ?>" type="text" placeholder="Refferred By Prof/Dr." style="width:600px;" name="dname" id="dname"></td>
                            </tr>
                        </table>
                        <table class="mws-table">
                            <tr style="font-weight:bolder; text-align:center;">
                              <td>TEST</td>
                              <td>RUSELT</td>
                            </tr>
                            
                            <tr>
                              <td>METHOD OF COLLECTION :</td>
                              <td style="text-align:center;"><input type="text"  style="width:300px;" placeholder="METHOD OF COLLECTION" name="method" id="method" value="<?php echo $obj->SelectAllByVal("amsit_semen_report","pid",$pid,"method"); ?>"/></td>
                            </tr>
                            
                            <tr>
                              <td>TIME COLLECTION :</td>
                              <td style="text-align:center;"><input type="text"  style="width:300px;" placeholder="TIME COLLECTION" name="timeco" id="timeco" value="<?php echo $obj->SelectAllByVal("amsit_semen_report","pid",$pid,"timeco"); ?>"/></td>
                            </tr>
                            <tr>
                              <td>TIME OF EXAMINATION :</td>
                              <td style="text-align:center;"><input type="text"  style="width:300px;" placeholder="TIME OF EXAMINATION" name="timee" id="timee" value="<?php echo $obj->SelectAllByVal("amsit_semen_report","pid",$pid,"timee"); ?>"/></td>
                            </tr>
                            <tr>
                              <td>VOLUME :</td>
                              <td style="text-align:center;"><input type="text"  style="width:300px;" placeholder="VOLUME" name="volume" id="volume" value="<?php echo $obj->SelectAllByVal("amsit_semen_report","pid",$pid,"volume"); ?>"/></td>
                            </tr>
                            <tr>
                              <td>COLOUR :</td>
                              <td style="text-align:center;"><input type="text"  style="width:300px;" placeholder="COLOUR" name="colour" id="colour" value="<?php echo $obj->SelectAllByVal("amsit_semen_report","pid",$pid,"colour"); ?>"/></td>
                            </tr>
                            <tr>
                              <td>ODOUR :</td>
                              <td style="text-align:center;"><input type="text"  style="width:300px;" placeholder="ODOUR" name="odour" id="odour" value="<?php echo $obj->SelectAllByVal("amsit_semen_report","pid",$pid,"odour"); ?>"/></td>
                            </tr>
                            <tr>
                              <td>VISCOSITY :</td>
                              <td style="text-align:center;"><input type="text"  style="width:300px;" placeholder="VISCOSITY" name="visc" id="visc" value="<?php echo $obj->SelectAllByVal("amsit_semen_report","pid",$pid,"visc"); ?>"/></td>
                            </tr>
                            <tr>
                              <td>REACTION :</td>
                              <td style="text-align:center;"><input type="text"  style="width:300px;" placeholder="REACTION" name="reaction" id="reaction" value="<?php echo $obj->SelectAllByVal("amsit_semen_report","pid",$pid,"reaction"); ?>"/></td>
                            </tr>
                            <tr>
                              <td>SPERMATOZA COUNT :</td>
                              <td style="text-align:center;"><input type="text"  style="width:300px;" placeholder="SPERMATOZA COUNT" name="count" id="count" value="<?php echo $obj->SelectAllByVal("amsit_semen_report","pid",$pid,"motile"); ?>"/></td>
                            </tr>
                            <tr>
                              <td>ACTIVE MOTILE :</td>
                              <td style="text-align:center;"><input type="text"  style="width:300px;" placeholder="ACTIVE MOTILE" name="motile" id="motile" value="<?php echo $obj->SelectAllByVal("amsit_semen_report","pid",$pid,"dname"); ?>"/></td>
                            </tr>
                            <tr>
                              <td>S.ACTIVE MOTILE :</td>
                              <td style="text-align:center;"><input type="text"  style="width:300px;" placeholder="S.ACTIVE MOTILE" name="sactive" id="sactive" value="<?php echo $obj->SelectAllByVal("amsit_semen_report","pid",$pid,"sactive"); ?>"/></td>
                            </tr>
                            <tr>
                              <td>DEAD :</td>
                              <td style="text-align:center;"><input type="text"  style="width:300px;" placeholder="DEAD" name="dead" id="dead" value="<?php echo $obj->SelectAllByVal("amsit_semen_report","pid",$pid,"dead"); ?>"/></td>
                            </tr>
                            <tr>
                              <td>ABNORMALS :</td>
                              <td style="text-align:center;"><input type="text"  style="width:300px;" placeholder="ABNORMALS" name="abno" id="abno" value="<?php echo $obj->SelectAllByVal("amsit_semen_report","pid",$pid,"abno"); ?>"/></td>
                            </tr>
                            <tr>
                              <td>PUS CELLS :</td>
                              <td style="text-align:center;"><input type="text"  style="width:300px;" placeholder="PUS CELLS" name="cells" id="cells" value="<?php echo $obj->SelectAllByVal("amsit_semen_report","pid",$pid,"cells"); ?>"/></td>
                            </tr>
                            <tr>
                              <td>EPI CELL :</td>
                              <td style="text-align:center;"><input type="text"  style="width:300px;" placeholder="EPI CELL" name="cell" id="cell" value="<?php echo $obj->SelectAllByVal("amsit_semen_report","pid",$pid,"cell"); ?>"/></td>
                            </tr>
                            <tr>
                              <td>OPINION :</td>
                              <td style="text-align:center;"><input type="text"  style="width:300px;" placeholder="OPINION" name="option" id="option" value="<?php echo $obj->SelectAllByVal("amsit_semen_report","pid",$pid,"option"); ?>"/></td>
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