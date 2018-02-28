<?php include('class_file/auth.php'); 
if(isset($_POST['save']))
{
	if($obj->update("amsit_product",array("id"=>$_POST['pid'],"in_ac_id"=>$_POST['in_ac_id']))==1)	
	{
		$obj->Success("Ladger Added Successfully.",$obj->filename());	
	}
	else
	{
		$obj->Error("Failed, Try Again.",$obj->filename());
	}
}

if(isset($_GET['del']))
{
	if($obj->update("amsit_product",array("id"=>$_GET['del'],"in_ac_id"=>0))==1)	
	{
		$obj->Success("Ladger Clear Successfully.",$obj->filename());	
	}
	else
	{
		$obj->Error("Failed, Try Again.",$obj->filename());
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
            
            	<!-- Statistics Button Container -->
            		<div class="mws-stat-container clearfix">
                                   
				<?php //include('header_footer_file/accjournalbalance.php'); ?>
                </div>
                
                <!-- Panels Start -->
                
             <?php echo $obj->ShowMsg(); ?>
           	  	<div class="mws-panel grid_4">
                    <div class="mws-panel-header">
                        <span><i class="icon-plus"></i> Add New Product In Ladger</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <form class="mws-form" method="post" id="mws-validate" action="">
                        <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
                            <fieldset class="mws-form-inline">
                                <legend><strong>Item Info</strong></legend>
                                <div class="mws-form-row bordered">
                                    <label class="mws-form-label">Product Name </label>
                                    <div class="mws-form-item">
                                        <select class="required mws-select2 large" name="pid">
                                        	<option value="" selected>Chose Product</option>
                                            <?php
											$sql2=$obj->SelectAllByID("stockvalidation",array("in_ac_id"=>0));
											foreach($sql2 as $row)
											{
											?>
												<option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
                                            <?php
											}
											?>
                                        </select>
                                    </div>
                                </div>
                                <div class="mws-form-row bordered">
                                    <label class="mws-form-label">Income Account </label>
                                    <div class="mws-form-item">
                                        <select class="required mws-select2 large" name="in_ac_id">
                                        	<option value="" selected>Chose Accounts</option>
                                            <?php
											$sql1=$obj->SelectAllByID("account_module_ladger_list_properties",array("main_head_id"=>3));
											foreach($sql1 as $row)
											{
											?>
												<option value="<?php echo $row->id; ?>"><?php echo $row->head_sub_list_name; ?></option>
                                            <?php
											}
											?>
                                        </select>
                                    </div>
                                </div>
                               
                                </fieldset>
                            <div class="mws-button-row">
                                <input type="submit" value="Save" name="save" class="btn btn-success">
                                <input type="reset" value="Clear" class="btn ">
                            </div>
                             </form>
                    </div>      
                </div>
           	  	<!-- Panels End -->
                
                <div class="mws-panel grid_4">
                    <div class="mws-panel-header">
                        <span><i class="icon-plus"></i> Ladger Product List</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <table class="mws-datatable-fn mws-table" style="font-size:12px !important;">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product Name</th>
                                    <th>Ladger</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
							$sql1=$obj->SelectAll("stockvalidation");
							$a=1;
							if(!empty($sql1))
							foreach($sql1 as $row)
							{
							?>
                                <tr>
                                    <td valign="middle" align="center" style="width:30px;">
                               			<?php echo $a; ?>    
                                    </td>
                                    <td align="center" valign="middle"><?php echo $row->name; ?></td>
                                    <td align="center" valign="middle">
									<?php  echo $obj->SelectAllByVal("account_module_ladger_list_properties","id",$row->in_ac_id,"head_sub_list_name"); ?>
                                    
                                    </td>
                                    <td>
        <a onclick="javascript:return confirm('Are you absolutely sure to Edit This?')" title="Edit" href="<?php echo $obj->filename(); ?>?edit=<?php echo $row->id; ?>" class="btn icon-pencil"></a>
        <a onclick="javascript:return confirm('Are you absolutely sure to Delete This?')" title="Delete" href="<?php echo $obj->filename(); ?>?del=<?php echo $row->id; ?>" class="btn icon-remove-sign"></a>
                                    </td>
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