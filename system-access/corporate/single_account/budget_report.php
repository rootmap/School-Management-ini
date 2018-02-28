<?php
include('class_file/auth.php');
?>
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>-->
<script src="jquery.min.js"></script>
<script>
        $(document).ready ( function () {
            $("#btn1").click ( function () {
              var aa = 0.0;
			  var bb = 0.0;
			  var cc = 0.0;
			  var dd = 0.0;
			  var ee = 0.0;
			  var ff = 0.0;
			  
			  
               $(".aa").each ( function() {
                   aa += parseFloat ( $(this).val().replace(/\s/g,'').replace(',','.'));
                });
                //alert ( debit );
				document.getElementById('aaa').value= aa;
				
				$(".bb").each ( function() {
                   bb += parseFloat ( $(this).val().replace(/\s/g,'').replace(',','.'));
                });
				 //alert ( cradit );
                document.getElementById('bbb').value= bb;
				
				$(".cc").each ( function() {
                   cc += parseFloat ( $(this).val().replace(/\s/g,'').replace(',','.'));
                });
				 //alert ( cradit );
                document.getElementById('ccc').value= cc;
				
				$(".dd").each ( function() {
                   dd += parseFloat ( $(this).val().replace(/\s/g,'').replace(',','.'));
                });
				 //alert ( cradit );
                document.getElementById('ddd').value= dd;
				
				$(".ee").each ( function() {
                   ee += parseFloat ( $(this).val().replace(/\s/g,'').replace(',','.'));
                });
				 //alert ( cradit );
                document.getElementById('eee').value= ee;
				
				$(".ff").each ( function() {
                   ff += parseFloat ( $(this).val().replace(/\s/g,'').replace(',','.'));
                });
				 //alert ( cradit );
                document.getElementById('fff').value= ff;
				
				
				
				
				
            });
        });
		
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
                
           	  <div class="grid_8">
                    <div class="mws-panel">
                        <div class="mws-panel-header">
                            <span><i class="icon-table"></i> Budget Year</span> 
                             <span style="margin-left:250px; margin-top:-30px;">
                            <a href="budget_report_make.php" class="btn btn-success"><i class="icon-plus"></i>Create Budget</a>
                        	</span>
                            
                        </div>
                        <div class="mws-panel-body no-padding">
                        
                            <form id="mws-validate" name="frmMr"  class="mws-form" action="#" method="post">
                            <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
                                                               
                                    
                                   		<div class="mws-panel-body no-padding">
                        <table class="mws-table">
                            <thead>
                            	<tr>
                                	<td align="center" valign="middle">SL</td>
                                	<td align="center" valign="middle">Budget Year</td>
                                    <td align="center" valign="middle">Budget Date</td>
                                </tr>
                                
                            </thead>
                            <tbody>
                            <?php 
							$sql=$obj->SelectAll("account_module_budget_year");
							$a=1;
							foreach($sql as $row)  
							{
							?>
                            	<tr>
                                <td width="147" align="center" valign="middle"><?php echo $a; ?></td>
                                <td width="158" align="center" valign="middle"><a href="budget_report_year.php?id=<?php echo $row->id; ?>"><?php echo $row->byear; ?></a></td>
                                <td width="163" align="center" valign="middle"><?php echo $row->curdate; ?></td>
                                </tr>
                                <?php
								}
								?>
                            </tbody>
                            
                        </table>
                        
                </div>
                                   
                                <div class="mws-button-row" style="padding-left:400px;">
                                </div>
                            </form>
                        </div>
                        </form>
                    </div>
                </div>
                
                <!-- Panels End -->
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
             <?php include('header_footer_file/footer.php'); ?>