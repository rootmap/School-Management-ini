<?php 
set_time_limit(90000000000);
include('class_file/auth.php');
if(isset($_GET['del']))
{
	if($obj->delete("account_module_customer",array("id"=>$_GET['del']))==1)
	{
		$obj->Success("Customer Successfully Deleted",$obj->filename());	
	}
	else
	{
		$obj->Error("Customer Deleted Failed, Please Try Agian.",$obj->filename());	
	}
}

if(isset($_POST['update']))
{
	extract($_POST);
	if($obj->update("account_module_customer",array("id"=>$id,"company_name"=>$company_name,"email"=>$email,"fname"=>$fname,"lname"=>$lname,"currency"=>$currency,"phone"=>$phone,"address"=>$address,"ac"=>$ac,"bankname"=>$bankname))==1)
	{
		$obj->Success("Customer Account Update Successfully",$obj->filename());
	}
	elseif(!$sql)
	{
		$obj->Error("Customer Update Failed Try Again",$obj->filename());
	}
}
?>
			<script>
            function showcls(str)
            {
                if (str == "")
                {
                    document.getElementById("class").innerHTML = "";
                    return;
                }
                if (window.XMLHttpRequest)
                {// code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                }
                else
                {// code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        document.getElementById("class").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajx/session.php?s=" + str, true);
                xmlhttp.send();
            }
        </script>
        
        <script>
            function showsection(str)
            {
                if (str == "")
                {
                    document.getElementById("group").innerHTML = "";
                    return;
                }
                if (window.XMLHttpRequest)
                {
                    xmlhttp = new XMLHttpRequest();
                }
                else
                {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
						//show section
						xmlhttps = new XMLHttpRequest();
						xmlhttps.onreadystatechange = function()
						{
							if (xmlhttps.readyState == 4 && xmlhttps.status == 200)
							{
								document.getElementById("section").innerHTML = xmlhttps.responseText;
							}
						}
						xmlhttps.open("GET", "ajx/section.php?t=" + str, true);
						xmlhttps.send();
						//show section
                        document.getElementById("group").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajx/group1.php?s=" + str, true);
                xmlhttp.send();
            }
        </script>
        
        <script>
            function showshift(str)
            {
                var session=$('#session').val();
				var sclass=$('#class').val();
				var group=$('#group').val();
                if(str=='')
				{
					window.alert("Please Select A Section Using Session -> And -> Class -> Group.");	
				}
				else
				{
					window.location.replace("customer.php?group="+group+"&session="+session+"&class="+sclass+"&section="+str,true);	
				}
            }
        </script>
        
        <script>
            function showgroup(str)
            {
                if (str == "")
                {
                    document.getElementById("group").innerHTML = "";
                    return;
                }
                if (window.XMLHttpRequest)
                {// code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                }
                else
                {// code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        document.getElementById("group").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajx/group1.php?s=" + str, true);
                xmlhttp.send();
            }
        </script>
        <script>
            function show_student_groupwise(str)
            {
				var session=$('#session').val();
				var sclass=$('#class').val();
                if(str=='')
				{
					window.alert("Please Select A Group Using Session -> And -> Class.");	
				}
				else
				{
					window.location.replace("customer.php?group="+str+"&session="+session+"&class="+sclass,true);	
				}
            }
        </script>
        <script>
            function showee(str)
            {
                if (str == "")
                {
                    document.getElementById("df").innerHTML = "";
                    return;
                }
                if (window.XMLHttpRequest)
                {// code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                }
                else
                {// code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        document.getElementById("df").innerHTML = xmlhttp.responseText;
                    }
                }
				
                xmlhttp.open("GET", "ajx/abotun8.php?s="+str, true);
                xmlhttp.send();
            }
		</script>
        
        <script>
            function showstudent(str)
            {
                var session=$('#session').val();
				var sclass=$('#class').val();
				var group=$('#group').val();
				var section=$('#section').val();
                if(str=='')
				{
					window.alert("Please Select A Shift Using Session -> And -> Class -> Group -> Section.");	
				}
				else
				{
					window.location.replace("customer.php?group="+group+"&session="+session+"&class="+sclass+"&section="+section+"&shift="+str,true);	
				}
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
            		<div class="mws-stat-container clearfix">
                	
                    <!-- Statistic Item -->
                	
<?php //include('header_footer_file/accjournalbalance.php'); ?>
                </div>
                
                
                <!-- Panels Start -->
                <?php 
				if(isset($_GET['view']))
				{
					?>
                    <div class="mws-panel grid_12">
                	<div class="mws-panel-header">
                    	<span><i class="icon-table"></i> <strong><?php echo $obj->SelectAllByVal("ams_student_list","id",$_GET['view'],"name"); ?></strong>  Detail </span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <table class="mws-table">
                            <tbody>
                            <?php
							$sql1=$obj->SelectAllByID("ams_student_list",array("id"=>$_GET['view']));
							$a=1;
							if(!empty($sql1))
							foreach($sql1 as $row)
							{
							?>
                                <tr>
                                	<td  valign="middle"><strong>Session : </strong></td>
                                    <td  valign="middle"><?php echo $row->session; ?></td>
                                    <td  valign="middle"><strong>Class : </strong></td>
                                    <td  valign="middle"><?php echo $row->class; ?></td>
                                    <td  valign="middle"><strong>Group : </strong></td>
                                    <td  valign="middle"><?php echo $row->group; ?></td>
                                 </tr>
                                 <tr>
                                	<td  valign="middle"><strong>Section : </strong></td>
                                    <td  valign="middle"><?php echo $row->section; ?></td>
                                    <td  valign="middle"><strong>Shift : </strong></td>
                                    <td  valign="middle"><?php echo $row->shift; ?></td>
                                    <td  valign="middle"><strong>Contact Number : </strong></td>
                                    <td  valign="middle"><?php echo $row->phone_number; ?></td>
                                 </tr>
                                 <tr>
                                	<td  valign="middle"><strong>Admission Date : </strong></td>
                                    <td  valign="middle"><?php echo $row->date; ?></td>
                                    <td  valign="middle"><strong>Date of Birth : </strong></td>
                                    <td  valign="middle"><?php echo $row->dob; ?></td>
                                    <td  valign="middle"><strong>Blood Group  : </strong></td>
                                    <td  valign="middle"><?php echo $obj->SelectAllByVal("ams_blood_group","id",$row->blood_group,"name"); ?></td>
                                 </tr>
                                 <tr>
                                	<td  valign="middle"><strong>Gender : </strong></td>
                                    <td  valign="middle"><?php echo $row->gender; ?></td>
                                    <td  valign="middle"><strong>Father’s Name : </strong></td>
                                    <td  valign="middle"><?php echo $row->father_name; ?></td>
                                    <td  valign="middle"><strong>Mother’s Name  : </strong></td>
                                    <td  valign="middle"><?php echo $row->mother_name; ?></td>
                                 </tr>
                                 
                                
                             <?php 
									
							 $a++;
							 } ?>
                             <tr>
                                    <td  valign="middle" colspan="6"><a href="<?php echo $obj->filename(); ?>" class="btn btn-info"><strong>Back To List</strong></a>
                                    </td>
                                </tr> 
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!--income by customer-->
                
                <div class="mws-panel grid_12">
                	<div class="mws-panel-header">
                    	<span><i class="icon-table"></i> <strong><?php echo $obj->SelectAllByVal("ams_student_list","id",$_GET['view'],"name"); ?></strong> : Invoices  </span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <table class="mws-table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Invoice Date</th>
                                    <th>Number</th>
                                    <th>Student</th>
                                    <th>Amount Due</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
							$sql1=$obj->SelectAllByID("account_module_invoice",array("customer_id"=>$_GET['view']));
							$a=1;
							$amountsales_total=0;
							$amountsales_paid=0;
							if(!empty($sql1))
							foreach($sql1 as $row)
							{
								$inid=$row->id; 
									$getdutotal=$obj->SelectAllByID("account_module_invoice_detail",array("invoice_id"=>$inid));
										$totaldue=0;
										$total=0;
										if(!empty($getdutotal))
									foreach($getdutotal as $due)
									{
										$totaldue+=$due->subtotal;
										$total+=$due->subtotal;
									}
									
									$sql_payment=$obj->SelectAllByID("account_module_invoice_payment",array("invoice_id"=>$inid));
									$p=0;
									if(!empty($sql_payment))
									foreach($sql_payment as $ip)
									{
										$p+=$ip->amount;
									}
									
									
									
								$sql_leds=$obj->SelectAllByID("account_module_invoice_detail",array("invoice_id"=>$inid));
								 $qp_invoice=0;
								 $p_invoice=0;
								 $q_invoice=0;
								 $tax_invoice=0;
								 if(!empty($sql_leds))
									foreach($sql_leds as $fetled)
									{
										$qp_invoice+=$fetled->quantity*$fetled->price;
										$p_invoice+=$fetled->price;
										$q_invoice+=$fetled->quantity;
										$taxid=$fetled->tax_id;
										$sql_vat=$obj->SelectAllByID("account_module_newtax",array("id"=>$taxid));
										if(!empty($sql_vat))
										foreach($sql_vat as $fetvat)
										{
										 $tax_invoice+=(($fetled->quantity*$fetled->price)*$fetvat->rate)/100;
										}
									}
									$cid=$row->customer_id;  
							?>
                                <tr>
                                    <td valign="middle" align="center" style="width:30px;">
                               		<a class="anchorclass btn" rel="submenu1"><i class="icon-arrow-down-2"></i></a>
                                        <div id="submenu1" class="anylinkcss btn">
                                            <ul>
                                            <li><a href="viewinvoice.php?id=<?php echo $row->id; ?>&amp;cid=<?php echo $cid;  ?>&amp;branch_id=<?php echo $row->branch_id;  ?>&amp;link_id=<?php echo $row->link_id;  ?>&amp;currency=<?php echo $row->currency; ?>" class="btn"><i class="icon-table"></i> View</a></li>
                                            <li><a href="addpayment.php?id=<?php echo $inid; ?>&amp;cid=<?php echo $cid;  ?>&amp;branch_id=<?php echo $row->branch_id;  ?>&amp;link_id=<?php echo $row->link_id;  ?>&amp;due=<?php echo ($totaldue+$tax_invoice)-$p;  ?>&amp;tam=<?php echo $total+$tax_invoice; ?>" class="btn"><i class="icon-attachment"></i> Add Payment</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td valign="middle" align="center"><?php echo $row->date; ?></td>
                                    <td align="center" valign="middle"><a style="color:rgba(51,51,51,1); font-weight:bolder;" href="viewinvoice.php?id=<?php echo $row->id; ?>&amp;cid=<?php echo $cid;  ?>&amp;branch_id=<?php echo $row->branch_id;  ?>&amp;link_id=<?php echo $row->link_id;  ?>&amp;currency=<?php echo $row->currency; ?>">Invoice <?php echo $row->id; ?></a></td>
                                    <td align="center" valign="middle"><?php
									echo $obj->SelectAllByVal("ams_student_list","id",$cid,"name");
									?></td>
                                    <td align="center" valign="middle">
									<?php 
									echo number_format(($totaldue+$tax_invoice)-$p);
									$amountsales_paid+=$p;
									?></td>
                                    <td align="center" valign="middle">
									<?php echo number_format($total+$tax_invoice,2); $amountsales_total+=$total+$tax_invoice; ?>
                                    </td>
                                    <td align="center" valign="middle">
                                    <?php 
									$status=$row->status;
									if($status==0){
									?>
                                    <button type="button" class="btn btn-small" disabled="disabled"><font color="#FF0000">Unpaid</font></button>
                                    <?php 
									}elseif($status==1){
									?>
                                    <button type="button" class="btn btn-warning btn-small" disabled="disabled">Partial</button>
                                    <?php 
									}elseif($status==2){
									?>
                                    <button type="button" class="btn btn-success btn-small" disabled="disabled">Paid</button>
                                    <?php 
									}
									
									?>                                    
                                    <?php
									$totalam=$totaldue+$tax_invoice;
									if($totalam==$p)
									{
										$obj->update("account_module_invoice",array("id"=>$inid,"status"=>2));	
									}
									elseif($p!=0)
									{
										$obj->update("account_module_invoice",array("id"=>$inid,"status"=>1));
									}
									elseif($p==0)
									{
										$obj->update("account_module_invoice",array("id"=>$inid,"status"=>0));	
									}
									
									?>
                                    </td>
                                </tr>
                             <?php 
							 $a++;
							 } ?> 
                             <tr>
                             	<td colspan="5"></td>
                                <td>Total Fee Amount : </td>
                                <td><?php echo number_format($amountsales_total,2); ?> Tk.</td>
                             </tr>
                             <tr>
                             	<td colspan="5"></td>
                                <td>Total Paid Amount : </td>
                                <td><?php echo number_format($amountsales_paid,2); ?> Tk.</td>
                             </tr>
                             <tr>
                             	<td colspan="5"></td>
                                <td>Total Receivables : </td>
                                <td><?php 
								$receives=$amountsales_total-$amountsales_paid;
								echo number_format($receives,2);
								?> Tk.</td>
                             </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                
                
                
                <!--income by customer -->
                
                <!--expense by customer-->
                
                
                <!--expense by vendor -->
                
                <!--expense by customer-->
                
                <div class="grid_12">
                    <div class="mws-panel">
                    	<h2 align="center" style="margin-top:0px; border-left:#666 medium dotted;  border-right:#666 medium dotted;"><i class="icon-publish"></i> Receive Payment History </h2>
                        <div class="mws-panel-header">
                            <span><i class="icon-publish"></i> Receive Payment History </span>
                        </div>
                        <div class="mws-panel-body no-padding">
                            <table class="mws-datatable-fn mws-table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Date</th>
                                    <th>Number</th>
                                    <th>Receive From</th>
                                    <th>Particular</th>
                                    <th>Payment Received </th>
                                    <th>Taka</th>
                                    <th>User Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
							$sql1=$obj->SelectAllByID_Multiple("account_module_invoice_payment",array("input_by"=>$uid,"cid"=>$_GET['view']));			
							$a=1;
							if(!empty($sql1))
							foreach($sql1 as $row)
							{
								
							?>
                                <tr>
                                    <td valign="middle" align="center" style="width:30px;"><?php echo $a; ?> </td>
                                    <td valign="middle" align="center"><a style="font-size:14px; font-weight:bolder; color:#333;" href="#"> <?php echo $obj->dates($row->date); ?></a></td>
                                    <td align="center" valign="middle"><?php echo "Payment-".$row->id; ?></td>
                                    <td align="center" valign="middle"><?php echo $obj->SelectAllByVal("ams_student_list","id",$row->cid,"name"); ?></td>
                                    <td align="center" valign="middle"><?php echo $row->memo; ?></td>
                                    <td align="center" valign="middle"><?php echo $obj->SelectAllByVal("account_module_ladger_list_properties","id",$row->pa,"head_sub_list_name"); ?></td>
                                    <td align="center" valign="middle"><?php echo number_format($row->amount,2); ?></td>
                                    <td align="center" valign="middle"><?php echo $obj->SelectAllByVal("account_module_company_user","id",$row->input_by,"name"); ?></td>
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
                <!--expense by vendor -->
                
                    <?php
				}
				elseif(isset($_GET['edit']))
				{
					?>
                    <form action="" method="post">
                    <input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>">
                    <div class="mws-panel grid_12">
                	<div class="mws-panel-header">
                    	<span><i class="icon-table"></i> <strong><?php echo $obj->SelectAllByVal("account_module_customer","id",$_GET['edit'],"company_name"); ?></strong> : Company Detail </span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <table class="mws-table">
                            <tbody>
                            <?php
							$sql1=$obj->SelectAllByID("account_module_customer",array("id"=>$_GET['edit']));
							$a=1;
							if(!empty($sql1))
							foreach($sql1 as $row)
							{
							?>
                            <tr>
                                    <td  valign="middle" colspan="4"></td>
                                </tr>
                                <tr>
                                	<td  valign="middle"><strong>Company Name : </strong></td>
                                    <td  valign="middle"><input type="text" name="company_name" value="<?php echo $row->company_name; ?>" /></td>
                                    <td  valign="middle"><strong>Contact Person 1 : </strong></td>
                                    <td  valign="middle"><input type="text" name="fname" value="<?php echo $row->fname; ?>" /></td>
                                 </tr>
                                 <tr> 
                                 	<td  valign="middle"><strong>Contact Person 2 : </strong></td>  
                                    <td  valign="middle"><input type="text" name="lname" value="<?php echo $row->lname; ?>" /></td>
                                    <td  valign="middle"><strong>Phone / Mobile </strong></td>
                                    <td  valign="middle"><input type="text" name="phone" value="<?php echo $row->phone; ?>" /></td>
                                 </tr>
                                 <tr>
                                    <td  valign="middle"><strong>Email Address </strong></td>
                                    <td  valign="middle"><input type="text" name="email" value="<?php echo $row->email; ?>" /></td>
                                    <td  valign="middle"><strong>Address </strong></td>
                                    <td  valign="middle"><input type="text" name="address" value="<?php echo $row->address; ?>" /></td>
                                </tr>
                                <tr>
                                    <td  valign="middle"><strong>Bank Ac </strong></td>
                                    <td  valign="middle"><input type="text" name="ac" value="<?php echo $row->ac; ?>" /></td>
                                    <td  valign="middle"><strong>Bank Name </strong></td>
                                    <td  valign="middle"><input type="text" name="bankname" value="<?php echo $row->bankname; ?>" /></td>
                                </tr>
                                <tr>
                                    <td  valign="middle" colspan="4"></td>
                                </tr>
                                <tr>
                                    <td  valign="middle" colspan="4"><button name="update" type="submit" class="btn btn-success"><strong>Update Change</strong></button>
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
				else
				{
					$table="ams_student_list";
					?>
                    
                    
                    <form action="" method="post">
                    <div class="mws-panel grid_12">
                	<div class="mws-panel-header">
                    	<span><i class="icon-table"></i> Quick Search </span> <span style="margin-top:-30px; float:right;"><a href="../../st_detail1.php" class="btn btn-success"><i class="icon-plus"></i>Create a  New Student</a></span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <table class="mws-table">
                            <tbody>
                            <tr>
                                    <td  valign="middle" colspan="6"></td>
                                </tr>
                                <tr>
                                	<td  valign="middle"><strong>Session : </strong></td>
                                    <td  valign="middle">
                                    <select class="required mws-select2 large" style="width:100%;" name="session" id="session" onChange="showcls(this.value)" >
                                    <option>Session</option>
                                      <?php 
									    $array=array("school_id"=>$school);
									    $section=$obj->SelectAllByID("ams_session",$array);
										 if(!empty($section))
										 foreach($section as $sec ):
									  ?>
                                        <option <?php if(isset($_GET['session'])){ if($_GET['session']==$sec->id){ ?> selected="selected" <?php } } ?> value="<?php echo $sec->id; ?>"><?php echo $sec->name; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    </td>
                                    <td  valign="middle"><strong>Class / Course : </strong></td>
                                    <td  valign="middle">
                                    <select class="required mws-select2 large" style="width:100%;" name="class" id="class" onChange="showsection(this.value)" >
                                        <option>Class / Course</option>
                                        <?php if(isset($_GET['class'])){ ?>
                                        <?php 
									    $array2=array("school_id"=>$school,"session_id"=>$_GET['session']);
									    $section2=$obj->SelectAllByID_Multiple("ams_class",$array2);
										 if(!empty($section2))
										 foreach($section2 as $sec2 ):
									  ?>
                                        <option <?php if($_GET['class']==$sec2->id){ ?> selected="selected" <?php } ?> value="<?php echo $sec2->id; ?>"><?php echo $sec2->name; ?></option>
                                        <?php endforeach; ?>
                                        <?php } ?>
                                    </select>
                                    </td>
                                    <td  valign="middle"><strong>Group : </strong></td>
                                    <td  valign="middle">
                                    <select class="required mws-select2 large" style="width:100%;" name="group" onChange="show_student_groupwise(this.value)" id="group">
                                        <option>Group</option>
                                        <?php if(isset($_GET['group'])){ ?>
                                        <?php 
									    $array3=array("school_id"=>$school,"session_id"=>$_GET['session'],"class_id"=>$_GET['class']);
									    $section3=$obj->SelectAllByID_Multiple("ams_student_group",$array3);
										 if(!empty($section3))
										 foreach($section3 as $sec3):
									  ?>
                                        <option <?php if($_GET['group']==$sec3->id){ ?> selected="selected" <?php } ?> value="<?php echo $sec3->id; ?>"><?php echo $sec3->name; ?></option>
                                        <?php endforeach; ?>
                                        <?php } ?>
                                    </select>
                                    </td>
                                 </tr>
                                 <tr>
                                	<td  valign="middle"><strong>Section : </strong></td>
                                    <td  valign="middle">
                                    <select  class="required mws-select2 large" style="width:100%;" name="section" id="section" onChange="showshift(this.value)">
                                        <option>Section</option>
                                        <?php 
									    $array4=array("school_id"=>$school,"session_id"=>$_GET['session'],"class_id"=>$_GET['class']);
									    $section4=$obj->SelectAllByID_Multiple("ams_section",$array4);
										 if(!empty($section4))
										 foreach($section4 as $sec4):
									  ?>
                                        <option <?php if(isset($_GET['section'])){ if($_GET['section']==$sec4->id){ ?> selected="selected" <?php }} ?> value="<?php echo $sec4->id; ?>"><?php echo $sec4->name; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    </td>
                                    <td  valign="middle"><strong>Shift : </strong></td>
                                    <td  valign="middle">
                                    <select  class="required mws-select2 large" style="width:100%;" name="shift" id="shift" onChange="showstudent(this.value)">
                                        <option>Shift</option>
                                        <?php 
									    $array5=array("school_id"=>$school,"session_id"=>$_GET['session'],"class_id"=>$_GET['class'],"section_id"=>$_GET['section']);
									    $section5=$obj->SelectAllByID_Multiple("ams_shift",$array5);
										 if(!empty($section5))
										 foreach($section5 as $sec5):
									  	?>
                                        <option <?php if(isset($_GET['shift'])){ if($_GET['shift']==$sec5->id){ ?> selected="selected" <?php }} ?> value="<?php echo $sec5->id; ?>"><?php echo $sec5->name; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    </td>
                                    <td  valign="middle"></td>
                                    <td  valign="middle"></td>
                                 </tr>
                                 
                                <tr>
                                    <td  valign="middle" colspan="6"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                </form>
                    <div class="mws-panel grid_12">
                	<div class="mws-panel-header">
                    	<span><i class="icon-table"></i> Student Info </span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <table class="mws-datatable-fn mws-table" style="font-size:12px !important;">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Full Name</th>
                                    <th>Roll</th>
                                    <th>Class</th>
                                    <th>Section</th>
                                    <th>Group</th>
                                    <th>Shift</th>
                                    <th>Mobile No</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
						  if(isset($_GET['group']))
						  {
							  if(isset($_GET['section']))
							  {
								if(isset($_GET['shift']))  
								{
									$array=array("group_id"=>$_GET['group'],"shift_id"=>$_GET['shift'],"section_id"=>$_GET['section'],"school_id"=>$school);
								}
								else
								{
									$array=array("group_id"=>$_GET['group'],"section_id"=>$_GET['section'],"school_id"=>$school);
								}
							  }
							  else
							  {
								$array=array("group_id"=>$_GET['group'],"school_id"=>$school);
							  }  
							
						  }
						  else
						  {
							$array=array("school_id"=>$school,"date"=>date('Y-m-d'));
						  }
						  $sql1=$obj->SelectAllByID_Multiple($table,$array);
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
                                    <td align="center" valign="middle"><?php echo $row->roll; ?></td>
                                    <td align="center" valign="middle"><?php echo $obj->SelectAllByVal("ams_class","id",$row->class_id,"name"); ?></td>
                                    <td align="center" valign="middle"><?php echo $obj->SelectAllByVal("ams_section","id",$row->section_id,"name"); ?></td>
                                    <td align="center" valign="middle"><?php echo $obj->SelectAllByVal("ams_student_group","id",$row->group_id,"name"); ?></td>
                                    <td align="center" valign="middle"><?php echo $obj->SelectAllByVal("ams_shift","id",$row->shift_id,"name"); ?></td>
                                    <td align="center" valign="middle"><?php echo $row->phone_number; ?></td>
                                    <td>
                                    <a onClick="javascript:return confirm('Are you absolutely sure to View Transaction This?')" title="View Transaction" href="<?php echo $obj->filename(); ?>?view=<?php echo $row->id; ?>" class="btn icon-business-card"></a>
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