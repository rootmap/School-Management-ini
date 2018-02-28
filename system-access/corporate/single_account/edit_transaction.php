<?php
include('class_file/auth.php');
extract($_GET);
if(@$control=='delete')
{
?>
<meta http-equiv="refresh" content="5; URL=journal_transaction.php">
<?php 
} 
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
                            <span>journal transactions , ID : <?php echo $id; ?></span>
                        </div>
                        <div class="mws-panel-body no-padding">
                        <?php
						if($control=='view')
						{
						?>
                            <form id="mws-validate"  class="mws-form" action="class_file/class/add_journal_transaction.php" method="post">
                            <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
                                <div class="mws-form-inline">
                                <?php
								//$sql1=$obj->SelectAllByVal("account_module_journal_description","id",$id,"");
								//$row=mysql_fetch_array($obj->result);
								?>
                                	<div class="mws-form-row">
                                        
                                        <div class="mws-form-row">
                                        	<label class="mws-form-label"><span style="float:right;">Description <font color="#FF0000">*</font></span></label>
                                            <div class="mws-form-item">
                                            <input type="text" name="jd"  style="font-weight:bolder;  background:none; border:0px;" readonly  value="<?php echo $obj->SelectAllByVal("account_module_journal_description","id",$id,"jd"); ?>" class="required large">
                                            </div>
                                        </div>
                                        <div class="mws-form-row">
                                        	<label class="mws-form-label"><span style="float:right;">Date  <font color="#FF0000">*</font></span></label>
                                            <div class="mws-form-item">
                                            <input type="text" class="large" style="font-weight:bolder;  background:none; border:0px;" readonly value="<?php echo $obj->SelectAllByVal("account_module_journal_description","id",$id,"jddate"); ?>"  name="jdate">
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
                                    <th align="center">Cradit</th>
                                </tr>
                            </thead>
                            <tbody id="POITable">
                            <?php 
							$sql2=$obj->SelectAllByID_Multiple("account_module_journal_transaction",array("jdid"=>$id));
							foreach($sql2 as $row)
							{
							?>
                            <tr>
                                    <td align="center" valign="middle">
                                    <input type="text" class="required small" style="font-weight:bolder; width:300px;  background:none; border:0px;" readonly value="<?php  $opttext=$row->option_text;
									//$sqls=mysql_query("SELECT * FROM  ladger_list_properties WHERE id='$opttext'");
									//$rows=mysql_fetch_array($sqls);
									echo $obj->SelectAllByVal("account_module_ladger_list_properties","id",$opttext,"head_sub_list_name"); ?>" name="option_a">
                                    </td>
                                    <td align="center" valign="middle"><input type="text" value="<?php echo $row->option_jd; ?>" class="required small" style="font-weight:bolder; width:300px;  background:none; border:0px;" readonly name="opt_a_d"></td>
                                    <td align="center" valign="middle"><input type="text" class="required small" value="<?php echo number_format($row->option_debit,2); ?>" style="font-weight:bolder; width:100px;  background:none; border:0px;" name="opt_a_debit" id="opt_a_debit" onKeyUp="addNumbers()"  readonly></td>
                                    <td align="center" valign="middle"><input type="text" class="required small" style="font-weight:bolder; width:100px;  background:none; border:0px;" name="opt_a_cradit" id="opt_a_cradit" onKeyUp="addNumbers_cradit()"  value="<?php echo number_format($row->option_cradit,2); ?>"></td>
                                </tr>
                            <?php
							}
							
							
							
					$querysum=$obj->SelectAllByID_Multiple("account_module_journal_transaction",array("jdid"=>$id));
							$debit=0;
							$cradit=0;
							foreach($querysum as $dosum)
							{
								$debit+=$dosum->option_debit;
								$cradit+=$dosum->option_cradit;
							}
							
							
							?>    
                                 </tbody>
                            <thead>
                                <tr>
                                    <th align="center"></th>
                                    <th  align="right" valign="middle" style="font-weight:bolder;">Total</th>
                                    <th align="center" valign="middle"><input type="text" class="required equalTo small" style="font-weight:bolder; width:100px; background:none; border:0px; text-align:right;" readonly value="<?php echo number_format($debit,2); ?>" name="totaldebit" id="totaldebit"></th>
                                    <th align="center" valign="middle"><input type="text" class="required equalTo small" style="font-weight:bolder; width:100px; background:none; border:0px; text-align:right;" readonly value="<?php echo number_format($cradit,2); ?>" name="totalcradit" id="totalcradit"></th>
                                </tr>
                            </thead>
                        </table>
                        
                    </div>
                                   
                                </div>
                            </form>
                            <?php
							}elseif($control=='edit'){
							?>
                            <form id="mws-validate"  class="mws-form" action="class_file/class/add_journal_transaction.php" method="post">
                            <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
                                <div class="mws-form-inline">
                                <?php
								//$obj->SelectAllByVal("account_module_journal_description","id",$id,"");
								//$row=mysql_fetch_array($obj->result);
								?>
                                	<div class="mws-form-row">
                                        <h2 style="line-height:32px;"><i class="icol32-application-edit"></i><span style="margin-top:15px; padding-left:20px; padding-top:-25px;">Update journal transactions , ID : <?php echo $id; ?></span></h2>
                                        <div class="mws-form-row">
                                        	<label class="mws-form-label"><span style="float:right;">Description <font color="#FF0000">*</font></span></label>
                                            <div class="mws-form-item">
                                            <input type="text" name="jd"  value="<?php echo $obj->SelectAllByVal("account_module_journal_description","id",$id,"jd"); ?>" class="required large">
                                            </div>
                                        </div>
                                        <div class="mws-form-row">
                                        	<label class="mws-form-label"><span style="float:right;">Date  <font color="#FF0000">*</font></span></label>
                                            <div class="mws-form-item">
                                            <input type="text" class="large" style="font-weight:bolder;  background:none; border:0px;" readonly value="<?php echo $obj->SelectAllByVal("account_module_journal_description","id",$id,"jddate"); ?>"  name="jdate">
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
                                    <th align="center">Cradit</th>
                                </tr>
                            </thead>
                            <tbody id="POITable">
                            <?php 
						$sql3=$obj->SelectAllByID_Multiple("account_module_journal_transaction",array("jdid"=>$id));
							foreach($sql3 as $row)
							{
							?>
                            <tr>
                                    <td align="center" valign="middle">
                                    <input type="text" class="required small" style="font-weight:bolder; width:300px;  background:none; border:0px;" readonly value="<?php $opttext=$row['option_text'];
									echo $obj->SelectAllByVal("account_module_ladger_list_properties","id",$opttext,"head_sub_list_name");
									?>" name="option_a">
                                    </td>
                                    <td align="center" valign="middle"><input type="text" value="<?php echo $row->option_jd; ?>" class="required small" style="font-weight:bolder; width:300px;  background:none; border:0px;" readonly name="opt_a_d"></td>
                                    <td align="center" valign="middle"><input type="text" class="required small" value="<?php echo number_format($row->option_debit,2); ?>" style="font-weight:bolder; width:100px; text-align:right;" name="opt_a_debit" id="opt_a_debit"></td>
                                    <td align="center" valign="middle"><input type="text" class="required small" style="font-weight:bolder; width:100px; text-align:right;" name="opt_a_cradit" id="opt_a_cradit"  value="<?php echo number_format($row->option_cradit,2); ?>"></td>
                                </tr>
                            <?php
							}
							
							
							
					$querysum=$obj->SelectAllByID_Multiple("account_module_journal_transaction",array("jdid"=>$id));
							$debit=0;
							$cradit=0;
							foreach($querysum as $dosum)
							{
								$debit+=$dosum->option_debit;
								$cradit+=$dosum->option_cradit;
							}
							
							
							?>    
                                 </tbody>
                            <thead>
                                <tr>
                                    <th align="center"></th>
                                    <th  align="right" valign="middle" style="font-weight:bolder;">Total</th>
                                    <th align="center" valign="middle"><input type="text" class="required equalTo small" style="font-weight:bolder; width:100px; background:none; border:0px; text-align:right;" readonly value="<?php echo number_format($debit,2); ?>" name="totaldebit" id="totaldebit"></th>
                                    <th align="center" valign="middle"><input type="text" class="required equalTo small" style="font-weight:bolder; width:100px; background:none; border:0px; text-align:right;" readonly value="<?php echo number_format($cradit,2); ?>" name="totalcradit" id="totalcradit"></th>
                                </tr>
                            </thead>
                        </table>
                        
                    </div>
                                   
                                </div>
                                <div class="mws-button-row" style="padding-left:400px;">
                                    <input type="submit" value="Update Journal" class="btn btn-success" name="addtransaction">
                                    <input type="reset" value="Reset" class="btn btn-danger">
                                </div>
                            </form>
                            <?php }elseif($control=='delete'){ 
							$obj->delete("account_module_journal_transaction",array("jdid"=>$id));
							$obj->delete("account_module_journal_description",array("id"=>$id));
							?>
                            <div class="mws-button-row" style="padding-left:400px;">
								<h2 style="line-height:32px;"><i class="icon-success"></i>Success </h2>
                                </div>
							<?php
							}
							?>
                            
                        </div>
                    </div>
                </div>
                
                <!-- Panels End -->
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
             <?php include('header_footer_file/footer.php'); ?>