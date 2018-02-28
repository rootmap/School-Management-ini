<?php
include('class_file/auth.php');
if(isset($_GET['del']))
{
	$link_id=$obj->SelectAllByVal("account_module_office_expense_voucher","id",$_GET['del'],"link_id");
	if($link_id!='')
	{
		$obj->delete("account_module_ladger",array("link_id"=>$link_id));	
		$obj->delete("account_module_office_expense_voucher",array("id"=>$_GET['del']));
		$obj->Success("Expense Data Successfully Deleted. ",$obj->filename());
	}
		
}
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
                	
<?php //include('header_footer_file/accjournalbalance.php'); ?>
                </div>
                
                
                <!-- Panels Start -->
                
           	  	<div class="mws-panel grid_8">
                <h2 align="center" style="margin-top:-20px; border-left:#666 medium dotted;  border-right:#666 medium dotted;"><i class="icon-archive"></i> OFFICE EXPENSE </h2>
                	<div class="mws-panel-header">
                    	<span><i class="icon-table"></i>Office Expense All Voucher</span> 
                            <span style="float:right; margin-top:-30px;">
                            <a href="add_officeexpense_voucher.php" class="btn btn-success"><i class="icon-plus"></i>Create Voucher</a>
                          	</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                       <table class="mws-datatable-fn mws-table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Date</th>
                                    <th>Number</th>
                                    <th>Particular</th>
                                    <th>Paid From</th>
                                    <th>Taka</th>
                                    <th>User Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
							$sql1=$obj->SelectAllByID_Multiple("account_module_office_expense_voucher",array("branch_id"=>$branch_id));
							$a=1;
							if(!empty($sql1))
							foreach($sql1 as $row)
							{
								
							?>
                                <tr>
                                    <td valign="middle" align="center" style="width:30px;"><?php echo $a; ?> </td>
                                    <td valign="middle" align="center"><a style="font-size:14px; font-weight:bolder; color:#333;" href="view_officeexpense_voucher.php?id=<?php echo $row->id; ?>&amp;d=<?php echo $row->dr; ?>&amp;c=<?php echo $row->cr; ?>&amp;date=<?php echo $row->vdate;  ?>&amp;des=<?php echo $row->description; ?>&amp;taka=<?php echo $row->taka; ?>"> <?php echo $obj->dates($row->vdate); ?></a></td>
                                    <td align="center" valign="middle"><?php echo "Office-Ex-V-".$row->id; ?></td>
                                    <td align="center" valign="middle"><?php echo $obj->SelectAllByVal("account_module_ladger_list_properties","id",$row->dr,"head_sub_list_name");; ?></td>
                                    <td align="center" valign="middle"><?php echo $obj->SelectAllByVal("account_module_ladger_list_properties","id",$row->cr,"head_sub_list_name");; ?></td>
                                    <td align="center" valign="middle"><?php echo number_format($row->taka,2); ?></td>
                                    <td align="center" valign="middle"><?php echo $obj->SelectAllByVal("amsit_hrm_employee","id",$row->input_by,"name"); ?></td>
                                    <td align="center" valign="middle"><a href="<?php echo $obj->filename(); ?>?del=<?php echo $row->id; ?>" class="hovertip" style="color:#000;"  onclick="javascript:return confirm('Are you absolutely sure to delete This?')" title="Delete"><i class="icon-trash"></i></a></td>
                                </tr>
                             <?php 
							 $a++;
							 } ?> 
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Panels End -->
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
             <?php include('header_footer_file/footer.php'); ?>