<?php
include('inc/eset.php');
include('class_file/newclass/db_Class.php');
$obj = new db_class();
$table1="amsit_heamatological_report";
$table2="amsit_serological_report";
$table3="amsit_biochamistry_report";
$table4="amsit_urine_report";
$table5="amsit_stool_report";
$table6="amsit_semen_report";
$table7="amsit_biochamistryt_report";
extract($_GET);
include('inc/head.php');
?>
<body>
    <!-- Themer End -->
        
        	<!-- Inner Container Start -->
            <div class="container"  id="mydiv">
            
            	<!-- Statistics Button Container -->
               <!-- <hr style="margin-top:-20px;">-->
                
                <!-- Panels Start -->
                                	
                               
                                
           	  	<div class="grid_8">
                    
                    <div class="mws-panel">
                        <div class="mws-panel-body no-padding">
                            <form class="mws-form" action="#" method="post" name="form">
                                <div class="mws-form-inline">
                                <div class="mws-form-row">
                                    <h3>
                                        <i style="margin-top:-15px;" class="icon-pushpin"></i> 
                                        	Detalis... 
                                        
                                    </h3><hr>
                                    </div>
                                                                    
                          
                         <?php if($id==1){ include("inc/ptableone.php"); }
						 elseif($id==2){ include("inc/ptabletwo.php"); }
						 elseif($id==3){ include("inc/ptablethree.php");}
						 elseif($id==4){ include("inc/ptablefour.php");}
						 elseif($id==5){ include("inc/ptablefive.php");}
						 elseif($id==6){ include("inc/ptablesix.php");}
						 elseif($id==7){ include("inc/ptableseven.php");}
						 elseif($id==8){include("inc/ptableeight.php");}
						 else{ echo "None";}
						 ?>
                        
                        </div> 
                        <hr>
        
                       
                    </div>
                            </form>
                        </div>
                    </div>
                    </div>
                    </div>
                    <input type="button" value="Print Div" onclick="PrintElem('#mydiv')" />
                    </body>
                    </html>
      