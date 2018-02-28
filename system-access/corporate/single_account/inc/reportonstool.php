<!-- Panels Start -->
                
           	  <div class="grid_8">
                    <div class="mws-panel">
                        <div class="mws-panel-header">
                            <span>REPORT ON STOOL EXAMINATION</span>
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
                              <td colspan="4" style="text-align:center;"><a class="btn btn-danger" style="padding-left:200px; font-weight:bolder; padding-right:200px;"> STOOL R/M/E </a></td>
                            </tr>
                            
                            <tr style="text-align:center;">
                              <td colspan="2"><a class="btn btn-danger" style="padding-left:100px; font-weight:bolder; padding-right:100px;">Physical and chemical :</a></td>
                              <td colspan="2"><a class="btn btn-danger" style="padding-left:100px; font-weight:bolder; padding-right:100px;"> Microscopic : </a></td>
                            </tr>
                            
                            <tr>
                              <td>Consistency :</td>
                              <td><input type="text"  style="width:200px;" placeholder="Consistency"  name="consistency" id="consistency" /></td>
                              <td>Ova of :</td>
                              <td><input type="text"  style="width:200px;" placeholder="Ova of" name="ova" id="ova" /></td>
                            </tr>
                            
                            <tr>
                              <td>Colour :</td>
                              <td><input type="text"  style="width:200px;" placeholder="Colour"  name="colour" id="colour" /></td>
                              <td>Cysts of :</td>
                              <td><input type="text"  style="width:200px;" placeholder="Cysts of "  name="cysts" id="cysts" /></td>
                            </tr>
                            
                            <tr>
                              <td>Reaction :</td>
                              <td><input type="text"  style="width:200px;" placeholder="Reaction" name="reaction" id="reaction" /></td>
                              <td>Larva of :</td>
                              <td><input type="text"  style="width:200px;" placeholder="Larva of"  name="larva" id="larva" /></td>
                            </tr>
                            
                            <tr>
                              <td>Mucus :</td>
                              <td><input type="text"  style="width:200px;" placeholder="Mucus"  name="mucus" id="mucus" /></td>
                              <td>RBC :</td>
                              <td><input type="text"  style="width:200px;" placeholder="RBC"  name="rbc" id="rbc" /></td>
                            </tr>
                            
                            <tr>
                              <td>Blood :</td>
                              <td><input type="text"  style="width:200px;" placeholder="Blood"  name="blood" id="blood" /></td>
                              <td>Pus cell :</td>
                              <td><input type="text"  style="width:200px;" placeholder="Pus cell"  name="pus" id="pus" /></td>
                            </tr>
                            
                            <tr>
                              <td>Occult blood :</td>
                              <td><input type="text"  style="width:200px;" placeholder="Occult blood"  name="occult" id="occult" /></td>
                              <td>Vegetable cell :</td>
                              <td><input type="text"  style="width:200px;" placeholder="Vegetable cell "  name="vegetable" id="vegetable" /></td>
                            </tr>
                            
                            <tr>
                              <td>Reducing :</td>
                              <td><input type="text"  style="width:200px;" placeholder="Reducing"  name="reducing" id="reducing" /></td>
                              <td>Fat Globules :</td>
                              <td><input type="text"  style="width:200px;" placeholder="Fat Globules"  name="fat" id="fat" /></td>
                            </tr>
                            
                            <tr>
                              <td>Substance :</td>
                              <td><input type="text"  style="width:200px;" placeholder="Substance"  name="substance" id="substance" /></td>
                              <td>Others :</td>
                              <td><input type="text"  style="width:200px;" placeholder="Others"  name="others" id="others" /></td>
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