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
                	
<?php //include('header_footer_file/accjournalbalance.php');

//$sql_jd=mysql_query("SELECT * FROM journal_description WHERE id='$id'");
//$fetjd=mysql_fetch_array($sql_jd);

?>
                </div>
                
                
                <!-- Panels Start -->
                
           	  <div class="grid_8">
                    <div class="mws-panel">
                        <div class="mws-panel-header">
                            <span>View Journal Transactions</span>
                        </div>
                        <div class="mws-panel-body no-padding">
                            <form id="mws-validate"  class="mws-form" action="class_file/class/add_journal_transaction.php" method="post">
                            <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
                                <div class="mws-form-inline">
                                	<div class="mws-form-row">
                                        <div class="mws-form-row">
                                        	<label class="mws-form-label"><span style="float:right;">Description <font color="#FF0000">*</font></span></label>
                                            <div class="mws-form-item">
                                            <input type="text" name="jd" id="jd" value="<?php echo $obj->SelectAllByVal("account_module_journal_description","id",$id,"jd"); ?>" class="required large" readonly>
                                            </div>
                                        </div>
                                        <div class="mws-form-row">
                                        	<label class="mws-form-label"><span style="float:right;">Date  <font color="#FF0000">*</font></span></label>
                                            <div class="mws-form-item">
                                            <input type="text" class="required" value="<?php echo $obj->SelectAllByVal("account_module_journal_description","id",$id,"jddate"); ?>" name="jdate" id="jdate" readonly>
                                            </div>
                                        </div>
                                    </div>                                
                                    
                                   		<div class="mws-panel-body no-padding">
                        <table class="mws-table">
                            <thead>
                                <tr>
                                    <th align="center" style="font-size:18px; font-weight:bolder;">Account</th>
                                    <th align="center" style="font-size:18px; font-weight:bolder;">Description</th>
                                    <th align="center" style="font-size:18px; font-weight:bolder;">Debit</th>
                                    <th align="center" style="font-size:18px; font-weight:bolder;">Cradit</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
							$sql_jt=$obj->SelectAllByVal("account_module_journal_transaction",array("jdid"=>$id));
							foreach($sql_jt as $row){
							?>
                                <tr>
                                    <td align="center" valign="middle" style="font-size:18px; font-weight:bolder;"><?php $item=$row->option_text;
									
									//$sqlitem=mysql_query("SELECT * FROM ladger_list_properties WHERE id='$item'");
									//$fetitem=mysql_fetch_array($sqlitem);
									//echo $fetitem['head_sub_list_name'];
									echo $obj->SelectAllByVal("account_module_ladger_list_properties","id",$item,"head_sub_list_name");
									?></td>
                                    <td align="center" valign="middle" style="font-size:18px; font-weight:bolder;"><?php echo $row->option_jd; ?></td>
                                    <td align="center" valign="middle" style="font-size:18px; font-weight:bolder;"><?php echo $row->option_debit; ?></td>
                                    <td align="center" valign="middle" style="font-size:18px; font-weight:bolder;"><?php echo $row->option_cradit; ?></td>
                                </tr> 
                             <?php
							 
							 }
							 ?>   
                                
                                 </tbody>
                            <thead>
                                <tr>
                                <?php
								$sql_jtt=$obj->SelectAllByVal("account_module_journal_transaction",array("jdid"=>$id));
								$debit=0;
								$cradit=0;
							foreach($sql_jtt as $rows){
								$debit+=$rows->option_debit;
								$cradit+=$rows->option_cradit;
							}
								?>
                                    <th align="center"></th>
                                    <th  align="right" valign="middle" style="font-weight:bolder;">Total</th>
                                    <th align="center" valign="middle"><input type="text" class="required equalTo small" style="font-weight:bolder; width:100px; background:none; border:0px; text-align:right;" readonly value="<?php echo $debit; ?>" name="totaldebit" id="totaldebit"></th>
                                    <th align="center" valign="middle"><input type="text" class="required equalTo small" style="font-weight:bolder; width:100px; background:none; border:0px; text-align:right;" readonly value="<?php echo $cradit; ?>" name="totalcradit" id="totalcradit"></th>
                                </tr>
                            </thead>
                        </table>
                        
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