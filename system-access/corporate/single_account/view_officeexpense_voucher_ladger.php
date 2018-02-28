<?php
include('class_file/auth.php'); extract($_GET);
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
                
           	  <div class="grid_8">
                    <div class="mws-panel">
                        <div class="mws-panel-header">
                            <span><i class="icon-archive"></i>Office Expense Voucher ID : Office-Ex-V-<?php echo $id; ?></span>
                        </div>
                        <div class="mws-panel-body no-padding">
                            <form id="mws-validate" name="frmMr"  class="mws-form" action="#" method="post">
                            <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
                                <div class="mws-form-inline">                  
                                    <div class="mws-panel-body no-padding">
                                    <?php 
									//$sqlw=$obj->SelectAllByID("account_module_office_expense_voucher",array("id"=>$id));
									//foreach($sqlw as $fetd):
							$date=$obj->SelectAllByVal("account_module_office_expense_voucher","id",$id,"vdate");
							$d=$obj->SelectAllByVal("account_module_office_expense_voucher","id",$id,"dr");
							$c=$obj->SelectAllByVal("account_module_office_expense_voucher","id",$id,"cr");
							$des=$obj->SelectAllByVal("account_module_office_expense_voucher","id",$id,"description");
							$taka=$obj->SelectAllByVal("account_module_office_expense_voucher","id",$id,"taka");
									
									?>
                        <table class="mws-table">
                            <thead>
                                <tr>
                                  <th align="left" colspan="3">Voucher Date <input type="text" value="<?php echo $date; ?>" name="vdate" class="mws-datepicker large" readonly></th>
                                </tr>
                                <tr>
                                    <th align="left">Account</th>
                                    <th align="center">Description</th>
                                    <th align="center">Taka</th>
                                </tr>
                            </thead>
                            <tbody id="POITable">
                                <tr>
                                    <td align="left" valign="middle">
                                <label> <strong>Debit </strong> </label>
                                <?php
                                $sdf=$obj->SelectAllByID("account_module_ladger_list_properties",array("id"=>$d));
                                foreach($sdf as $row):
                                ?>
                            	<input type="text" value="<?php echo $row->head_sub_list_name; ?>" name="dr" readonly>
                                <?php
                                endforeach;
                                ?>
                                                
                                <br />
                                <br />
                                <label> <strong>Credit</strong> </label>
								<?
								$sql_q=$obj->SelectAllByID("account_module_ladger_list_properties",array("id"=>$c));
								foreach($sql_q as $rr):
								?>
             <input type="text" value="<?php echo $rr->head_sub_list_name; ?>" name="dr" readonly>
                                <?php endforeach; ?>
                                                
                                            </td>
                                    <td align="center" valign="middle">
                                    	<input type="text" class="required small" style="width:300px; height:70px;" disabled value="<?php echo $des; ?>" name="des" id="des">
                                    </td>
                                    <td align="center" valign="middle">
                                    	<input type="text" class="required small" value="<?php echo $taka; ?>" name="taka" id="taka" style="width:100px; height:50px; text-align:right; font-weight:bolder; font-size:18px;">
                                        
                                    </td>
                                </tr>
                                
                                 </tbody>
                            <!--<thead>
                                <tr>
                                    <th align="center"><button type="button" class="btn" onClick="insRow()"><i class="icon-plus"> </i> Add More Line</button></th>
                                    <th  align="right" valign="middle" style="font-weight:bolder;">Total</th>
                                    <th align="center" valign="middle"><input type="text" class="required equalTo small" style="font-weight:bolder; width:100px; background:none; border:0px; text-align:right;" readonly value="0.00" name="totaldebit" id="totaldebit"></th>
                                    <th align="center" valign="middle"><input type="text" class="required equalTo small" style="font-weight:bolder; width:100px; background:none; border:0px; text-align:right;" readonly value="0.00" name="totalcradit" id="totalcradit"></th>
                                </tr>
                            </thead>-->
                        </table>
                        
                    
                    <?php //endforeach; ?>
                           </div>        
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
                
                <!-- Panels End -->
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
             <?php include('header_footer_file/footer.php'); ?>