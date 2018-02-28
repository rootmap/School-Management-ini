<?php
include('class_file/db_Class.php');
include('header_footer_file/header.php');
$obj = new db_class();
$obj->MySQL();
?>
<body>

	<!-- Themer (Remove if not needed) -->  
	<!--<div id="mws-themer">
        <div id="mws-themer-content">
        	<div id="mws-themer-ribbon"></div>
            <div id="mws-themer-toggle">
                <i class="icon-bended-arrow-left"></i> 
                <i class="icon-bended-arrow-right"></i>
            </div>
        	<div id="mws-theme-presets-container" class="mws-themer-section">
	        	<label for="mws-theme-presets">Color Presets</label>
            </div>
            <div class="mws-themer-separator"></div>
        	<div id="mws-theme-pattern-container" class="mws-themer-section">
	        	<label for="mws-theme-patterns">Background</label>
            </div>
            <div class="mws-themer-separator"></div>
            <div class="mws-themer-section">
                <ul>
                    <li class="clearfix"><span>Base Color</span> <div id="mws-base-cp" class="mws-cp-trigger"></div></li>
                    <li class="clearfix"><span>Highlight Color</span> <div id="mws-highlight-cp" class="mws-cp-trigger"></div></li>
                    <li class="clearfix"><span>Text Color</span> <div id="mws-text-cp" class="mws-cp-trigger"></div></li>
                    <li class="clearfix"><span>Text Glow Color</span> <div id="mws-textglow-cp" class="mws-cp-trigger"></div></li>
                    <li class="clearfix"><span>Text Glow Opacity</span> <div id="mws-textglow-op"></div></li>
                </ul>
            </div>
            <div class="mws-themer-separator"></div>
            <div class="mws-themer-section">
	            <button class="btn btn-danger small" id="mws-themer-getcss">Get CSS</button>
            </div>
        </div>
        <div id="mws-themer-css-dialog">
       	  <form class="mws-form">
            	<div class="mws-form-row">
		        	<div class="mws-form-item">
                    	<textarea cols="auto" rows="auto" readonly="readonly"></textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>-->
    <!-- Themer End -->

	<!-- Header -->
	<div id="mws-header" class="clearfix">
    
    	<!-- Logo Container -->
    	<div id="mws-logo-container">
        
        	<!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
        	<div id="mws-logo-wrap">
            	<img src="../images/mws-logo.png" alt="mws admin">
			</div>
        </div>
        
        <!-- User Tools (notifications, logout, profile, change password) -->
        <div id="mws-user-tools" class="clearfix">
        
        	<!-- Notifications -->
        	<div id="mws-user-notif" class="mws-dropdown-menu">
            	<a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-exclamation-sign"></i></a>
                
                <!-- Unread notification count -->
                <span class="mws-dropdown-notif">35</span>
                
                <!-- Notifications dropdown -->
                <div class="mws-dropdown-box">
                	<div class="mws-dropdown-content">
                        <ul class="mws-notifications">
                        	<li class="read">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="read">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
	                        <a href="#">View All Notifications</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Messages -->
            <div id="mws-user-message" class="mws-dropdown-menu">
            	<a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-envelope"></i></a>
                
                <!-- Unred messages count -->
                <span class="mws-dropdown-notif">35</span>
                
                <!-- Messages dropdown -->
                <div class="mws-dropdown-box">
                	<div class="mws-dropdown-content">
                        <ul class="mws-messages">
                        	<li class="read">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="read">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
	                        <a href="#">View All Messages</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- User Information and functions section -->
            <div id="mws-user-info" class="mws-inset">
            
            	<!-- User Photo -->
            	<div id="mws-user-photo">
                	<img src="../css/icons/icol16/src/user.png" alt="User Photo">
                </div>
                
                <!-- Username and Functions -->
                <div id="mws-user-functions">
                    <div id="mws-username">
                        Hello, John Doe
                    </div>
                    <ul>
                    	<li><a href="#">Profile</a></li>
                        <li><a href="#">Change Password</a></li>
                        <li><a href="class_file/logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
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
                <div class="mws-panel grid_7" style="margin-top:-50px;">
					
                    <div class="mws-panel-body no-padding">
                    <h2 style="padding-left:20px; padding-top:20px; color:#063;"><i class="icon-table"></i> INCOME STATEMENT : Summary </h2>	
                    	<form class="mws-form" action="#">
                        <hr>
                    		<div class="mws-form-inline" style="margin-top:-25px;">
                    			<div class="mws-form-row">
                    				<label class="mws-form-label" style="font-size:20px; color:#000; font-weight:bolder;">From <font color="#FF0000">*</font></label>
                    				<div class="mws-form-item">
                    					<input type="text" class="mws-datepicker small" readonly="readonly" style="width:300px;">
                    				</div>
                    			</div>
                                <div class="mws-form-row" style="margin-top:-20px;">
                    				<label class="mws-form-label" style="font-size:20px; color:#000; font-weight:bolder;">To <font color="#FF0000">*</font></label>
                    				<div class="mws-form-item">
                    					<input type="text" class="mws-datepicker small" readonly="readonly" style="width:300px;">
                    				</div>
                    			</div>
                    		</div>
                    		<div class="mws-button-row">
                    			<button type="submit" class="btn btn-success" style="margin-left:200px;"><i class="icon-power"></i> Update </button>
                    		</div>
                    	</form>
                    </div>    	
                </div>
                <div class="clear"></div>
                
                
           	  	<div class="mws-panel grid_7" style="margin-top:-45px;">
                	<div class="mws-panel-body no-padding">
                    <h2 align="center">INCOME STATEMENT</h2>
                    <h3 align="center">Expected</h3>
                    <h3 align="center">Reporting Period 01/01/2013 To <?php echo date('d/m/Y');  ?></h3>
                        <table class="mws-table">
                            <tbody>
							<tr><th valign="middle" align="left"><h4>Revenue</h4></th>
                                <th align="center" valign="middle"></th>
                            </tr>
                            <?php
							$ld=mysql_query("SELECT * FROM ladger_list_properties WHERE main_head_id='3' AND head_sub_list_id!='131' AND head_sub_list_id!='132' AND head_sub_list_id!='133' AND head_sub_list_id!='134' AND head_sub_list_id!='135' AND head_sub_list_id!='136' AND head_sub_list_id!='138'");
							$total_revenue=0;
							while($row=mysql_fetch_array($ld))
							{
								
								$inid=$row['id']; 
									$getdutotal=mysql_query("SELECT * FROM ladger WHERE ladger_id='$inid'");
										$debit=0;
										$cradit=0;
									while($due=mysql_fetch_array($getdutotal))
									{
										$debit+=$due['debit'];
										$cradit+=$due['cradit'];
									}
								if($cradit!=0)
								{
							?>
                                <tr>
                                	<th valign="middle" align="left">
                                    <a href="viewledger.php?ladger_id=<?php echo $inid; ?>"><?php echo $row['head_sub_list_name']; ?></a>
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
							$ld_sales_discount=mysql_query("SELECT * FROM ladger_list_properties WHERE main_head_id='4' AND head_sub_list_id='380'");
							$sales_discount=0;
							while($row_sales_discount=mysql_fetch_array($ld_sales_discount))
							{
								
								$inid_sales_discount=$row_sales_discount['id']; 
									$getdutotal_sales_discount=mysql_query("SELECT * FROM ladger WHERE ladger_id='$inid_sales_discount'");
										$debit_sales_discount=0;
										$cradit_sales_discount=0;
									while($due_sales_discount=mysql_fetch_array($getdutotal_sales_discount))
									{
										$debit_sales_discount+=$due_sales_discount['debit'];
										$cradit_sales_discount+=$due_sales_discount['cradit'];
										$sales_discount+=$due_sales_discount['debit']-$due_sales_discount['cradit'];
									}
								if($sales_discount!=0)
								{
							?>
                                
                                <tr>
                                	<th valign="middle" align="left">
                                    <a href="viewledger.php?ladger_id=<?php echo $inid_sales_discount; ?>"><?php echo $row_sales_discount['head_sub_list_name']; ?></a>
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
							$ld_sales_return=mysql_query("SELECT * FROM ladger_list_properties WHERE main_head_id='4' AND head_sub_list_id='379'");
							
							while($row_sales_return=mysql_fetch_array($ld_sales_return))
							{
								
								$inid_sales_return=$row_sales_return['id']; 
									$getdutotal_sales_return=mysql_query("SELECT * FROM ladger WHERE ladger_id='$inid_sales_return'");
										$debit_sales_return=0;
										$cradit_sales_return=0;
										$sales_return=0;
									while($due_sales_return=mysql_fetch_array($getdutotal_sales_return))
									{
										$debit_sales_return+=$due_sales_return['debit'];
										$cradit_sales_return+=$due_sales_return['cradit'];
										$sales_return=$due_sales_return['debit']-$due_sales_return['cradit'];
									}
								if($sales_return!=0)
								{
							?>
                                
                                <tr>
                                	<th valign="middle" align="left">
                                    <a href="viewledger.php?ladger_id=<?php echo $inid_sales_return; ?>"><?php echo $row_sales_return['head_sub_list_name']; ?></a>
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
							$chkfourcountled=mysql_query("SELECT * FROM head_sub_list WHERE list_of_head_accounts_id='4' AND list_of_sub_head_accounts_id='2' AND list_of_sub_head_list_id='35'");
							$salesexpense=0;
							while($cogsexpense=mysql_fetch_array($chkfourcountled))
							{
								$cogsid=$cogsexpense['id'];
								$chkvisibleledgeraccount=mysql_num_rows(mysql_query("SELECT * FROM ladger_list_properties WHERE main_head_id='4' AND head_sub_list_id='$cogsid'"));
							if($chkvisibleledgeraccount!=0)
							{
							$ld=mysql_query("SELECT * FROM ladger_list_properties WHERE main_head_id='4' AND head_sub_list_id='$cogsid'");
							while($row=mysql_fetch_array($ld))
							{
								$inid=$row['id']; 
									$getdutotal=mysql_query("SELECT * FROM ladger WHERE ladger_id='$inid'");
										$debit=0;
										$cradit=0;
									while($due=mysql_fetch_array($getdutotal))
									{
										$debit+=$due['debit'];
										$cradit+=$due['cradit'];
									}
								if($debit!=0)
								{
								?>
                                <tr>
                                	<th valign="middle" align="left">
                                    <a href="viewledger.php?ladger_id=<?php echo $inid; ?>"><?php echo $row['head_sub_list_name']; ?></a>
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
							$sql_o_i=mysql_query("SELECT * FROM head_sub_list WHERE list_of_head_accounts_id='3' AND list_of_sub_head_accounts_id='1' AND  list_of_sub_head_list_id='16' AND id!='135' AND id!='137'");
							$other_income=0;
							$total_other_income=0;
							while($row_o_i=mysql_fetch_array($sql_o_i))
							{
								$get_o_i=$row_o_i['id'];
								
								$ld_other_income=mysql_query("SELECT * FROM ladger_list_properties WHERE head_sub_list_id='$get_o_i'");
								while($row_other_income=mysql_fetch_array($ld_other_income))
								{
									
									$inid_other_income=$row_other_income['id']; 
										$getdutotal_other_income=mysql_query("SELECT * FROM ladger WHERE ladger_id='$inid_other_income'");
											$debit_other_income=0;
											$cradit_other_income=0;
										while($due_other_income=mysql_fetch_array($getdutotal_other_income))
										{
											$debit_other_income+=$due_other_income['debit'];
											$cradit_other_income+=$due_other_income['cradit'];
											
										}
										
										$db_other_income=$debit_other_income-$cradit_other_income;
									if($db_other_income!=0)
									{
								?>
									
									<tr>
										<th valign="middle" align="left">
										<a href="viewledger.php?ladger_id=<?php echo $inid_other_income; ?>"><?php echo $row_other_income['head_sub_list_name']; ?></a>
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
							$ld_begining_inventory=mysql_query("SELECT * FROM ladger_list_properties WHERE main_head_id='1' AND head_sub_list_id='46'");
							
							while($row_begining_inventory=mysql_fetch_array($ld_begining_inventory))
							{
								
								$inid_begining_inventory=$row_begining_inventory['id']; 
									$getdutotal_begining_inventory=mysql_query("SELECT * FROM ladger t WHERE ladger_id='$inid_begining_inventory' AND t.ladger_date >= '$to' and t.ladger_date <= '$from'");
										$debit_begining_inventory=0;
										$cradit_begining_inventory=0;
									while($due_begining_inventory=mysql_fetch_array($getdutotal_begining_inventory))
									{
										$debit_begining_inventory+=$due_begining_inventory['debit'];
										$cradit_begining_inventory+=$due_begining_inventory['cradit'];
									}
							}
							echo $begininginventory=$debit_begining_inventory-$cradit_begining_inventory;
							
							
							
							$ld_ending_inventory=mysql_query("SELECT * FROM ladger_list_properties WHERE main_head_id='1' AND head_sub_list_id='46'");
							
							while($row_ending_inventory=mysql_fetch_array($ld_ending_inventory))
							{
								
								$inid_ending_inventory=$row_ending_inventory['id']; 
									$getdutotal_ending_inventory=mysql_query("SELECT * FROM ladger t WHERE ladger_id='$inid_ending_inventory' AND t.ladger_date >= '$endto' and t.ladger_date <= '$endfrom'");
										$debit_ending_inventory=0;
										$cradit_ending_inventory=0;
									while($due_ending_inventory=mysql_fetch_array($getdutotal_ending_inventory))
									{
										$debit_ending_inventory+=$due_ending_inventory['debit'];
										$cradit_ending_inventory+=$due_ending_inventory['cradit'];
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
							$chkfourcountled=mysql_query("SELECT * FROM head_sub_list WHERE list_of_head_accounts_id='4' AND list_of_sub_head_accounts_id='1'");
							$cogs=0;
							while($cogsexpense=mysql_fetch_array($chkfourcountled))
							{
							$cogsid=$cogsexpense['id'];
								$chkvisibleledgeraccount=mysql_num_rows(mysql_query("SELECT * FROM ladger_list_properties WHERE main_head_id='4' AND head_sub_list_id='$cogsid'"));
							if($chkvisibleledgeraccount!=0)
							{
							$ld=mysql_query("SELECT * FROM ladger_list_properties WHERE main_head_id='4' AND head_sub_list_id='$cogsid' AND head_sub_list_id!='240'");
							$total_revenue=0;
							while($row=mysql_fetch_array($ld))
							{
								
								$inid=$row['id']; 
									$getdutotal=mysql_query("SELECT * FROM ladger WHERE ladger_id='$inid'");
										$debit=0;
										$cradit=0;
									while($due=mysql_fetch_array($getdutotal))
									{
										$debit+=$due['debit'];
										$cradit+=$due['cradit'];
									}
								if($debit!=0)
								{
							?>
                                
                                <tr>
                                	<th valign="middle" align="left">
                                    <a href="viewledger.php?ladger_id=<?php echo $inid; ?>"><?php echo $row['head_sub_list_name']; ?></a>
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
							$ld=mysql_query("SELECT * FROM ladger_list_properties WHERE main_head_id='4' AND head_sub_list_id='240'");
							$fr=0;
							while($row=mysql_fetch_array($ld))
							{
								
								$inid=$row['id']; 
									$getdutotal=mysql_query("SELECT * FROM ladger WHERE ladger_id='$inid'");
										$debit=0;
										$cradit=0;
									while($due=mysql_fetch_array($getdutotal))
									{
										$debit+=$due['debit'];
										$cradit+=$due['cradit'];
									}
								if($debit!=0)
								{
							?>
                                
                                <tr>
                                	<th valign="middle" align="left">
                                    <a href="viewledger.php?ladger_id=<?php echo $inid; ?>"><?php echo $row['head_sub_list_name']; ?></a>
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
                                  <th valign="middle" align="left">Total Direct Expense</th>
                                  <td align="right" valign="middle"><strong><?php
								  $totaldirectexpense=$begininginventory+$fr+$cogs;
								    echo number_format($begininginventory+$fr+$cogs,2);
								  ?></strong></td>
                            </tr> 
                             <tr>
                               <th valign="middle" align="left">(Less) </th>
                               <th align="right" valign="middle">&nbsp;</th>
                             </tr>
                             <!--purchase_discount-->
                              <?php
							$ld_purchase_discount=mysql_query("SELECT * FROM ladger_list_properties WHERE main_head_id='2' AND head_sub_list_id='382'");
							$purchase_discount=0;
							while($row_purchase_discount=mysql_fetch_array($ld_purchase_discount))
							{
								
								$inid_purchase_discount=$row_purchase_discount['id']; 
									$getdutotal_purchase_discount=mysql_query("SELECT * FROM ladger WHERE ladger_id='$inid_purchase_discount'");
										$debit_purchase_discount=0;
										$cradit_purchase_discount=0;
									while($due_purchase_discount=mysql_fetch_array($getdutotal_purchase_discount))
									{
										$debit_purchase_discount+=$due_purchase_discount['debit'];
										$cradit_purchase_discount+=$due_purchase_discount['cradit'];
										$purchase_discount+=$due_purchase_discount['debit']-$due_purchase_discount['cradit'];
									}
								if($purchase_discount!=0)
								{
							?>
                                
                                <tr>
                                	<th valign="middle" align="left">
                                    <a href="viewledger.php?ladger_id=<?php echo $inid_purchase_discount; ?>"><?php echo $row_purchase_discount['head_sub_list_name']; ?></a>
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
							$ld_purchase_return=mysql_query("SELECT * FROM ladger_list_properties WHERE main_head_id='2' AND head_sub_list_id='375'");
							
							while($row_purchase_return=mysql_fetch_array($ld_purchase_return))
							{
								
								$inid_purchase_return=$row_purchase_return['id']; 
									$getdutotal_purchase_return=mysql_query("SELECT * FROM ladger WHERE ladger_id='$inid_purchase_return'");
										$debit_purchase_return=0;
										$cradit_purchase_return=0;
										$purchase_return=0;
									while($due_purchase_return=mysql_fetch_array($getdutotal_purchase_return))
									{
										$debit_purchase_return+=$due_purchase_return['debit'];
										$cradit_purchase_return+=$due_purchase_return['cradit'];
										$purchase_return=$due_purchase_return['debit']-$due_purchase_return['cradit'];
									}
								if($purchase_return!=0)
								{
							?>
                                
                                <tr>
                                	<th valign="middle" align="left">
                                    <a href="viewledger.php?ladger_id=<?php echo $inid_purchase_return; ?>"><?php echo $row_purchase_return['head_sub_list_name']; ?></a>
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
							$chkfourcountled=mysql_query("SELECT * FROM head_sub_list WHERE list_of_head_accounts_id='4' AND list_of_sub_head_accounts_id='2' AND list_of_sub_head_list_id!='35'");
							$opex=0;
							while($cogsexpense=mysql_fetch_array($chkfourcountled))
							{
							$cogsid=$cogsexpense['id'];
								$chkvisibleledgeraccount=mysql_num_rows(mysql_query("SELECT * FROM ladger_list_properties WHERE main_head_id='4' AND head_sub_list_id='$cogsid'"));
							if($chkvisibleledgeraccount!=0)
							{
							$ld=mysql_query("SELECT * FROM ladger_list_properties WHERE main_head_id='4' AND head_sub_list_id='$cogsid'");
							while($row=mysql_fetch_array($ld))
							{
								
								$inid=$row['id']; 
									$getdutotal=mysql_query("SELECT * FROM ladger WHERE ladger_id='$inid'");
										$debit=0;
										$cradit=0;
									while($due=mysql_fetch_array($getdutotal))
									{
										$debit+=$due['debit'];
										$cradit+=$due['cradit'];
									}
								if($debit!=0)
								{
							?>
                                <tr>
                                	<th valign="middle" align="left">
                                    <a href="viewledger.php?ladger_id=<?php echo $inid; ?>"><?php echo $row['head_sub_list_name']; ?></a>
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
								$chkincomestatement=mysql_num_rows(mysql_query("SELECT * FROM income_statement WHERE year='$year'"));
								if($chkincomestatement!=0)
								{
								mysql_query("UPDATE income_statement SET amount='$netprofit',totalincome='$tincome',directexpense='$cogs',grossprofit='$gross_profit',date='$date' WHERE year='$year'");
								}
								else
								{
								mysql_query("INSERT INTO income_statement (amount,totalincome,directexpense,grossprofit,year,date) VALUES ('$netprofit','$tincome','$cogs','$gross_profit','$year','$date')");
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