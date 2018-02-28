<?php
include('class_file/auth.php');
if(isset($_GET['del']))
{
	$link_id=$obj->SelectAllByVal("account_module_invoice_payment","id",$_GET['del'],"link_id");
	if($link_id!='')
	{
		$obj->delete("account_module_ladger",array("link_id"=>$link_id));	
		$obj->delete("account_module_invoice_payment",array("id"=>$_GET['del']));
		$obj->Success("Expense Data Successfully Deleted. ",$obj->filename());
	}
		
}
?>
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>-->
<script language="Javascript">

function IsEmpty(){ 

if(document.form.taka.value < 1)
{
alert("empty");
}
    return;
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
            		
                	
                    <!-- Statistic Item -->
                <?php //include('header_footer_file/accjournalbalance.php'); ?>
                
               
                
                <!-- Panels Start -->
                
           	  <div class="grid_12">
                    <div class="mws-panel">
                    	<h2 align="center" style="margin-top:0px; border-left:#666 medium dotted;  border-right:#666 medium dotted;"><i class="icon-publish"></i> Receive Payment </h2>
                        <div class="mws-panel-header">
                            <span><i class="icon-publish"></i> Receive Payment List </span>
                            <span style="float:right; margin-top:-30px;">
                            <a href="add_payment_receive.php" class="btn btn-success"><i class="icon-plus"></i>Receive New Payment</a>
                          	</span>
                        </div>
                        <div class="mws-panel-body no-padding">
                            <table class="mws-datatable-fn mws-table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Date</th>
                                    <th>Number</th>
                                    <th>Customer</th>
                                    <th>Particular</th>
                                    <th>Payment Received </th>
                                    <th>Taka</th>
                                    <th>User Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
					$sql1=$obj->SelectAllByID("account_module_invoice_payment",array("branch_id"=>$branch_id));			
							
							$a=1;
							if(!empty($sql1))
							foreach($sql1 as $row)
							{
								
							?>
                                <tr>
                                    <td valign="middle" align="center" style="width:30px;"><?php echo $a; ?> </td>
                                    <td valign="middle" align="center"><a style="font-size:14px; font-weight:bolder; color:#333;" href="#"> <?php echo $obj->dates($row->date); ?></a></td>
                                    <td align="center" valign="middle"><?php echo "Payment-".$row->id; ?></td>
                                    <td align="center" valign="middle"><?php echo $obj->SelectAllByVal("account_module_customer","id",$row->cid,"company_name"); ?></td>
                                    <td align="center" valign="middle"><?php echo $row->memo; ?></td>
                                    <td align="center" valign="middle"><?php echo $obj->SelectAllByVal("account_module_ladger_list_properties","id",$row->pa,"head_sub_list_name"); ?></td>
                                    <td align="center" valign="middle"><?php echo number_format($row->amount,2); ?></td>
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
                </div>
                
                <!-- Panels End -->
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
             <?php include('header_footer_file/footer.php'); ?>