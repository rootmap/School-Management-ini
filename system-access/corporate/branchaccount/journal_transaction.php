<?php include('class_file/auth.php'); ?>
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
                
           	  <div class="mws-panel grid_8">
                                        <div class="btn-toolbar" style=" margin-top:-20px; margin-bottom:10px; float:right;">
                                        <a href="contra.php" class="btn btn-success"><i class="icol-add"></i> Add New Contra Journal Transaction</a>
                                    </div>
                                        <div class="btn-toolbar" style=" margin-bottom:10px;  margin-top:-20px; float:left;">
                                        <a href="add_transaction.php" class="btn btn-success"><i class="icol-add"></i> Add New Journal Transaction</a>
                                    </div>
                	<div class="clearfix"></div>
                    
                    <div class="mws-panel-body no-padding">
                        <table class="mws-datatable mws-table">
                            <thead>
                                <tr>
                                    <th align="center">Date</th>
                                    <th align="left">Description</th>
                                    <th align="center">Amount</th>
                                    <th align="center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
							$chk=$obj->totalrows("account_module_journal_description");
							if($chk==0)
							{
								?>
								<tr><td colspan="3"><?php echo $chk; ?> Record Found </td></tr>
                                <?php
							}
							else
							{
								$sql1=$obj->SelectAll("account_module_journal_description");
								foreach($sql1 as $row)
								{
								?>
									<tr class="em">
                                        <td valign="middle" align="center"><i class="icon-list-2"></i> <?php echo $row->jddate; ?> </td>
										<td align="left" style="color:#096; font-size:16px;"><a href="edit_transaction.php?id=<?php echo $id=$row->id; ?>&amp;rows=<?php echo $obj->exists_multiple("account_module_journal_transaction",array("jdid"=>$id)); ?>&amp;control=view" style="text-decoration:none; color:#069;"><i class="icon-stats"></i> <?php echo "&nbsp;&nbsp;&nbsp;".$row->jd; ?></a></td>
										
                                        <td valign="middle" align="center"> 
										<?php 
										$sqlamount=$obj->SelectAllByID("account_module_ladger",array("link_id"=>$row->link_id));
										$am=0;
										if(!empty($sqlamount))
										foreach($sqlamount as $mm):
											$am+=$mm->debit;
										endforeach; 
										echo number_format($am,2);
										?> Tk.
                                        </td>
										<td align="center" valign="middle"><a href="edit_transaction.php?id=<?php echo $id=$row->id; ?>&amp;rows=<?php echo $obj->exists_multiple("account_module_journal_transaction",array("jdid"=>$id)); ?>&amp;control=edit" style="text-decoration:none; color:#069;"><i class="icon-tools"></i> &nbsp; </a> </td>
									</tr>
								<?php
								}
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