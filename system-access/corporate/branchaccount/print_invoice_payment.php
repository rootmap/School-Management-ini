<?php
include('class_file/auth.php');
extract($_GET);
?>
<body>
    <!-- Themer End -->
        
        	<!-- Inner Container Start -->
            <div class="container">
            	
            	<!-- Statistics Button Container -->
               <!-- <hr style="margin-top:-20px;">-->
                
                <!-- Panels Start -->
                                	
                               
                                
           	  	<div class="grid_8">
                    
                    <div class="mws-panel">
                    <button type="button" onClick="PrintElem('#mydiv')"><i class="icon-print"></i> </button>
                        <div class="mws-panel-body no-padding"  id="mydiv">
                            <form class="mws-form" action="#" method="post" name="form">
                                <div class="mws-form-inline">
                                <div class="mws-form-row">
                                    <h3 style="width:100%; border-bottom:2px; border-bottom-color:#000; border-bottom-style:dotted;">
                                        <i style="margin-top:-15px;" class="icon-pushpin"></i> Transaction Id <?php 
										echo $id;
										//$sql_in=$obj->SelectAll("account_module_invoice_payment WHERE id='$id'");
										//$fetsqlin=mysql_fetch_array($sql_in);
										$date=$obj->SelectAllByVal("account_module_invoice_payment","id",$id,"date");
										
										?>
                                    </h3>
                                    
                                    </div>
                                  <br>
                                  <br>                                  
                        <table class="mws-table">
                            <thead>
                                <tr>
                                    <th align="left">Invoice Number : </th>
                                    <th align="left"><?php 
										echo $cid=$obj->SelectAllByVal("account_module_invoice_payment","id",$id,"invoice_id");
										//$sql_cus=mysql_query("SELECT * FROM invoice WHERE id='$cid'"); 
										//$fetsqlus=mysql_fetch_array($sql_cus); 
									?></th>
                                    <th align="left">Payment Date : </th>
                                    <th align="left"><?php echo $date; ?></th>
                                </tr>
								<?php
								$sql_sum=$obj->SelectAllByID("account_module_invoice_detail",array("id"=>$cid));
								$tam=0;
								foreach($sql_sum as $tram)
								{
									$tam+=$tram->totalamount;
								}
								?>
                                 <tr>
                                    <th align="left">Payment Account : </th>
                                    <th align="left"><?php echo $obj->SelectAllByVal("account_module_invoice_payment","id",$id,"pa"); ?></th>
                                    <th align="left">Payment : </th>
                                    <th align="left"><?php echo $tam; ?></th>
                                </tr>                                 
                                <tr>
                                    <th align="left">Paid : </th>
                                    <th align="left"><?php echo $paid=$obj->SelectAllByVal("account_module_invoice_payment","id",$id,"amount"); ?></th>
                                    <th align="left">Due : </th>
                                    <th align="left"><?php echo $tam-$paid; ?></th>
                                </tr>
                                <tr>
                                    <th align="left">Memo : </th>
                                    <th align="left" colspan="3"><?php echo $memo=$obj->SelectAllByVal("account_module_invoice_payment","id",$id,"memo"); ?></th>
                               </tr>
                            </thead>
                            </table>            
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
							$inrow=$obj->exists_multiple("account_module_invoice_detail",array("invoice_id"=>$cid));
							$sql_led=$obj->SelectAllByID("account_module_invoice_detail",array("invoice_id"=>$cid));
							foreach($sql_led as $fetled){ ?>
                                 <tr>
                                   <td align="center" valign="middle" style="width:160px; font-size:18px;">
                                    <?php $pid=$fetled->pid;
									
									//$sql_pid=mysql_query("SELECT * FROM account_module_product WHERE =''");
									//$fetpid=mysql_fetch_array($sql_pid);
									echo $obj->SelectAllByVal("account_module_product","id",$pid,"pname");
									//echo $fetpid[''];
									?>
                              		</td>
                                    <td valign="middle" align="center" style="width:140px; font-size:18px;">
                                    <?php //echo $fetpid['description']; 
									echo $obj->SelectAllByVal("account_module_product","id",$pid,"description");
									?>
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
										$getrate=$obj->SelectAllByVal("account_module_newtax","id",$taxid,"rate");
										$tax+=(($fetled->quantity*$fetled->price)*$getrate)/100;
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

                            </tbody>
                        </table>
                    </div>
                            </form>
                       </div>
                    </div>
                    </div>
                    </div>
                    
                    </body>
                    </html>
      