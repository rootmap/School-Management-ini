<?php
include('class_file/auth.php');
extract($_GET);
?>
<script>
          function sum()
          {
             var num1 = document.frmMr.total.value;
             var num2 = document.frmMr.paid.value;
			 var num3= document.frmMr.ff.value;
			 
             var sum = parseInt(num1) - (parseInt(num2) + parseInt(num3));
             document.getElementById('due').value = sum;
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
                	
				<?php //include('header_footer_file/accjournalbalance.php'); ?>
                </div>
                              
                <!-- Panels Start -->
                
           	  <div class="grid_8">
                    <div class="mws-panel">
                        <div class="mws-panel-header">
                            <span>Salary Voucher</span>
                        </div>
                        <div class="mws-panel-body no-padding">
                        <?php
						$sql11=$obj->SelectAllByID("account_module_salary_voucher",array("id"=>$id));
						if(!empty($sql11))
						foreach($sql11 as $row):
						?>
                            <form id="mws-validate" name="frmMr"  class="mws-form" action="class_file/class/salary_voucher_data_update_paidamount.php" method="post">
                            <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
                                                               
                                    
                        <div class="mws-panel-body no-padding">
                        <table class="mws-table">
                            <thead>
                            	<tr>
                                	<td colspan="2">
                                    	<table class="nws-table">
                                        	<tbody>
                                            	<tr>
                                                	<td>Company Name : </td><td>
                                                    <input name="id" type="hidden" value="<?php echo $id; ?>">
                                                    <input name="link_id" type="hidden" value="<?php echo $_GET['link_id']; ?>">
                                                    <input name="branch_id" type="hidden" value="<?php echo $_GET['branch_id']; ?>">
                                                    <input type="text" value="<?php echo $row->company_name; ?>"  class="required short" name="company_name" id="company_name"> </td>
                                                    <td>Pay Slip Date : </td><td><input type="text" value="<?php echo $row->payslipdate; ?>"   class="mws-datepicker" name="payslipdate" id="payslipdate"> </td>
                                                </tr>
                                            	<tr>
                                                	<td>Emp.Code : </td><td><input type="text"  value="<?php echo $row->empcode; ?>"   class="required short" name="empcode" id="empcode"> </td>
                                                    <td>Name : </td><td><input type="text"  value="<?php echo $row->ename; ?>"  class="required short" name="ename" id="ename"> </td>
                                                </tr>
                                                <tr>
                                                	<td>Department : </td><td><input type="text"  value="<?php echo $row->department; ?>"  class="required short" name="department" id="department"> </td>
                                                    <td>Designation : </td><td><input type="text"  value="<?php echo $row->designation; ?>"  class="required short" name="designation" id="designation"> </td>
                                                </tr>
                                                <tr>
                                                	<td>PF Account No : </td><td><input type="text"  value="<?php echo $row->pfac; ?>"   class="required short" name="pfac" id="pfac"> </td>
                                                    <td>ESI.No : </td><td><input type="text"  value="<?php echo $row->esino; ?>"  class="required short" name="esino" id="esino"> </td>
                                                </tr>
                                                <tr>
                                                	<td>Father/Husband Name : </td><td><input type="text"  value="<?php echo $row->f_hname; ?>"  class="required short" name="f_hname" id="f_hname"> </td>
                                                    <td>Joining Date : </td><td><input type="text"  value="<?php echo $row->joiningdate; ?>"   class="mws-datepicker" name="joiningdate" id="joiningdate"> </td>
                                                </tr>
                                                <tr>
                                                	<td>Bank A/C : </td><td><input type="text" value="<?php echo $row->bankac; ?>"  class="required short" name="bankac" id="bankac"> </td>
                                                    <td>Month Days Loprov : </td><td><input type="text" value="<?php echo $row->mdl; ?>"  class="required short" name="mdl" id="mdl"> </td>
                                                </tr>
                                                <tr>
                                                <td>Emp.Type</td>
                                                <td colspan="3"><?php $etype=$row->etype; ?><input name="etype" type="hidden" value="<?php echo $etype; ?>"><?php
												if($etype==397)
												{
													echo "Officers";	
												}
												else
												{
													echo "Staffs";	
												}
												
												?> </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                                	<td>
                                        <table class="nws-table">
                                            <thead>
                                            	<tr>
                                                	<td><strong>Earnings</strong></td>
                                                    <td><strong>Actual</strong></td>
                                                    <td><strong>Earned</strong></td>
                                                </tr>
                                            </thead>
                                        	<tbody>
                                            <?php 
											$sqle=$obj->SelectAllByID("account_module_salary_earing",array("sid"=>$id));
											$dedue=0;
											$decc=0;
											if(!empty($sqle))
											foreach($sqle as $ddde)
											{
											?>
                                                <tr>
                                                    <td align="center" valign="middle"><?php echo $ddde->earning; ?></td>
                                                    <td align="center" valign="middle"><?php echo $ddde->actual; $decc+=$ddde->actual; ?></td>
                                                    <td align="center" valign="middle"><?php echo $ddde->earned; $dedue+=$ddde->earned; ?></td>
                                                </tr>
                                            <?php
											}
											?>    
                                             </tbody>
                                             <thead>
                                             <tr>
                                                    <td align="left" valign="middle"><strong>Gross Total</strong></td>
                                                    <td align="center" valign="middle"><input type="text" value="<?php echo $decc; ?>" name="totalactual" id="totalactual" readonly></td>
                                                    <td align="center" valign="middle"><input type="text" name="totalearned" value="<?php echo $dedue; ?>" id="totalearned" readonly></td>
                                                </tr>
                                             </thead>   
                                        </table>
                                    </td>
                                    <td>
										<table class="nws-table">
                                        	<thead>
                                            	<tr>
                                                	<td colspan="2"><strong>Deductions Amount</strong></td>
                                                </tr>
                                            </thead>
                                        	
                                        	<tbody>
                                            <?php 
											$sqld=$obj->SelectAllByID("account_module_salary_deduction",array("sid"=>$id));
											$deduc=0;
											if(!empty($sqld))
											foreach($sqld as $dddd)
											{
											?>
                                                <tr>
                                                    <td align="center" valign="middle"><?php echo $dddd->deduction; ?></td>
                                                    <td align="center" valign="middle">
													<?php 
													echo $dddd->amount; 
													$deduc+=$dddd->amount;
													?></td>
                                               </tr>
                                             <?php 
											}
											 ?>   
                                             </tbody>
                                             <thead>
                                             <tr>
                                                    <td align="left" valign="middle"><strong>Deduction Total</strong></td>
                                                    <td align="center" valign="middle"><input type="text" value="<?php echo $deduc; ?>" name="totaldeduction" id="totaldeduction" readonly></td>
                                                </tr>
                                             </thead>   
                                        </table>
                                    
                                    </td>
                                    
                                </tr>
                                
                                <tr>
                                	<td colspan="2"><strong>Net Payable :</strong>  <input type="text" readonly value="<?php echo $row->total; ?>"  class="required short" name="total"   id="total"> 
                                    <input name="ff" type="hidden" value="<?php echo $row->paid; ?>">
                                    &nbsp;&nbsp;&nbsp;&nbsp; <strong>Paid Amount :</strong> <input type="text" value="<?php echo $row->paid; ?>"  class="required short" name="paid" id="paid" onKeyUp="sum()">
                                    
                                    </td>
                                </tr>
                                <tr>
                                	<td><strong>Due :</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" readonly class="required short" name="due"  value="<?php echo $row->due; ?>" id="due" > </td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        
                    </div>
                                   
                                <div class="mws-button-row" style="padding-left:400px;">
                                
                                    <input type="submit"  id="btn1" value="Submit" class="btn btn-success" name="addtransaction">
                                    <input type="reset" value="Reset" class="btn btn-danger">
                                </div>
                            </form>
                        </div>
                        </form>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <!-- Panels End -->
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
             <?php include('header_footer_file/footer.php'); ?>