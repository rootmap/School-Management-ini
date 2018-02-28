<!-- Panels Start -->
                
           	  <div class="grid_8">
                    <div class="mws-panel">
                        <div class="mws-panel-header">
                            <span>REPORT ON URINE EXAMINATION</span>
                        </div>
                        <div class="mws-panel-body no-padding" id="chackchack">
                        
                            <form id="mws-validate" name="frmMr"  class="mws-form" action="" method="post">
                            
                              <?php echo $obj->ShowMsg(); ?>
                                                       
                                    
                      <div class="mws-panel-body no-padding">
                        <?php include("table.php");?>
                        <table class="mws-table">
                            <tr style="font-weight:bolder;">
                              <td>TEST</td>
                              <td>RUSELT</td>
                              <td>TEST</td>
                              <td>RUSELT</td>
                            </tr>
                            
                            <tr>
                              <td colspan="2"><a class="btn btn-danger" style="font-weight:bolder;">PREGNANCY TEST</a></td>
                              <td colspan="2"><a class="btn btn-danger" style="font-weight:bolder;"> MICROSCOPIC</a></td>
                            </tr>
                            
                            <tr>
                              <td>Pregnancy test</td>
                              <td><input placeholder="Pregnancy test" name="ptest" type="text" style="width:250px;"/></td>
                              <td>Pus cells</td>
                              <td><input type="text" name="pus" placeholder="Pus cells" style="width:250px;"/></td>
                            </tr>
                            
                            <tr>
                              <td colspan="2" style="text-align:center; font-weight:bolder;"><a class="btn btn-danger">URINE R/M/E</a></td>
                              <td>RBC</td>
                              <td><input type="text" name="rbc" placeholder="RBC" style="width:250px;"/></td>
                            </tr>
                            
                            <tr>
                              <td colspan="2"><a class="btn btn-danger" style="font-weight:bolder;">PHYSICAL</a></td>
                              <td>Epithelial cells</td>
                              <td><input type="text" name="epcel" placeholder="Epithelial cells" style="width:250px;"/></td>
                            </tr>
                            
                            <tr>
                              <td>Colour</td>
                              <td><input type="text" name="colore" placeholder="Colour" style="width:250px;"/></td>
                              <td>Calcium oxalate</td>
                              <td><input type="text" name="calcium" placeholder="Calcium oxalate" style="width:250px;"/></td>
                            </tr>
                            
                            <tr>
                              <td>Appearance</td>
                              <td><input type="text" name="appe" placeholder="Appearance" style="width:250px;"/></td>
                              <td>Triple phosphate</td>
                              <td><input type="text" name="trip" placeholder="Triple phosphate" style="width:250px;"/></td>
                            </tr>
                            
                            
                            <tr>
                              <td>Sediment</td>
                              <td><input type="text" name="sediment" placeholder="Sediment" style="width:250px;"/></td>
                              <td>Casts</td>
                              <td><input type="text" name="casts" placeholder="Casts" style="width:250px;"/></td>
                            </tr>
                            
                            <tr>
                              <td>Sp: gravity</td>
                              <td><input type="text" name="sp" placeholder="Sp: gravity" style="width:250px;"/></td>
                              <td>Sulphonamide crystals</td>
                              <td><input type="text" name="sulp" placeholder="Sulphonamide crystals" style="width:250px;"/></td>
                            </tr>
                            
                            <tr>
                              <td colspan="2"><a class="btn btn-danger" style="font-weight:bolder;">CHEMICAL</a></td>
                              <td>Amorphousphosph</td>
                              <td><input type="text" name="amor" placeholder="Amorphousphosph" style="width:250px;"/></td>
                            </tr>
                            
                            <tr>
                              <td>Sugar</td>
                              <td><input type="text" name="sugar" placeholder="Sugar" style="width:250px;"/></td>
                              <td>Spermatoza</td>
                              <td><input type="text" name="seper" placeholder="Spermatoza" style="width:250px;"/></td>
                            </tr>
                            
                            <tr>
                              <td>Albumin</td>
                              <td><input type="text" name="albumin" placeholder="Albumin" style="width:250px;"/></td>
                              <td>Others</td>
                              <td><input type="text" name="others" placeholder="Others" style="width:250px;"/></td>
                            </tr>
                            
                            <tr>
                              <td>Reaction</td>
                              <td><input type="text" name="reaction" placeholder="Reaction" style="width:250px;"/></td>
                              <td colspan="2"></td>
                            </tr>
                            
                            <tr>
                              <td>Excess of phosphate</td>
                              <td><input type="text" name="excess" placeholder="Excess of phosphate" style="width:250px;"/></td>
                              <td colspan="2"></td>
                            
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
                    </div>
                </div>
                
                <!-- Panels End -->