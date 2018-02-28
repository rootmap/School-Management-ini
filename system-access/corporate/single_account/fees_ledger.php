<?php include('class_file/auth.php'); 
if(isset($_GET['del']))
{
	extract($_GET);
	$obj->deletesing("id",$del,"fees_ledger");	
}

if(isset($_POST['upch']))
{
	extract($_POST);
	if(!empty($id) && !empty($ledger_id) && !empty($percent))
	{
		if($obj->update("fees_ledger",array("id"=>$id,"ledger_id"=>$ledger_id,"percent"=>$percent,"session_id"=>$session,"class_id"=>$class,"group_id"=>$group,"date"=>date('Y-m-d'),"status"=>1))==1)
		{
			$obj->Success("Successfully updated .",$obj->filename());		
		}
		else
		{
			$obj->Error("Failed, Please try again.",$obj->filename());		
		}
	}
	else
	{
		$obj->Error("Some Field is empty, Please try again.",$obj->filename());	
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
                if (str == "")
                {
                    document.getElementById("shift").innerHTML = "";
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
                        document.getElementById("shift").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajx/shift.php?s=" + str, true);
                xmlhttp.send();

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
            
            	<!-- Statistics Button Container 
            		<div class="mws-stat-container clearfix">-->
                	
                    <!-- Statistic Item 
                	
                </div>-->
                
                
                <!-- Panels Start -->
                	<div class="mws-stat-container clearfix">
                	
                    <!-- Statistic Item -->
                	
<?php //include('header_footer_file/accjournalbalance.php');
echo $obj->ShowMsg();
 ?>
                </div>
                <div class="mws-panel grid_8">

                	<div class="mws-panel-header">
                    	<span><i class="icon-users"></i> Student Fees Ledger </span>
                    </div>
					
                    <div class="mws-panel-body" style="text-align: right">
                    
                    	<div class="mws-panel-content">
                        	<input type="button" id="mws-jui-dialog-mdl-btn" class="btn btn-primary" value="Add An Accounts">
                            <div id="mws-jui-dialog">
                        		<div class="mws-dialog-inner">
                            		<!--tab option st6art -->
                                    <div class="mws-tabs">
                                            <ul>
											<?php
                                            $sql1=$obj->SelectAll("account_module_list_of_head_accounts");
                                            $a=1;
											if(!empty($sql1))
                                            foreach($sql1 as $row)
                                            {
                                            ?>
                                                <li><a href="#tab-<?php echo $a; ?>"><?php echo $row->head_title; ?></a></li>
                                            <?php
                                            $a++;
                                            }
                                            ?>
                                            </ul>
                                        
                                        <div id="tab-1">
                                        <p>
                                        <br>
                                        
                                        <h3>List of Assets <h4><hr>
                                        <ul id="treemenu1" class="treeview">
                                        <?php
                                                $sql2=$obj->SelectAll("account_module_asset_head_list");
												if(!empty($sql2))
                                                foreach($sql2 as $rows)
                                                {
                                                    $asset_head_title=$rows->head_title;
                                                    $asset_head_title_id=$rows->id;
                                                    
                                                    ?>
                                                    
                                                    <li><?php echo $asset_head_title; ?>
                                                    <?php
                                                    $chk=$obj->exists_multiple("account_module_head_list",array("list_of_head_accounts_id"=>1,"list_of_sub_head_accounts_id"=>$asset_head_title_id));
                                                    if($chk!=0)
                                                    {
                                                $ss=$obj->SelectAllByID_Multiple("account_module_head_list",array("list_of_head_accounts_id"=>1,"list_of_sub_head_accounts_id"=>$asset_head_title_id));
                                                ?>
                                                <ul>
                                                <?php
                                                    foreach($ss as $rowss)
                                                    {
                                                        $list_of_sub_head_list_id=$rowss->id;
                                                    ?>
                                                        <li><?php 
                                                        $chks=$obj->exists_multiple("account_module_head_sub_list",array("list_of_head_accounts_id"=>1,"list_of_sub_head_accounts_id"=>$asset_head_title_id,"list_of_sub_head_list_id"=>$list_of_sub_head_list_id));
                                                        if($chks==0)
                                                        {
                                                            ?>
                                                            <a href="class_file/class/fees_ladger.php?ids=<?php echo $rowss->id; ?>&amp;subhead=1&amp;name=<?php  echo $rowss->head_title;  ?>&amp;status=<?php echo $rowss->status;   ?>">
                                                            <?php
                                                        }
                                                        ?><?php echo $rowss->head_title; ?>
                                                        <?php 
                                                        if($chks==0)
                                                        {
                                                            ?>
                                                            </a>
                                                            <?php
                                                        }
                                                        ?>
                                                        
                                                        <?php
                                                        
                                                        if($chks!=0)
                                                        {
                                                        $sss=$obj->SelectAllByID_Multiple("account_module_head_sub_list",array("list_of_head_accounts_id"=>1,"list_of_sub_head_accounts_id"=>$asset_head_title_id,"list_of_sub_head_list_id"=>$list_of_sub_head_list_id));
                                                        ?>
                                                    <ul>
                                                            <?php
                                                            foreach($sss as $rowsss)
                                                            {
                                                            ?>
                                                            <li><a href="class_file/class/fees_ladger.php?id=<?php echo $rowsss->id; ?>&amp;subhead=1&amp;name=<?php  echo $rowsss->head_title;  ?>&amp;status=<?php echo $rowsss->status;   ?>"><?php echo $rowsss->head_title; ?></a></li>
                                                            <?php
                                                            }
                                                            ?>
                                                        </ul>
                                                        </li>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                    </ul>
                                                    </li>
                                                    
                                                    <?php
                                                    }
                                                }
                                            ?>
                                        </ul>
            
            
                                        </p>
                                    </div>
                                    
                                    <div id="tab-2">
                                         <p>
                                        <br>
                                        
                                        <h3>List of Liability / Cradit Card <h4><hr>
                                        <ul id="treemenu2" class="treeview">
                                        <?php
                                                $sql3=$obj->SelectAll("account_module_liability_credit_head_list");
												if(!empty($sql3))
                                                foreach($sql3 as $rows)
                                                {
                                                    $asset_head_title=$rows->head_title;
                                                    $asset_head_title_id=$rows->id;
                                                    
                                                    ?>
                                                    
                                                    <li><?php echo $asset_head_title; ?>
                                                    <?php
                                                    $chk=$obj->exists_multiple("account_module_head_list",array("list_of_head_accounts_id"=>2,"list_of_sub_head_accounts_id"=>$asset_head_title_id));
                                                    if($chk!=0)
                                                    {
                                                $ss=$obj->SelectAllByID_Multiple("account_module_head_list",array("list_of_head_accounts_id"=>2,"list_of_sub_head_accounts_id"=>$asset_head_title_id));
                                                ?>
                                                <ul>
                                                <?php
                                                    foreach($ss as $rowss)
                                                    {
                                                        $list_of_sub_head_list_id=$rowss->id;
                                                    ?>
                                                        <li><?php echo $rowss->head_title; ?>
                                                        <?php
                                                        $chks=$obj->exists_multiple("account_module_head_sub_list",array("list_of_head_accounts_id"=>2,"list_of_sub_head_accounts_id"=>$asset_head_title_id,"list_of_sub_head_list_id"=>$list_of_sub_head_list_id));
                                                        if($chks!=0)
                                                        {
                                                        $sss=$obj->SelectAllByID_Multiple("account_module_head_sub_list",array("list_of_head_accounts_id"=>2,"list_of_sub_head_accounts_id"=>$asset_head_title_id,"list_of_sub_head_list_id"=>$list_of_sub_head_list_id));
                                                        ?>
                                                    <ul>
                                                            <?php
                                                            foreach($sss as $rowsss)
                                                            {
                                                            ?>
                                                            <li><a href="class_file/class/fees_ladger.php?id=<?php echo $rowsss->id; ?>&amp;subhead=2&amp;name=<?php  echo $rowsss->head_title;  ?>&amp;status=<?php echo $rowsss->status;   ?>"><?php echo $rowsss->head_title; ?></a></li>
                                                            <?php
                                                            }
                                                            ?>
                                                        </ul>
                                                        </li>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                    </ul>
                                                    </li>
                                                    
                                                    <?php
                                                    }
                                                }
                                            ?>
                                        </ul>
            
            
                                        </p>
                                    </div>
                                    
                                    <div id="tab-3">
                                        <p>
                                        <br>
                                        
                                        <h3>List of Income <h4><hr>
                                        <ul id="treemenu3" class="treeview">
                                        <?php
                                                $sql4=$obj->SelectAll("account_module_income_head_list");
												if(!empty($sql4))
                                                foreach($sql4 as $rows)
                                                {
                                                    $asset_head_title=$rows->head_title;
                                                    $asset_head_title_id=$rows->id;
                                                    
                                                    ?>
                                                    
                                                    <li><?php echo $asset_head_title; ?>
                                                    <?php
                                                    $chk=$obj->exists_multiple("account_module_head_list",array("list_of_head_accounts_id"=>3,"list_of_sub_head_accounts_id"=>$asset_head_title_id));
                                                    if($chk!=0)
                                                    {
                                                $ss=$obj->SelectAllByID_Multiple("account_module_head_list",array("list_of_head_accounts_id"=>3,"list_of_sub_head_accounts_id"=>$asset_head_title_id));
                                                ?>
                                                <ul>
                                                <?php
                                                    foreach($ss as $rowss)
                                                    {
                                                        $list_of_sub_head_list_id=$rowss->id;
                                                    ?>
                                                        <li><?php echo $rowss->head_title; ?>
                                                        <?php
                                                        $chks=$obj->exists_multiple("account_module_head_sub_list",array("list_of_head_accounts_id"=>3,"list_of_sub_head_accounts_id"=>$asset_head_title_id,"list_of_sub_head_list_id"=>$list_of_sub_head_list_id));
                                                        if($chks!=0)
                                                        {
                                                        $sss=$obj->SelectAllByID_Multiple("account_module_head_sub_list",array("list_of_head_accounts_id"=>3,"list_of_sub_head_accounts_id"=>$asset_head_title_id,"list_of_sub_head_list_id"=>$list_of_sub_head_list_id));
                                                        ?>
                                                    <ul>
                                                            <?php
                                                            foreach($sss as $rowsss)
                                                            {
                                                            ?>
                                                            <li><a href="class_file/class/fees_ladger.php?id=<?php echo $rowsss->id; ?>&amp;subhead=3&amp;name=<?php  echo $rowsss->head_title;  ?>&amp;status=<?php echo $rowsss->status;   ?>"><?php echo $rowsss->head_title; ?></a></li>
                                                            <?php
                                                            }
                                                            ?>
                                                        </ul>
                                                        </li>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                    </ul>
                                                    </li>
                                                    
                                                    <?php
                                                    }
                                                }
                                            ?>
                                        </ul>
            
            
                                        </p>
                                    </div>
                                    <div id="tab-4">
                                        <p>
                                        <br>
                                        
                                        <h3>List of Expense <h4><hr>
                                        <ul id="treemenu4" class="treeview">
                                        <?php
                                                $sql5=$obj->SelectAll("account_module_expense_head_list");
												if(!empty($sql5))
                                                foreach($sql5 as $rows)
                                                {
                                                    $asset_head_title=$rows->head_title;
                                                    $asset_head_title_id=$rows->id;
                                                    
                                                    ?>
                                                    
                                                    <li><?php echo $asset_head_title; ?>
                                                    <?php
                                                    $chk=$obj->exists_multiple("account_module_head_list",array("list_of_head_accounts_id"=>4,"list_of_sub_head_accounts_id"=>$asset_head_title_id));
                                                    if($chk!=0)
                                                    {
                                                $ss=$obj->SelectAllByID_Multiple("account_module_head_list",array("list_of_head_accounts_id"=>4,"list_of_sub_head_accounts_id"=>$asset_head_title_id));
                                                ?>
                                                <ul>
                                                <?php
													if(!empty($ss))
                                                    foreach($ss as $rowss)
                                                    {
                                                        $list_of_sub_head_list_id=$rowss->id;
                                                    ?>
                                                        <li><?php echo $rowss->head_title; ?>
                                                        <?php
                                                        $chks=$obj->exists_multiple("account_module_head_sub_list",array("list_of_head_accounts_id"=>4,"list_of_sub_head_accounts_id"=>$asset_head_title_id,"list_of_sub_head_list_id"=>$list_of_sub_head_list_id));
                                                        if($chks!=0)
                                                        {
                                                        $sss=$obj->SelectAllByID_Multiple("account_module_head_sub_list",array("list_of_head_accounts_id"=>4,"list_of_sub_head_accounts_id"=>$asset_head_title_id,"list_of_sub_head_list_id"=>$list_of_sub_head_list_id));
                                                        ?>
                                                    <ul>
                                                            <?php
															if(!empty($sss))
                                                            foreach($sss as $rowsss)
                                                            {
                                                            ?>
                                                            <li><a href="class_file/class/fees_ladger.php?id=<?php echo $rowsss->id; ?>&amp;subhead=4&amp;name=<?php  echo $rowsss->head_title;  ?>&amp;status=<?php echo $rowsss->status;   ?>"><?php echo $rowsss->head_title; ?></a></li>
                                                            <?php
                                                            }
                                                            ?>
                                                        </ul>
                                                        </li>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                    </ul>
                                                    </li>
                                                    
                                                    <?php
                                                    }
                                                }
                                            ?>
                                        </ul>
            
                                        </p>
                                    </div>
                                    <div id="tab-5">
                                        <p>
                                        <br>
                                        
                                        <h3>List of Equity <h4><hr>
                                        <ul id="treemenu5" class="treeview">
                                        <?php
                                                $sql6=$obj->SelectAll("account_module_equity_head_list");
												if(!empty($sql6))
                                                foreach($sql6 as $rows)
                                                {
                                                    $asset_head_title=$rows->head_title;
                                                    $asset_head_title_id=$rows->id;
                                                    
                                                    ?>
                                                    
                                                    <li><?php echo $asset_head_title; ?>
                                                    <?php
                                                    $chk=$obj->exists_multiple("account_module_head_list",array("list_of_head_accounts_id"=>5,"list_of_sub_head_accounts_id"=>$asset_head_title_id));
                                                    if($chk!=0)
                                                    {
                                                $ss=$obj->SelectAllByID_Multiple("account_module_head_list",array("list_of_head_accounts_id"=>5,"list_of_sub_head_accounts_id"=>$asset_head_title_id));
                                                ?>
                                                <ul>
                                                <?php
													if(!empty($ss))
                                                    foreach($ss as $rowss)
                                                    {
                                                        $list_of_sub_head_list_id=$rowss->id;
                                                    ?>
                                                        <li><?php echo $rowss->head_title; ?>
                                                        <?php
                                                        $chks=$obj->exists_multiple("account_module_head_sub_list",array("list_of_head_accounts_id"=>5,"list_of_sub_head_accounts_id"=>$asset_head_title_id,"list_of_sub_head_list_id"=>$list_of_sub_head_list_id));
                                                        if($chks!=0)
                                                        {
                                                        $sss=$obj->SelectAllByID_Multiple("account_module_head_sub_list",array("list_of_head_accounts_id"=>5,"list_of_sub_head_accounts_id"=>$asset_head_title_id,"list_of_sub_head_list_id"=>$list_of_sub_head_list_id));
                                                        ?>
                                                    <ul>
                                                            <?php
															if(!empty($sss))
                                                            foreach($sss as $rowsss)
                                                            {
                                                            ?>
                                                            <li><a href="class_file/class/fees_ladger.php?id=<?php echo $rowsss->id; ?>&amp;subhead=5&amp;name=<?php  echo $rowsss->head_title;  ?>&amp;status=<?php echo $rowsss->status;   ?>"><?php echo $rowsss->head_title; ?></a></li>
                                                            <?php
                                                            }
                                                            ?>
                                                        </ul>
                                                        </li>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                    </ul>
                                                    </li>
                                                    
                                                    <?php
                                                    }
                                                }
                                            ?>
                                        </ul>
            
            
            
                                        </p>
                                    </div>
									<div id="tab-6">
                            <p>
                            <br>
                            
                            <h3>List of Others <h4><hr>
                            <ul id="treemenu6" class="treeview">
                            <?php
                            		$sql7=$obj->SelectAll("account_module_other_head_list");
									if(!empty($sql7))
									foreach($sql7 as $rows)
									{
										$asset_head_title=$rows->head_title;
										$asset_head_title_id=$rows->id;
										
										?>
                                        
                                        <li><?php echo $asset_head_title; ?>
                                        <?php
										$chk=$obj->exists_multiple("account_module_head_list",array("list_of_head_accounts_id"=>6,"list_of_sub_head_accounts_id"=>$asset_head_title_id));
										if($chk!=0)
										{
									$ss=$obj->SelectAllByID_Multiple("account_module_head_list",array("list_of_head_accounts_id"=>6,"list_of_sub_head_accounts_id"=>$asset_head_title_id));
									?>
                                    <ul>
                                    <?php
										if(!empty($ss))
										foreach($ss as $rowss)
										{
											$list_of_sub_head_list_id=$rowss->id;
										?>
                                            <li><a href="class_file/class/fees_ladger.php?id=<?php echo $rowss->id; ?>&amp;subhead=6&amp;name=<?php echo $rowss->head_title; ?>&amp;status=<?php echo $rowss->status; ?>"><?php echo $rowss->head_title; ?></a></li>                               <?php											
										}
										?>
                               </ul>
                              </li>
                                        
                                        <?php
										}
									}
								?>
                            </ul>



                            </p>
                        </div>
                                    </div>
									
                                    <!--tab option st6art -->
                                    
                                </div>
                                
                            </div>
                            
                           
                        </div>
                    </div> 
                    
                    <?php 
					if(!isset($_GET['edit'])){
					?>
                    <div class="mws-panel-body no-padding">
                    	<form action="" method="get">
                        <table class="mws-table">
                            <thead>
                                <tr>
                                	<th align="center">Session</th>
                                    <th align="center">Class</th>
                                    <th align="center">Group</th>
                                    <th align="center" colspan="2"></th>
                                </tr>
                                <tr>
                                	<th align="center">
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
                                    </th>
                                    <th align="center">
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
                                    </th>
                                    <th align="center">
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
                                    </th>
                                    <th align="center">
                                    <button type="submit" name="report" class="btn btn-info">Generate Report</button>
                                    </th>
                                </tr>
                             </thead>
                        </table>
                        </form>
                        <table class="mws-table">
                            <thead>
                                <tr>
                                	<th align="center">Session</th>
                                    <th align="center">Class</th>
                                    <th align="center">Group</th>
                                    <th align="left">Particular</th>
                                    <th align="left">Amount</th>
                                    <th align="left">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
							if(isset($_GET['report']))
							{
								$session=$_GET['session'];
								$class=$_GET['class'];
								$group=$_GET['group'];
								$sqld1=$obj->SelectAllByID_Multiple("fees_ledger",array("branch_id"=>$school,"session_id"=>$session,"class_id"=>$class,"group_id"=>$group));
							}
							else
							{
								$sqld1=$obj->SelectAllByID_Multiple("fees_ledger",array("branch_id"=>$school,"session_id"=>0));	
							}
							if(!empty($sqld1))
							foreach($sqld1 as $row){ ?>
                                <tr>
                                    <td><?php echo $obj->SelectAllByVal("ams_session","id",$row->session_id,"name"); ?></td>
                                    <td><?php echo $obj->SelectAllByVal("ams_class","id",$row->class_id,"name"); ?></td>
                                    <td><?php echo $obj->SelectAllByVal("ams_student_group","id",$row->group_id,"name"); ?></td>
                                    <td><?php echo $obj->SelectAllByVal("account_module_ladger_list_properties","id",$row->ledger_id,"head_sub_list_name"); ?></td>
                                    <td><?php echo $row->percent; ?></td>
                                    <td>
                                    <a onClick="javascript:return confirm('Are you absolutely sure to edit This Ledger ?')" class='btn btn-info' href='<?php echo $obj->filename(); ?>?edit=<?php echo $row->id; ?>'>Edit</a>
                                    <a onClick="javascript:return confirm('Are you absolutely sure to delete This Ledger ?')" class='btn btn-danger' href='<?php echo $obj->filename(); ?>?del=<?php echo $row->id; ?>'>Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                            
                        </table>
                    </div>
                    <?php
					}
					else
					{
					?>
                    <form action="" method="post">
                    <div class="mws-panel grid_12">
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
                                 <?php 
							$sqld1=$obj->SelectAllByID_Multiple("fees_ledger",array("branch_id"=>$school,"id"=>$_GET['edit']));
							if(!empty($sqld1))
							foreach($sqld1 as $row){ ?>
                                 <tr>
                                	<td valign="middle"><?php if($row->session_id!=''){ ?><strong>Session : </strong>  <?php  } ?></td>
                                    <td valign="middle"><?php if($row->session_id!=''){ ?><?php echo $obj->SelectAllByVal("ams_session","id",$row->session_id,"name"); ?><?php } ?></td>
                                    <td valign="middle"><?php if($row->class_id!=''){ ?><strong>Class : </strong>  <?php  } ?></td>
                                    <td valign="middle"><?php if($row->class_id!=''){ ?><?php echo $obj->SelectAllByVal("ams_class","id",$row->class_id,"name"); ?><?php } ?></td>
                                    <td valign="middle"><?php if($row->group_id!=''){ ?><strong>Group : </strong>  <?php  } ?></td>
                                    <td valign="middle"><?php if($row->group_id!=''){ ?><?php echo $obj->SelectAllByVal("ams_student_group","id",$row->group_id,"name"); ?><?php } ?></td>
                                 </tr>
                                 <?php } ?>
                                <tr>
                                    <td  valign="middle" colspan="6"></td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="mws-table">
                            <thead>
                                <tr>
                                    <th align="left">Particular</th>
                                    <th align="left">Amount</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
							$sqld1=$obj->SelectAllByID_Multiple("fees_ledger",array("branch_id"=>$school,"id"=>$_GET['edit']));
							if(!empty($sqld1))
							foreach($sqld1 as $row){ ?>
                                <tr>
                                    <td>
                                    <input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>">
                                    <input type="hidden" name="ledger_id" value="<?php echo $row->ledger_id; ?>">
									<?php echo $obj->SelectAllByVal("account_module_ladger_list_properties","id",$row->ledger_id,"head_sub_list_name"); ?>
                                    </td>
                                    <td><input type="text" name="percent" value="<?php echo $row->percent; ?>" /></td>
                                    
                                </tr>
                            <?php } ?>
                            	<tr>
                                    <td colspan="2">
                                   <button type="submit" name="upch" onClick="javascript:return confirm('Are you absolutely sure to save Change This Info ?')" class='btn btn-info'>Save Changes</button>
                                    </td>
                                    
                                </tr>
                            </tbody>
                            
                        </table>
                    </div>
                </div>

                    <div class="mws-panel-body no-padding">
                        
                    </div>
                    </form>
                    <?php 
					}
					?>
                      	
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