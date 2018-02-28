<?php include('class_file/auth.php'); ?>
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
                <?php echo $obj->ShowMsg(); ?>
                <div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span><i class="icon-warning-sign"></i> List of Heads</span>
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
                                                            <a href="class_file/class/addaccountladger.php?ids=<?php echo $rowss->id; ?>&amp;subhead=1&amp;name=<?php  echo $rowss->head_title;  ?>&amp;status=<?php echo $rowss->status;   ?>">
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
                                                            <li><a href="class_file/class/addaccountladger.php?id=<?php echo $rowsss->id; ?>&amp;subhead=1&amp;name=<?php  echo $rowsss->head_title;  ?>&amp;status=<?php echo $rowsss->status;   ?>"><?php echo $rowsss->head_title; ?></a></li>
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
                                                            <li><a href="class_file/class/addaccountladger.php?id=<?php echo $rowsss->id; ?>&amp;subhead=2&amp;name=<?php  echo $rowsss->head_title;  ?>&amp;status=<?php echo $rowsss->status;   ?>"><?php echo $rowsss->head_title; ?></a></li>
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
                                                            <li><a href="class_file/class/addaccountladger.php?id=<?php echo $rowsss->id; ?>&amp;subhead=3&amp;name=<?php  echo $rowsss->head_title;  ?>&amp;status=<?php echo $rowsss->status;   ?>"><?php echo $rowsss->head_title; ?></a></li>
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
                                                            foreach($sss as $rowsss)
                                                            {
                                                            ?>
                                                            <li><a href="class_file/class/addaccountladger.php?id=<?php echo $rowsss->id; ?>&amp;subhead=4&amp;name=<?php  echo $rowsss->head_title;  ?>&amp;status=<?php echo $rowsss->status;   ?>"><?php echo $rowsss->head_title; ?></a></li>
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
                                                            foreach($sss as $rowsss)
                                                            {
                                                            ?>
                                                            <li><a href="class_file/class/addaccountladger.php?id=<?php echo $rowsss->id; ?>&amp;subhead=5&amp;name=<?php  echo $rowsss->head_title;  ?>&amp;status=<?php echo $rowsss->status;   ?>"><?php echo $rowsss->head_title; ?></a></li>
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
										foreach($ss as $rowss)
										{
											$list_of_sub_head_list_id=$rowss->id;
										?>
                                            <li><a href="class_file/class/addaccountladger.php?id=<?php echo $rowss->id; ?>&amp;subhead=6&amp;name=<?php echo $rowss->head_title; ?>&amp;status=<?php echo $rowss->status; ?>"><?php echo $rowss->head_title; ?></a></li>                               <?php											
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
                    
                    <div class="mws-panel-body no-padding">
                        <table class="mws-table">
                            <thead>
                                <tr>
                                    <th colspan="2" align="left">Asset Item Listed</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
							$sqld1=$obj->SelectAllByID_Multiple("account_module_ladger_list_properties",array("main_head_id"=>1,"status"=>1));
							foreach($sqld1 as $row)
							{
							?>
                                <tr>
                                    <td><?php echo $row->head_sub_list_name; ?></td>
                                    <td><?php $owner=$row->created_by; if($owner==''){ echo "<a "; ?>  onclick="javascript:return confirm('Are you absolutely sure to delete This Ledger ?')" <?php echo " class='btn btn-danger' href='class_file/class/deleteledger.php?id=".$row->id."'>Delete</a>"; } else { echo $owner; } ?></td>
                                </tr>
                            <?php
							}
							?>
                            </tbody>
                            <thead>
                                <tr>
                                    <th colspan="2" align="left">Liability / Cradit Card Item Listed</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
							$sqld2=$obj->SelectAllByID_Multiple("account_module_ladger_list_properties",array("main_head_id"=>2,"status"=>2));
							foreach($sqld2 as $row)
							{
							?>
                                <tr>
                                    <td><?php echo $row->head_sub_list_name; ?></td>
                                    <td><?php $owner=$row->created_by; if($owner==''){ echo "<a "; ?>  onclick="javascript:return confirm('Are you absolutely sure to delete This Ledger ?')" <?php echo " class='btn btn-danger' href='class_file/class/deleteledger.php?id=".$row->id."'>Delete</a>"; } else { echo $owner; } ?></td>
                                </tr>
                            <?php
							}
							?>
                            </tbody>
                            <thead>
                                <tr>
                                    <th colspan="2" align="left">Income Item Listed</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
							$sqld3=$obj->SelectAllByID_Multiple("account_module_ladger_list_properties",array("main_head_id"=>3,"status"=>2));
							foreach($sqld3 as $row)
							{
							?>
                                <tr>
                                    <td><?php echo $row->head_sub_list_name; ?></td>
                                    <td><?php $owner=$row->created_by; if($owner==''){ echo "<a "; ?>  onclick="javascript:return confirm('Are you absolutely sure to delete This Ledger ?')" <?php echo " class='btn btn-danger' href='class_file/class/deleteledger.php?id=".$row->id."'>Delete</a>"; } else { echo $owner; } ?></td>
                                </tr>
                            <?php
							}
							?>
                            </tbody>
                            <thead>
                                <tr>
                                    <th colspan="2" align="left">Espense Item Listed</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
							$sqld33=$obj->SelectAllByID_Multiple("account_module_ladger_list_properties",array("main_head_id"=>4,"status"=>1));
							foreach($sqld33 as $row)
							{
							?>
                                <tr>
                                    <td><?php echo $row->head_sub_list_name; ?></td>
                                    <td><?php $owner=$row->created_by; if($owner==''){ echo "<a "; ?>  onclick="javascript:return confirm('Are you absolutely sure to delete This Ledger ?')" <?php echo " class='btn btn-danger' href='class_file/class/deleteledger.php?id=".$row->id."'>Delete</a>"; } else { echo $owner; } ?></td>
                                </tr>
                            <?php
							}
							?>
                            </tbody>
                            <thead>
                                <tr>
                                    <th colspan="2" align="left">Equity Item Listed</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
							$sqld4=$obj->SelectAllByID_Multiple("account_module_ladger_list_properties",array("main_head_id"=>5,"status"=>1));
							foreach($sqld4 as $row)
							{
							?>
                                <tr>
                                    <td><?php echo $row->head_sub_list_name; ?></td>
                                    <td><?php $owner=$row->created_by; if($owner==''){ echo "<a "; ?>  onclick="javascript:return confirm('Are you absolutely sure to delete This Ledger ?')" <?php echo " class='btn btn-danger' href='class_file/class/deleteledger.php?id=".$row->id."'>Delete</a>"; } else { echo $owner; } ?></td>
                                </tr>
                            <?php
							}
							?>
                            </tbody>
                            <thead>
                                <tr>
                                    <th colspan="2" align="left">Others Item Listed</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
							$sqld5=$obj->SelectAllByID_Multiple("account_module_ladger_list_properties",array("main_head_id"=>6,"status"=>3));
							foreach($sqld5 as $row)
							{
							?>
                                <tr>
                                    <td><?php echo $row->head_sub_list_name; ?></td>
                                    <td><?php $owner=$row->created_by; if($owner==''){ echo "<a "; ?>  onclick="javascript:return confirm('Are you absolutely sure to delete This Ledger ?')" <?php echo " class='btn btn-danger' href='class_file/class/deleteledger.php?id=".$row->id."'>Delete</a>"; } else { echo $owner; } ?></td>
                                </tr>
                            <?php
							}
							?>
                            </tbody>
                        </table>
                    </div>
                    
                    
                    
                      	
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