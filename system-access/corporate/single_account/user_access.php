<?php 
include('class_file/auth.php');
if(isset($_GET['del']))
{
	$staccount=$obj->SelectAllByVal("account_module_company_user","id",$_GET['del'],"status");
	if($staccount==1)
	{
		$obj->Error("You don't have previliges to delete a admin.",$obj->filename());			
	}
	else
	{
		if($obj->delete("account_module_company_user",array("id"=>$_GET['del']))==1)
		{
			$obj->Success("Account Successfully Deleted",$obj->filename());	
		}
		else
		{
			$obj->Error("Account Deleted Failed, Please Try Agian.",$obj->filename());	
		}
	}
}

if(isset($_POST['update']))
{
	extract($_POST);
	if($password!=$expassword)
	{
		$newpass=$password;	
	}
	else
	{
		$newpass=$expassword;
	}
	if($obj->update("account_module_company_user",array("id"=>$id,"name"=>$name,"contact"=>$contact,"email"=>$email,"password"=>$newpass,"branch_id"=>$branch_id,"status"=>$user_status,"account_status"=>$account_status))==1)
	{
		$obj->Success("Account info Updated Successfully",$obj->filename());
	}
	elseif(!$sql)
	{
		$obj->Error("Account Updagradation Failed, Try Again",$obj->filename());
	}
}

if(isset($_POST['new_access']))
{
	extract($_POST);
	if($obj->insert("account_module_company_user",array("name"=>$name,"username"=>$username,"contact"=>$contact,"email"=>$email,"password"=>$password,"branch_id"=>$branch_id,"status"=>$user_status,"account_status"=>$account_status,"date"=>date('Y-m-d')))==1)
	{
		$obj->Success("Account info is created Successfully",$obj->filename());
	}
	elseif(!$sql)
	{
		$obj->Error("Account info create Failed, Try Again",$obj->filename());
	}
}

if(isset($_POST['cpass']))
{
	extract($_POST);
	$currentpass=$obj->SelectAllByVal("account_module_company_user","id",$uid,"password");
	if($currentpass!=$password)
	{
		$obj->Error("Your Password Not Matching With System Password.",$obj->filename()."?change_password");
	}
	if($npassword!=$rpassword)
	{
		$obj->Error("New Password is Mismathing With re-type password",$obj->filename()."?change_password");
	}
	else
	{
	
		if($obj->update("account_module_company_user",array("id"=>$uid,"password"=>$npassword))==1)
		{
			$obj->Success("Account Password changed Successfully",$obj->filename()."?change_password");
		}
		elseif(!$sql)
		{
			$obj->Error("Account Password Change Failed, Try Again",$obj->filename()."?change_password");
		}
	
	}
}

function user_status($st)
{
	if($st==1)
	{
		return "Super Admin";	
	}
	elseif($st==2)
	{
		return "Manager/School Admin";	
	}
	elseif($st==3)
	{
		return "Cashier/Accountant";	
	}
	else
	{
		return "Undefined";	
	}
}

function account_status($st)
{
	if($st==1)
	{
		return "Active";	
	}
	elseif($st==0)
	{
		return "Deactive";	
	}
	else
	{
		return "Undefined";	
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
                	
                    <!-- Statistic Item -->
                	
<?php //include('header_footer_file/accjournalbalance.php');
echo $obj->ShowMsg();
 ?>
                </div>
                
                
                <!-- Panels Start -->
                <?php 
				if(isset($_GET['view']))
				{
					?>
                    <div class="mws-panel grid_12">
                	<div class="mws-panel-header">
                    	<span><i class="icon-table"></i> <strong><?php echo $obj->SelectAllByVal("account_module_company_user","id",$_GET['view'],"name"); ?></strong> : Authentication Detail </span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <table class="mws-table">
                            <tbody>
                            <?php
							$sql1=$obj->SelectAllByID("account_module_company_user",array("id"=>$_GET['view']));
							$a=1;
							if(!empty($sql1))
							foreach($sql1 as $row)
							{
							?>
                                <tr>
                                	<td  valign="middle"><strong>Full Name : </strong></td>
                                    <td  valign="middle"><?php echo $row->name; ?></td>
                                    <td  valign="middle"><strong>Contact Number : </strong></td>
                                    <td  valign="middle"><?php echo $row->contact; ?></td>
                                 </tr>
                                 <tr> 
                                 	<td  valign="middle"><strong>Email : </strong></td>  
                                    <td  valign="middle"><?php echo $row->email; ?></td>
                                    <td  valign="middle"><strong>School Name </strong></td>
                                    <td  valign="middle"><?php echo $obj->SelectAllByVal("ams_singup","eiin_number",$row->branch_id,"acount_name"); ?></td>
                                 </tr>
                                 <tr>
                                    <td  valign="middle"><strong>User Name </strong></td>
                                    <td  valign="middle"><?php echo $row->username; ?></td>
                                    <td  valign="middle"><strong>Password </strong></td>
                                    <td  valign="middle"><?php echo "***Hidden***"; ?></td>
                                </tr>
                                <tr>
                                    <td  valign="middle"><strong>Access Level </strong></td>
                                    <td  valign="middle"><?php echo user_status($row->status); ?></td>
                                    <td  valign="middle"><strong>Account Status </strong></td>
                                    <td  valign="middle"><?php echo account_status($row->account_status); ?></td>
                                </tr>
                                
                             <?php 
									
							 $a++;
							 } ?>
                             <tr>
                                    <td  valign="middle" colspan="4"><a href="<?php echo $obj->filename(); ?>" class="btn btn-info"><strong>Back To List</strong></a>
                                    </td>
                                </tr> 
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!--income by customer-->
                
                
                    <?php
				}
				elseif(isset($_GET['edit']))
				{
					?>
                    <form action="" method="post">
                    <input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>">
                    <div class="mws-panel grid_12">
                	<div class="mws-panel-header">
                    	<span><i class="icon-table"></i> <strong><?php echo $obj->SelectAllByVal("account_module_company_user","id",$_GET['edit'],"name"); ?></strong> : Edit Access Detail </span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <table class="mws-table">
                            <tbody>
                            <?php
							$sql1=$obj->SelectAllByID("account_module_company_user",array("id"=>$_GET['edit']));
							$a=1;
							if(!empty($sql1))
							foreach($sql1 as $row)
							{
							?>
                            <tr>
                                    <td  valign="middle" colspan="4"></td>
                                </tr>
                                <tr>
                                	<td  valign="middle"><strong>Full Name : </strong></td>
                                    <td  valign="middle"><input type="text" name="name" value="<?php echo $row->name; ?>" /></td>
                                    <td  valign="middle"><strong>Contact Number : </strong></td>
                                    <td  valign="middle"><input type="text" name="contact" value="<?php echo $row->contact; ?>" /></td>
                                 </tr>
                                 <tr> 
                                 	<td  valign="middle"><strong>Email : </strong></td>  
                                    <td  valign="middle"><input type="text" name="email" value="<?php echo $row->email; ?>" /></td>
                                    <td  valign="middle"><strong>School Name </strong></td>
                                    <td  valign="middle">
                                    <?php echo $obj->SelectAllByVal("ams_singup","eiin_number",$row->branch_id,"acount_name"); ?>
                                    <input type="hidden" readonly name="branch_id" value="<?php echo $row->branch_id; ?>" />
                                                </td>
                                 </tr>
                                 <tr>
                                    <td  valign="middle"><strong>User Name </strong></td>
                                    <td  valign="middle"><input type="text" readonly name="username" value="<?php echo $row->username; ?>" /></td>
                                    <td  valign="middle"><strong>Password </strong></td>
                                    <td  valign="middle"><input type="password" name="password" value="<?php echo $row->password; ?>" />
                                    <input type="hidden" name="expassword" value="<?php echo $row->password; ?>" />
                                    </td>
                                </tr>
                                <tr>
                                    <td  valign="middle"><strong>Access Level </strong></td>
                                    <td  valign="middle">
                                    <select class="required mws-select2 large"  name="user_status" style="text-align:center; width:200px;">
                                    <option value="">Choose Access Level</option>    
                                    <?php 
									$exststus=$row->status;
									for($i=1; $i<=3; $i++):
									?>
                                    <option <?php if($i==$exststus){ ?> selected <?php } ?> value="<?php echo $i; ?>"><?php echo user_status($i); ?></option>
                                    <?php endfor; ?>
                                    </select>
                                    </td>
                                    <td  valign="middle"><strong>Account Status </strong></td>
                                    <td  valign="middle">
                                    <select class="required mws-select2 large"  name="account_status" style="text-align:center; width:200px;">
                                    <option value="">Choose Account Status</option>    
                                    <?php 
									$exacststus=$row->account_status;
									for($i=0; $i<=1; $i++):
									?>
                                    <option <?php if($i==$exacststus){ ?> selected <?php } ?> value="<?php echo $i; ?>"><?php echo account_status($i); ?></option>
                                    <?php endfor; ?>
                                    </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td  valign="middle" colspan="4"></td>
                                </tr>
                                <tr>
                                    <td  valign="middle" colspan="4"><button   onclick="javascript:return confirm('Are you absolutely sure to edit These Information?')"  name="update" type="submit" class="btn btn-success"><strong>Update Change</strong></button>
                                    <button type="reset" class="btn btn-warning"><strong>Reset</strong></button></td>
                                </tr>
                                <tr>
                                    <td  valign="middle" colspan="4"></td>
                                </tr>
                             <?php 
									
							 $a++;
							 } ?> 
                            </tbody>
                        </table>
                    </div>
                </div>
                </form>
                    <?php
				}
				elseif(isset($_GET['change_password']))
				{
					?>
                    <form action="" method="post">
                    <div class="mws-panel grid_4">
                	<div class="mws-panel-header">
                    	<span><i class="icon-table"></i> <strong> Change Your Password Here.</strong>  </span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <table class="mws-table">
                            <tbody>
                            <tr>
                                    <td  valign="middle" colspan="4"></td>
                                </tr>
                                
                                 <tr>
                                    <td  valign="middle"><strong>Current Password </strong></td>
                                    <td  valign="middle"><input type="text" name="password"  /></td>
                                    <td  valign="middle" colspan="2">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td  valign="middle"><strong>New Password </strong></td>
                                    <td  valign="middle"><input type="text" name="npassword"  /></td>
                                    <td  valign="middle" colspan="2">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td  valign="middle"><strong>Re-Password </strong></td>
                                    <td  valign="middle"><input type="text" name="rpassword"  /></td>
                                    <td  valign="middle" colspan="2">&nbsp;</td>
                                </tr>
                                
                                <tr>
                                    <td  valign="middle" colspan="4"><button   onclick="javascript:return confirm('Are you absolutely sure to edit These Information?')"  name="cpass" type="submit" class="btn btn-success"><strong> Change Password</strong></button>
                                    <button type="reset" class="btn btn-warning"><strong>Reset</strong></button></td>
                                </tr>
                                <tr>
                                    <td  valign="middle" colspan="4"></td>
                                </tr> 
                            </tbody>
                        </table>
                    </div>
                </div>
                </form>
                    <?php
				}
				elseif(isset($_GET['new']))
				{
					?>
                    <form action="" method="post">
                    <div class="mws-panel grid_12">
                	<div class="mws-panel-header">
                    	<span><i class="icon-table"></i> <strong> New Account Access</strong> : Please Provide all info to create an account </span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <table class="mws-table">
                            <tbody>
                            <tr>
                                    <td  valign="middle" colspan="4"></td>
                                </tr>
                                <tr>
                                	<td  valign="middle"><strong>Full Name : </strong></td>
                                    <td  valign="middle"><input type="text" name="name" /></td>
                                    <td  valign="middle"><strong>Contact Number : </strong></td>
                                    <td  valign="middle"><input type="text" name="contact"  /></td>
                                 </tr>
                                 <tr> 
                                 	<td  valign="middle"><strong>Email : </strong></td>  
                                    <td  valign="middle"><input type="text" name="email"  /></td>
                                    <td  valign="middle"><strong>School </strong></td>
                                    <td  valign="middle">
                                    <?php if($userstatus==1){ ?>
                                    <select class="required mws-select2 large"  name="branch_id" style="text-align:center; width:150px;">
                                    <option value="">Choose School</option>
                                   <?php
                                   $sql2=$obj->SelectAll("ams_singup");
                                   if(!empty($sql2))
                                   foreach($sql2 as $rows)
                                   {
                                   ?>      
                                    <option  value="<?php echo $rows->eiin_number; ?>"><?php echo $rows->acount_name; ?></option>
                                    <?php
                                   }
                                    ?>
                                    </select>
                                    <?php }else{ ?>
                                    <?php echo $obj->SelectAllByVal("ams_singup","eiin_number",$school,"acount_name"); ?>
                                    <input name="branch_id" type="hidden" value="<?php echo $school; ?>">
                                    <?php } ?>
                                                </td>
                                 </tr>
                                 <tr>
                                    <td  valign="middle"><strong>User Name </strong></td>
                                    <td  valign="middle"><input type="text" name="username" /></td>
                                    <td  valign="middle"><strong>Password </strong></td>
                                    <td  valign="middle"><input type="text" name="password"  />
                                    </td>
                                </tr>
                                <tr>
                                    <td  valign="middle"><strong>Access Level </strong></td>
                                    <td  valign="middle">
                                    <select class="required mws-select2 large"  name="user_status" style="text-align:center; width:200px;">
                                    <option value="">Choose Access Level</option>    
                                    <?php 
									if($userstatus==1)
									{
										for($i=1; $i<=3; $i++):
									
									?>
                                    <option value="<?php echo $i; ?>"><?php echo user_status($i); ?></option>
                                    <?php endfor; 
									
									}
									else
									{
										for($i=2; $i<=3; $i++):	
										
										?>
                                    <option value="<?php echo $i; ?>"><?php echo user_status($i); ?></option>
                                    <?php endfor; 
									}
									?>
                                    </select>
                                    </td>
                                    <td  valign="middle"><strong>Account Status </strong></td>
                                    <td  valign="middle">
                                    <select class="required mws-select2 large"  name="account_status" style="text-align:center; width:200px;">
                                    <option value="">Choose Account Status</option>    
                                    <?php 
									for($i=0; $i<=1; $i++):
									?>
                                    <option value="<?php echo $i; ?>"><?php echo account_status($i); ?></option>
                                    <?php endfor; ?>
                                    </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td  valign="middle" colspan="4"></td>
                                </tr>
                                <tr>
                                    <td  valign="middle" colspan="4"><button   onclick="javascript:return confirm('Are you absolutely sure to create These Information for a new account?')"  name="new_access" type="submit" class="btn btn-success"><strong>Create New Access</strong></button>
                                    <button type="reset" class="btn btn-warning"><strong>Reset</strong></button></td>
                                </tr>
                                <tr>
                                    <td  valign="middle" colspan="4"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                </form>
                    <?php
				}
				else
				{
					?>
                    <div class="mws-panel grid_12">
                	<div class="mws-panel-header">
                    	<span><i class="icon-users"></i> User Access List </span> <span style="margin-top:-30px; float:right;"><a href="<?php echo $obj->filename(); ?>?new" class="btn btn-success"><i class="icon-plus"></i>Create a  New User Access</a>
                        </span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <table class="mws-datatable-fn mws-table" style="font-size:12px !important;">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Full Name</th>
                                    <th>Contact Number</th>
                                    <th>School Name</th>
                                    <th>Access Level</th>
                                    <th>User Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
							if($userstatus==1){
							$sql1=$obj->SelectAll("account_module_company_user");
							}
							else
							{
							$sql1=$obj->SelectAllByID("account_module_company_user",array("branch_id"=>$school));	
							}
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
                                    <td align="center" valign="middle"><?php echo $row->contact; ?></td>
                                    <td align="center" valign="middle"><?php echo $obj->SelectAllByVal("ams_singup","eiin_number",$row->branch_id,"acount_name"); ?></td>
                                    <td align="center" valign="middle"><?php echo user_status($row->status); ?></td>
                                    <td align="center" valign="middle"><?php echo $row->username; ?></td>
                                    <td align="center" valign="middle"><?php echo account_status($row->account_status); ?></td>
                                    <td>
                                    <?php 
									if($userstatus==1){
									?>
                                    <a onClick="javascript:return confirm('Are you absolutely sure to View Transaction This?')" title="View Transaction" href="<?php echo $obj->filename(); ?>?view=<?php echo $row->id; ?>" class="btn icon-business-card"></a>
                                    <a onClick="javascript:return confirm('Are you absolutely sure to Edit This?')" title="Edit Customer" href="<?php echo $obj->filename(); ?>?edit=<?php echo $row->id; ?>" class="btn icon-pencil"></a>
                                    <a onClick="javascript:return confirm('Are you absolutely sure to Delete This?')" title="Delete" href="<?php echo $obj->filename(); ?>?del=<?php echo $row->id; ?>" class="btn icon-remove-sign"></a>
                                    <?php }elseif($userstatus==2){ ?>
                                    <a onClick="javascript:return confirm('Are you absolutely sure to Edit This?')" title="Edit Customer" href="<?php echo $obj->filename(); ?>?edit=<?php echo $row->id; ?>" class="btn icon-pencil"></a>
                                    <a onClick="javascript:return confirm('Are you absolutely sure to Delete This?')" title="Delete" href="<?php echo $obj->filename(); ?>?del=<?php echo $row->id; ?>" class="btn icon-remove-sign"></a>
                                    <?php }elseif($userstatus==3){ ?>
                                    <a onClick="javascript:return confirm('Are you absolutely sure to Edit This?')" title="Edit Customer" href="<?php echo $obj->filename(); ?>?edit=<?php echo $row->id; ?>" class="btn icon-pencil"></a>
                                    <?php } ?>
                                    </td>
                                </tr>
                             <?php 
									
							 $a++;
							 } ?> 
                            </tbody>
                        </table>
                    </div>
                </div>
                    <?php
				}
				?>
           	  	
                
                <!-- Panels End -->
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
             <?php include('header_footer_file/footer.php'); ?>