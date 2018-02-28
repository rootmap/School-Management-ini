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
            	<!--<div class="mws-stat-container clearfix">
                	
                    <!-- Statistic Item -->
                	

                	<?php //include('header_footer_file/accjournalbalance.php'); ?>
               <!-- </div>-->
                
                <!-- Panels Start -->
                
            	<div class="mws-panel grid_8">
                <?php echo $obj->ShowMsg(); ?>
                <div class="btn-toolbar" style="float:right;">
                                        <a href="#" id="mws-form-dialog-mdl-btn" class="btn btn-success"><i class="icon-plus"></i> <strong>Create New Account </strong></a>
                                        
                                        <div id="mws-form-dialog">
                                <form id="mws-validate" class="mws-form" action="class_file/class/addaccount.php" method="get">
                                    <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
                                    <div class="mws-form-inline">
                                      <div class="mws-form-row">
                                            <label class="mws-form-label">Name Of Account</label>
                                            <div class="mws-form-item">
                                                <input type="text" name="account" class="required small">
                                            </div>
                                        </div>
                                       
                                      <div class="mws-form-row">
                                        <label class="mws-form-label">Head</label>
                                            <div class="mws-form-item">
                   				<select class="mws-select2 small required" name="main" onChange="showUser(this.value)">
                                                <option value="0" selected>--------------------------</option>
                                                    <?php
													$sql1=$obj->SelectAll("account_module_list_of_head_accounts");
													foreach($sql1 as $row):
													
													?>
													<option value="<?php echo $row->id; ?>"><strong><?php echo $row->head_title; ?></strong></option>
													<?php
													endforeach;
													?>	
                                                </select>
                                            </div>
                                      </div>
                                      <div class="mws-form-row">
                                        <label class="mws-form-label">List In Head Sub Account</label>
                                            <div class="mws-form-item">
                                                <select class="mws-select2 small required" name="submain" id="txtHint" onChange="showUsers(this.value)">
                                                <option value="0" selected>--------------------------</option>
                                                   
                                                </select>
                                            </div>
                                      </div>
                                      
                                      <div class="mws-form-row">
                                        <label class="mws-form-label">List of Account</label>
                                            <div class="mws-form-item">
                                                <select class="mws-select2 small required" name="hd" id="txtHints">
                                                <option selected value="0">--------------------------</option>
                                                   
                                                </select>
                                            </div>
                                      </div>
                                      <div class="mws-form-row">
                                            <label class="mws-form-label">Date Validation</label>
                                            <div class="mws-form-item">
                                                <input type="text" class="mws-datepicker required date" readonly>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </form>
                            </div>
                                    </div>
                                    <div class="clearfix"></div>
                    <div class="mws-tabs">

                        <ul>
                        <?php
						$sql2=$obj->SelectAll("account_module_list_of_head_accounts");
						$a=1;
						foreach($sql2 as $row)
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
                            		$sql3=$obj->SelectAll("account_module_asset_head_list");
									foreach($sql3 as $rows)
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
                            
                            <h3>List of Liability And Credit Card <h4><hr>
                            <ul id="treemenu2" class="treeview">
                            <?php
                            		$sql4=$obj->SelectAll("account_module_liability_credit_head_list");
									foreach($sql4 as $rows)
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
                            		$sql5=$obj->SelectAll("account_module_income_head_list");
									foreach($sql5 as $rows)
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
                            		$sql6=$obj->SelectAll("account_module_expense_head_list");
									foreach($sql6 as $rows)
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
                            		$sql7=$obj->SelectAll("account_module_equity_head_list");
									foreach($sql7 as $rows)
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
                            		$sql8=$obj->SelectAll("account_module_other_head_list");
									foreach($sql8 as $rows)
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
                                            <li><a href="class_file/class/addaccountladger.php?id=<?php echo $rowss->id; ?>&amp;subhead=6&amp;name=<?php  echo $rowss->head_title;  ?>&amp;status=<?php echo $rowss->status;   ?>"><?php echo $rowss->head_title; ?></a></li>                               <?php											
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
                </div>
       	    <div class="clear"></div>
        <div class="clear"></div>
    <div class="clear"></div>
<div class="clear"></div>
<div class="clear"></div>
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