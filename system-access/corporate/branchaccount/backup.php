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
                        <li><a href="../index.html">Logout</a></li>
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
                <div class="mws-panel grid_8" style="margin-top:-50px;">
					
                    <div class="mws-panel-body no-padding">
                    <h2 style="padding-left:20px; padding-top:20px; color:#063;"><i class="icon-table"></i> Balance Sheet : Summary </h2>	
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
                
                
                
           	  	<div class="mws-panel grid_8" style="margin-top:-45px;">
                	<div class="mws-panel-body no-padding">
                    <h2 align="center">Balance Sheet</h2>
                    <h3 align="center">Expected</h3>
                    <h3 align="center">Reporting Period 01/01/2013 To <?php echo date('d/m/Y');  ?></h3>
                        <table class="mws-table">
                            <tbody>
                            <tr><th valign="middle" align="left" style="padding-left:10px;">Accounts</th>
                                <th align="center" valign="middle" style="color:#000; font-size:15px; font-weight:bolder;"></th>
                            </tr>
							<tr>
							  <th valign="middle" align="left" style="padding-left:10px; font-size:18px;">Asset</th>
							  <th align="center" valign="middle"></th>
							  </tr>
							<tr>
                                <th valign="middle" align="left" style="padding-left:10px; font-size:18px; font-weight:normal;">Bank</th>
                                <th align="center" valign="middle"></th>
                            </tr>
                            <?php
							$chkfourcountled=mysql_query("SELECT * FROM head_sub_list WHERE list_of_head_accounts_id='1' AND list_of_sub_head_accounts_id='1'");
							$cogs=0;
							while($cogsexpense=mysql_fetch_array($chkfourcountled))
							{
							$cogsid=$cogsexpense['id'];
								$chkvisibleledgeraccount=mysql_num_rows(mysql_query("SELECT * FROM ladger_list_properties WHERE main_head_id='1' AND head_sub_list_id='$cogsid'"));
							if($chkvisibleledgeraccount!=0)
							{
								
								$ld=mysql_query("SELECT * FROM ladger_list_properties WHERE main_head_id='1' AND head_sub_list_id='$cogsid'");
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
										$netm=$debit-$cradit;
										if($netm!=0)
										{
							?>
                                        <tr>
                                            <th valign="middle" align="left" style="padding-left:10px;">
                                            <a style="color:#09C; font-size:15px; font-weight:bolder;" href="viewledger.php?ladger_id=<?php echo $inid; ?>"><?php echo $row['head_sub_list_name']; ?></a>
                                            </th>
                                            <td align="center" valign="middle" style="color:#09C; font-size:18px; font-weight:bolder;"><strong>
                                            <?php 
                                            
                                            
                                            $getch=substr($netm,0,1);
                                            if($getch!='-')
                                            { echo number_format($netm,2); }
                                            else
                                            { echo number_format(substr($netm,1,200),2); }  
                                            $total_revenue+=$netm;
                                            ?></strong></td>
                                        </tr>
                                     <?php
                                            }
                                     } 
							}
							
							}
							 ?> 
                            <tr><th valign="middle" align="left" style="padding-left:10px; font-size:15px">Total for Bank</th>
                                <th align="center" valign="middle" style="color:#000; font-size:15px; font-weight:bolder;"><?php 
								$chktr=substr($total_revenue,0,1);
								if($chktr!='-')
								{ 
								echo number_format($totalforbank=$total_revenue,2);
								}
								else
								{
								echo number_format($totalforbank=substr($total_revenue,1,200),2); 
								}
								
								?></th>
                            </tr>
                            <!--bank query end -->
                            <!--current asset start -->
                            <tr>
                                <th valign="middle" align="left" style="padding-left:10px; font-size:18px; font-weight:normal;">Current Asset</th>
                                <th align="center" valign="middle"></th>
                            </tr>
                            <?php
							$chkfourcountled=mysql_query("SELECT * FROM head_sub_list WHERE list_of_head_accounts_id='1' AND list_of_sub_head_accounts_id='2'");
							$currentasset=0;
							while($cogsexpense=mysql_fetch_array($chkfourcountled))
							{
							$cogsid=$cogsexpense['id'];
								$chkvisibleledgeraccount=mysql_num_rows(mysql_query("SELECT * FROM ladger_list_properties WHERE main_head_id='1' AND head_sub_list_id='$cogsid'"));
							if($chkvisibleledgeraccount!=0)
							{
								
								$ld=mysql_query("SELECT * FROM ladger_list_properties WHERE main_head_id='1' AND head_sub_list_id='$cogsid'");
								
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
										$netm1=$debit-$cradit;
										if($netm1!=0)
										{
							?>
                                        <tr>
                                            <th valign="middle" align="left" style="padding-left:10px;">
                                            <a style="color:#09C; font-size:15px; font-weight:bolder;" href="viewledger.php?ladger_id=<?php echo $inid; ?>"><?php echo $row['head_sub_list_name']; ?></a>
                                            </th>
                                            <td align="center" valign="middle" style="color:#09C; font-size:18px; font-weight:bolder;"><strong>
                                            <?php 
                                            
                                            
                                            $getch=substr($netm1,0,1);
                                            if($getch!='-')
                                            { echo number_format($netm1,2); }
                                            else
                                            { echo number_format(substr($netm1,1,200),2); }  
                                           $currentasset+=$netm1;
                                            ?></strong></td>
                                        </tr>
                                     <?php
                                            }
                                     } 
							}
							
							}
							 ?> 
                            <tr><th valign="middle" align="left" style="padding-left:10px; font-size:15px">Total for Current Asset</th>
                                <th align="center" valign="middle" style="color:#000; font-size:15px; font-weight:bolder;"><?php 
								$chktr=substr($currentasset,0,1);
								if($chktr!='-'){ echo number_format($currentassettotal=$currentasset,2); }else{ echo number_format($currentassettotal=substr($currentasset,1,200),2); }
								
								?></th>
                            </tr>
                            <!--Fixed asset start -->
                            <tr>
                                <th valign="middle" align="left" style="padding-left:10px; font-size:18px; font-weight:normal;">Fixed Asset</th>
                                <th align="center" valign="middle"></th>
                            </tr>
                            <?php
							$chkfourcountled=mysql_query("SELECT * FROM head_sub_list WHERE list_of_head_accounts_id='1' AND list_of_sub_head_accounts_id='3'");
							$fixedasset=0;
							while($cogsexpense=mysql_fetch_array($chkfourcountled))
							{
							$cogsid=$cogsexpense['id'];
								$chkvisibleledgeraccount=mysql_num_rows(mysql_query("SELECT * FROM ladger_list_properties WHERE main_head_id='1' AND head_sub_list_id='$cogsid'"));
							if($chkvisibleledgeraccount!=0)
							{
								
								$ld=mysql_query("SELECT * FROM ladger_list_properties WHERE main_head_id='1' AND head_sub_list_id='$cogsid'");
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
										$netm2=$debit-$cradit;
										if($netm2!=0)
										{
							?>
                                        <tr>
                                            <th valign="middle" align="left" style="padding-left:10px;">
                                            <a style="color:#09C; font-size:15px; font-weight:bolder;" href="viewledger.php?ladger_id=<?php echo $inid; ?>"><?php echo $row['head_sub_list_name']; ?></a>
                                            </th>
                                            <td align="center" valign="middle" style="color:#09C; font-size:18px; font-weight:bolder;"><strong>
                                            <?php 
                                            
                                            
                                            $getch=substr($netm2,0,1);
                                            if($getch!='-')
                                            { echo number_format($netm2,2); }
                                            else
                                            { echo number_format(substr($netm2,1,200),2); }  
                                            $fixedasset+=$debit-$cradit;
                                            ?></strong></td>
                                        </tr>
                                     <?php
                                            }
                                     } 
							}
							
							}
							 ?> 
                            <tr><th valign="middle" align="left" style="padding-left:10px; font-size:15px">Total for Fixed Asset</th>
                                <th align="center" valign="middle" style="color:#000; font-size:15px; font-weight:bolder;"><?php 
								$chktr=substr($fixedasset,0,1);
								if($chktr!='-'){ echo number_format($fixedassettotal=$fixedasset,2); }else{ echo number_format($fixedassettotal=substr($fixedasset,1,200),2); }
								
								?></th>
                            </tr>
                            <!--liability section start -->
                            <!--Fixed asset start -->
                            <tr>
                              <th valign="middle" align="left" style="padding-left:10px; font-size:18px;">&nbsp;</th>
                              <th align="center" valign="middle"></th>
                            </tr>
                            <tr>
							  <th valign="middle" align="left" style="padding-left:10px; font-size:18px;">Total Asset</th>
							  <th align="center" valign="middle"><?php echo number_format($totalasset=$total_revenue+$currentasset,2); ?></th>
							  </tr>
                              <tr>
							  <th valign="middle" align="left" style="padding-left:10px; font-size:18px;">&nbsp;</th>
							  <th align="center" valign="middle"></th>
							  </tr>
                            <tr>
							  <th valign="middle" align="left" style="padding-left:10px; font-size:18px;">Liability</th>
							  <th align="center" valign="middle"></th>
							  </tr>
                            <tr>
                                <th valign="middle" align="left" style="padding-left:10px; font-size:18px; font-weight:normal;">Current Liability</th>
                                <th align="center" valign="middle"></th>
                            </tr>
                            <?php								
								$ld=mysql_query("SELECT * FROM ladger_list_properties WHERE main_head_id='2'");
								$liabilitycurrent=0;
								while($row=mysql_fetch_array($ld))
								{
									
									$inid=$row['id']; 
										$getdutotal=mysql_query("SELECT * FROM ladger WHERE ladger_id='$inid' AND ladger_id!='41'");
											$debit=0;
											$cradit=0;
										while($due=mysql_fetch_array($getdutotal))
										{
											$debit+=$due['debit'];
											$cradit+=$due['cradit'];
										}
										$netm3=$debit-$cradit;
										if($netm3!=0)
										{
							?>
                                        <tr>
                                            <th valign="middle" align="left" style="padding-left:10px;">
                                            <a style="color:#09C; font-size:15px; font-weight:bolder;" href="viewledger.php?ladger_id=<?php echo $inid; ?>"><?php echo $row['head_sub_list_name']; ?></a>
                                            </th>
                                            <td align="center" valign="middle" style="color:#09C; font-size:18px; font-weight:bolder;"><strong>
                                            <?php 
                                            
                                            
                                            $getch=substr($netm3,0,1);
                                            if($getch!='-')
                                            { echo number_format($netm3,2); }
                                            else
                                            { echo number_format(substr($netm3,1,200),2); }  
                                            $liabilitycurrent+=$netm3;
                                            ?></strong></td>
                                        </tr>
                                     <?php
										}
                                     } 
							 ?> 
                            <tr>
                              <th valign="middle" align="left" style="padding-left:10px; font-size:15px">Total for Current Liability</th>
                                <th align="center" valign="middle" style="color:#000; font-size:15px; font-weight:bolder;"><?php 
								$chktr=substr($liabilitycurrent,0,1);
								if($chktr!='-'){ echo number_format($liabilitycurrenttotal=$liabilitycurrent,2); }else{ echo number_format($liabilitycurrenttotal=substr($liabilitycurrent,1,200),2); }
								
								?></th>
                            </tr>
                            <tr>
                              <th valign="middle" align="left" style="padding-left:10px; font-size:15px">Total Liabilities</th>
                                <th align="center" valign="middle" style="color:#000; font-size:15px; font-weight:bolder;"><?php 
								
								$sdh=$liabilitycurrent;
								$s1=substr($sdh,0,1);
								if($s1=="-")
								{
									echo number_format(substr($sdh,1,200),2);
								}
								else
								{
									number_format($sdh,2);
								}
								
								
								
								?></th>
                            </tr>
                            
                             <!--liability section start -->
                            <!--Fixed asset start -->
                            <tr>
							  <th valign="middle" align="left" style="padding-left:10px; font-size:18px;">&nbsp;</th>
							  <th align="center" valign="middle"></th>
							  </tr>
                              <tr>
							  <th valign="middle" align="left" style="padding-left:10px; font-size:18px;">&nbsp;</th>
							  <th align="center" valign="middle"></th>
							  </tr>
                            <tr>
							  <th valign="middle" align="left" style="padding-left:10px; font-size:18px;"> 
Equity</th>
							  <th align="center" valign="middle"></th>
							  </tr>
                            <?php
							$chkfourcountled=mysql_query("SELECT * FROM head_sub_list WHERE list_of_head_accounts_id='5'");
							$totalequity=0;
							while($cogsexpense=mysql_fetch_array($chkfourcountled))
							{
							$cogsid=$cogsexpense['id'];
								$chkvisibleledgeraccount=mysql_num_rows(mysql_query("SELECT * FROM ladger_list_properties WHERE main_head_id='5' AND head_sub_list_id='$cogsid'"));
							if($chkvisibleledgeraccount!=0)
							{
								
								$ld=mysql_query("SELECT * FROM ladger_list_properties WHERE main_head_id='5' AND head_sub_list_id='$cogsid'");
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
										$netm4=$debit-$cradit;
										if($netm4!=0)
										{
							?>
                                        <tr>
                                            <th valign="middle" align="left" style="padding-left:10px;">
                                            <a style="color:#09C; font-size:15px; font-weight:bolder;" href="viewledger.php?ladger_id=<?php echo $inid; ?>"><?php echo $row['head_sub_list_name']; ?></a>
                                            </th>
                                            <td align="center" valign="middle" style="color:#09C; font-size:18px; font-weight:bolder;"><strong>
                                            <?php 
                                            
                                            
                                            $getch=substr($netm4,0,1);
                                            if($getch!='-')
                                            { echo number_format($netm4,2); }
                                            else
                                            { echo number_format(substr($netm4,1,200),2); }  
                                            $totalequity+=$netm4;
                                            ?></strong></td>
                                        </tr>
                                     <?php
                                            }
                                     } 
							}
							
							}
							 ?>
                            
                           
                            <tr>
                              <th valign="middle" align="left" style="padding-left:10px; font-size:15px">Previous Year(s) Earnings</th>
                              <th align="center" valign="middle" style="color:#000; font-size:15px; font-weight:bolder;">
                              <?php
							  $preyear=date('Y');
							  $previousyear=$preyear-1;
							  $chkpredata=mysql_num_rows(mysql_query("SELECT * FROM  income_statement WHERE year='$previousyear'"));
							  if($chkpredata==0)
							  {
								 echo number_format("0",2); 
							  }
							  else
							  {
								  $querypre=mysql_query("SELECT * FROM income_statement WHERE year='$previousyear'");
								  $fetpre=mysql_fetch_array($querypre);
								  echo number_format($fetpre['amount'],2);
							  }
							  ?>
                              </th>
                            </tr>
                            <tr>
                              <th valign="middle" align="left" style="padding-left:10px; font-size:15px">Current Year Earnings</th>
                              <th align="center" valign="middle" style="color:#000; font-size:15px; font-weight:bolder;">
                              <!--income statement result script-->
                            <?php 
							$inyear=date('Y');
							$netprofit_query=mysql_query("SELECT * FROM  income_statement WHERE year='$inyear'");
							$fetnet=mysql_fetch_array($netprofit_query);
							$netprofit=$fetnet['amount'];
							$chknp=substr($netprofit,0,1);
							$chknpp=substr($netprofit,1,200);
							
							if($chknp!="-")
							{
								echo number_format($netprofit,2);
							}
							else
							{
								echo "(".number_format(substr($netprofit,1,200),2).")";
							}
							?>
							<!--income statement result calculate end-->
                              </th>
                            </tr>
                            <tr>
                              <th valign="middle" align="left" style="padding-left:10px; font-size:15px">Total Equity</th>
                              <th align="center" valign="middle" style="color:#000; font-size:15px; font-weight:bolder;"><?php 
							  $feq=$totalequity+$netprofit;
							  
							  $chknp1=substr($feq,0,1);
							
							if($chknp1!="-")
							{
								echo number_format($feq,2);
							}
							else
							{
								echo "(".number_format(substr($feq,1,200),2).")";
							}
							?>
							</th>
                            </tr>
                            <tr>
                              <th valign="middle" align="left" style="padding-left:10px; font-size:15px">&nbsp;</th>
                              <th align="center" valign="middle" style="color:#000; font-size:15px; font-weight:bolder;"></th>
                            </tr>
                            <tr><th valign="middle" align="left" style="padding-left:10px; font-size:15px">Total Liabilities and Equity</th>
                                <th align="center" valign="middle" style="color:#000; font-size:15px; font-weight:bolder;"><?php $totalasset=$total_revenue+$currentasset;
								echo number_format($totalasset,2);
								
								$year=date('Y');
								$date=date('Y-m-d');
								$chkbalancesheet=mysql_num_rows(mysql_query("SELECT * FROM  balancesheet WHERE year='$year'"));
								if($chkbalancesheet!=0)
								{
									mysql_query("UPDATE  balancesheet SET totalasset='$totalasset',totalliability='$liabilitycurrent',totalequity='$feq',date='$date' WHERE year='$year'");
								}
								else
								{
									mysql_query("INSERT INTO  balancesheet (totalasset,totalliability,totalequity,year,date) VALUES ('$totalasset','$liabilitycurrent','$feq','$year','$date')");
								}
								
								?></th>
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