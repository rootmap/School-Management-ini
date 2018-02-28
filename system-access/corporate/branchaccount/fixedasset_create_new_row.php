<?php
include('class_file/auth.php');
extract($_GET);
?>
	<script type="text/javascript">
          function sum()
          {
             var num1 = document.myform.cost.value;
             var num2 = document.myform.installation.value;
			 var num3= document.myform.charge.value;
			 
             var sum = parseInt(num1) + parseInt(num2) + parseInt(num3);
             document.getElementById('total').value = sum;
          }
		  
		   function sum_depriciation()
          {
             var num11 = document.myform.normal.value;
             var num22 = document.myform.double.value;
			 var num33= document.myform.three.value;
			 
             var sum_depriciation = parseInt(num11) + parseInt(num22) + parseInt(num33);
             document.getElementById('totald').value = sum_depriciation;
          }
        </script>
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
                        <span><i class="icon-magic"></i> Create New Item For ( 
						<?php echo $q;
						//$sqlq=$obj->SelectAllByID_Multiple("account_module_head_list",array("head_title"=>$q));
						//$idq=mysql_fetch_array($sqlq);
						$lid=$obj->SelectAllByVal("account_module_head_list","head_title",$q,"id");
																			 
																			 
						//$sql_rate=mysql_query("SELECT * FROM fixassetrates WHERE =''");
						//$fetrate=mysql_fetch_array($sql_rate);
						$rates=$obj->SelectAllByVal("account_module_fixassetrates","achid",$lid,"rates");
										
																			 
																			 ?> )</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <form class="mws-form wzd-validate" name="myform" method="get" action="class_file/class/create_row_for_fixed_asset.php">
                            
                            <fieldset class="wizard-step mws-form-inline">
                                <legend class="wizard-label"><i class="icol-accept"></i> Brief Description of Asset</legend>
                                <div id class="mws-form-row">
                                    <label class="mws-form-label">Product / Asset ID <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <input type="text" name="pidname" class="required short" placeholder="Ex.  C-F">
                                        <input type="hidden" name="lid" value="<?php echo $lid; ?>">
                                        <input type="text" name="pid" class="required short" placeholder="001">
                                        <input type="hidden" name="q" value="<?php echo $q; ?>">
                                        <input type="hidden" name="rates" value="<?php echo $rates; ?>">
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">Supplier Name <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <select class="mws-select2 short" name="sup_name">
                                                
                                                <option>Please Select</option>
                                                <?php 
												$sqlsup=$obj->SelectAll("account_module_vendor");
												foreach($sqlsup as $row)
												{
												?>
                                                <option value="<?php echo $row->id; ?>"><?php echo $row->company_name; ?></option>
                                                <?php
												}
												?>
                                                
                                            </select>
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">Physical Location <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <textarea name="location" rows="" cols="" class="required large"></textarea>
                                    </div>
                                </div>
                            </fieldset>
                            
                            <fieldset class="wizard-step mws-form-inline">
                                <legend class="wizard-label"><i class="icol-delivery"></i> Total Cost</legend>
                                <div id class="mws-form-row">
                                    <label class="mws-form-label">Purchase Date <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <input type="text" name="dop" class="mws-datepicker large" placeholder="DD-MM-YYYY">
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">Purchase Cost <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <input type="text" name="cost" class="required short" placeholder="Ex. 300000">
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">Installation <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <input type="text" name="installation" class="required short" placeholder="Ex. 3000">
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">Other Charge <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <input type="text" name="charge" class="required short" placeholder="Ex. 3000">
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">Total <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <input type="text" name="total" onClick="sum()" id="total" class="required short" placeholder="Ex. 3300000">
                                    </div>
                                </div>
                            </fieldset>
                            
                            <!--<fieldset class="wizard-step mws-form-inline">
                                <legend class="wizard-label"><i class="icol-delivery"></i> Used </legend>
                                <div id class="mws-form-row">
                                    <label class="mws-form-label">No. of Days <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <select class="mws-select2 short" name="nod">
                                                
                                                <option>Please Select</option>
                                                <?php 
												//for($i=1; $i<=20000; $i++)
												//{
												?>
                                                <option value="<?php //echo $i; ?>"><?php //echo $i; ?> Days</option>
                                                <?php
												//}
												?>
                                                
                                            </select>
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">Years <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <select class="mws-select2 short" name="years">
                                                <option>Please Select</option>
                                                <?php 
												//for($i=date('Y'); $i>=1800; $i--)
												//{
												?>
                                                <option value="<?php //echo $i; ?>"><?php //echo $i; ?> Years</option>
                                                <?php
												//}
												?>
                                            </select>
                                    </div>
                                </div>
                           	</fieldset>-->
                           
                            <fieldset class="wizard-step mws-form-inline">
                                <legend class="wizard-label"><i class="icol-user"></i> Depriciation</legend>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">Normal <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <input type="text" name="normal" class="required short" placeholder="Ex. 330" onClick="this.form.normal.value = this.form.total.value * this.form.rates.value / 100;">
                                   </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">Double <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <input type="text" name="double" class="required short" placeholder="Ex. 330">
                                   </div>
                                </div>
                                
                                <div class="mws-form-row">
                                    <label class="mws-form-label">Three <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <input type="text" name="three" class="required short" placeholder="Ex. 330">
                                   </div>
                                </div>
                                
                                <div class="mws-form-row">
                                    <label class="mws-form-label">Total <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <input type="text" name="totald" id="totald" onClick="sum_depriciation()"  class="required short" placeholder="Ex. 330">
                                   </div>
                                </div>
                                
                                <div class="mws-form-row">
                                    <label class="mws-form-label">Cumulated Depriciation <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <input type="text" name="cumdep" onClick="this.form.cumdep.value = this.form.totald.value;" class="required short" placeholder="Ex. 3000">
                                   </div>
                                </div>
                                
                                <div class="mws-form-row">
                                    <label class="mws-form-label">W.D.V. <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <input type="text" name="wdv" class="required short" placeholder="Ex. 3000" onClick="this.form.wdv.value = this.form.total.value - this.form.cumdep.value;">
                                   </div>
                                </div>
                            </fieldset>
                            
                            <!--<fieldset class="wizard-step mws-form-inline">
                                <legend class="wizard-label"><i class="icol-user"></i> Sales / Transfer</legend>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">Adjustment <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <input type="text" name="adjustment" class="required short" placeholder="Ex. 3000">
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">Total Depriciation Clamied Till Date of Sales <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <input type="text" name="tdctdos" class="required short" placeholder="Ex. 3000">
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">Adjusted WDV <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <input type="text" name="awdv" class="required short" placeholder="Ex. 3000">
                                    </div>
                                </div>
								<div class="mws-form-row">
                                    <label class="mws-form-label">Proceed <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <input type="text" name="proceed" class="required short" placeholder="Ex. 3000">
                                    </div>
                                </div>
								
                                <div class="mws-form-row">
                                    <label class="mws-form-label">Profit & Loss on Sale <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <input type="text" name="plos" class="required short" placeholder="Ex. 3000">
                                    </div>
                                </div>
								
                            </fieldset>
                            
                            
                            <fieldset class="wizard-step mws-form-inline">
                                <legend class="wizard-label"><i class="icol-user"></i> Physical Verification</legend>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">On Date <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <input type="text" name="ondate" class="required short" placeholder="Ex. DD-MM-YYYY">
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">By Whom <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <input type="text" name="bywhim" class="required short" placeholder="Who">
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">I agree to Create <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <ul class="mws-form-list inline">
                                            <li><input type="checkbox" id="tos_y" name="tos" class="required"> <label for="tos_y">Yes</label></li>
                                        </ul>
                                        <label class="error plain" generated="true" for="tos" style="display:none"></label>
                                    </div>
                                </div>
                            </fieldset>-->
                        </form>
                    </div>
                </div>
                
                
                
                <!-- Panels End -->
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
            <div id="mws-footer">
            	Copyright Ucchash 2012. All Rights Reserved.
            </div>
            
        </div>
        <!-- Main Container End -->
        
    </div>

    <!-- JavaScript Plugins -->
    <script src="../js/libs/jquery-1.8.3.min.js"></script>
    <script src="../js/libs/jquery.mousewheel.min.js"></script>
    <script src="../js/libs/jquery.placeholder.min.js"></script>
    <script src="../custom-plugins/fileinput.min.js"></script>

    <!-- jQuery-UI Dependent Scripts -->
    <script src="../jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="../jui/jquery-ui.custom.min.js"></script>
    <script src="../jui/js/jquery.ui.touch-punch.min.js"></script>
    <script src="../jui/js/timepicker/jquery-ui-timepicker.min.js"></script>

    <!-- Plugin Scripts -->
    <script src="../plugins/imgareaselect/jquery.imgareaselect.min.js"></script>
    <script src="../plugins/jgrowl/jquery.jgrowl-min.js"></script>
    <script src="../plugins/colorpicker/colorpicker-min.js"></script>
    <script src="../plugins/validate/jquery.validate-min.js"></script>

    <!-- Wizard Plugin -->
    <script src="../custom-plugins/wizard/wizard.min.js"></script>
    <script src="../custom-plugins/wizard/jquery.form.min.js"></script>

    <!-- Core Script -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="../js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="../js/demo/demo.wizard.js"></script>

</body>

<!-- Mirrored from www.malijuthemeshop.com/live_previews/mws-admin/form_wizard.html by HTTrack Website Copier/3.x [XR&CO'2010], Mon, 07 Jan 2013 09:12:22 GMT -->
</html>
