<?php
include('class_file/auth.php');
?>
<body>

	  <!-- Header -->
  <?php include('header_footer_file/head.php'); ?>
    
    <!-- Start Main Wrapper -->
  <div id="mws-wrapper">
    
    	<!-- Necessary markup, do not remove -->
		<div id="mws-sidebar-stitch"></div>
		<div id="mws-sidebar-bg"></div>
        
        <!-- Sidebar Wrapper -->
        <div id="mws-sidebar">
        
            <!-- Hidden Nav Collapse Button -->
            <div id="mws-nav-collapse">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
        	<!-- Searchbox -->
        	 <?php include('header_footer_file/search_box.php'); ?>
        	<!-- Searchbox -->
        	
            
            <!-- Main Navigation -->
            <?php include('header_footer_file/left_menu.php'); ?>
            </div>
        
        <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
        
        	<!-- Inner Container Start -->
            <div class="container">
            
            	<!-- Statistics Button Container -->
            		<div class="mws-stat-container clearfix">
                	
                    <!-- Statistic Item -->
                	
<?php //include('header_footer_file/accjournalbalance.php'); ?>
                </div>
                
                
                <!-- Panels Start -->
                <div class="clear"></div>
                
                
           	  	<div class="mws-panel grid_8" style="margin-top:-45px;">
                	<div class="mws-panel-body no-padding" style="padding:20px;">
                    <h2 align="center">INCOME STATEMENT</h2>
                    <h3 align="center">Expected</h3>
                    <h3 align="center">Reporting Period 01/01/2013 To <?php echo date('d/m/Y');  ?></h3>
                        <table class="mws-table">
                            <tbody>
							<tr><th valign="middle" align="left"><h4>Revenue</h4></th>
                                <th align="center" valign="middle"></th>
                            </tr>
                            <?php
							$ld=$obj->SelectAllByID_Multiple_NotMultiple("account_module_ladger_list_properties",array("main_head_id"=>3),"head_sub_list_id","131","132","133","134","135","136","138");
							$total_revenue=0;
							if(!empty($ld))
							foreach($ld as $row)
							{
								
									$inid=$row->id; 
									$getdutotal=$obj->SelectAllByID_Multiple("account_module_ladger",array("ladger_id"=>$inid,"branch_id"=>$branch_id));
										$debit=0;
										$cradit=0;
									if(!empty($getdutotal))	
									foreach($getdutotal as $due)
									{
										$debit+=$due->debit;
										$cradit+=$due->cradit;
									}
								if($cradit!=0)
								{
							?>
                                <tr>
                                	<th valign="middle" align="left">
                                    <a href="viewledger.php?ladger_id=<?php echo $inid; ?>"><?php echo $row->head_sub_list_name; ?></a>
                                    </th>
                                    <td align="right" valign="middle">
									<?php 
									
									$netm=$debit-$cradit;
									$getch=substr($netm,0,1);
									if($getch!='-')
									{ echo number_format($netm,2); }
									else
									{ echo number_format(substr($netm,1,200),2); }  
									$total_revenue+=$debit-$cradit;
									?></strong></td>
                                </tr>
                             <?php
								}
							 } ?> 
                            <tr><th valign="middle" align="left"><h4>Gross Revenue</h4></th>
                                <td align="right" valign="middle"><?php 
								$chktr=substr($total_revenue,0,1);
								if($chktr!='-'){ echo number_format($gettotalrevenue=$total_revenue,2); }else{ echo number_format($gettotalrevenue=substr($total_revenue,1,200),2); }
								
								?></td>
                            </tr>
                            
                            <!--operating expenses-->
                            <tr><td colspan="2"></td></tr>
                            <tr>
                               <th valign="middle" align="left">(Less) </th>
                               <td align="center" valign="middle">&nbsp;</td>
                             </tr>
                             <!--frieght in-->
                              <?php
							$ld_sales_discount=$obj->SelectAllByID_Multiple("account_module_ladger_list_properties",array("main_head_id"=>4,"head_sub_list_id"=>380));
							$sales_discount=0;
							if(!empty($ld_sales_discount))
							foreach($ld_sales_discount as $row_sales_discount)
							{
								
								$inid_sales_discount=$row_sales_discount->id; 
									$getdutotal_sales_discount=$obj->SelectAllByID_Multiple("account_module_ladger",array("ladger_id"=>$inid_sales_discount,"branch_id"=>$branch_id));
										$debit_sales_discount=0;
										$cradit_sales_discount=0;
									if(!empty($getdutotal_sales_discount))	
									foreach($getdutotal_sales_discount as $due_sales_discount)
									{
										$debit_sales_discount+=$due_sales_discount->debit;
										$cradit_sales_discount+=$due_sales_discount->cradit;
										$sales_discount+=$due_sales_discount->debit-$due_sales_discount->cradit;
									}
								if($sales_discount!=0)
								{
							?>
                                
                                <tr>
                                	<th valign="middle" align="left">
                                    <a href="viewledger.php?ladger_id=<?php echo $inid_sales_discount; ?>"><?php echo $row_sales_discount->head_sub_list_name; ?></a>
                                    </th>
                                    <td align="right" valign="middle">
									<?php 
									
									$netm_sales_discount=$debit_sales_discount-$cradit_sales_discount;
									$getch=substr($netm_sales_discount,0,1);
									if($getch!='-')
									{ echo number_format($netm_sales_discount,2); }
									else
									{ echo number_format(substr($netm_sales_discount,1,200),2); }  
									
									?></strong></td>
                                </tr>
                             <?php
								}
							 }
							 ?>
                             
                            <?php
							$ld_sales_return=$obj->SelectAllByID_Multiple("account_module_ladger_list_properties",array("main_head_id"=>4,"head_sub_list_id"=>379));
							
							foreach($ld_sales_return as $row_sales_return)
							{
								
								$inid_sales_return=$row_sales_return->id; 
									$getdutotal_sales_return=$obj->SelectAllByID_Multiple("account_module_ladger",array("ladger_id"=>$inid_sales_return,"branch_id"=>$branch_id));
										$debit_sales_return=0;
										$cradit_sales_return=0;
										$sales_return=0;
									if(!empty($getdutotal_sales_return))	
									foreach($getdutotal_sales_return as $due_sales_return)
									{
										$debit_sales_return+=$due_sales_return->debit;
										$cradit_sales_return+=$due_sales_return->cradit;
										$sales_return=$due_sales_return->debit-$due_sales_return->cradit;
									}
								if($sales_return!=0)
								{
							?>
                                
                                <tr>
                                	<th valign="middle" align="left">
                                    <a href="viewledger.php?ladger_id=<?php echo $inid_sales_return; ?>"><?php echo $row_sales_return->head_sub_list_name; ?></a>
                                    </th>
                                    <td align="right" valign="middle">
									<?php 
									
									$netm_sales_return=$debit_sales_return-$cradit_sales_return;
									$getch=substr($netm_sales_return,0,1);
									if($getch!='-')
									{ echo number_format($netm_sales_return,2); }
									else
									{ echo number_format(substr($netm_sales_return,1,200),2); }  
									
									?></strong></td>
                                </tr>
                             <?php
								}
							 }
							 ?>
                                       
                            <tr><td colspan="2"></td></tr>
                            <tr>
                              <th valign="middle" align="left" colspan="2">(Less) </th></tr>
                            <?php
							$chkfourcountled=$obj->SelectAllByID_Multiple("account_module_head_sub_list",array("list_of_head_accounts_id"=>4,"list_of_sub_head_accounts_id"=>2,"list_of_sub_head_list_id"=>35));
							$salesexpense=0;
							if(!empty($chkfourcountled))
							foreach($chkfourcountled as $cogsexpense)
							{
								$cogsid=$cogsexpense->id;
								$chkvisibleledgeraccount=$obj->exists_multiple("account_module_ladger_list_properties",array("main_head_id"=>4,"head_sub_list_id"=>$cogsid));
							if($chkvisibleledgeraccount!=0)
							{
							$ld=$obj->SelectAllByID_Multiple("account_module_ladger_list_properties",array("main_head_id"=>4,"head_sub_list_id"=>$cogsid));
							foreach($ld as $row)
							{
								$inid=$row->id; 
									$getdutotal=$obj->SelectAllByID_Multiple("account_module_ladger",array("ladger_id"=>$inid,"branch_id"=>$branch_id));
										$debit=0;
										$cradit=0;
									if(!empty($getdutotal))	
									foreach($getdutotal as $due)
									{
										$debit+=$due->debit;
										$cradit+=$due->cradit;
									}
								if($debit!=0)
								{
								?>
                                <tr>
                                	<th valign="middle" align="left">
                                    <a href="viewledger.php?ladger_id=<?php echo $inid; ?>"><?php echo $row->head_sub_list_name; ?></a>
                                    </th>
                                    <td align="right" valign="middle">
									<?php 
									
									$netm=$debit-$cradit;
									$getch=substr($netm,0,1);
									if($getch!='-')
									{ echo number_format($netm,2); }
									else
									{ echo number_format(substr($netm,1,200),2); }  
									$salesexpense+=$debit-$cradit;
									?></strong></td>
                                </tr>
                             <?php
								}
							 }
							}
							}
							 ?> 
                            <tr><th valign="middle" align="left"><h4>Net Revenue</h4></th>
                                <td align="right" valign="middle"><u><strong><?php $netrevenue=$gettotalrevenue-$salesexpense-$sales_discount-$sales_return;
								echo number_format($netrevenue,2);
								?></strong></u></td>
                            </tr>
                            <tr>
                              <th valign="middle" align="left">&nbsp;</th>
                              <th align="center" valign="middle"></th>
                            </tr>
                            <tr>
                              <th valign="middle" align="left">Other Income</th>
                              <th align="right" valign="middle"></th>
                            </tr>
                            <?php
							$sql_o_i=$obj->SelectAllByID_Multiple_NotTwo("account_module_head_sub_list",array("list_of_head_accounts_id"=>3,"list_of_sub_head_accounts_id"=>1,"list_of_sub_head_list_id"=>16),"id","135","137");
							$other_income=0;
							$total_other_income=0;
							if(!empty($sql_o_i))
							foreach($sql_o_i as $row_o_i)
							{
								$get_o_i=$row_o_i->id;
								
								$ld_other_income=$obj->SelectAllByID_Multiple("account_module_ladger_list_properties",array("head_sub_list_id"=>$get_o_i));
								foreach($ld_other_income as $row_other_income)
								{
									
									$inid_other_income=$row_other_income->id; 
										$getdutotal_other_income=$obj->SelectAllByID_Multiple("account_module_ladger",array("ladger_id"=>$inid_other_income,"branch_id"=>$branch_id));
											$debit_other_income=0;
											$cradit_other_income=0;
										if(!empty($getdutotal_other_income))	
										foreach($getdutotal_other_income as $due_other_income)
										{
											$debit_other_income+=$due_other_income->debit;
											$cradit_other_income+=$due_other_income->cradit;
											
										}
										
										$db_other_income=$debit_other_income-$cradit_other_income;
									if($db_other_income!=0)
									{
								?>
									
									<tr>
										<th valign="middle" align="left">
										<a href="viewledger.php?ladger_id=<?php echo $inid_other_income; ?>"><?php echo $row_other_income->head_sub_list_name; ?></a>
										</th>
										<td align="right" valign="middle">
										<?php 
										
										$netm_other_income=$debit_other_income-$cradit_other_income;
										$total_other_income+=$netm_other_income;
										$getch_other_income=substr($netm_other_income,0,1);
										if($getch_other_income!='-')
										{ echo number_format($netm_other_income,2); }
										else
										{ echo number_format(substr($netm_other_income,1,200),2); }  
										$other_income+=$netm_other_income;
										?></strong></td>
									</tr>
								 <?php
									}
								 }
							}
							 ?>

                            
                            <!--cogs-->
                            <tr><td colspan="2"></td></tr>
                            <tr>
                              <th valign="middle" align="left"><h4>Total Other Income</h4></th>
                              <td align="right" valign="middle"><u><strong><?php $chktoi=substr($total_other_income,0,1);
							  if($chktoi!="-")
							  {
								  echo number_format($total_other_income,2);
							  }
							  else
							  {
								  echo number_format(substr($total_other_income,1,200),2);
							  }
							  ?></strong></u></td>
                            </tr>
                            <tr>
                              <th valign="middle" align="left"><h4>Total Income</h4></th>
                              <td align="right" valign="middle"><span style="padding-bottom:2px; border-bottom:#000 medium inset;"><u><u><strong><?php $chkti=substr($total_other_income,0,1);
							  if($chkti!="-")
							  {
								  $tincome=$total_other_income+$netrevenue;
								  echo number_format($tincome,2);
							  }
							  else
							  {
								  $tincome=substr($total_other_income,1,200)+$netrevenue;
								  echo number_format($tincome,2);
							  }
							  ?></strong></u></u></span></td>
                            </tr>
                            <tr><th valign="middle" align="left" colspan="2" >&nbsp;</th></tr>
                            <tr><th valign="middle" align="left" colspan="2" ><h4>Cost of Goods Sold (COGS)</h4></th></tr>
                            
                            <tr>
                            <th valign="middle" align="left" >Beginning Inventory Value</th>
                            <td align="right" valign="middle">
							<?php
							$iyear=date('Y')-1;
							
							$cy=date('Y');
							$from=date("Y-m-d", mktime(0, 0, 0, 12, 31,$cy-1));
							$to=date("Y-m-d", mktime(0, 0, 0, 12, 32,$cy-2));
							$endfrom=date("Y-m-d", mktime(0, 0, 0, 12, 31,$cy));
							$endto=date("Y-m-d", mktime(0, 0, 0, 12, 32,$cy-1));
                            /*
                            $sql_query=mysql_query("SELECT * FROM inventory WHERE year='$iyear'");
                            $fetiyear=mysql_fetch_array($sql_query);
                            echo number_format($begininginventory=$fetiyear['begging_value'],2);*/
							$ld_begining_inventory=$obj->SelectAllByID_Multiple("account_module_ladger_list_properties",array("main_head_id"=>1,"head_sub_list_id"=>46));
							
							foreach($ld_begining_inventory as $row_begining_inventory)
							{
								
								$inid_begining_inventory=$row_begining_inventory->id; 
									$getdutotal_begining_inventory=$obj->SelectAllByID_Multiple_Rep_Date("account_module_ladger",array("ladger_id"=>$inid_begining_inventory,"branch_id"=>$branch_id),"ladger_date",$to,$from);
										$debit_begining_inventory=0;
										$cradit_begining_inventory=0;
									if(!empty($getdutotal_begining_inventory))	
									foreach($getdutotal_begining_inventory as $due_begining_inventory)
									{
										$debit_begining_inventory+=$due_begining_inventory->debit;
										$cradit_begining_inventory+=$due_begining_inventory->cradit;
									}
							}
							
							echo $begininginventory=$debit_begining_inventory-$cradit_begining_inventory;
							
							
							
							$ld_ending_inventory=$obj->SelectAllByID_Multiple("account_module_ladger_list_properties",array("main_head_id"=>1,"head_sub_list_id"=>46));
							if(!empty($ld_ending_inventory))
							foreach($ld_ending_inventory as $row_ending_inventory)
							{
								
								$inid_ending_inventory=$row_ending_inventory->id; 
									$getdutotal_ending_inventory=$obj->SelectAllByID_Multiple_Rep_Date("account_module_ladger",array("ladger_id"=>$inid_ending_inventory,"branch_id"=>$branch_id),"ladger_date",$endto,$endfrom);
										$debit_ending_inventory=0;
										$cradit_ending_inventory=0;
									if(!empty($getdutotal_ending_inventory))	
									foreach($getdutotal_ending_inventory as $due_ending_inventory)
									{
										$debit_ending_inventory+=$due_ending_inventory->debit;
										$cradit_ending_inventory+=$due_ending_inventory->cradit;
									}
							}
							$endinventory=$debit_ending_inventory-$cradit_ending_inventory;
                            ?>
                            </td>
                            </tr>
                            <tr>
                               <th valign="middle" align="left">Add : Direct Expense</th>
                               <th align="center" valign="middle">&nbsp;</th>
                             </tr>     
                            <?php
							$chkfourcountled=$obj->SelectAllByID_Multiple("account_module_head_sub_list",array("list_of_head_accounts_id"=>4,"list_of_sub_head_accounts_id"=>1));
							$cogs=0;
							if(!empty($chkfourcountled))
							foreach($chkfourcountled as $cogsexpense)
							{
							$cogsid=$cogsexpense->id;
								$chkvisibleledgeraccount=$obj->exists_multiple("account_module_ladger_list_properties",array("main_head_id"=>4,"head_sub_list_id"=>$cogsid));
							if($chkvisibleledgeraccount!=0)
							{
							$ld=$obj->SelectAllByID_Multiple_NotOne("account_module_ladger_list_properties",array("main_head_id"=>4,"head_sub_list_id"=>$cogsid),"head_sub_list_id","240");
							$total_revenue=0;
							if(!empty($ld))
							foreach($ld as $row)
							{
								
								$inid=$row->id; 
									$getdutotal=$obj->SelectAllByID_Multiple("account_module_ladger",array("ladger_id"=>$inid,"branch_id"=>$branch_id));
										$debit=0;
										$cradit=0;
									if(!empty($getdutotal))	
									foreach($getdutotal as $due)
									{
										$debit+=$due->debit;
										$cradit+=$due->cradit;
									}
								if($debit!=0)
								{
							?>
                                
                                <tr>
                                	<th valign="middle" align="left">
                                    <a href="viewledger.php?ladger_id=<?php echo $inid; ?>"><?php echo $row->head_sub_list_name; ?></a>
                                    </th>
                                    <td align="right" valign="middle">
									<?php 
									
									$netm=$debit-$cradit;
									$sco=$debit-$cradit;
									
									$getch=substr($netm,0,1);
									if($getch!='-')
									{ echo number_format($netm,2); }
									else
									{ echo number_format(substr($netm,1,200),2); }  
									$cogs+=$debit-$cradit;
									?></strong></td>
                                </tr>
                             <?php
								}
							 }
							}
							}
							 ?>
                             
<!--                             <tr><th valign="middle" align="left"> Direct Expense</th>
                                <td align="right" valign="middle"><?php //echo number_format($cogs,2); ?></td>
                            </tr>-->
                             <!--frieght in-->
                              <?php
							$ld=$obj->SelectAllByID_Multiple("account_module_ladger_list_properties",array("main_head_id"=>4,"head_sub_list_id"=>240));
							$fr=0;
							if(!empty($ld))
							foreach($ld as $row)
							{
								
								$inid=$row->id; 
								$getdutotal=$obj->SelectAllByID_Multiple("account_module_ladger",array("ladger_id"=>$inid,"branch_id"=>$branch_id));
										$debit=0;
										$cradit=0;
									if(!empty($getdutotal))	
									foreach($getdutotal as $due)
									{
										$debit+=$due->debit;
										$cradit+=$due->cradit;
									}
								if($debit!=0)
								{
							?>
                                
                                <tr>
                                	<th valign="middle" align="left">
                                    <a href="viewledger.php?ladger_id=<?php echo $inid; ?>"><?php echo $row->head_sub_list_name; ?></a>
                                    </th>
                                    <td align="right" valign="middle">
									<?php 
									
									$netm=$debit-$cradit;
									$getch=substr($netm,0,1);
									if($getch!='-')
									{ echo number_format($netm,2); }
									else
									{ echo number_format(substr($netm,1,200),2); }  
									$fr+=$netm;
									?></strong></td>
                                </tr>
                             <?php
								}
							 }
							 ?>
                             <tr>
                               <th valign="middle" align="left">Inventory Purchase</th>
                               <td align="right" valign="middle"><?php
							   $inventorypurchase=$obj->SelectAllByID_Multiple("account_module_ladger_list_properties",array("main_head_id"=>1,"head_sub_list_id"=>46));
							if(!empty($inventorypurchase))
							foreach($inventorypurchase as $row_purchase_inventory)
							{
								
								$inid_purchase_inventory=$row_purchase_inventory->id; 
									$getdutotal_purchase_inventory=$obj->SelectAllByID_Multiple("account_module_ladger",array("ladger_id"=>$inid_ending_inventory,"branch_id"=>$branch_id));
										$debit_purchase_inventory=0;
									if(!empty($getdutotal_purchase_inventory))	
									foreach($getdutotal_purchase_inventory as $due_purchase_inventory)
									{
										$debit_purchase_inventory+=$due_purchase_inventory->debit;
									}
							}
							$inventorypurchase_op=$debit_purchase_inventory;
							echo number_format($inventorypurchase_op,2);
							   ?></td>
                             </tr>
                             <tr>
                                  <th valign="middle" align="left">Total Direct Expense</th>
                                  <td align="right" valign="middle"><strong><?php
								  $totaldirectexpense=$begininginventory+$fr+$cogs+$inventorypurchase_op;
								    echo number_format($begininginventory+$fr+$cogs+$inventorypurchase_op,2);
								  ?></strong></td>
                            </tr> 
                             <tr>
                               <th valign="middle" align="left">(Less) </th>
                               <th align="right" valign="middle">&nbsp;</th>
                             </tr>
                             <!--purchase_discount-->
                              <?php
							$ld_purchase_discount=$obj->SelectAllByID_Multiple("account_module_ladger_list_properties",array("main_head_id"=>2,"head_sub_list_id"=>382));
							$purchase_discount=0;
							if(!empty($ld_purchase_discount))
							foreach($ld_purchase_discount as $row_purchase_discount)
							{
								
								$inid_purchase_discount=$row_purchase_discount->id; 
									$getdutotal_purchase_discount=$obj->SelectAllByID_Multiple("account_module_ladger",array("ladger_id"=>$inid_purchase_discount,"branch_id"=>$branch_id));
										$debit_purchase_discount=0;
										$cradit_purchase_discount=0;
									if(!empty($getdutotal_purchase_discount))	
									foreach($getdutotal_purchase_discount as $due_purchase_discount)
									{
										$debit_purchase_discount+=$due_purchase_discount->debit;
										$cradit_purchase_discount+=$due_purchase_discount->cradit;
										$purchase_discount+=$due_purchase_discount->debit-$due_purchase_discount->cradit;
									}
								if($purchase_discount!=0)
								{
							?>
                                
                                <tr>
                                	<th valign="middle" align="left">
                                    <a href="viewledger.php?ladger_id=<?php echo $inid_purchase_discount; ?>"><?php echo $row_purchase_discount->head_sub_list_name; ?></a>
                                    </th>
                                    <td align="right" valign="middle">
									<?php 
									
									$netm_purchase_discount=$debit_purchase_discount-$cradit_purchase_discount;
									$getch=substr($netm_purchase_discount,0,1);
									if($getch!='-')
									{ echo number_format($netm_purchase_discount,2); }
									else
									{ echo number_format(substr($netm_purchase_discount,1,200),2); }  
									
									?></strong></td>
                                </tr>
                             <?php
								}
							 }
							 ?>
                             
                            <?php
							$ld_purchase_return=$obj->SelectAllByID_Multiple("account_module_ladger_list_properties",array("main_head_id"=>2,"head_sub_list_id"=>375));
							if(!empty($ld_purchase_return))
							foreach($ld_purchase_return as $row_purchase_return)
							{
								
								$inid_purchase_return=$row_purchase_return->id; 
									$getdutotal_purchase_return=$obj->SelectAllByID_Multiple("account_module_ladger",array("ladger_id"=>$inid_purchase_return,"branch_id"=>$branch_id));
										$debit_purchase_return=0;
										$cradit_purchase_return=0;
										$purchase_return=0;
									if(!empty($getdutotal_purchase_return))	
									foreach($getdutotal_purchase_return as $due_purchase_return)
									{
										$debit_purchase_return+=$due_purchase_return->debit;
										$cradit_purchase_return+=$due_purchase_return->cradit;
										$purchase_return=$due_purchase_return->debit-$due_purchase_return->cradit;
									}
								if($purchase_return!=0)
								{
							?>
                                
                                <tr>
                                	<th valign="middle" align="left">
                                    <a href="viewledger.php?ladger_id=<?php echo $inid_purchase_return; ?>"><?php echo $row_purchase_return->head_sub_list_name; ?></a>
                                    </th>
                                    <td align="right" valign="middle">
									<?php 
									
									$netm_purchase_return=$debit_purchase_return-$cradit_purchase_return;
									$getch=substr($netm_purchase_return,0,1);
									if($getch!='-')
									{ echo number_format($netm_purchase_return,2); }
									else
									{ echo number_format(substr($netm_purchase_return,1,200),2); }  
									
									?></strong></td>
                                </tr>
                             <?php
								}
							 }
							 ?>
                                                    
                             
                             <tr>
                               <th valign="middle" align="left">Net Direct Expense</th>
                               <td align="right" valign="middle"><strong><?php 
							   $netdiorectexpense=$totaldirectexpense+($purchase_discount+$purchase_return);
							   echo number_format($netdiorectexpense,2);
							   ?></strong></td>
                             </tr>
                             <tr>
                                  <th valign="middle" align="left">End Inventory Value</th>
                                  <td align="right" valign="middle"><?php
								    echo number_format($endinventory,2);
								  ?></td>
                            </tr> 
                            <tr><th valign="middle" align="left"><h4>Total Cost of Goods Sold (COGS)</h4></th>
                                <td align="right" valign="middle"><u><strong><?php 
								 $cogss=$netdiorectexpense-$endinventory;
								echo number_format($cogss,2);
								?></strong></u></td>
                            </tr>
                            
                            <tr><th valign="middle" align="left"></th>
                                <th align="right" valign="middle"></th>
                            </tr>
                            <tr>
                                <th valign="middle" align="left"><h4>Gross Profit/(Loss)</h4></th>
                                <td align="right" valign="middle"><u><strong><?php 
								
								$gross_profit=$tincome-$cogss;
								$lkj=substr($gross_profit,0,1);
								if($lkj!="-")
								{
									echo number_format($gross_profit,2);
								}
								else
								{
									echo "(".number_format(substr($gross_profit,1,200),2).")";
								}
								
								?></strong></u></td>
                            </tr>
                            <tr><td colspan="2"></td></tr>
                            <!--operating expenses-->
                            <tr><td colspan="2"></td></tr>
                            <tr><th valign="middle" align="left" colspan="2"><h4>Operating Expenses</h4></th></tr>
                            <?php
							$chkfourcountled=$obj->SelectAllByID_Multiple_NotOne("account_module_head_sub_list",array("list_of_head_accounts_id"=>4,"list_of_sub_head_accounts_id"=>2),"list_of_sub_head_list_id","35");
							$opex=0;
							if(!empty($chkfourcountled))
							foreach($chkfourcountled as $cogsexpense)
							{
							$cogsid=$cogsexpense->id;
								$chkvisibleledgeraccount=$obj->exists_multiple("account_module_ladger_list_properties",array("main_head_id"=>4,"head_sub_list_id"=>$cogsid));
							if($chkvisibleledgeraccount!=0)
							{
							$ld=$obj->SelectAllByID_Multiple("account_module_ladger_list_properties",array("main_head_id"=>4,"head_sub_list_id"=>$cogsid));
							if(!empty($ld))
							foreach($ld as $row)
							{
								
								$inid=$row->id; 
									$getdutotal=$obj->SelectAllByID_Multiple("account_module_ladger",array("ladger_id"=>$inid,"branch_id"=>$branch_id));
										$debit=0;
										$cradit=0;
									if(!empty($getdutotal))	
									foreach($getdutotal as $due)
									{
										$debit+=$due->debit;
										$cradit+=$due->cradit;
									}
								if($debit!=0)
								{
							?>
                                <tr>
                                	<th valign="middle" align="left">
                                    <a href="viewledger.php?ladger_id=<?php echo $inid; ?>"><?php echo $row->head_sub_list_name; ?></a>
                                    </th>
                                    <td align="right" valign="middle">
									<?php 
									
									$netm=$debit-$cradit;
									$getch=substr($netm,0,1);
									if($getch!='-')
									{ echo number_format($netm,2); }
									else
									{ echo number_format(substr($netm,1,200),2); }  
									$opex+=$debit-$cradit;
									?></strong></td>
                                </tr>
                             <?php
								}
							 }
							}
							}
							 ?> 
                            <tr><th valign="middle" align="left"><h4>Total Operating Expenses</h4></th>
                                <td align="right" valign="middle"><u><strong><?php echo number_format($opex,2); ?></strong></u></td>
                            </tr>
                            <tr><th valign="middle" align="left">&nbsp;</th>
                                <th align="right" valign="middle"></th>
                            </tr>
                            <tr>
                                <th valign="middle" align="left"><h4>NET PROFIT/(LOSS)</h4></th>
                                <td align="right" valign="middle"><span style="padding-bottom:2px; border-bottom:#000 medium inset;"><u><u><strong><?php  $netprofit=$gross_profit-$opex;
								$akj=substr($netprofit,0,1);
								
								if($akj!="-")
								{
									echo number_format($netprofit,2);
								}
								else
								{
									echo "(".number_format(substr($netprofit,1,200),2).")";
								}
								
								$year=date('Y');
								$date=date('Y-m-d');
								$chkincomestatement=$obj->exists_multiple("account_module_income_statement",array("year"=>$year,"branch_id"=>$branch_id));
								if($chkincomestatement!=0)
								{
									$get_id=$obj->SelectAllByVal2("account_module_income_statement","year",$year,"branch_id",$branch_id,"id");
									$obj->update("account_module_income_statement",array("id"=>$get_id,"year"=>$year,"amount"=>$netprofit,"totalincome"=>$tincome,"branch_id"=>$branch_id,"directexpense"=>$cogs,"grossprofit"=>$gross_profit,"date"=>$date));
								
								}
								else
								{
									$obj->insert("account_module_income_statement",array("year"=>$year,"amount"=>$netprofit,"totalincome"=>$tincome,"branch_id"=>$branch_id,"directexpense"=>$cogs,"grossprofit"=>$gross_profit,"date"=>$date));
								
								}
								?>
                                </strong></u></u></span>
                                </td>
                            </tr>
                            <tr><th valign="middle" align="left">&nbsp;</th>
                                <th align="right" valign="middle"></th>
                            </tr>
                            </tbody>
                            
                        </table>
                        
                    </div>
                </div>
                
                <!-- Panels End -->
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
             <?php include('header_footer_file/footer.php'); ?>