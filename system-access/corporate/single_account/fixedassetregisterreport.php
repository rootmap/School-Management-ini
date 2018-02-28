<?php
include('class_file/auth.php');
extract($_GET);
?>
<body>
		 <!-- Header -->
  <?php include('header_footer_file/head.php'); ?>
        	<!-- Searchbox -->
        	 <?php //include('header_footer_file/search_box.php'); ?>
        	<!-- Searchbox -->
        	
            
            <!-- Main Navigation -->
            <?php //include('header_footer_file/left_menu.php'); ?>
            <!--</div>-->

 
            <table  style="width:1500px; overflow:scroll; height:auto;">
                            <tr>
                            	<th><a href="fixedasset_create_new_row.php?q=<?php echo $q; ?>" class="btn btn-success btn-small">Add Item</a></th>
                                <th><a href="#" class="btn btn-success btn-small">Edit Item</a></th>
                                <th></th>
                                <th colspan="22"><?php echo $q; 
								
								//$sqlq=mysql_query("SELECT * FROM   WHERE =''");
							 //$idq=mysql_fetch_array($sqlq);
							 $lid=$obj->SelectAllByVal("account_module_head_list","head_title",$q,"id");
								?></th>
                           </tr>
                           <tr style="background:#666;">
                              <th style="overflow:hidden; width:5px;">&nbsp;</th>
                              <th style="overflow:hidden; width:auto;" colspan="3">Brief Description of Asset</th>
                              <th style="overflow:hidden; width:auto;" colspan="5">Total Cost</th>
                              <th style="overflow:hidden; width:auto;" colspan="2">&nbsp;</th>
                              <th style="overflow:hidden; width:auto;" colspan="6">Depriciation (
                              
                              <?php
							  
							  //$sql_rate=mysql_query("SELECT * FROM fixassetrates WHERE achid='$lid'");
										//$fetrate=mysql_fetch_array($sql_rate);
							$rates=$obj->SelectAllByVal("account_module_fixassetrates","achid",$lid,"rates");
							echo $rates."%";
							  
							  ?>
                              )
                              </th>
                              <th style="overflow:hidden; width:auto;" colspan="5">Sales / Transfer</th>
                              <th style="overflow:hidden; width:auto;" colspan="2">Physical Verification</th>
                           </tr>
                           
                           <tr style="background:#999;">
                              <th style="overflow:hidden; width:5px;">Sr.No</th>
                              
                              <th style="overflow:hidden; width:auto;">P.ID</th>
                              <th style="overflow:hidden; width:auto;">Supplier Name</th>
                              <th style="overflow:hidden; width:auto;">Location</th>
                              
                              <th style="overflow:hidden; width:auto;">Date of Puchase</th>
                              <th style="overflow:hidden; width:auto;">Cost</th>
                              <th style="overflow:hidden; width:auto;">Installation</th>
                              <th style="overflow:hidden; width:auto;">Other Charge</th>
                              <th style="overflow:hidden; width:auto;">Total</th>
                              
                              <th style="overflow:hidden; width:auto;">No. of Years</th>
                              <th style="overflow:hidden; width:auto;">Years</th>
                              
                              <th style="overflow:hidden; width:auto;">Normal</th>
                              <th style="overflow:hidden; width:auto;">Double</th>
                              <th style="overflow:hidden; width:auto;">Three</th>
                              <th style="overflow:hidden; width:auto;">Total</th>
                              <th style="overflow:hidden; width:auto;">Cum. Dep. </th>
                              <th style="overflow:hidden; width:auto;">W.D.V. </th> 
                              <th style="overflow:hidden; width:auto;">Adjustment</th>
                              <th style="width:145px;">Total Depriciation Clamied Till Date of Sales</th>
                              <th style="width:90px;">Adjusted WDV</th>
                              <th style="width:145px;">Proceed</th>
                              <th style="overflow:hidden; width:auto;">Profit & Loss on Sale</th>
                              <th style="overflow:hidden; width:auto;">On Date</th>
                              <th style="overflow:hidden; width:auto;">By Whom</th>                              
                           </tr>
                           <?php
						   
						   
						 $sqlre=$obj->SelectAllByID_Multiple("account_module_fixed_asset_register",array("lid"=>$lid));
						   $a=1;
						   if(!empty($sqlre))
						   foreach($sqlre as $lr)
						   {
						   ?>
                           <tr style="background:#CCC;">
                              <th style="overflow:hidden; width:5px;"><?php echo $a; ?></th>
                              
                              <th style="overflow:hidden; width:auto;"><?php echo $lr->pid; ?></th>
                              <th style="overflow:hidden; width:100px;"> <?php  
							  $sid=$lr->sup_name;
							  //$sqlsup=mysql_query("SELECT * FROM vendor WHERE id=''");
							  //$row=mysql_fetch_array($sqlsup);
							  echo $obj->SelectAllByVal("account_module_vendor","id",$sid,"company_name");
												
							  ?></th>
                              <th style="overflow:hidden; width:auto;"><?php echo $lr->location; ?></th>
                              
                              <th style="overflow:hidden; width:auto;"><?php echo $lr->dop; ?></th>
                              <th style="overflow:hidden; width:auto;"><?php echo number_format($lr->cost); ?></th>
                              <th style="overflow:hidden; width:auto;"><?php echo number_format($lr->installation); ?></th>
                              <th style="overflow:hidden; width:auto;"><?php echo number_format($lr->charge); ?></th>
                              <th style="overflow:hidden; width:auto;"><?php echo number_format($lr->total); ?></th>
                              
                              <th style="overflow:hidden; width:auto;"><?php 
							 $getpy=substr($lr->dop,6,20);
							 $cury=date('Y');
							 
							 echo $ply=($cury-$getpy)+1;
							 
							  
							  // $lr['nod']; ?></th>
                              <th style="overflow:hidden; width:auto;"><?php echo date('Y'); ?></th>
                              
                              <th style="overflow:hidden; width:auto;"><?php echo number_format($lr->nomal); ?></th>
                              <th style="overflow:hidden; width:auto;"><?php echo number_format($lr->doubled); ?></th>
                              <th style="overflow:hidden; width:auto;"><?php echo number_format($lr->three); ?></th>
                              <th style="overflow:hidden; width:auto;"><?php echo number_format($lr->totald); ?></th>
                              <th style="overflow:hidden; width:auto;"><a href="singleassetreportdepriciation.php?assetid=<?php echo $lr->pid; ?>" target="_blank" class="btn btn-success btn-small"><?php 
							  	$recy=$lr->recordyear;
								$curyear=date('Y');
								$resy=$curyear-$recy;
								
							  	if($resy==0)
								{
									$d=1;	
								}
								else
								{
									$d=1+$resy;	
								}
							  
							  echo number_format($lr->cumdep*$d);
							  $cd=$lr->cumdep*($d-1);
							  ?></a></th>
                              <th style="overflow:hidden; width:auto;"><?php echo number_format($lr->wdv-$cd); ?> </th>
                              <th style="overflow:hidden; width:auto;"><?php echo number_format($lr->adjustment); ?> </th>    
                              <th style="overflow:hidden; width:auto;"><?php echo number_format($lr->tdctdos); ?> </th>
                              <th style="width:90px;"><?php echo number_format($lr->awdv); ?></th>
                              <th style="overflow:hidden; width:auto;"><?php echo number_format($lr->proceed); ?></th>  
                              <th style="width:60px;"><?php echo number_format($lr->plos); ?> </th>
                              <th style="overflow:hidden; width:auto;"><?php echo $lr->ondate; ?> </th>
                              <th style="overflow:hidden; width:auto;"><?php echo $lr->bywhim; ?> </th>                                
                           </tr>
                          <?php 
						  $a++;
						  }
						  ?>
                        </table>
                       
            <!-- Footer -->
             <?php include('header_footer_file/footer.php'); ?>