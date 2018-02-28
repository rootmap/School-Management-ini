<?php include('class_file/auth.php'); ?>
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>-->
<script src="jquery.min.js"></script>
<script>
        $(document).ready ( function () {
            $("#btn1").click ( function () {
              var debit = 0.0;
			  var cradit = 0.0;
			  var aa;
			  var bb;
			  
               $(".test").each ( function() {
                   debit += parseFloat ( $(this).val().replace(/\s/g,'').replace(',','.'));
                });
                //alert ( debit );
				aa=document.getElementById('totaldebit').value= debit;
				
				 $(".tests").each ( function() {
                   cradit += parseFloat ( $(this).val().replace(/\s/g,'').replace(',','.'));
                });
				 //alert ( cradit );
                bb=document.getElementById('totalcradit').value= cradit;
				
				if(document.getElementById('totaldebit').value != document.getElementById('totalcradit').value) 
				{
					alert("Check Your Value First");
					return false;
				}
				
				
            });
        });
		
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
                	
				<?php //include('header_footer_file/accjournalbalance.php'); ?>
                </div>
                              
                <!-- Panels Start -->
                
           	  <div class="grid_8">
                    <div class="mws-panel">
                        <div class="mws-panel-header">
                            <span>Add New Journal Transactions</span>
                        </div>
                        <div class="mws-panel-body no-padding">
                            <form id="mws-validate" name="frmMr"  class="mws-form" action="class_file/class/add_journal_transaction.php" method="post">
                            <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
                                <div class="mws-form-inline">
                                	<div class="mws-form-row">
                                        <div class="mws-form-row">
                                        	<label class="mws-form-label"><span>Your Description <font color="#FF0000">*</font></span></label>
                                            <div class="mws-form-item">
                                            <input type="text" name="jd" id="jd" class="required large">
                                            </div>
                                        </div>
                                        <div class="mws-form-row" style="width:50%; text-align:left; float:left;">
                                        	<label class="mws-form-label"><span>Branch <font color="#FF0000">*</font></span></label>
                                            <div class="mws-form-item">
                                            <select class="required mws-select2"   name="branch_id" style="text-align:center; width:250px;">
                                                <option value="">Choose Branch</option>
											   <?php
                                               $sql2=$obj->SelectAll("ams_branch");
											   if(!empty($sql2))
                                               foreach($sql2 as $rows)
                                               {
                                               ?>      
                                                <option value="<?php echo $rows->id; ?>"><?php echo $rows->name; ?></option>
                                                <?php
                                               }
                                                ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mws-form-row" style="width:20%; text-align:right; float:left;">
                                        	<label class="mws-form-label"><span>Date  <font color="#FF0000">*</font></span></label>
                                            <div class="mws-form-item">
                                            <input type="text" class="required mws-datepicker" value="<?php echo date('Y-m-d'); ?>" name="jdate" id="jdate" readonly>
                                            </div>
                                        </div>
                                    </div>                               
                                    
                                   		<div class="mws-panel-body no-padding">
                        <table class="mws-table">
                            <thead>
                                <tr>
                                    <th align="center">Account</th>
                                    <th align="center">Description</th>
                                    <th align="center">Debit</th>
                                    <th align="center">Credit</th>
                                </tr>
                            </thead>
                            <tbody id="POITable">
                                <tr>
                                    <td align="center" valign="middle">
                                    <input name="hidedata[]"  id="hidedata[]" type="hidden" value="">
                                    <select class="required small" style="margin-left:20px; width:200px;" name="option_a[]"  id="option_a">
                                                <option selected>--------------------------</option>
                                                <optgroup label="Asset">
                                                <?php
												$sql1=$obj->SelectAllByID("account_module_ladger_list_properties",array("main_head_id"=>1));
												foreach($sql1 as $row)
												{
												?>
                                                <option value="<?php echo $row->id; ?>"><strong><?php echo $row->head_sub_list_name; ?></strong></option>
                                                <?php
												}
												?>
                                                </optgroup>
                                                <optgroup label="Liability / Cradit Card">
                                                <?php
												$sql2=$obj->SelectAllByID("account_module_ladger_list_properties",array("main_head_id"=>2));
												foreach($sql2 as $row)
												{
												?>
                                                <option value="<?php echo $row->id; ?>"><strong><?php echo $row->head_sub_list_name; ?></strong></option>
                                                <?php
												}
												?>
                                                </optgroup>
                                                <optgroup label="Income">
                                                <?php
												$sql3=$obj->SelectAllByID("account_module_ladger_list_properties",array("main_head_id"=>3));
												foreach($sql3 as $row)
												{
												?>
                                                <option value="<?php echo $row->id; ?>"><strong><?php echo $row->head_sub_list_name; ?></strong></option>
                                                <?php
												}
												?>
                                                </optgroup>
                                                <optgroup label="Expense">
                                                <?php
												$sql4=$obj->SelectAllByID("account_module_ladger_list_properties WHERE main_head_id='4'");
												foreach($sql4 as $row)
												{
												?>
                                                <option value="<?php echo $row->id; ?>"><strong><?php echo $row->head_sub_list_name; ?></strong></option>
                                                <?php
												}
												?>
                                                </optgroup>
                                                <optgroup label="Equity">
                                                <?php
												$sql5=$obj->SelectAllByID("account_module_ladger_list_properties WHERE main_head_id='5'");
												foreach($sql5 as $row)
												{
												?>
                                                <option value="<?php echo $row->id; ?>"><strong><?php echo $row->head_sub_list_name; ?></strong></option>
                                                <?php
												}
												?>
                                                </optgroup>
                                                <optgroup label="Others">
                                                <?php
												$sql6=$obj->SelectAllByID("account_module_ladger_list_properties WHERE main_head_id='6'");
												foreach($sql6 as $row)
												{
												?>
                                                <option value="<?php echo $row->id; ?>"><strong><?php echo $row->head_sub_list_name; ?></strong></option>
                                                <?php
												}
												?>
                                                </optgroup>
                                            </select></td>
                                    <td align="center" valign="middle"><input type="text" class="required small" style="width:300px;" name="opt_a_d[]" id="opt_a_d"></td>
                                    <td align="center" valign="middle"><input type="text" class="test"  style="width:100px; text-align:right;font-weight:bolder; " name="opt_a_debit[]" id="opt_a_debit" onKeyUp="addNumbers()" value="0"></td>
                                    <td align="center" valign="middle"><input type="text"  class="tests" style="width:100px; text-align:right;font-weight:bolder; " name="opt_a_cradit[]" id="opt_a_cradit" onKeyUp="addNumbers_cradit()" value="0"></td>
                                </tr> <tr>
                                    <td align="center" valign="middle">
                                    <select class="required small" style="margin-left:20px; width:200px;" name="option_a[]"  id="option_a">
                                                <option selected>--------------------------</option>
                                                <optgroup label="Asset">
                                                <?php
												$sqld1=$obj->SelectAllByID("account_module_ladger_list_properties",array("main_head_id"=>1));
												foreach($sqld1 as $row)
												{
												?>
                                                <option value="<?php echo $row->id; ?>"><strong><?php echo $row->head_sub_list_name; ?></strong></option>
                                                <?php
												}
												?>
                                                </optgroup>
                                                <optgroup label="Liability / Cradit Card">
                                                <?php
												$sqld2=$obj->SelectAllByID("account_module_ladger_list_properties",array("main_head_id"=>2));
												foreach($sqld2 as $row)
												{
												?>
                                                <option value="<?php echo $row->id; ?>"><strong><?php echo $row->head_sub_list_name; ?></strong></option>
                                                <?php
												}
												?>
                                                </optgroup>
                                                <optgroup label="Income">
                                                <?php
												$sqld3=$obj->SelectAllByID("account_module_ladger_list_properties",array("main_head_id"=>3));
												foreach($sqld3 as $row)
												{
												?>
                                                <option value="<?php echo $row->id; ?>"><strong><?php echo $row->head_sub_list_name; ?></strong></option>
                                                <?php
												}
												?>
                                                </optgroup>
                                                <optgroup label="Expense">
                                                
												<?php
												$sqld4=$obj->SelectAllByID("account_module_ladger_list_properties",array("main_head_id"=>4));
												foreach($sqld4 as $row)
												{
												?>
                                                <option value="<?php echo $row->id; ?>"><strong><?php echo $row->head_sub_list_name; ?></strong></option>
                                                <?php
												}
												?>
                                                </optgroup>
                                                <optgroup label="Equity">
                                                <?php
												$sqld5=$obj->SelectAllByID("account_module_ladger_list_properties",array("main_head_id"=>5));
												foreach($sqld5 as $row)
												{
												?>
                                                <option value="<?php echo $row->id; ?>"><strong><?php echo $row->head_sub_list_name; ?></strong></option>
                                                <?php
												}
												?>
                                                </optgroup>
                                                <optgroup label="Others">
                                                <?php
												$sqld6=$obj->SelectAllByID("account_module_ladger_list_properties",array("main_head_id"=>6));
												foreach($sqld6 as $row)
												{
												?>
                                                <option value="<?php echo $row->id; ?>"><strong><?php echo $row->head_sub_list_name; ?></strong></option>
                                                <?php
												}
												?>
                                                </optgroup>
                                            </select></td>
                                    <td align="center" valign="middle"><input type="text" class="required small" style="width:300px;" name="opt_a_d[]" id="opt_a_d"></td>
                                    <td align="center" valign="middle"><input type="text" class="test"  style="width:100px; text-align:right;font-weight:bolder; " name="opt_a_debit[]" id="opt_a_debit" onKeyUp="addNumbers()" value="0"></td>
                                    <td align="center" valign="middle"><input type="text"  class="tests"  style="width:100px; text-align:right;font-weight:bolder; " name="opt_a_cradit[]" id="opt_a_cradit" onKeyUp="addNumbers_cradit()" value="0"></td>
                                </tr>
                                
                                 </tbody>
                            <thead>
                                <tr>
                                    <th align="center"><button type="button" class="btn" onClick="insRow()"><i class="icon-plus"> </i> Add More Line</button></th>
                                    <th  align="right" valign="middle" style="font-weight:bolder;">Total</th>
                                    <th align="center" valign="middle"><input type="text" class="required equalTo small" style="font-weight:bolder; width:100px; background:none; border:0px; text-align:right;" readonly value="0.00" name="totaldebit" id="totaldebit"></th>
                                    <th align="center" valign="middle"><input type="text" class="required equalTo small" style="font-weight:bolder; width:100px; background:none; border:0px; text-align:right;" readonly value="0.00" name="totalcradit" id="totalcradit"></th>
                                </tr>
                            </thead>
                        </table>
                        
                    </div>
                                   
                                </div>
                                <div class="mws-button-row" style="padding-left:400px;">
                                    <input type="submit"  id="btn1" value="Submit" class="btn btn-success" name="addtransaction">
                                    <input type="reset" value="Reset" class="btn btn-danger">
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