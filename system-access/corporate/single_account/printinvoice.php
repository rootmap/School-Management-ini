<?php
include('class_file/auth.php');
extract($_GET);
?>
<body>
    <!-- Themer End -->
        
        	<!-- Inner Container Start -->
            <div class="container"  id="mydiv">
            
            	<!-- Statistics Button Container -->
               <!-- <hr style="margin-top:-20px;">-->
                
                <!-- Panels Start -->
                                	
                               
                                
           	  	<div class="grid_8">
                    
                    <div class="mws-panel">
                        <div class="mws-panel-body no-padding">
                            <form class="mws-form" action="#" method="post" name="form">
                                <div class="mws-form-inline">
                                <div class="mws-form-row">
                                    <h3>
                                        <i style="margin-top:-15px;" class="icon-pushpin"></i> 
                                        	Invoice 
                                        <?php 
										echo $id;
										//$sql_in=mysql_query("SELECT * FROM invoice WHERE id='$id'");
										//$fetsqlin=mysql_fetch_array($sql_in);
										
										?>
                                    </h3><hr>
                                    </div>
                                                                    
                                    <div class="mws-form-row" style="margin-top:-40px;">
                                    	<div class="mws-form-cols">
                                      	<div class="mws-form-col-2-8">
                                        		<label class="mws-form-label" style="text-align:center; font-weight:bolder; font-size:19px;">Customer : <?php 
												$cid=$obj->SelectAllByVal("account_module_invoice","id",$id,"customer_id");
												$currency=$obj->SelectAllByVal("account_module_invoice","id",$id,"currency");
												//$sql_cus=mysql_query("SELECT * FROM customer WHERE id='$cid'");
												//$fetsqlus=mysql_fetch_array($sql_cus);
												//echo $fetsqlus['company_name'];
												echo $obj->SelectAllByVal("account_module_customer","id",$cid,"company_name");
												 ?></label>
                                    	</div> 
                                      	<div class="mws-form-col-2-8">
                                        		<label class="mws-form-label"  style="text-align:center; font-weight:bolder; font-size:19px;">Currency : <?php 
												$sql_currency=mysql_query("SELECT * FROM currency WHERE id='$currency'");
												$fetcurrency=mysql_fetch_array($sql_currency);
												
												echo $obj->SelectAllByVal("account_module_currency","id",$currency,"title");
												
												//echo $fetcurrency['title'];
												echo "(".$obj->SelectAllByVal("account_module_currency","id",$currency,"detail").")";
												?></label>
                                            
                                            
                                    	</div>
                                        <div class="mws-form-col-2-8">
                                        		<label class="mws-form-label"  style="text-align:center; font-weight:bolder; font-size:19px;">Date : <?php echo $obj->SelectAllByVal("account_module_invoice","id",$id,"date"); ?></label>
                                          
                                    	</div>
                                        <div class="mws-form-col-2-8">
                                        		<label class="mws-form-label"  style="text-align:center; font-weight:bolder; font-size:19px;">Due Date : <?php echo $obj->SelectAllByVal("account_module_invoice","id",$id,"duedate"); ?></label>
                                           
                                    	</div>
                                        </div>                                          
                                    </div>
                                    <div class="mws-form-row" style="margin-top:-10px;">
                                    	<div class="mws-form-cols">
                                      	<div class="mws-form-col-2-8">
                                        		<label class="mws-form-label" style="text-align:center; font-weight:bolder; font-size:19px;">Subheading <?php echo $obj->SelectAllByVal("account_module_invoice","id",$id,"subheading");  ?>
</label>
                                    	</div> 
                                      	<div class="mws-form-col-2-8">
                                        		<label class="mws-form-label"  style="text-align:center; font-weight:bolder; font-size:19px;">Footer : <?php echo $obj->SelectAllByVal("account_module_invoice","id",$id,"footer"); ?></label>
                                           
                                    	</div>
                                        <div class="mws-form-col-2-8">
                                        		<label class="mws-form-label"  style="text-align:center; font-weight:bolder; font-size:19px;">P.O / S.O : <?php echo $obj->SelectAllByVal("account_module_invoice","id",$id,"poso");  ?></label>
                                           
                                    	</div>
                                        <div class="mws-form-col-2-8">
                                        		<label class="mws-form-label"  style="text-align:center; font-weight:bolder; font-size:19px;">
                                                	Notes : <?php echo $obj->SelectAllByVal("account_module_invoice","id",$id,"notes");  ?>
                                                </label>
                                            
                                    	</div>
                                        </div> 
                                        <hr>
                        
                        <table class="mws-table">
                            <thead>
                                <tr>
                                    <th align="center">Item</th>
                                    <th align="center">Detail</th>
                                    <th align="center">Quantity</th>
                                    <th align="center">Price</th>
                                    <th align="center">Tax</th>
                                    <th align="center">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
							$inrow=$obj->exists_multiple("account_module_invoice_detail",array("invoice_id"=>$id));
							$sql_led=$obj->SelectAllByID("account_module_invoice_detail",array("invoice_id"=>$id));
							foreach($sql_led as $fetled){ ?>
                                 <tr>
                                   <td align="center" valign="middle" style="width:160px; font-size:18px;">
                                    <?php $pid=$fetled->pid;
									
									//$sql_pid=mysql_query("SELECT * FROM product WHERE =''");
									//$fetpid=mysql_fetch_array($sql_pid);
									
									//echo $fetpid['pname'];
									echo $obj->SelectAllByVal("account_module_product","id",$pid,"pname");
									?>
                              		</td>
                                    <td valign="middle" align="center" style="width:140px; font-size:18px;">
                                    <?php echo $obj->SelectAllByVal("account_module_product","id",$pid,"description"); ?>
                                    </td>
                                    <td valign="middle" align="center" style="width:60px; font-size:18px;">
                                    <?php echo $fetled->quantity; ?>
                                    </td>
                                   	<td valign="middle" align="center" style="width:110px; font-size:18px;" id="priceff">
       								<?php echo $fetled->price; ?>
       								</td> 
                                    <td valign="middle" align="center" style="width:150px; font-size:18px;">
                                    <?php 
									
									$totalprice=$fetled->quantity*$fetled->price;
									
									
									$tax=$fetled->tax_id;
									$querytaxrate=mysql_query("SELECT * FROM newtax WHERE id='$tax'");
									$fetrate=mysql_fetch_array($querytaxrate);
									
									$rate=$obj->SelectAllByVal("account_module_newtax","id",$tax,"rate");
									$name=$obj->SelectAllByVal("account_module_newtax","id",$tax,"name");
									$vat=$totalprice*$rate/100;
									echo $name."(".$rate."%)".$vat;
									?>
                                    </td>
                                    <td style="width:100px; text-align:right; font-weight:bold; font-size:18px;" align="right"><?php echo $fetled->price*$fetled->quantity; ?></td>
                                </tr>
                                <?php } ?>
                                 
                                 <?php
                                 $sql_leds=$obj->SelectAllByID("account_module_invoice_detail",array("invoice_id"=>$id));
								 $qp=0;
								 $p=0;
								 $q=0;
								 $tax=0;
									foreach($sql_leds as $fetled)
									{
										$qp+=$fetled->quantity*$fetled->price;
										$p+=$fetled->price;
										$q+=$fetled->quantity;
										$taxid=$fetled->tax_id;
										//$sql_vat=mysql_query("SELECT * FROM newtax WHERE id='$taxid'");
										//$fetvat=mysql_fetch_array($sql_vat);
										$frate=$obj->SelectAllByVal("account_module_newtax","id",$taxid,"rate");
										$tax+=(($fetled->quantity*$fetled->price)*$frate)/100;
									}
										
										?>
                                   
                                <tr>
                                   <td align="center" valign="middle"></td>
                                   <td valign="middle" align="center">&nbsp;</td>
                                   <td valign="middle" align="center"></td>
                                   <td valign="middle" align="center">&nbsp;</td>
                                   <td style="font-size:18px;" colspan="2" align="right" valign="middle">Sub Total : <?php echo $qp; ?></td>
                              </tr>
                              <tr>
                                   <td align="center" valign="middle"></td>
                                   <td valign="middle" align="center">&nbsp;</td>
                                   <td valign="middle" align="center"></td>
                                   <td valign="middle" align="center">&nbsp;</td>
                                   <td style="font-size:18px;" colspan="2" align="right" valign="middle">Tax : <?php echo $tax; ?></td>
                              </tr>
                                <tr>
                                   <td align="center" valign="middle">
                                    
                           		  </td>
                                    <td valign="middle" align="center">&nbsp;</td>
                                    <td valign="middle" align="center">
                                    </td>
                                   	<td valign="middle" align="center">&nbsp;</td> 
                                    <td align="right" colspan="2" style="font-size:18px;">Total : <?php echo $qp+$tax;  echo "TK."; ?></td>
                                </tr>
                                
                                 <tr>
                                   <td align="center" valign="middle">
                                    
                           		  </td>
                                    <td valign="middle" align="center">&nbsp;</td>
                                    <td valign="middle" align="center">
                                    </td>
                                   	<td valign="middle" align="center">&nbsp;</td> 
                                    <td align="right" colspan="2" style="font-size:18px;"></td>
                                </tr>
 								<tr>
                                   <td align="center" valign="middle" colspan="6">
									<?php
									 include('header_footer_file/footer_forPrint.php');
									?>
                           		  </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                            </form>
                        </div>
                    </div>
                    </div>
                    </div>
                    <input type="button" value="Print Div" onClick="PrintElem('#mydiv')" />
                    </body>
                    </html>
      