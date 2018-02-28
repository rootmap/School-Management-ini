<!-- Panels Start -->
                
           	  <div class="grid_8">
                    <div class="mws-panel">
                        <div class="mws-panel-header">
                            <span>REPORT ON SEMEN ANALYSIS EXIMINATION </span>
                        </div>
                        <div class="mws-panel-body no-padding" id="chackchack">
                        
                            <form id="mws-validate" name="frmMr"  class="mws-form" action="" method="post">
                            
                              <?php echo $obj->ShowMsg(); ?>
                                                       
                                    
                      <div class="mws-panel-body no-padding">
                        <?php include("table.php");?>
                        <table class="mws-table">
                            <tr style="font-weight:bolder; text-align:center;">
                              <td>TEST</td>
                              <td>RUSELT</td>
                            </tr>
                            
                            <tr>
                              <td>METHOD OF COLLECTION :</td>
                              <td style="text-align:center;"><input type="text"  style="width:300px;" placeholder="METHOD OF COLLECTION" name="method" id="method" /></td>
                            </tr>
                            
                            <tr>
                              <td>TIME COLLECTION :</td>
                              <td style="text-align:center;"><input type="text"  style="width:300px;" placeholder="TIME COLLECTION" name="timeco" id="timeco" /></td>
                            </tr>
                            <tr>
                              <td>TIME OF EXAMINATION :</td>
                              <td style="text-align:center;"><input type="text"  style="width:300px;" placeholder="TIME OF EXAMINATION" name="timee" id="timee" /></td>
                            </tr>
                            <tr>
                              <td>VOLUME :</td>
                              <td style="text-align:center;"><input type="text"  style="width:300px;" placeholder="VOLUME" name="volume" id="volume" /></td>
                            </tr>
                            <tr>
                              <td>COLOUR :</td>
                              <td style="text-align:center;"><input type="text"  style="width:300px;" placeholder="COLOUR" name="colour" id="colour" /></td>
                            </tr>
                            <tr>
                              <td>ODOUR :</td>
                              <td style="text-align:center;"><input type="text"  style="width:300px;" placeholder="ODOUR" name="odour" id="odour" /></td>
                            </tr>
                            <tr>
                              <td>VISCOSITY :</td>
                              <td style="text-align:center;"><input type="text"  style="width:300px;" placeholder="VISCOSITY" name="visc" id="visc" /></td>
                            </tr>
                            <tr>
                              <td>REACTION :</td>
                              <td style="text-align:center;"><input type="text"  style="width:300px;" placeholder="REACTION" name="reaction" id="reaction" /></td>
                            </tr>
                            <tr>
                              <td>SPERMATOZA COUNT :</td>
                              <td style="text-align:center;"><input type="text"  style="width:300px;" placeholder="SPERMATOZA COUNT" name="count" id="count" /></td>
                            </tr>
                            <tr>
                              <td>ACTIVE MOTILE :</td>
                              <td style="text-align:center;"><input type="text"  style="width:300px;" placeholder="ACTIVE MOTILE" name="motile" id="motile" /></td>
                            </tr>
                            <tr>
                              <td>S.ACTIVE MOTILE :</td>
                              <td style="text-align:center;"><input type="text"  style="width:300px;" placeholder="S.ACTIVE MOTILE" name="sactive" id="sactive" /></td>
                            </tr>
                            <tr>
                              <td>DEAD :</td>
                              <td style="text-align:center;"><input type="text"  style="width:300px;" placeholder="DEAD" name="dead" id="dead" /></td>
                            </tr>
                            <tr>
                              <td>ABNORMALS :</td>
                              <td style="text-align:center;"><input type="text"  style="width:300px;" placeholder="ABNORMALS" name="abno" id="abno" /></td>
                            </tr>
                            <tr>
                              <td>PUS CELLS :</td>
                              <td style="text-align:center;"><input type="text"  style="width:300px;" placeholder="PUS CELLS" name="cells" id="cells" /></td>
                            </tr>
                            <tr>
                              <td>EPI CELL :</td>
                              <td style="text-align:center;"><input type="text"  style="width:300px;" placeholder="EPI CELL" name="cell" id="cell" /></td>
                            </tr>
                            <tr>
                              <td>OPINION :</td>
                              <td style="text-align:center;"><input type="text"  style="width:300px;" placeholder="OPINION" name="option" id="option" /></td>
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