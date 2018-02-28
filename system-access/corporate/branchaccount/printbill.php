<?php
include('class_file/auth.php');
extract($_GET);
?>
<body  id="mydiv">
    <!-- Themer End -->
        
        	<!-- Inner Container Start -->
            <div class="container">
            
            	<!-- Statistics Button Container -->
               <!-- <hr style="margin-top:-20px;">-->
                
                <!-- Panels Start -->
                                	
                               
                                
           	  	<div class="grid_8">
                    
                    <div class="mws-panel">
                        <div class="mws-panel-body no-padding">
                            <form class="mws-form" action="#" method="post" name="form">
                                <div class="mws-form-inline">
                                <div class="mws-form-row">
                                    <h3 style="width:100%; border-bottom:2px; border-bottom-color:#000; border-bottom-style:dotted;">
                                        <i style="margin-top:-15px;" class="icon-pushpin"></i> Voucher <?php 
										echo $id;
										//$sql_in=$obj->SelectAllByVal("account_module_bill","id",$id,"");
										//$fetsqlin=mysql_fetch_array($sql_in);
										?>
                                    </h3>
                                    
                                    </div>
                                  <br>
                                  <br>                                  
                                    <div class="mws-form-row" style="margin-top:-40px;">
                                    	<div class="mws-form-cols">
                                      	<div class="mws-form-col-2-8">
                                        		<label class="mws-form-label" style="text-align:center; font-weight:bolder; font-size:19px;">Vendor : <?php 
												$cid=$obj->SelectAllByVal("account_module_bill","id",$id,"vendor_id");
										$currency=$obj->SelectAllByVal("account_module_bill","id",$id,"currency");
												
												//$sql_cus=mysql_query("SELECT * FROM vendor WHERE id='$cid'");
												//$fetsqlus=mysql_fetch_array($sql_cus);
												//echo $fetsqlus['company_name'];
												echo $obj->SelectAllByVal("account_module_vendor","id",$cid,"company_name");
												 ?></label>
                                                         
                                    	</div> 
                                      	<div class="mws-form-col-2-8">
                                        		<label class="mws-form-label"  style="text-align:center; font-weight:bolder; font-size:19px;">Currency : <?php 
												$sql_currency=mysql_query("SELECT * FROM currency WHERE id='$currency'");
												$fetcurrency=mysql_fetch_array($sql_currency);
												
												
												echo $obj->SelectAllByVal("account_module_currency","id",$currency,"title");
												echo "(".$obj->SelectAllByVal("account_module_currency","id",$currency,"detail").")";
												?></label>
                                            
                                    	</div>
                                        <div class="mws-form-col-2-8">
                                        		<label class="mws-form-label"  style="text-align:center; font-weight:bolder; font-size:19px;">Date : <?php echo $obj->SelectAllByVal("account_module_bill","id",$id,"date"); ?></label>
                                           
                                    	</div>
                                        <div class="mws-form-col-2-8">
                                        		<label class="mws-form-label"  style="text-align:center; font-weight:bolder; font-size:19px;">Due Date : <?php echo $obj->SelectAllByVal("account_module_bill","id",$id,"duedate"); ?></label>
                                           
                                    	</div>
                                        </div>                                          
                                    </div>
                                    <div class="mws-form-row" style="margin-top:-10px;">
                                    	<div class="mws-form-cols">
                                      	<div class="mws-form-col-2-8">
                                        		<label class="mws-form-label" style="text-align:center; font-weight:bolder; font-size:19px;">Subheading : <?php echo $obj->SelectAllByVal("account_module_bill","id",$id,"subheading"); ?>
</label>
                                            
                                    	</div> 
                                      	<div class="mws-form-col-2-8">
                                        		<label class="mws-form-label"  style="text-align:center; font-weight:bolder; font-size:19px;">Footer : <?php echo $obj->SelectAllByVal("account_module_bill","id",$id,"footer"); ?></label>
                                           
                                    	</div>
                                        <div class="mws-form-col-2-8">
                                        		<label class="mws-form-label"  style="text-align:center; font-weight:bolder; font-size:19px;">P.O / S.O : <?php echo $obj->SelectAllByVal("account_module_bill","id",$id,"poso"); ?></label>
                                          
                                    	</div>
                                        <div class="mws-form-col-2-8">
                                        		<label class="mws-form-label"  style="text-align:center; font-weight:bolder; font-size:19px;">
                                                	Notes : <?php echo $obj->SelectAllByVal("account_module_bill","id",$id,"notes"); ?>
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
							$inrow=$obj->exists_multiple("account_module_bill_detail",array("bill_id"=>$id));
							$sql_led=$obj->SelectAllByID("account_module_bill_detail",array("bill_id"=>$id));
							foreach($sql_led as $fetled){ ?>
                                 <tr>
                                   <td align="center" valign="middle" style="width:160px; font-size:18px;">
                                    <?php $pid=$fetled->pid;
									
									//$sql_pid=mysql_query("SELECT * FROM buy_product WHERE id='$pid'");
									//$fetpid=mysql_fetch_array($sql_pid);
									//echo $fetpid['pname'];
									echo $obj->SelectAllByVal("account_module_buy_product","id",$pid,"pname");
									?>
                              		</td>
                                    <td valign="middle" align="center" style="width:140px; font-size:18px;">
                                    <?php echo $obj->SelectAllByVal("account_module_buy_product","id",$pid,"description"); ?>
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
									//$querytaxrate=mysql_query("SELECT * FROM newtax WHERE id='$tax'");
									//$fetrate=mysql_fetch_array($querytaxrate);
									$rate=$obj->SelectAllByVal("account_module_newtax","id",$tax,"rate");
									$name=$obj->SelectAllByVal("account_module_newtax","id",$tax,"name");
									$vat=$totalprice*$rate/100;
									echo $name."(".$rate."%)".$vat;
									?>
                                    </td>
                                    <td style="width:100px; text-align:right; font-weight:bold; font-size:18px;" align="right"><?php echo ($fetled->price*$fetled->quantity)+$vat; ?></td>
                                </tr>
                                <?php } ?>
                                 <tr style="border:1px solid #000;">
                                 <?php
                                 $sql_leds=$obj->SelectAllByID("account_module_bill_detail",array("bill_id"=>$id));
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
										$trate=$obj->SelectAllByVal("account_module_newtax","id",$taxid,"rate");
										$tax+=(($fetled->quantity*$fetled->price)*$trate)/100;
									}
										
										?>
                                   <td align="center" valign="middle">
                                    
                              		</td>
                                    <td valign="middle" align="center"><span style="font-size:18px;">Item : <?php echo $q; ?></span>
                                    </td>
                                    <td colspan="2" align="center" valign="middle" style="font-size:18px;">
       								Price <?php echo $p; ?> TK.       								</td>
                                   	<td valign="middle" align="center" style="font-size:18px;">
									Tax <?php echo $tax; ?> TK.
                                    </td>
                                    <td align="right" style="font-size:18px;"><?php echo $qp; echo "TK"; ?></td>
                                </tr>
                                <tr>
                                   <td align="center" valign="middle"></td>
                                   <td valign="middle" align="center">&nbsp;</td>
                                   <td valign="middle" align="center"></td>
                                   <td valign="middle" align="center">&nbsp;</td>
                                   <td style="font-size:18px;" colspan="2" align="right" valign="middle">Sub Total : <?php echo $qp."TK + ".$tax; echo "TK."; ?></td>
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
                    <button type="button" onClick="PrintElem('#mydiv')"><i class="icon-print"></i> </button>
                    </body>
                    </html>
      