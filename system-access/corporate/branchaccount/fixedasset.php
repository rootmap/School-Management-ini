<?php
include('class_file/auth.php');
extract($_GET);
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
            </div>
                
                
                <!-- Panels Start -->
                
           	         
                <div class="mws-panel grid_8">
                    <div class="mws-panel-header">
                        <span><i class="icon-boat"></i> Fixed Assets Report </span>
                    </div>
                    <div class="mws-panel-body no-padding">
                    <h3 align="right" style="margin-top:-1px;">
                    	<input type="button" id="mws-jui-dialog-btn" class="btn btn-danger" value="View All Rates">
                        <input type="button" id="mws-form-dialog-mdl-btn" class="btn btn-success" value="Add Rates">
                        <div id="mws-jui-dialog">
                        		<div class="mws-dialog-inner">
                            		<table class="mws-datatable mws-table">
                            <thead>
                                <tr>
                                    <th>Head</th>
                                    <th>Rates</th>
                                    <th>Change</th>
                               </tr>
                            </thead>
                            <tbody>
                            <?php 
							$qq=$obj->SelectAll("account_module_fixassetrates");
							foreach($qq as $wow)
							{
							?>
                                <tr>
                                    <td><?php 
									$achid=$wow->achid;
									//$sql_ach=$obj->SelectAll("account_module_head_list",array("id"=>$achid));
									//$fetid=mysql_fetch_array($sql_ach);
									echo $obj->SelectAllByVal("account_module_head_list","id",$achid,"head_title");
									?></td>
                                    <td align="center"><?php echo $wow->rates; ?>%</td>
                                    <td align="center" valign="middle"><a href="rateschange.php?achid=<?php echo $wow->achid; ?>&amp;rates=<?php echo $wow->rates; ?>" style="font-size:18px; color:#06C"><i class="icon-tools">&nbsp;</i></a></td>
                                </tr>
                            <?php 
							}
							?>    
                            </tbody>
                        </table>
                                </div>
                            </div>
                            
                            <div id="mws-form-dialog">
                                <form id="mws-validate" class="mws-form" action="class_file/class/addrates.php" method="post">
                                    <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
                                    <div class="mws-form-inline">
                                        <div class="mws-form-row">
                                            <label class="mws-form-label">Select Accounts Head</label>
                                            <div class="mws-form-item">
                                            <select class="mws-select2 large" name="achid">
                                            <?php 
											$qq=$obj->SelectAllByID_Multiple_NotOne("account_module_head_list",array("list_of_head_accounts_id"=>1,"list_of_sub_head_accounts_id"=>3),"id","5");
											foreach($qq as $wow)
											{
/*<!--												$rid=$wow;
												$chkrid=mysql_num_rows(mysql_query("SELECT * FROM fixassetrates WHERE achid='$rid'"));
												if($chkrid!=1)
												{-->*/
											?>
											<option value="<?php echo $wow->id; ?>"><?php echo $wow->head_title; ?></option>
											<?php 
												/*}*/
											}
											?>    
                                            </select>
                                        </div>
                                        </div>
                                        <div class="mws-form-row">
                                            <label class="mws-form-label">Type Rate </label>
                                            <div class="mws-form-item">
                                            <select class="mws-select2 small" name="rates">
                                            <?php 
											for($i=0; $i<=100; $i++)
											{
											?>
											<option value="<?php echo $i; ?>"><?php echo $i; ?> %</option>
											<?php 
											}
											?>    
                                            </select>
                                        </div>
                                        </div>
                                        
                                        </div>
                                    </div>
                                </form>
                            </div>
                        
                        
                    </h3>
                        <table class="mws-datatable mws-table">
                            <thead>
                                <tr>
                                    <th>Accounts Head</th>
                                    <th>Purchase Cost</th>
                                    <th>Accumulated Depriciation</th>
                                    <th>Written Down Value</th>
                               </tr>
                            </thead>
                            <tbody>
                            <?php 
							$qq=$obj->SelectAllByID_Multiple_NotOne("account_module_head_list",array("list_of_head_accounts_id"=>1,"list_of_sub_head_accounts_id"=>3),"id","5");
							foreach($qq as $wow)
							{
								$hid=$wow->id;
							
							?>
                                <tr>
                                    <td><a href="fixedassetregisterreport.php?q=<?php echo $wow->head_title; ?>" style="color:#06F; font-weight:bolder;"><?php echo $wow->head_title; ?></a></td>
                                    <td align="center">
									<?php
									$sql_head_sub_list=$obj->SelectAllByID_Multiple("account_module_head_sub_list",array("list_of_sub_head_list_id"=>$hid));
									$price=0;
									foreach($sql_head_sub_list as $hls)
									{
										$lsid=$hls->id;
										$sql_in_ac_id=$obj->SelectAllByID_Multiple("account_module_ladger_list_properties",array("head_sub_list_id"=>$lsid));
										if(!empty($sql_in_ac_id))
										foreach($sql_in_ac_id as $inac)
										{
											$ldger_id=$inac->id;
											$sql_product_price=$obj->SelectAllByID_Multiple("account_module_buy_product",array("in_ac_id"=>$ldger_id));
											if(!empty($sql_product_price))
											foreach($sql_product_price as $row)
											{
												$price+=$row->price;
											}
										}
									}
									echo number_format($price,2);
									
									?></td>
                                    <td align="center"><?php 
									$sql_h=$obj->exists_multiple("account_module_fixassetrates",array("achid"=>$hid));
									if($sql_h!=0)
									{
										//$sql_rate=mysql_query("SELECT * FROM account_module_fixassetrates WHERE =''");
										//$fetrate=mysql_fetch_array($sql_rate);
										$rates=$obj->SelectAllByVal("account_module_fixassetrates","achid",$hid,"rates");
										//echo $rates."%";
										$getwrv=$price*$rates/100;
										echo number_format($getwrv,2)."(".$rates."%)";
									}
									else
									{
										echo "Rate Value Is Empty";	
									}
									?></td>
                                    <td align="center"><?php
														$rtv=$price-$getwrv;
														echo number_format($rtv,2);
														?></td>
                                </tr>
                            <?php 
							}
							?>    
                            </tbody>
                        </table>
                    </div>      
                </div>
                
                
                
                <!-- Panels End -->
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
             <?php include('header_footer_file/footer.php'); ?>