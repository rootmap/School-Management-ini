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

if(isset($_POST['save']))
{
	extract($_POST);
	$link_id=time();
	if($pa=='')
	{
		$obj->Error("Select Payment Account",$obj->filename());
	}
	$pdate=date('Y-m-d');
	
	if($amount=='')
	{
		$obj->Error("Amount Should Not Be Empty",$obj->filename());
	}
	
	if($obj->insert("account_module_invoice_payment",array("invoice_id"=>$invoice_id,"link_id"=>$link_id,"cid"=>$cid,"date"=>$pdate,"currentdate"=>date('Y-m-d'),"pa"=>$pa,"amount"=>$amount,"memo"=>$memo,"branch_id"=>$branch_id,"input_by"=>$uid))==1)
	{
		$ladgername="Accounts Receivables"; //dr
	
	$accreciveableladger=$obj->SelectAllByVal("account_module_ladger_list_properties","head_sub_list_name",$ladgername,"id");
				
	$invoice="N".$invoice_id;
	$obj->insert("account_module_ladger",array("ladger_id"=>$pa,"link_id"=>$link_id,"invoice_id"=>$invoice,"ladger_date"=>$pdate,"debit"=>$amount,"cradit"=>0,"branch_id"=>$branch_id));
	$obj->insert("account_module_ladger",array("ladger_id"=>$accreciveableladger,"link_id"=>$link_id,"invoice_id"=>$invoice,"ladger_date"=>$pdate,"debit"=>0,"cradit"=>$amount,"branch_id"=>$branch_id));		
	
	$backdue=$due-$amount;
		
		$obj->Success("Payment Successfully Made",$obj->filename());
	}
	else
	{
		$obj->Error("Payment Failed",$obj->filename());
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
                
                
              <div class="grid_12">
                    
                    <div class="mws-panel">
                        <div class="mws-panel-header">
                            <span><i class="icon-publish"></i> Receive New Payment </span>
                        </div>
                        <div class="mws-panel-body no-padding">
                            <form class="mws-form" action="" method="post" name="form">
                                <div class="mws-form-inline">
                                                                   
                                    <div class="mws-form-row">
                                    	<div class="mws-form-cols">
                                        <div class="mws-form-col-2-8">
                                        		<label class="mws-form-label"  style="font-weight:bolder; font-size:17px;">Payment Date</label>
                                            <div class="mws-form-item">
                                                <input type="text" class="mws-datepicker large" value="<?php echo date('Y-m-d'); ?>" readonly name="pdate">
                                            </div>
                                    	</div>
                                        
                                        <!--<div class="mws-form-col-2-8">
                                        		<label class="mws-form-label" style="font-weight:bolder; font-size:17px;">Choose Branch </label>
                                                         
                     
                                            <div class="mws-form-item">
                                           		<select class="required mws-select2"   name="branch_id">
                                                <option value="">Choose Branch</option>
											   <?php
                                               /*$sql2=$obj->SelectAll("ams_branch");
											   if(!empty($sql2))
                                               foreach($sql2 as $rows)
                                               {*/
                                               ?>      
                                                <option value="<?php //echo $rows->id; ?>"><?php //echo $rows->name; ?></option>
                                                <?php
                                              // }
                                                ?>
                                                </select>
                                                                                                       
                                            </div>
                                    	</div>--> 
                                        
                                      	<div class="mws-form-col-4-8">
                                        		<label class="mws-form-label" style="font-weight:bolder; font-size:17px;">Income Receive In </label>
                                                         
                     
                                            <div class="mws-form-item">
                                           <select class="required mws-select2" name="pa"  id="pa">
                                                <optgroup label="Income Account">
                                                <?php
												$ss=$obj->SelectAllByID("account_module_ladger_list_properties",array("main_head_id"=>1));
												foreach($ss as $wow)
												{
												?>
													<option value="<?php echo $wow->id; ?>"><?php echo $wow->head_sub_list_name; ?></option>
												<?php
												}
												?> 
                                                
                                            </optgroup>
                                            </select>
                                                                                                       
                                            </div>
                                    	</div> 
                                        
										</div>
                                        </div>
                                        <div class="mws-form-row">
                                        <div class="mws-form-cols">
                                        
                                        
                                        
                                        <div class="mws-form-col-2-8">
                                        		<label class="mws-form-label" style="font-weight:bolder; font-size:17px;">Receive  Amount
</label>
                                            <div class="mws-form-item">
                                                 <input type="text" name="amount" id="amount"  class="required large" placeholder="Amount "></div>
                                    	</div>
                                        <div class="mws-form-col-2-8">
                                        		<label class="mws-form-label" style="font-weight:bolder; font-size:17px;">Choose Customer </label>
                                                         
                     
                                            <div class="mws-form-item">
                                           		<select class="required mws-select2"   name="cid">
                                                <option value="">Choose Customer</option>
											   <?php
                                               $sql2=$obj->SelectAll("account_module_customer");
											   if(!empty($sql2))
                                               foreach($sql2 as $rows)
                                               {
                                               ?>      
                                                <option value="<?php echo $rows->id; ?>"><?php echo $rows->company_name; ?></option>
                                                <?php
                                               }
                                                ?>
                                                </select>
                                                                                                       
                                            </div>
                                    	</div>
                                        <div class="mws-form-col-4-8">
                                        		<label class="mws-form-label" style="font-weight:bolder; font-size:17px;">Particular / Description
</label>
                                            <div class="mws-form-item">
                                                 <input type="text" name="memo" id="memo" class="required large" placeholder="Memo / Description "></div>
                                    	</div>
										
                                        </div>
                                        </div>
                    				</div>
									<div class="mws-button-row">
                                    <input type="submit" name="save" value="Submit" class="btn btn-success">
                                    <input type="reset" value="Reset" class="btn">
       								 </div>
                            </form>
                        </div>
                    </div>
                </div>  
                
                
                <!-- Panels Start -->
                
           	  <div class="grid_12">
                    <div class="mws-panel">
                        <div class="mws-panel-header">
                            <span><i class="icon-archive"></i> Today Receive Payment </span>
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
					$sql1=$obj->SelectAllByID_Multiple("account_module_invoice_payment",array("currentdate"=>date('Y-m-d'),"branch_id"=>$branch_id));
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