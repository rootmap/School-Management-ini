<!-- Panels Start -->
                
           	  <div class="grid_8">
                    <div class="mws-panel">
                        <div class="mws-panel-header">
                            <span>BIOCHEMISTRY REPORT </span>
                        </div>
                        <div class="mws-panel-body no-padding" id="chackchack">
                        
                            <form id="mws-validate" name="frmMr"  class="mws-form" action="" method="post">
                            
                              <?php echo $obj->ShowMsg(); ?>
                                                       
                                    
                      <div class="mws-panel-body no-padding">
                        <?php include("table.php");?>
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
                              <td><input type="text" placeholder="Injection Give :at:" name="injection" id="injection" /></td>
                              <td>Am/Pm/On</td>
                              <td><input type="text" placeholder="Am/Pm/On" name="am" id="am" /></td>
                            </tr>
                            
                            <tr>
                              <td>Result Taken :At :</td>
                              <td><input type="text" placeholder="Result Taken :At :" name="resutl" id="resutl" /></td>
                              <td>Am/Pm/On</td>
                              <td><input type="text" placeholder="Am/Pm/On" name="pm" id="pm" /></td>
                            </tr>
                            
                            <tr>
                              <td>Result : At :</td>
                              <td><input type="text" placeholder="Result : At :" name="resultat" id="resultat" /></td>
                              <td>Home The Injection Is </td>
                              <td><input type="text" placeholder="Home The Injection Is" name="injectionis" id="injectionis" /> mm Diameter</td>
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
                    </div>
                </div>
                
                <!-- Panels End -->