<?php
include('class_file/auth.php');

$sql_icpa=$obj->SelectAllByID("account_module_ladger_list_properties",array("main_head_id"=>6));
$ipca_current_liability=0;
$ipca_current_asset=0;
if(!empty($sql_icpa))
foreach($sql_icpa as $row_ipca)
{
		$inid_row_ipca=$row_ipca->id; 
		$getdutotal_ipca=$obj->SelectAllByID_Multiple("account_module_ladger",array("ladger_id"=>$inid_row_ipca,"branch_id"=>$branch_id));
			$ipca_debit=0;
			$ipca_cradit=0;
		if(!empty($getdutotal_ipca))	
		foreach($getdutotal_ipca as $due_ipca)
		{
			$ipca_debit+=$due_ipca->debit;
			$ipca_cradit+=$due_ipca->cradit;
		}
	$ipca_current_liability+=$ipca_cradit;
	$ipca_current_asset+=$ipca_debit;
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
                	
<?php //include('header_footer_file/accjournalbalance.php'); ?>
                </div>
                
                
                <!-- Panels Start -->
                <style type="text/css">
				table td a{ color:#03C !important; text-decoration:none; }
				table td a:hover{ color:#3C3 !important; border-bottom:1px #ccc dotted; text-decoration:none; }
				
				</style>
           	  	<div class="mws-panel grid_8" style="margin-top:-45px;">
                	<div class="mws-panel-body no-padding" style="padding:20px;">
                    <h2 align="center">Balance Sheet</h2>
                    <h3 align="center">Expected</h3>
                    <h3 align="center">Reporting Period 01/01/2013 To <?php echo date('d/m/Y');  ?></h3>
                        <table width="737" height="618" class="mws-table">
                            <tbody>
							<tr>
							  <td width="463" align="left" valign="middle"><h4><strong>Asset</strong></h4></td>
							  <td width="595" align="right" valign="middle"></td>
							  </tr>
							<tr>
                                <td valign="middle" align="left"><strong>Bank</strong></td>
                                <td align="right" valign="middle"></td>
                            </tr>
                            <?php
							$chkfourcountled=$obj->SelectAllByID_Multiple("account_module_head_sub_list",array("list_of_head_accounts_id"=>1,"list_of_sub_head_accounts_id"=>1));
							$cogs=0;
							$total_revenue=0;
							foreach($chkfourcountled as $cogsexpense)
							{
								$cogsid=$cogsexpense->id;
								$chkvisibleledgeraccount=$obj->exists_multiple("account_module_ladger_list_properties",array("main_head_id"=>1,"head_sub_list_id"=>$cogsid));
							if($chkvisibleledgeraccount!=0)
							{
								
								$ld=$obj->SelectAllByID_Multiple("account_module_ladger_list_properties",array("main_head_id"=>1,"head_sub_list_id"=>$cogsid));
								
								foreach($ld as $row)
								{
									$inid=$row->id; 
									$getdutotal=$obj->SelectAllByID_Multiple("account_module_ladger",array("ladger_id"=>$inid,"branch_id"=>$branch_id));
											$debit=0;
											$cradit=0;
										if(!empty($getdutotal))	
										foreach($getdutotal as $due)
										{
											$debit+=$due->debit;
											$cradit+=$due->cradit;
										}
										$netm=$debit-$cradit;
										if($netm!=0)
										{
							?>
                                        <tr>
                                            <td valign="middle" align="left">
                                            <a href="viewledger.php?ladger_id=<?php echo $inid; ?>" style="text-decoration:none; font-weight:normal;"><?php echo $row->head_sub_list_name; ?></a>
                                            </td>
                                            <td align="right" valign="middle" >
                                            <span style="text-decoration:none; font-weight:normal;">
											<?php 
                                            
                                            
                                            $getch=substr($netm,0,1);
                                            if($getch!='-')
                                            { echo number_format($netm,2); }
                                            else
                                            { echo number_format(substr($netm,1,200),2); }  
                                            $total_revenue+=$netm;
                                            ?>
                                            </span>
                                            </td>
                                        </tr>
                                     <?php
                                            }
                                     } 
							}
							
							}
							 ?> 
                            <tr><td valign="middle" align="left"><strong>Total for Bank</strong></td>
                              <td align="right" valign="middle"><strong><u><?php 
								
								//echo $total_revenue;
								$chktr=substr($total_revenue,0,1);
								if($chktr!='-')
								{ 
									$totalforbank=$total_revenue;
								echo number_format($totalforbank,2);
								}
								else
								{
									$totalforbank=substr($total_revenue,1,200);
								echo number_format($totalforbank,2); 
								}
								
								?></u></strong></td>
                            </tr>
                            <!--bank query end -->
                            <!--current asset start -->
                            <tr>
                                <td valign="middle" align="left"><strong>Current Asset</strong></td>
                                <td align="right" valign="middle"></td>
                            </tr>
                            <tr>
                              <td valign="middle" align="left">Inter Project Current Asset</td>
                              <td align="right" valign="middle" ><?php echo number_format($ipca_current_asset,2); ?></td>
                            </tr>
                            <?php
							$chkfourcountled=$obj->SelectAllByID_Multiple("account_module_head_sub_list",array("list_of_head_accounts_id"=>1,"list_of_sub_head_accounts_id"=>2));
							$currentasset=0;
							foreach($chkfourcountled as $cogsexpense)
							{
							$cogsid=$cogsexpense->id;
								$chkvisibleledgeraccount=$obj->exists_multiple("account_module_ladger_list_properties",array("main_head_id"=>1,"head_sub_list_id"=>$cogsid));
							if($chkvisibleledgeraccount!=0)
							{
								
								$ld=$obj->SelectAllByID_Multiple("account_module_ladger_list_properties",array("main_head_id"=>1,"head_sub_list_id"=>$cogsid));
								foreach($ld as $row)
								{
									
									$inid=$row->id; 
									$getdutotal=$obj->SelectAllByID_Multiple("account_module_ladger",array("ladger_id"=>$inid,"branch_id"=>$branch_id));
											$debit=0;
											$cradit=0;
										if(!empty($getdutotal))	
										foreach($getdutotal as $due)
										{
											$debit+=$due->debit;
											$cradit+=$due->cradit;
										}
										$netm1=$debit-$cradit;
										if($netm1!=0)
										{
							?>
                                        
                                        <tr>
                                            <td valign="middle" align="left">
                                            <a href="viewledger.php?ladger_id=<?php echo $inid; ?>"><?php echo $row->head_sub_list_name; ?></a>
                                            </td>
                                            <td align="right" valign="middle" >
                                            <?php 
                                            
                                            
                                            $getch=substr($netm1,0,1);
                                            if($getch!='-')
                                            { echo number_format($netm1,2); }
                                            else
                                            { echo number_format(substr($netm1,1,200),2); }  
                                           $currentasset+=$netm1;
                                            ?></td>
                                        </tr>
                                     <?php
                                            }
                                     } 
							}
							
							}
							 ?> 
                            <tr><td valign="middle" align="left"><strong>Total for Current Asset</strong></td>
                              <td align="right" valign="middle"><strong><u>
                              <?php 
								$chktr=substr($currentasset,0,1);
								if($chktr!='-'){ echo number_format($currentassettotal=$currentasset+$ipca_current_asset,2); }else{ echo number_format($currentassettotal=substr($currentasset,1,200)+$ipca_current_asset,2); }
								
								?></u>
                              </strong></td>
                            </tr>
                            <!--Fixed asset start -->
                            <tr>
                                <td valign="middle" align="left"><strong>Fixed Asset</strong></td>
                                <td align="right" valign="middle"></td>
                            </tr>
                            <?php
							$chkfourcountled=$obj->SelectAllByID_Multiple("account_module_head_sub_list",array("list_of_head_accounts_id"=>1,"list_of_sub_head_accounts_id"=>3));
							$fixedasset=0;
							foreach($chkfourcountled as $cogsexpense)
							{
								$cogsid=$cogsexpense->id;
								$chkvisibleledgeraccount=$obj->exists_multiple("account_module_ladger_list_properties",array("main_head_id"=>1,"head_sub_list_id"=>$cogsid));
							if($chkvisibleledgeraccount!=0)
							{
								
								$ld=$obj->SelectAllByID_Multiple("account_module_ladger_list_properties",array("main_head_id"=>1,"head_sub_list_id"=>$cogsid));
								foreach($ld as $row)
								{
									
									$inid=$row->id; 
						$getdutotal=$obj->SelectAllByID_Multiple("account_module_ladger",array("ladger_id"=>$inid,"branch_id"=>$branch_id));
											$debit=0;
											$cradit=0;
										if(!empty($getdutotal))	
										foreach($getdutotal as $due)
										{
											$debit+=$due->debit;
											$cradit+=$due->cradit;
										}
										$netm2=$debit-$cradit;
										if($netm2!=0)
										{
							?>
                                        <tr>
                                            <td valign="middle" align="left"><a href="viewledger.php?ladger_id=<?php echo $inid; ?>"></a><a href="viewledger.php?ladger_id=<?php echo $inid; ?>"><?php echo $row->head_sub_list_name; ?></a></td>
                                            <td align="right" valign="middle" ><?php 
                                            
                                            
                                            $getch=substr($netm2,0,1);
                                            if($getch!='-')
                                            { echo number_format($netm2,2); }
                                            else
                                            { echo number_format(substr($netm2,1,200),2); }  
                                            $fixedasset+=$debit-$cradit;
                                            ?></td>
                                        </tr>
                                     <?php
                                            }
                                     } 
							}
							
							}
							 ?> 
                            <tr><td valign="middle" align="left"><strong>Total for Fixed Asset</strong></td>
                              <td align="right" valign="middle"><strong><u>
                              <?php 
								$chktr=substr($fixedasset,0,1);
								if($chktr!='-'){ echo number_format($fixedassettotal=$fixedasset,2); }else{ echo number_format($fixedassettotal=substr($fixedasset,1,200),2); }
								
								?></u>
                              </strong></td>
                            </tr>
                            <!--liability section start -->
                            <!--Fixed asset start -->
                            <tr>
                              <td valign="middle" align="left">&nbsp;</td>
                              <td align="right" valign="middle"></td>
                            </tr>
                            <tr>
							  <td valign="middle" align="left"><strong>Total Asset</strong></td>
							  <td align="right" valign="middle"><span style="padding-bottom:2px; border-bottom:#000 medium inset;"><strong><u><?php echo number_format($totalasset=$total_revenue+$currentasset+$ipca_current_asset+$fixedasset,2); ?></u></strong></td>
							  </tr>
                              <tr>
							  <td valign="middle" align="left">&nbsp;</td>
							  <td align="right" valign="middle"></td>
							  </tr>
                            <tr>
							  <td valign="middle" align="left"><h4><strong>Liability</strong></h4></td>
							  <td align="right" valign="middle"></td>
							  </tr>
                            <tr>
                                <td valign="middle" align="left"><strong>Current Liability</strong></td>
                                <td align="right" valign="middle"></td>
                            </tr>
                            <tr>
                                          <td valign="middle" align="left">Inter Current Project Account</td>
                                          <td align="right" valign="middle" ><?php echo number_format($ipca_current_liability,2); ?></td>
                            </tr>
                            <?php								
								$ld=$obj->SelectAllByID_Multiple_NotOne("account_module_ladger_list_properties",array("main_head_id"=>2),"head_sub_list_id","382");
								$liabilitycurrent=0;
								foreach($ld as $row)
								{
									$inid=$row->id; 
										$getdutotal=$obj->SelectAllByID_Multiple_NotOne("account_module_ladger",array("ladger_id"=>$inid,"branch_id"=>$branch_id),"ladger_id","41");
											$debit=0;
											$cradit=0;
										if(!empty($getdutotal))	
										foreach($getdutotal as $due)
										{
											$debit+=$due->debit;
											$cradit+=$due->cradit;
										}
										$netm3=$debit-$cradit;
										if($netm3!=0)
										{
							?>
                                        
                                        <tr>
                                            <td valign="middle" align="left">
                                            <a href="viewledger.php?ladger_id=<?php echo $inid; ?>"><?php echo $row->head_sub_list_name; ?></a>
                                            </td>
                                            <td align="right" valign="middle" ><?php 
                                            
                                            
                                            $getch=substr($netm3,0,1);
                                            if($getch!='-')
                                            { echo number_format($netm3,2); }
                                            else
                                            { echo number_format(substr($netm3,1,200),2); }  
                                            $liabilitycurrent+=$netm3;
                                            ?></td>
                                        </tr>
                                     <?php
										}
                                     } 
							 ?> 
                            <tr>
                              <td valign="middle" align="left"><strong>Total for Current Liability</strong></td>
                              <td align="right" valign="middle"><strong><u>
                              <?php 
							  
								$chktr=substr($liabilitycurrent,0,1);
								if($chktr!="-"){ echo number_format($liabilitycurrenttotal=$liabilitycurrent,2); }else{ echo number_format($liabilitycurrenttotal=substr($liabilitycurrent,1,200),2); }
								
								?>
                              </u></strong></td>
                            </tr>
                            <tr>
                              <td valign="middle" align="left"><strong>Total Liabilities</strong></td>
                                <td align="right" valign="middle"><strong><u>
                                <?php 
								
								$sdh=substr($liabilitycurrent,0,1);
								
								$absliablity=substr($liabilitycurrent,1,200);
								
								if($sdh=="-")
								{
									$ttliabilities=$absliablity+$ipca_current_liability;	
								}
								else
								{
									$ttliabilities=$liabilitycurrent+$ipca_current_liability;
								}
								echo $ttliabilities;
								//if($sdh)
								
								//$ipca_current_liability;
								//echo $liabilitycurrent;								
								
								?>
                                </u></strong></td>
                            </tr>
                            
                             <!--liability section start -->
                            <!--Fixed asset start -->
                            <tr>
							  <td valign="middle" align="left">&nbsp;</td>
							  <td align="right" valign="middle"></td>
							  </tr>
                              <tr>
							  <td valign="middle" align="left">&nbsp;</td>
							  <td align="right" valign="middle"></td>
							  </tr>
                            <tr>
							  <td valign="middle" align="left"> 
                              <h4><strong>Equity</strong></h4></td>
							  <td align="right" valign="middle"></td>
							  </tr>
                            <?php
							$chkfourcountled=$obj->SelectAllByID("account_module_head_sub_list",array("list_of_head_accounts_id"=>5));
							$totalequity=0;
							if(!empty($chkfourcountled))	
							foreach($chkfourcountled as $cogsexpense)
							{
							$cogsid=$cogsexpense->id;
								$chkvisibleledgeraccount=$obj->exists_multiple("account_module_ladger_list_properties",array("main_head_id"=>5,"head_sub_list_id"=>$cogsid));
							if($chkvisibleledgeraccount!=0)
							{
								
								$ld=$obj->SelectAllByID_Multiple("account_module_ladger_list_properties",array("main_head_id"=>5,"head_sub_list_id"=>$cogsid));
								foreach($ld as $row)
								{
									
									$inid=$row->id; 
										$getdutotal=$obj->SelectAllByID_Multiple("account_module_ladger",array("ladger_id"=>$inid,"branch_id"=>$branch_id));
											$debit=0;
											$cradit=0;
										if(!empty($getdutotal))	
										foreach($getdutotal as $due)
										{
											$debit+=$due->debit;
											$cradit+=$due->cradit;
										}
										$netm4=$debit-$cradit;
										if($netm4!=0)
										{
							?>
                                        <tr>
                                            <td valign="middle" align="left">
                                            <a href="viewledger.php?ladger_id=<?php echo $inid; ?>"><?php echo $row->head_sub_list_name; ?></a>
                                            </td>
                                            <td align="right" valign="middle" ><strong>
                                            <?php 
                                            
                                            
                                            $getch=substr($netm4,0,1);
                                            if($getch!='-')
                                            { echo number_format($netm4,2); }
                                            else
                                            { echo number_format(substr($netm4,1,200),2); }  
                                            $totalequity+=$netm4;
                                            ?></strong></td>
                                        </tr>
                                     <?php
                                            }
                                     } 
							}
							
							}
							 ?>
                            
                           
                            <tr>
                              <td valign="middle" align="left">Retained Earnings</td>
                              <td align="right" valign="middle">
                              <?php
							  $preyear=date('Y');
							  $previousyear=$preyear-1;
							  $chkpredata=$obj->exists_multiple("account_module_income_statement",array("year"=>$previousyear,"branch_id"=>$branch_id));
							  if($chkpredata==0)
							  {
								 echo number_format("0",2); 
							  }
							  else
							  {
								  $querypre=$obj->SelectAllByVal2("account_module_income_statement","year",$previousyear,"branch_id",$branch_id,"amount");
								  //$fetpre=mysql_fetch_array($querypre);
								  echo number_format($querypre,2);
							  }
							  ?>
                              </td>
                            </tr>
                            <tr>
                              <td valign="middle" align="left">Current Year Earnings</td>
                              <td align="right" valign="middle">
                              <!--income statement result script-->
                            <?php 
							$inyear=date('Y');
							//$netprofit_query=$obj->SelectAllByID_Multiple("account_module_income_statement",array("year"=>$inyear));
							//$fetnet=mysql_fetch_array($netprofit_query);
							$netprofit=$obj->SelectAllByVal2("account_module_income_statement","year",$inyear,"branch_id",$branch_id,"amount");
							$chknp=substr($netprofit,0,1);
							$chknpp=substr($netprofit,1,200);
							
							if($chknp!="-")
							{
								echo number_format($netprofit,2);
							}
							else
							{
								echo "(".number_format(substr($netprofit,1,200),2).")";
							}
							?>
							<!--income statement result calculate end-->
                              </td>
                            </tr>
                            <tr>
                              <td valign="middle" align="left"><strong>Total Equity</strong></td>
                              <td align="right" valign="middle"><u><strong>
                              <?php 
							  $feq=$totalequity+$netprofit;
							  
							  $chknp1=substr($feq,0,1);
							
							if($chknp1!="-")
							{
								echo number_format($feq,2);
							}
							else
							{
								echo "(".number_format(substr($feq,1,200),2).")";
							}
							?>
                              </strong></u></td>
                            </tr>
                            <tr>
                              <td valign="middle" align="left">&nbsp;</td>
                              <td align="right" valign="middle"></td>
                            </tr>
                            <tr><td valign="middle" align="left"><strong>Total Liabilities and Equity</strong></td>
                                <td align="right" valign="middle"><span style="padding-bottom:2px; border-bottom:#000 medium inset;"><strong><u><?php  $totalasset=$ttliabilities+$feq;
								echo number_format($totalasset,2);
								
								$year=date('Y');
								$date=date('Y-m-d');
								$chkbalancesheet=$obj->exists_multiple("account_module_balancesheet",array("year"=>$year,"branch_id"=>$branch_id));
								if($chkbalancesheet!=0)
								{
									$getid=$obj->SelectAllByVal2("account_module_balancesheet","year",$year,"branch_id",$branch_id,"id");
$obj->update("account_module_balancesheet",array("id"=>$getid,"year"=>$year,"totalasset"=>$totalasset,"totalliability"=>$liabilitycurrent,"totalequity"=>$feq,"date"=>$date));
								}
								else
								{
$obj->insert("account_module_balancesheet",array("totalasset"=>$totalasset,"totalliability"=>$liabilitycurrent,"totalequity"=>$feq,"branch_id"=>$branch_id,"year"=>$year,"date"=>$date));
								}
								
								?></u></strong></span></td>
                            </tr>
                            </tbody>
                            
                        </table>
                        
                    </div>
                </div>
                
                <!-- Panels End -->
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
             <?php include('header_footer_file/footer.php'); ?>