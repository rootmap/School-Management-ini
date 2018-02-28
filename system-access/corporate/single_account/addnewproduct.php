<?php include('class_file/auth.php'); 
$table="account_module_product";
if(isset($_POST['save']))
{
	
	extract($_POST);
	if(!empty($name) && !empty($price) && !empty($description) && !empty($in_ac_id))
	{
		if($obj->insert("account_module_product",array("pname"=>$name,"description"=>$description,"price"=>$price,"branch_id"=>$school,"in_ac_id"=>$in_ac_id,"date"=>date('Y-m-d'),"status"=>1))==1)	
		{
			$obj->Success("Product Added Successfully.",$obj->filename());	
		}
		else
		{
			$obj->Error("Failed, Try Again.",$obj->filename());
		}
	}
	else
	{
		$obj->Error("Some Field is Empty.",$obj->filename());	
	}
}

if(isset($_POST['editsave']))
{
	
	extract($_POST);
	if(!empty($name) && !empty($price) && !empty($description) && !empty($in_ac_id))
	{
		if($obj->update("account_module_product",array("id"=>$id,"pname"=>$name,"description"=>$description,"price"=>$price,"branch_id"=>$school,"in_ac_id"=>$in_ac_id))==1)	
		{
			$obj->Success("Product Updated Successfully.",$obj->filename());	
		}
		else
		{
			$obj->Error("Failed, Try Again.",$obj->filename());
		}
	}
	else
	{
		$obj->Error("Some Field is Empty.",$obj->filename());	
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
           	  	<div class="mws-panel grid_3">
                    <div class="mws-panel-header">
                        <span><i class="icon-plus"></i> Add New Product/Service In Ladger</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <form class="mws-form" method="post" id="mws-validate" action="">
                        <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
                            <?php if(isset($_GET['edit'])){ ?>
                            <fieldset class="mws-form-inline">
                               
                                <legend><strong>Edit Item Info</strong></legend>
                                <div class="mws-form-row bordered">
                                    <label class="mws-form-label">Product Name </label>
                                    <div class="mws-form-item">
                                        <input type="text" value="<?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"pname"); ?>" name="name" class="large required" />
                                        <input type="hidden" value="<?php echo $_GET['edit']; ?>" name="id" />
                                    </div>
                                </div>
                                <div class="mws-form-row bordered">
                                    <label class="mws-form-label">Price </label>
                                    <div class="mws-form-item">
                                        <input type="text" name="price" class="large required" value="<?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"price"); ?>" />
                                    </div>
                                </div>
                                <div class="mws-form-row bordered">
                                    <label class="mws-form-label">Description </label>
                                    <div class="mws-form-item">
                                        <input type="text" name="description" class="large required" value="<?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"description"); ?>" />
                                    </div>
                                </div>
                                
                                <div class="mws-form-row bordered">
                                    <label class="mws-form-label">Income Account </label>
                                    <div class="mws-form-item">
                                        <select class="required mws-select2 large" name="in_ac_id">
                                        	<option value="" selected>Chose Accounts</option>
                                            <?php
											$lid=$obj->SelectAllByVal($table,"id",$_GET['edit'],"in_ac_id"); 
											$sql1=$obj->SelectAllByID("account_module_ladger_list_properties",array("main_head_id"=>3));
											foreach($sql1 as $row)
											{
											?>
												<option <?php if($row->id==$lid){ ?> selected <?php } ?> value="<?php echo $row->id; ?>"><?php echo $row->head_sub_list_name; ?></option>
                                            <?php
											}
											?>
                                        </select>
                                    </div>
                                </div>
                               
                               <div class="mws-form-row bordered">
                                    <label class="mws-form-label">Branch Name </label>
                                    <div class="mws-form-item">
                                        <select class="required mws-select2 large" name="branch_id">
                                        	<option value="" selected>Chose Branch</option>
                                            <?php
											$branches=$obj->SelectAllByVal($table,"id",$_GET['edit'],"branch_id"); 
											$sql1=$obj->SelectAll("branch");
											foreach($sql1 as $row)
											{
											?>
												<option <?php if($row->branch_id==$branches){ ?> selected <?php } ?>  value="<?php echo $row->branch_id; ?>"><?php echo $row->name; ?></option>
                                            <?php
											}
											?>
                                        </select>
                                    </div>
                                </div>
                               
                               
                                </fieldset>
                            <div class="mws-button-row">
                                <input type="submit" value="Update Changes" name="editsave" class="btn btn-success">
                                <input type="reset" value="Clear" class="btn ">
                            </div>
							<?php }else{  ?>
                            <fieldset class="mws-form-inline">
                               
                                <legend><strong>Item Info</strong></legend>
                                <div class="mws-form-row bordered">
                                    <label class="mws-form-label">Product Name </label>
                                    <div class="mws-form-item">
                                        <input type="text" name="name" class="large required" />
                                    </div>
                                </div>
                                <div class="mws-form-row bordered">
                                    <label class="mws-form-label">Price </label>
                                    <div class="mws-form-item">
                                        <input type="text" name="price" class="large required" />
                                    </div>
                                </div>
                                <div class="mws-form-row bordered">
                                    <label class="mws-form-label">Description </label>
                                    <div class="mws-form-item">
                                        <input type="text" name="description" class="large required" />
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
                               
                               <div class="mws-form-row bordered">
                                    <label class="mws-form-label">Branch Name </label>
                                    <div class="mws-form-item">
                                        <select class="required mws-select2 large" name="branch_id">
                                        	<option value="" selected>Chose Branch</option>
                                            <?php
											$sql1=$obj->SelectAll("branch");
											foreach($sql1 as $row)
											{
											?>
												<option value="<?php echo $row->branch_id; ?>"><?php echo $row->name; ?></option>
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
                            <?php } ?>
                             </form>
                    </div>      
                </div>
           	  	<!-- Panels End -->
                
                <div class="mws-panel grid_5">
                    <div class="mws-panel-header">
                        <span><i class="icon-table"></i> Ladger Product/Service List</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <table class="mws-datatable-fn mws-table" style="font-size:12px !important;">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Branch</th>
                                    <th>Ladger</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
							$sql1=$obj->SelectAllByID("account_module_product",array("branch_id"=>$school));
							$a=1;
							if(!empty($sql1))
							foreach($sql1 as $row)
							{
							?>
                                <tr>
                                    <td valign="middle" align="center" style="width:30px;">
                               			<?php echo $a; ?>    
                                    </td>
                                    <td align="center" valign="middle"><?php echo $row->pname; ?></td>
                                    <td align="center" valign="middle"><?php echo number_format($row->price,2); ?></td>
                                    <td align="center" valign="middle"><?php echo $obj->SelectAllByVal("branch","branch_id",$row->branch_id,"name"); ?></td>
                                    <td align="center" valign="middle">
									<?php  echo $obj->SelectAllByVal("account_module_ladger_list_properties","id",$row->in_ac_id,"head_sub_list_name"); ?>
                                    
                                    </td>
                                    <td>
        <a onClick="javascript:return confirm('Are you absolutely sure to Edit This?')" title="Edit" href="<?php echo $obj->filename(); ?>?edit=<?php echo $row->id; ?>" class="btn icon-pencil"></a>
        <a onClick="javascript:return confirm('Are you absolutely sure to Delete This?')" title="Delete" href="<?php echo $obj->filename(); ?>?del=<?php echo $row->id; ?>" class="btn icon-remove-sign"></a>
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