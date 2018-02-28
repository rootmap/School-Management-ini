<!-- Panels Start -->            
           	  <div class="grid_8">
                    <div class="mws-panel">
                        <div class="mws-panel-header">
                            <span>Patient Blank Examination Report</span>
                        </div>
                        <div class="mws-panel-body no-padding" id="chackchack">
                        
                            <form id="mws-validate" name="frmMr"  class="mws-form" action="" method="post">
                            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
                              <?php echo $obj->ShowMsg(); ?>
                      <div class="mws-panel-body no-padding">
                        <?php //include("table.php");?>
                        <table class="mws-table" id="itemTable1">
                        	<tr>
                            <td>
                            <table class="mws-table" id="itemTable2">
                            <tr>
                              <td colspan="3" align="left"><input type="text" style="width:300px; margin-left:-15px;" placeholder="Test Head" name="head[]" id="head" /></td>
                            </tr>
                            <tr style="font-weight:bolder; text-align:center;">
                              <td>TEST</td>
                              <td>Normal Value</td>
                              <td>RUSELT</td>
                            </tr>
                            
                            <tr>
                              <td style="text-align:center; width:310px;"><input type="text" style="width:300px;" placeholder="Normal Value" name="name[]" id="name" /></td>
                              <td style="text-align:center;"><input type="text" placeholder="Normal Value" name="normal[]" id="normal" /></td>
                              <td style="text-align:center;"><input type="text" placeholder="Result Value" name="result[]" id="result" /></td>
                            </tr>
                            </table>
                            
                            </td>
                            </tr>
                            </table>
                        
                    </div>
                                   
                                <div class="mws-button-row" style="padding-left:400px;">
                                
                                	<input type="button" value="ADD MORE TEST TYPE" class="btn btn-warning" onclick="return addTableRow('#itemTable1');return false;" />
                                    <input type="button" value="ADD TEST" class="btn btn-info"  onclick="return addTableRow('#itemTable2');return false;" />    
                                    <input type="reset" value="RESET" class="btn btn-danger">
                                    <input type="submit"  id="btn1" value="SAVE" class="btn btn-success" name="blank">
                                    <input type="reset" value="CLOSE" class="btn btn-danger">
                                </div>
                        
                        </form>
                        </div>
                    </div>
                </div>
                
                <!-- Panels End -->