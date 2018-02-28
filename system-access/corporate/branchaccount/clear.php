<?php 
include('class_file/auth.php');
$branch_id=$_SESSION['SESS_AMSIT_BATCH_ID'];
if(isset($_GET['account_module_ladger']))
{
	if($obj->deleteall("account_module_ladger")==1)
	{
		$obj->insert("account_module_clear_system",array("name"=>"Ledger Transaction","detail"=>"From Start date to current time all ledger transaction has been removed.","date"=>date('Y-m-d'),"status"=>1,"branch_id"=>$branch_id));
		$obj->Success("All Ledger Tranaction Has Been Successfully Removed From System",$obj->filename());	
	}
	else
	{
		$obj->Error("All Ledger Tranaction Not Removed From System",$obj->filename());	
	}
}

if(isset($_GET['account_module_invoice']))
{
	if($obj->deleteall("account_module_invoice")==1)
	{
		$obj->deleteall("account_module_invoice_detail");
		$obj->deleteall("account_module_invoice_payment");
		
		$obj->insert("account_module_clear_system",array("name"=>"Sales Invoices","detail"=>"From Start date to current time all Sales Detail has been removed.","date"=>date('Y-m-d'),"status"=>1));
		$obj->Success("All Sales Invoices Has Been Successfully Removed From System",$obj->filename());	
	}
	else
	{
		$obj->Error("All Sales Detail Not Removed From System",$obj->filename());	
	}
}


if(isset($_GET['account_module_bill']))
{
	if($obj->deleteall("account_module_bill")==1)
	{
		$obj->deleteall("account_module_bill_detail");
		$obj->deleteall("account_module_bill_payment");
		$obj->insert("account_module_clear_system",array("name"=>"Purchase Voucher","detail"=>"From Start date to current time all Purchase Voucher Detail has been removed.","date"=>date('Y-m-d'),"status"=>1));
		$obj->Success("All Purchase Voucher Has Been Successfully Removed From System",$obj->filename());	
	}
	else
	{
		$obj->Error("All Purchase Voucher Detail Not Removed From System",$obj->filename());	
	}
}


if(isset($_GET['account_module_journal_description']))
{
	if($obj->deleteall("account_module_journal_description")==1)
	{
		$obj->deleteall("account_module_journal_transaction");
		$obj->insert("account_module_clear_system",array("name"=>"Journal Transaction","detail"=>"From Start date to current time all Journal Transaction Detail has been removed.","date"=>date('Y-m-d'),"status"=>1,"branch_id"=>$branch_id));
		$obj->Success("All Journal Transaction Has Been Successfully Removed From System",$obj->filename());	
	}
	else
	{
		$obj->Error("All Journal Transaction Detail Not Removed From System",$obj->filename());	
	}
}

if(isset($_GET['account_module_salary_voucher']))
{
	if($obj->deleteall("account_module_salary_voucher")==1)
	{
		$obj->deleteall("account_module_salary_earing");
		$obj->deleteall("account_module_salary_deduction");
		$obj->insert("account_module_clear_system",array("name"=>"Salary Voucher","detail"=>"From Start date to current time all Salary Voucher Detail has been removed.","date"=>date('Y-m-d'),"status"=>1,"branch_id"=>$branch_id));
		$obj->Success("All Salary Voucher Has Been Successfully Removed From System",$obj->filename());	
	}
	else
	{
		$obj->Error("All Salary Voucher Detail Not Removed From System",$obj->filename());	
	}
}

if(isset($_GET['account_module_payabletax']))
{
	if($obj->deleteall("account_module_payabletax")==1)
	{
		$obj->deleteall("account_module_balancesheet");
		$obj->deleteall("account_module_income_statement");
		$obj->insert("account_module_clear_system",array("name"=>"Salary Voucher","detail"=>"From Start date to current time all Salary Voucher Detail has been removed.","date"=>date('Y-m-d'),"status"=>1,"branch_id"=>$branch_id));
		$obj->Success("All Salary Voucher Has Been Successfully Removed From System",$obj->filename());	
	}
	else
	{
		$obj->Error("All Salary Voucher Detail Not Removed From System",$obj->filename());	
	}
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
            
            	<!-- Statistics Button Container 
            		<div class="mws-stat-container clearfix">-->
                	
                    <!-- Statistic Item 
                	
<?php // include('header_footer_file/accjournalbalance.php'); ?>
                </div>-->
                
                
                <!-- Panels Start -->
                <?php echo $obj->ShowMsg(); ?>
                <div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span><i class="icon-warning-sign"></i> Clear Log </span>
                    </div>                    
                    <div class="mws-panel-body no-padding">
                        <table class="mws-datatable-fn mws-table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Table Name</th>
                                    <th>Detail</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
							$i=1;
							$sqld1=$obj->SelectAll("account_module_clear_system");
							if(!empty($sqld1))
							foreach($sqld1 as $row)
							{
							?>
                                <tr>
                                	<td><?php echo $i; ?></td>
                                    <td><?php echo $row->name; ?></td>
                                    <td><?php echo $row->detail; ?></td>
                                    <td><?php echo $row->date; ?></td>
                                </tr>
                            <?php
							$i++;
							}
							?>
                            </tbody>
                            
                        </table>
                    </div>
                    
                    
                    
                      	
                </div>
                
           	  	                
                <!-- Panels End -->
            </div>
            <!-- Inner Container End -->
			<script type="text/javascript">

            //ddtreemenu.createTree(treeid, enablepersist, opt_persist_in_days (default is 1))
            
            ddtreemenu.createTree("treemenu1", true)
            ddtreemenu.createTree("treemenu2", true)
            ddtreemenu.createTree("treemenu3", true)
            ddtreemenu.createTree("treemenu4", true)
            ddtreemenu.createTree("treemenu5", true)
			ddtreemenu.createTree("treemenu6", true)
            ddtreemenu.createTree("treemenu7", false)
            
            </script>        
            <!-- Footer -->
             <?php include('header_footer_file/footer.php'); ?>