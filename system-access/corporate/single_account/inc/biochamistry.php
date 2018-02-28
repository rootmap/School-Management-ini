<!-- Panels Start -->
                
           	  <div class="grid_8">
                    <div class="mws-panel">
                        <div class="mws-panel-header">
                            <span>BIOCHAMISTRY REPORT </span>
                        </div>
                        <div class="mws-panel-body no-padding" id="chackchack">
                        
                            <form id="mws-validate" name="frmMr"  class="mws-form" action="" method="post">
                            
                              <?php echo $obj->ShowMsg(); ?>
                                                       
                                    
                      <div class="mws-panel-body no-padding">
                        <?php include("table.php");?>
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
                              <td><input type="text" name="bil" placeholder="S.BILIRUBIN" style="width:150px;"/></td>
                              <td>S. LDH</td>
                              <td>230 TO 460 U/L</td>
                              <td><input type="text" style="width:150px;" name="sldh" placeholder="S. LDH"/></td>
                            </tr>
                            
                            <tr>
                              <td>SGOT(AST)</td>
                              <td>up to 45 U/L</td>
                              <td><input type="text" style="width:150px;" name="sgt" placeholder="SGOT(AST)"/></td>
                              <td>CREATI PHOSPHOKINASE(CPK)</td>
                              <td>24 tO 195 U/L</td>
                              <td><input type="text" style="width:150px;" name="cret" placeholder="CREATI PHOSPHOKINASE(CPK)"/></td>
                            </tr>
                            <tr>
                              <td>GPT(ALT)</td>
                              <td>Up to 40 U/L</td>
                              <td><input type="text" style="width:150px;" name="gpt" placeholder="GPT(ALT)"/></td>
                              <td>CPK.MB</td>
                              <td>Up to 11.7 U/L</td>
                              <td><input type="text" style="width:150px;" name="cpk" placeholder="CPK.MB"/></td>
                            </tr>
                            <tr>
                              <td> S.ALKALINE PHOS </td>
                              <td>3 to 13 KAU/L</td>
                              <td><input type="text" style="width:150px;" name="salk" placeholder="S.ALKALINE PHOS"/></td>
                              <td>URINE AMYLASE</td>
                              <td>Up tO 220 U/L</td>
                              <td><input type="text" style="width:150px;" name="urinamy" placeholder="URINE AMYLASE"/></td>
                            </tr>
                            <tr>
                              <td>S.ACID PHOS</td>
                              <td>Up to 4.2 U/L</td>
                              <td><input type="text" style="width:150px;" name="sacid" placeholder="S.ACID PHOS"/></td>
                              <td>S.URIC ACID</td>
                              <td>2.4 tO 7MG/DL</td>
                              <td><input type="text" style="width:150px;" name="uric" placeholder="S.URIC ACID"/></td>
                            </tr>
                            <tr>
                              <td>S.CHOLESTEROL</td>
                              <td>130 to 200mg/dl</td>
                              <td><input type="text" style="width:150px;" name="scho" placeholder="S.CHOLESTEROL"/></td>
                              <td>S.CALCIUM </td>
                              <td>8.4 tO 10.7 MG/DL</td>
                              <td><input type="text" style="width:150px;" name="scla" placeholder="S.CALCIUM"/></td>
                            </tr>
                            <tr>
                              <td>S.HDL CHOLESTEROL </td>
                              <td>Up to 55 mg/dl</td>
                              <td><input type="text" style="width:150px;" name="shdl" placeholder="S.HDL CHOLESTEROL"/></td>
                              <td>S.PROTEIN</td>
                              <td>6.6 TO 8.7 G/DL</td>
                              <td><input type="text" style="width:150px;" name="spro" placeholder="S.PROTEIN"/></td>
                            </tr>
                            <tr>
                              <td>S.LDL CHOLESTEROL </td>
                              <td>10 to 150 mg/dl</td>
                              <td><input type="text" style="width:150px;" name="sldl" placeholder="S.LDL CHOLESTEROL"/></td>
                              <td>BLOOD GLUCOSE/SUGAR</td>
                              <td>CORR:URINE SUGAR</td>
                              <td><input type="text" style="width:150px;" name="corurin" placeholder="BLOOD GLUCOSE/SUGAR"/></td>
                            </tr>
                            <tr>
                              <td>TRIDLY CERIDES </td>
                              <td>Up to 200 mg/dl</td>
                              <td><input type="text" style="width:150px;" name="trid" placeholder="TRIDLY CERIDES"/></td>
                              <td colspan="2">FASTING(Normal -76 to 116mg/dl)</td>
                              <td><input type="text" style="width:150px;" name="fast" placeholder="FASTING(Normal -76 to 116mg/dl)"/></td>
                            </tr>
                            <tr>
                              <td>S.UREN </td>
                              <td>20 to 50 mg/dl</td>
                              <td><input type="text" style="width:150px;" name="urin" placeholder="S.UREN"/></td>
                              <td colspan="2">RANDOM(Normal up to 160mg/dl)</td>
                              <td><input type="text" style="width:150px;" name="ran" placeholder="RANDOM(Normal up to 160mg/dl)"/></td>
                            </tr>
                            <tr>
                              <td>S.CREATININE</td>
                              <td>0.8 to mg/dl</td>
                              <td><input type="text" style="width:150px;" name="scre" placeholder="S.CREATININE"/></td>
                              <td colspan="2">1hr after .50gm glucose drink</td>
                              <td><input type="text" style="width:150px;" name="oneafter" placeholder="1hr after .50gm glucose drink"/></td>
                            </tr>
                            <tr>
                              <td> BUN </td>
                              <td>6 to 22 mg/dl</td>
                              <td><input type="text" placeholder="BUN" name="bun" style="width:150px;"/></td>
                              <td colspan="2">2hr after .75mg glucose drink</td>
                              <td><input type="text" style="width:150px;" placeholder="2hr after .75mg glucose drink" name="twoafter"/></td>
                            </tr>
                            <tr>
                              <td>S.AMYLASE</td>
                              <td>Up to 220 U/LL</td>
                              <td><input type="text" placeholder="S.AMYLASE" name="samy" style="width:150px;"/></td>
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
                </div>
                
                <!-- Panels End -->