<!-- Panels Start -->
                
           	  <div class="grid_8">
                    <div class="mws-panel">
                        <div class="mws-panel-header">
                            <span>Report On Serological RepExamination</span>
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
                </div>
                
                <!-- Panels End -->