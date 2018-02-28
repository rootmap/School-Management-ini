<?php include('class_file/auth.php'); ?>
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>-->
<script src="jquery.min.js"></script>
<script>
        $(document).ready ( function () {
            $("#btn1").click ( function () {
              var debit = 0.0;
			  var cradit = 0.0;
			  var dead = 0.0;
			  
               $(".test").each ( function() {
                   debit += parseFloat ( $(this).val().replace(/\s/g,'').replace(',','.'));
                });
                //alert ( debit );
				document.getElementById('totalactual').value= debit;
				
				$(".tests").each ( function() {
                   cradit += parseFloat ( $(this).val().replace(/\s/g,'').replace(',','.'));
                });
				 //alert ( cradit );
                document.getElementById('totalearned').value= cradit;
				
				$(".testss").each ( function() {
                   dead += parseFloat ( $(this).val().replace(/\s/g,'').replace(',','.'));
                });
				 //alert ( cradit );
                document.getElementById('totaldeduction').value= dead;
				
				document.getElementById('total').value= cradit-dead;
				
				
				
				
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
                            <span>Salary Voucher</span>
                        </div>
                        <div class="mws-panel-body no-padding">
                        
                            <form id="mws-validate" name="frmMr"  class="mws-form" action="class_file/class/salary_voucher_data.php" method="post">
                            <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
                                                               
                                    
                                   		<div class="mws-panel-body no-padding">
                        <table class="mws-table">
                            <thead>
                            	<tr>
                                	<td colspan="2">
                                    	<table class="nws-table">
                                        	<tbody>
                                            	<tr>
                                                	<td>Company Name : </td><td><input type="text"  class="required short" name="company_name" id="company_name"> </td>
                                                    <td>Pay Slip Date : </td><td><input type="text"  class="mws-datepicker" name="payslipdate" id="payslipdate"> </td>
                                                </tr>
                                            	<tr>
                                                	<td>Emp.Code : </td><td><input type="text"  class="required short" name="empcode" id="empcode"> </td>
                                                    <td>Name : </td><td><input type="text"  class="required short" name="ename" id="ename"> </td>
                                                </tr>
                                                <tr>
                                                	<td>Department : </td><td><input type="text"  class="required short" name="department" id="department"> </td>
                                                    <td>Designation : </td><td><input type="text"  class="required short" name="designation" id="designation"> </td>
                                                </tr>
                                                <tr>
                                                	<td>PF Account No : </td><td><input type="text"  class="required short" name="pfac" id="pfac"> </td>
                                                    <td>ESI.No : </td><td><input type="text"  class="required short" name="esino" id="esino"> </td>
                                                </tr>
                                                <tr>
                                                	<td>Father/Husband Name : </td><td><input type="text"  class="required short" name="f_hname" id="f_hname"> </td>
                                                    <td>Joining Date : </td><td><input type="text"    class="mws-datepicker" name="joiningdate" id="joiningdate"> </td>
                                                </tr>
                                               
                                                <tr>
                                                	<td>Bank A/C : </td><td><input type="text"  class="required short" name="bankac" id="bankac"> </td>
                                                    <td>Month Days Loprov : </td><td><input type="text"  class="required short" name="mdl" id="mdl"> </td>
                                                </tr> 
                                                <tr>
                                                <td>Emp.Type</td>
                                                <td>
                                                 <select name="etype">
                                                  	<option value="398">Staff</option>
                                                    <option value="397">Officers</option>
                                                  <select>
                                                  </td>
                                                  <td>Branch</td>
                                                <td>
                                               <select class="required mws-select2 large"  name="branch_id" style="text-align:center;">
                                                 <?php if(@$branch_id=='') {?>
                                                   <option>Chose Branch</option>
                                                 <?php } ?>
											   <?php
                                               if(@$branch_id==''){
                                               $sql2=$obj->SelectAll("ams_branch");
											   }else{
											   $array=array("id"=>$branch_id);
                                               $sql2=$obj->SelectAllByID("ams_branch",$array);
											   }
											   if(!empty($sql2))
                                               foreach($sql2 as $rows)
                                               {
                                               ?>      
                                                <option value="<?php echo $rows->id; ?>"><?php echo $rows->name; ?></option>
                                                <?php
                                               }
                                                ?>
                                                </select>
                                                  </td>
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
                                        	<tbody id="POITable">
                                                <tr>
                        <td align="center" valign="middle">
                        <input name="hidedata[]"  id="hidedata[]" type="hidden" value="">
                        <input type="text" class="required short" name="earning[]"  id="earning"></td>
                        <td align="center" valign="middle"><input type="text" class="test" name="actual[]" id="actual"></td>
                        <td align="center" valign="middle"><input type="text" class="tests" name="earned[]" id="earned" value="0"></td>
                                                </tr>
                                             </tbody>
                                             <thead>
                                             <tr>
                                                    <td align="left" valign="middle"><strong>Gross Total</strong></td>
                                                    <td align="center" valign="middle"><input type="text" name="totalactual" id="totalactual" readonly></td>
                                                    <td align="center" valign="middle"><input type="text" name="totalearned" id="totalearned" readonly></td>
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
                                        	
                                        	<tbody id="POITables">
                                                <tr>
                            <td align="center" valign="middle">
                            <input name="hidedatas[]"  id="hidedatas[]" type="hidden" value="">
                            <input type="text" class="required short" name="deduction[]"  id="deduction"></td>
                            <td align="center" valign="middle"><input type="text" class="required short testss" name="amount[]" id="amount"></td>
                                                   
                                                </tr>
                                                
                                             </tbody>
                                             <thead>
                                             <tr>
                                                    <td align="left" valign="middle"><strong>Deduction Total</strong></td>
                                                    <td align="center" valign="middle"><input type="text" name="totaldeduction" id="totaldeduction" readonly></td>
                                                </tr>
                                             </thead>   
                                        </table>
                                    
                                    </td>
                                    
                                </tr>
                                <tr>
                                	<td><button type="button" class="btn" onClick="insRow()"><i class="icon-plus"> </i> Add More Line</button></td><td><button type="button" class="btn" onClick="insRows()"><i class="icon-plus"> </i> Add More Line</button></td>
                                </tr>
                                <tr>
                                	<td colspan="2"><strong>Net Payable :</strong>  <input type="text" class="required short" name="total"  id="total"> &nbsp;&nbsp;&nbsp;&nbsp; <strong>Paid Amount :</strong> <input type="text" class="required short" name="paid"  id="paid" onKeyUp="this.form.due.value = this.form.total.value - this.form.paid.value;"></td>
                                </tr>
                                <tr>
                                	<td><strong>Due :</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="required short" name="due"  id="due" > </td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        
                    </div>
                                   
                                <div class="mws-button-row" style="padding-left:400px;">
                                	
                                    <input type="submit"  id="btn1" value="Submit" class="btn btn-success" name="addtransaction">
                                    <button type="button" class="btn btn-info" id="btn1">Sum</button>
                                    <input type="reset" value="Reset" class="btn btn-danger">
                                </div>
                            </form>
                        </div>
                        </form>
                    </div>
                </div>
                
                <!-- Panels End -->
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
             <?php include('header_footer_file/footer.php'); ?>