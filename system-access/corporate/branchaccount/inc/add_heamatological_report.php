<!-- Panels Start -->
                
           	  <div class="grid_8">
                    <div class="mws-panel">
                        <div class="mws-panel-header">
                            <span>Add Heamatological Report</span>
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
                              <td>ESR</td>
                              <td>M 0-10mm F 1-15mm</td>
                              <td><input type="text" value="mm fall end of 1st hour" style="width:150px;" placeholder=" mm fall end of 1st hour" name="esc" id="age" /></td>
                              <td colspan="3"> <a class="btn btn-danger"> DEFFERENTIAL COUNTS (WBC)</a></td>
                            </tr>
                            
                            <tr>
                              <td>HEAMOGLOBIN</td>
                              <td>M 12-16gm/dl F 10-12gm/dl</td>
                              <td><input type="text"  style="width:100px;" value="gm/dl %" placeholder="gm/dl %"  name="hemo" id="hemo" /></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            
                            <tr>
                             <td colspan="3"><a class="btn btn-danger"> TOTAL COUNTS</a></td>
                             <td>Polymorphs</td>
                              <td>40-75%</td>
                              <td><input type="text"  style="width:100px;" value="%" name="poly" id="poly" /></td>
                            </tr>
                            
                            <tr>
                             <td>RBC</td>
                             <td>4.5-6.5*10 <sup>12</sup> L</td>
                             <td><input type="text"  style="width:100px;" value="/cmm" name="rbc" id="rbc" /></td>
                             <td>Lymphocyte</td>
                              <td>20-50%</td>
                              <td><input type="text"  style="width:100px;" value="%" name="lym" id="lym" /></td>
                            </tr>
                            
                            <tr>
                             <td>WBC</td>
                             <td>4.11-*10<sup>9</sup>  L</td>
                             <td><input type="text"  style="width:100px;"  value="/cmm" name="wbc" id="wbc" /></td>
                             <td>Monocyte</td>
                              <td>2-10%</td>
                              <td><input type="text"  style="width:100px;" value="%" name="mono" id="mono" /></td>
                            </tr>
                            
                            <tr>
                             <td>PLATELETS COUNT</td>
                             <td>4150,000-400,000/cumm</td>
                             <td><input type="text"  style="width:100px;"  value="/cmm" name="pleat" id="pleat" /></td>
                             <td>Eosinophil</td>
                              <td>1-8%</td>
                              <td><input type="text"  style="width:100px;" value="%" name="eosi" id="eosi" /></td>
                            </tr>
                            
                            <tr>
                             <td>CIRCULATING EOSINOPHIL</td>
                             <td>400cmm</td>
                             <td><input type="text"  style="width:100px;"  value="/cmm" name="circu" id="circu" /></td>
                             <td>Basophil</td>
                              <td>0-1%</td>
                              <td><input type="text"  style="width:100px;" value="%" name="baso" id="baso" /></td>
                            </tr>
                            
                            <tr>
                             <td colspan="2">RETICULOCYTESL</td>
                             <td><input type="text"  style="width:100px;"  value="/cmm" name="reticu" id="reticu" /></td>
                             <td colspan="2">Others</td>
                              <td><input type="text"  style="width:100px;" value="%" name="other" id="other" /></td>
                            </tr>
                            
                            <tr>
                             <td colspan="3"></td>
                             
                             <td>Bleeding Time</td>
                             <td>2-6 min</td>
                              <td><input type="text"  style="width:100px;" value="   min   sec" name="btime" id="btime" /></td>
                            </tr>
                            
                            <tr>
                             <td colspan="3"></td>
                             
                             <td>Cloting Time</td>
                             <td>2-11 min</td>
                              <td><input type="text"  style="width:100px;" value="   min   sec" name="ctime" id="ctime" /></td>
                            </tr>
                            
                            <tr>
                             <td colspan="3"></td>
                            
                             <td colspan="2">Phothomdin Time</td>
                              <td><input type="text"  style="width:100px;" value="   min   sec" name="ptime" id="ptime" /></td>
                            </tr>
                            
                            <tr>
                             <td>MALARIAL PARASITE (MP)</td>
                              <td colspan="5"><input type="text"  style="width:700px;" placeholder="MALARIAL PARASITE (MP)" name="malay" id="malay" /></td>
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