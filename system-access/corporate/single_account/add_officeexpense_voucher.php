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
                            <span><i class="icon-archive"></i> New Office Expense Voucher</span>
                        </div>
                        <div class="mws-panel-body no-padding">
                            <form class="mws-form" action="class_file/class/add_office_expense_voucher.php" method="post" name="form">
                                <div class="mws-form-inline">
                                                                   
                                    <div class="mws-form-row">
                                    	<div class="mws-form-cols">
                                        <div class="mws-form-col-2-8">
                                        		<label class="mws-form-label"  style="font-weight:bolder; font-size:17px;">Voucher Date</label>
                                            <div class="mws-form-item">
                                                <input type="text" class="mws-datepicker large" value="<?php echo date('Y-m-d'); ?>" readonly name="date">
                                            </div>
                                    	</div>
                                        
                                        <div class="mws-form-col-2-8">
                                        		<label class="mws-form-label" style="font-weight:bolder; font-size:17px;">Choose Branch </label>
                                                         
                     
                                            <div class="mws-form-item">
                                           		<select class="required mws-select2"   name="branch_id">
                                                <option value="">Choose Branch</option>
											   <?php
                                               $sql2=$obj->SelectAll("ams_branch");
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
                                        
                                      	<div class="mws-form-col-2-8">
                                        		<label class="mws-form-label" style="font-weight:bolder; font-size:17px;">Expense Payment For </label>
                                                         
                     
                                            <div class="mws-form-item">
                                           <select class="required mws-select2" name="dr"  id="dr">
                                                <optgroup label="Expense">
                                                <?php
												$sql1=$obj->SelectAllByID_Multiple("account_module_ladger_list_properties",array("main_head_id"=>4));
												foreach($sql1 as $row)
												{
												?>
                                                <option value="<?php echo $row->id; ?>"><strong><?php echo $row->head_sub_list_name; ?></strong></option>
                                                <?php
												}
												?>
                                                
                                            </optgroup>
                                            </select>
                                                                                                       
                                            </div>
                                    	</div> 
                                        
                                        <div class="mws-form-col-2-8">
                                        		<label class="mws-form-label" style="font-weight:bolder; font-size:17px;">Paid From </label>
                                            <div class="mws-form-item">
                                           <select  class="required mws-select2" name="cr"  id="cr">
                                                <optgroup label="Bank &amp; Cash">
                                                <?php
												$sql2=$obj->SelectAllByID_Multiple("account_module_head_sub_list",array("list_of_head_accounts_id"=>1,"list_of_sub_head_accounts_id"=>1));
												
												foreach($sql2 as $rows)
												{
													$hslid=$rows->id;
													$sql_q=$obj->SelectAllByID_Multiple("account_module_ladger_list_properties",array("head_sub_list_id"=>$hslid,"main_head_id"=>1));
													foreach($sql_q as $rr)
													{
	$chkexpensehead=$obj->exists_multiple("account_module_expense_account",array("uid"=>$uid,"ladger_id"=>$rr->id));
		if($chkexpensehead!=0)
		{
												?>
                                     <option value="<?php echo $rr->id; ?>"><strong><?php echo $rr->head_sub_list_name; ?></strong></option>
                                                <?php
		}
													}
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
                                        		<label class="mws-form-label" style="font-weight:bolder; font-size:17px;">Expense / Bill Amount
</label>
                                            <div class="mws-form-item">
                                                 <input type="text" name="taka" id="taka"  class="required large" placeholder="Amount "></div>
                                    	</div>
                                        
                                        <div class="mws-form-col-6-8">
                                        		<label class="mws-form-label" style="font-weight:bolder; font-size:17px;">Note / Description
</label>
                                            <div class="mws-form-item">
                                                 <input type="text" name="des" id="des" class="required large" placeholder="Note / Description "></div>
                                    	</div>
										
                                        </div>
                                        </div>
                    				</div>
									<div class="mws-button-row">
                                    <input type="submit" value="Submit" class="btn btn-success">
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
                            <span><i class="icon-archive"></i> Today Expenses </span>
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
					$sql1=$obj->SelectAllByID("account_module_office_expense_voucher",array("currentdate"=>date('Y-m-d')));
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
                </div>
                
                <!-- Panels End -->
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
             <?php include('header_footer_file/footer.php'); ?>