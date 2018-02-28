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
                <div class="mws-panel grid_8" style="margin-top:-50px;">
					
                    <div class="mws-panel-body no-padding">
                    <h1 style="padding:20px 20px 20px 20px; color:#063;"><i class="icon-table"></i> 
Aged Payables : Summary </h1>	
                    	<form class="mws-form" action="http://www.malijuthemeshop.com/live_previews/mws-admin/form_layouts.html">
                    		<div class="mws-form-inline">
                    			<div class="mws-form-row">
                    				<label class="mws-form-label" style="font-size:20px; color:#000; font-weight:bolder;">From <font color="#FF0000">*</font></label>
                    				<div class="mws-form-item">
                    					<input type="text" class="mws-datepicker small" readonly style="width:300px;">
                    				</div>
                    			</div>
                                <div class="mws-form-row">
                    				<label class="mws-form-label" style="font-size:20px; color:#000; font-weight:bolder;">To <font color="#FF0000">*</font></label>
                    				<div class="mws-form-item">
                    					<input type="text" class="mws-datepicker small" readonly style="width:300px;">
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
                    <h2 align="center">Aged Payables</h2>
                    <h3 align="center">Created</h3>
                    <h3 align="center">From 01/01/2013 To <?php echo date('d/m/Y');  ?></h3>
                        <table class="mws-datatable-fn mws-table" style="margin-top:-30px;">
                            <thead>
                                <tr>
                                    <th><strong>Payables</strong></th>
                                    <th><strong>Current</strong></th>
                                    <th><strong>1-30</strong></th>
                                    <th><strong>31-60</strong></th>
                                    <th><strong>61-90</strong></th>
                                    <th><strong>91-200</strong></th>
                                    <th><strong>Total</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
							$ld=$obj->SelectAll("account_module_customer");
							foreach($ld as $row)
							{		
							?>
                                <tr>
                                	<td valign="middle" align="left"><?php echo $row->company_name; ?></td>
                                    <td valign="middle" align="center">
									<?php
										$uid=$row->id;
									?>
                                    </td>
                                    <td align="center" valign="middle"><?php //echo $cradit; ?></td>
									<td valign="middle" align="left"><?php //echo $row['head_sub_list_name']; ?></td>
                                    <td valign="middle" align="center"><?php //echo $debit; ?></td>
                                    <td align="center" valign="middle"><?php //echo $cradit; ?></td>
                                    <td align="center" valign="middle"><strong></strong></td>
                                </tr>
                             <?php } ?> 
                             
                            </tbody>
                            
                        </table>
                        <table class="mws-table">
                            <tbody><?php
									$getdutotala=mysql_query("SELECT * FROM ladger");
										$debitt=0;
										$craditt=0;
									while($duet=mysql_fetch_array($getdutotala))
									{
										$debitt+=$duet['debit'];
										$craditt+=$duet['cradit'];
									}
									
							?>
                                <tr>
                                	<th width="400">&nbsp;</th>
                                    <th><strong>Total </strong></th>
                                    <th><strong>Debit = <?php echo $debitt; ?></strong></th>
                                    <th><strong>Cradit = <?php echo $craditt; ?></strong></th>
                                    <th><strong>Net Movement = <?php echo $debitt-$craditt; ?></strong></th>
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