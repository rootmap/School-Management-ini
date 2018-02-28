<?php 
set_time_limit(90000000000);
include('class_file/auth.php');
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
					window.location.replace("student_fees_paid_school.php?group="+group+"&session="+session+"&class="+sclass+"&section="+str,true);	
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
					window.location.replace("student_fees_paid_school.php?group="+str+"&session="+session+"&class="+sclass,true);	
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
					window.location.replace("student_fees_paid_school.php?group="+group+"&session="+session+"&class="+sclass+"&section="+section+"&shift="+str,true);	
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
                                    <th>Roll</th>
                                    <th>Full Name</th>
                                    <?php
									  if(isset($_GET['group']))
									  {
										 $sqlfid=$obj->SelectAllByID_Multiple("fees_paid_ledger",array("session_id"=>$_GET['session'],"class_id"=>$_GET['class'],"group_id"=>$_GET['group'],));
									  }
									  else
									  {
										   $sqlfid="";
									  } 
									
									if(!empty($sqlfid))
									foreach($sqlfid as $fid):
									?>
                                    <th><?php echo $obj->SelectAllByVal("account_module_ladger_list_properties","id",$fid->ledger_id,"head_sub_list_name"); ?></th>
                                    <?php endforeach; ?>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
						  if(isset($_GET['group']))
						  {
							 $array=array("session_id"=>$_GET['session'],"class_id"=>$_GET['class'],"group_id"=>$_GET['group'],"school_id"=>$school);
							 $sql1=$obj->SelectAllByID_Multiple($table,$array);
						  }
						  else
						  {
							   $sql1="";
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
                                    <td align="center" valign="middle"><?php echo $row->roll; ?></td>
                                    <td align="center" valign="middle"><?php echo $row->admition; ?>-<?php echo $row->name; ?></td>
                                    
                                    <?php
									$sqlfid=$obj->SelectAllByID_Multiple("fees_paid_ledger",array("session_id"=>$row->session_id,"class_id"=>$row->class_id,"group_id"=>$row->group_id));
									if(!empty($sqlfid))
									foreach($sqlfid as $fid):
									?>
                                    <td title="<?php echo $fid->ledger_id; ?>">
                                    <?php 
									//echo $obj->SelectAllByVal5("fees_paid_ledger_amount","student_id",$row->admition,"ledger_id",$fid->ledger_id,"session_id",$row->session_id,"class_id",$row->class_id,"group_id",$row->group_id,"amount"); 
									$dd=0;
									$sqlhh=$obj->SelectAllByID_Multiple("fees_paid_ledger_amount",array("student_id"=>$row->admition,"ledger_id"=>$fid->ledger_id,"session_id"=>$row->session_id,"class_id"=>$row->class_id,"group_id"=>$row->group_id));
									if(!empty($sqlhh))
									foreach($sqlhh as $hh):
										$dd+=$hh->amount;
									endforeach;
									echo $dd;
									?>
                                    </td>
                                    <?php endforeach; ?>
                                    
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