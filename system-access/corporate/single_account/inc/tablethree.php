<!-- Panels Start -->
                
           	
                        <div class="mws-panel-body no-padding" id="chackchack">
                        
                            <form id="mws-validate" name="frmMr"  class="mws-form" action="" method="post">
                            
                             
                                                       
                                    
                      <div class="mws-panel-body no-padding">
                       <table class="mws-table">
                            <tr>
                              <td>Patient ID </td>
                              <td><input type="text" style="width:60px;" value="<?php echo $pid; ?>" name="pid" id="pid" placeholder="ID"> <button class="btn btn-danger" type="button" onClick="chack('2')">Check</button></td>
                              <td colspan="2">Patient Name </td>
                              <td colspan="2"><input type="text" placeholder="Patient Name" name="pname" id="pname" value="<?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"pname"); ?>"></td>
                              
                            </tr>
                            <tr>
                             
                              <td>Age </td>
                              <td> 
                              <select name="age" id="age" style="font-weight:bold;">
                               <option value="<?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"age"); ?>"><?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"age"); ?></option>
                               <?php for ($i=1; $i <=200; $i++) { ?>
                               <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                               <?php } ?>     
                              </select></td>
                              <td>Sex</td>
                              <td><select name="sex" id="sex" style="font-weight:bold;">
                               <option value="<?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"sex"); ?>"><?php $gender=$obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"sex"); if($gender==1) { echo "Male";}elseif($gender==2){ echo "Female";}else{ echo "None";}?></option>
                               <option value="1">Male</option>
                               <option value="2">FeMale</option>
                              </select></td>
                              <td>Appoinment Date </td>
                              <td><input type="text" class="mws-datepicker" name="joiningdate" id="joiningdate" style="width:80px;" value="<?php echo date('Y-m-d');?>" ></td>
                            </tr>
                            
                            <tr>
                             
                              <td>Refferred By Prof/Dr. </td>
                              <td colspan="5"><input value="<?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"dname"); ?>" type="text" placeholder="Refferred By Prof/Dr." style="width:600px;" name="dname" id="dname"></td>
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
                              <td>S.BILIRUBIN</td>
                              <td>0.3 to 1mg/dl</td>
                              <td><input type="text" name="bil" placeholder="S.BILIRUBIN" style="width:150px;" value="<?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"bil"); ?>"/></td>
                              <td>S. LDH</td>
                              <td>230 TO 460 U/L</td>
                              <td><input type="text" style="width:150px;" name="sldh" placeholder="S. LDH" value="<?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"sldh"); ?>"/></td>
                            </tr>
                            
                            <tr>
                              <td>SGOT(AST)</td>
                              <td>up to 45 U/L</td>
                              <td><input type="text" style="width:150px;" name="sgt" placeholder="SGOT(AST)" value="<?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"sgt"); ?>"/></td>
                              <td>CREATI PHOSPHOKINASE(CPK)</td>
                              <td>24 tO 195 U/L</td>
                              <td><input type="text" style="width:150px;" name="cret" placeholder="CREATI PHOSPHOKINASE(CPK)" value="<?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"cret"); ?>"/></td>
                            </tr>
                            <tr>
                              <td>GPT(ALT)</td>
                              <td>Up to 40 U/L</td>
                              <td><input type="text" style="width:150px;" name="gpt" placeholder="GPT(ALT)" value="<?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"gpt"); ?>"/></td>
                              <td>CPK.MB</td>
                              <td>Up to 11.7 U/L</td>
                              <td><input type="text" style="width:150px;" name="cpk" placeholder="CPK.MB" value="<?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"cpk"); ?>"/></td>
                            </tr>
                            <tr>
                              <td> S.ALKALINE PHOS </td>
                              <td>3 to 13 KAU/L</td>
                              <td><input type="text" style="width:150px;" name="salk" placeholder="S.ALKALINE PHOS" value="<?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"salk"); ?>"/></td>
                              <td>URINE AMYLASE</td>
                              <td>Up tO 220 U/L</td>
                              <td><input type="text" style="width:150px;" name="urinamy" placeholder="URINE AMYLASE" value="<?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"urinamy"); ?>"/></td>
                            </tr>
                            <tr>
                              <td>S.ACID PHOS</td>
                              <td>Up to 4.2 U/L</td>
                              <td><input type="text" style="width:150px;" name="sacid" placeholder="S.ACID PHOS" value="<?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"sacid"); ?>"/></td>
                              <td>S.URIC ACID</td>
                              <td>2.4 tO 7MG/DL</td>
                              <td><input type="text" style="width:150px;" name="uric" placeholder="S.URIC ACID" value="<?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"uric"); ?>"/></td>
                            </tr>
                            <tr>
                              <td>S.CHOLESTEROL</td>
                              <td>130 to 200mg/dl</td>
                              <td><input type="text" style="width:150px;" name="scho" placeholder="S.CHOLESTEROL" value="<?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"scho"); ?>"/></td>
                              <td>S.CALCIUM </td>
                              <td>8.4 tO 10.7 MG/DL</td>
                              <td><input type="text" style="width:150px;" name="scla" placeholder="S.CALCIUM" value="<?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"scla"); ?>"/></td>
                            </tr>
                            <tr>
                              <td>S.HDL CHOLESTEROL </td>
                              <td>Up to 55 mg/dl</td>
                              <td><input type="text" style="width:150px;" name="shdl" placeholder="S.HDL CHOLESTEROL" value="<?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"shdl"); ?>"/></td>
                              <td>S.PROTEIN</td>
                              <td>6.6 TO 8.7 G/DL</td>
                              <td><input type="text" style="width:150px;" name="spro" placeholder="S.PROTEIN" value="<?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"spro"); ?>"/></td>
                            </tr>
                            <tr>
                              <td>S.LDL CHOLESTEROL </td>
                              <td>10 to 150 mg/dl</td>
                              <td><input type="text" style="width:150px;" name="sldl" placeholder="S.LDL CHOLESTEROL" value="<?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"sldl"); ?>"/></td>
                              <td>BLOOD GLUCOSE/SUGAR</td>
                              <td>CORR:URINE SUGAR</td>
                              <td><input type="text" style="width:150px;" name="corurin" placeholder="BLOOD GLUCOSE/SUGAR" value="<?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"corurin"); ?>"/></td>
                            </tr>
                            <tr>
                              <td>TRIDLY CERIDES </td>
                              <td>Up to 200 mg/dl</td>
                              <td><input type="text" style="width:150px;" name="trid" placeholder="TRIDLY CERIDES" value="<?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"trid"); ?>"/></td>
                              <td colspan="2">FASTING(Normal -76 to 116mg/dl)</td>
                              <td><input type="text" style="width:150px;" name="fast" placeholder="FASTING(Normal -76 to 116mg/dl)" value="<?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"fast"); ?>"/></td>
                            </tr>
                            <tr>
                              <td>S.UREN </td>
                              <td>20 to 50 mg/dl</td>
                              <td><input type="text" style="width:150px;" name="urin" placeholder="S.UREN" value="<?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"urin"); ?>"/></td>
                              <td colspan="2">RANDOM(Normal up to 160mg/dl)</td>
                              <td><input type="text" style="width:150px;" name="ran" placeholder="RANDOM(Normal up to 160mg/dl)" value="<?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"ran"); ?>"/></td>
                            </tr>
                            <tr>
                              <td>S.CREATININE</td>
                              <td>0.8 to mg/dl</td>
                              <td><input type="text" style="width:150px;" name="scre" placeholder="S.CREATININE" value="<?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"scre"); ?>"/></td>
                              <td colspan="2">1hr after .50gm glucose drink</td>
                              <td><input type="text" style="width:150px;" name="oneafter" placeholder="1hr after .50gm glucose drink" value="<?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"oneafter"); ?>"/></td>
                            </tr>
                            <tr>
                              <td> BUN </td>
                              <td>6 to 22 mg/dl</td>
                              <td><input type="text" placeholder="BUN" name="bun" style="width:150px;" value="<?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"bun"); ?>"/></td>
                              <td colspan="2">2hr after .75mg glucose drink</td>
                              <td><input type="text" style="width:150px;" placeholder="2hr after .75mg glucose drink" name="twoafter" value="<?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"twoafter"); ?>"/></td>
                            </tr>
                            <tr>
                              <td>S.AMYLASE</td>
                              <td>Up to 220 U/LL</td>
                              <td><input type="text" placeholder="S.AMYLASE" name="samy" style="width:150px;" value="<?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"samy"); ?>"/></td>
                              <td colspan="3"></td>
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