<?php
include('class_file/auth.php');
extract($_GET);
//start ajax dynamic looping

?>
<?php for($a=1; $a<=$inrow; $a++){ ?>
<script type="text/javascript">
function showUsers_invoice<?php echo $a; ?>(str<?php echo $a; ?>)
{
if (str<?php echo $a; ?>=="")
  {
  document.getElementById("price<?php echo $a; ?>").value="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	document.getElementById("price<?php echo $a; ?>").value=xmlhttp.responseText;
	var preval=document.form.am.value;
	document.getElementById("am<?php echo $a; ?>").value=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","class_file/ajax/ajax.php?id="+str<?php echo $a; ?>,false);
xmlhttp.send();

if (str<?php echo $a; ?>=="")
  {
  document.getElementById("itemd<?php echo $a; ?>").value="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	document.getElementById("itemd<?php echo $a; ?>").value=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","class_file/ajax/ajax_detail.php?id="+str<?php echo $a; ?>,true);
xmlhttp.send();
}

</script>
<?php } ?>

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
                	
                <?php //include('header_footer_file/invoicehead.php'); ?>    
				<?php //include('header_footer_file/accjournalbalance.php'); ?>
                </div>
                <hr style="margin-top:-20px;">
                
                <!-- Panels Start -->

                                <span style="position:relative; margin-left:10px; font:Arial, Helvetica, sans-serif; color:#000000;"><?php echo $obj->ShowMsg(); ?></span>
                                	
                               
                                
           	  	<div class="grid_8">
                    
                    <div class="mws-panel">
                        <div class="mws-panel-body no-padding">
                            <form class="mws-form" action="class_file/class/add_new_invoice.php" method="post" name="form">
                                <div class="mws-form-inline">
                                <div class="mws-button-row">
                                    <div><i class="icol32-application-form-add"></i><h2 style="margin-left:35px; margin-top:-37px; color:#030"> Add An Invoice </h2></div>
                                </div>
                                    <div class="mws-form-row">
                                    <h3>
                                        <i style="margin-top:-15px;" class="icon-pushpin"></i> 
                                        	Invoice 
                                        <?php 
										@$chkinvoice=$obj->totalrows("account_module_list_of_invoice"); 
											if($chkinvoice==0) 
											{ echo "1"; } 
											else 
											{ echo $chkinvoice+1; } 
                                        ?>
                                    </h3><hr>
                                    </div>
                                                                    
                                    <div class="mws-form-row" style="margin-top:-40px;">
                                    	<div class="mws-form-cols">
                                      	<div class="mws-form-col-2-8">
                                        		<label class="mws-form-label" style="text-align:center; font-weight:bolder; font-size:19px;">Chose Customer </label>
                                                         
                     
                                            <div class="mws-form-item">
                                           <select class="required mws-select2 large" style="text-align:center;" name="customer_id">
                                           		<option value="">Chose Customer</option>
											   <?php
                                               $sql1=$obj->SelectAll("account_module_customer");
                                               foreach($sql1 as $row)
                                               {
                                               ?>      
                                                <option value="<?php echo $row->id; ?>"><?php echo $row->company_name; ?></option>
                                                <?php
                                               }
                                                ?>    
                                            </select>
                                                   <input type="hidden" name="currency" value="5">                                                    
                                            </div>
                                    	</div> 
                                      	<?php /*?><div class="mws-form-col-2-8">
                                        		<label class="mws-form-label"  style="text-align:center; font-weight:bolder; font-size:19px;">Select Branch</label>
                                            <div class="mws-form-item">
                                            	
                                                <select class="required mws-select2 large"  name="branch_id" style="text-align:center;">
                                                 <?php if(@$branch_id=='') {?>
                                                   <option>Select Branch</option>
                                                 <?php } ?>
											   <?php
											   if(@$branch_id==''){
                                               $sql2=$obj->SelectAll("ams_branch");
											   }else{
											   $array=array("id"=>$branch_id);
                                               $sql2=$obj->SelectAllByID("ams_branch",$array);
											   }
											   if(!empty($sql2))
                                               foreach($sql2 as $rows)
                                               {
                                               ?>      
                                                <option value="<?php echo $rows->id; ?>"><?php echo $rows->name; ?></option>
                                                <?php
                                               }
                                                ?>
                                                </select>
                                            </div>
                                    	</div><?php */?>
                                        <div class="mws-form-col-2-8">
                                        		<label class="mws-form-label"  style="text-align:center; font-weight:bolder; font-size:19px;">Date</label>
                                            <div class="mws-form-item">
                                                <input type="text" class="mws-datepicker large" value="<?php echo date('Y-m-d'); ?>" readonly name="date">
                                            </div>
                                    	</div>
                                        <div class="mws-form-col-2-8">
                                        		<label class="mws-form-label"  style="text-align:center; font-weight:bolder; font-size:19px;">Due Date</label>
                                            <div class="mws-form-item">
                                                 <input type="text" class="mws-datepicker large"  value="<?php echo date('Y-m-d'); ?>"  readonly name="duedate">
                                            </div>
                                    	</div>
                                        </div>                                          
                                    </div>
                                    <div class="mws-form-row" style="margin-top:-10px;">
                                    	<div class="mws-form-cols">
                                      	<div class="mws-form-col-2-8">
                                        		<label class="mws-form-label" style="text-align:center; font-weight:bolder; font-size:19px;">Subheading
</label>
                                            <div class="mws-form-item">
                                                 <input type="text" name="subheading" class="required large" placeholder="Add Subheading
"></div>
                                    	</div> 
                                      	<div class="mws-form-col-2-8">
                                        		<label class="mws-form-label"  style="text-align:center; font-weight:bolder; font-size:19px;">Footer</label>
                                            <div class="mws-form-item">
                                                 <input type="text" class="required large" placeholder="Add Footer" name="footer">
                                            </div>
                                    	</div>
                                        <div class="mws-form-col-2-8">
                                        		<label class="mws-form-label"  style="text-align:center; font-weight:bolder; font-size:19px;">P.O / S.O</label>
                                            <div class="mws-form-item">
                                                <textarea rows="" cols="" style="height:60px;" class="large" name="poso"></textarea>
                                            </div>
                                    	</div>
                                        <div class="mws-form-col-2-8">
                                        		<label class="mws-form-label"  style="text-align:center; font-weight:bolder; font-size:19px;">
                                                	Notes
                                                </label>
                                            <div class="mws-form-item">
                                                 <textarea rows="" cols="" style="height:60px;" class="large" name="notes"></textarea>
                                            </div>
                                    	</div>
                                        </div> 
                                        <hr>
                        
                        <table class="mws-table" id="myTable">
                            <thead>
                                <tr>
                                    <th align="center">Item</th>
                                    <th align="center">Av.Qty</th>
                                    <th align="center">Quantity</th>
                                    <th align="center">Price</th>
                                    <th align="center">Tax</th>
                                    <th align="center">Amount</th>
                                    <th align="center" style="width:20px;">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php for($i=1; $i<=$inrow; $i++){ ?>
                                 <tr>
                                   <td align="center" valign="middle" style="width:160px;">
                                    <select class="required mws-select2 large" style="width:150px;"  name="itemname<?php echo $i; ?>"  id="itemname<?php echo $i; ?>" onChange="showUsers_invoice<?php echo $i; ?>(this.value)">
                                     <option selected>--------------------------</option>
									 <?php 
									 /*if(@$branch_id==''){*/
									 $sql3=$obj->SelectAll("stockvalidation");
									 /*}else{
									 $array = array("branch_id"=>$branch_id);
									 $sql3=$obj->SelectAllByID("stockvalidation",$array);
									 }*/
									 if(!empty($sql3)) 
									 foreach($sql3 as $pro){
										 if($pro->in_ac_id!=0)
										 {
										  ?>
                                     <option value="<?php echo $pro->id; ?>"><?php echo $pro->name; ?></option>
                                     <?php }} ?>
                              		</select>
                              		</td>
                                    <td valign="middle" align="center" style="width:110px;">
                                    <input type="text" class="required small" style="width:90px;" placeholder="Available Quantity"  name="itemd<?php echo $i; ?>"  id="itemd<?php echo $i; ?>" readonly> 
                                    </td>
                                    <td valign="middle" align="center" style="width:60px;">
                                    <input type="text" class="required small" style="width:50px; text-align:right; font-weight:bolder;" placeholder=""  name="quantity<?php echo $i; ?>" id="quantity<?php echo $i; ?>" onKeyUp="this.form.am<?php echo $i; ?>.value = this.form.quantity<?php echo $i; ?>.value * this.form.price<?php echo $i; ?>.value;">
                                    </td>
                                   	<td valign="middle" align="center" style="width:110px;" id="priceff">
       								<input type="text" class="required small" style="width:100px; text-align:right;" placeholder="<?php echo $i; ?>"  name="price<?php echo $i; ?>" id="price<?php echo $i; ?>" >
       								</td> 
                                    <td valign="middle" align="center" style="width:100px;">
                                    <select class="mws-select2 large" style="width:100px;" name="tax<?php echo $i; ?>" multiple="1" id="tax<?php echo $i; ?>">
                                        <option value="">Chose Tax</option>
                                        <?php 
										$sql4=$obj->SelectAll("account_module_newtax"); 
										foreach($sql4 as $prostitute){ ?>
                                        <option value="<?php echo $prostitute->id; ?>"><?php echo $prostitute->name; ?></option>
                                        <?php } ?>
                                    </select>
                                    </td>
                                    <td style="width:100px;" align="right"><input type="text" class="required small" style=" text-align:right; font-weight:bold; font-size:18px; width:80px; background:none; border:0px;" name="am<?php echo $i; ?>" id="am<?php echo $i; ?>" value="" readonly></td>
                                    <td style="width:20px;"><button type="button" class="btn" onClick="displayResult(this)"><i class="icon-remove-sign"> </i></button></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                            <thead>
                                <tr>
                                    <th align="center"><!--<button type="button" class="btn" onClick="cloneRow()"><i class="icon-plus"> </i> Add More Line</button><input type="button" onClick="createRow()" value="Create Row" />--></th>
                                    <th  align="right" valign="middle" style="font-weight:bolder;"></th>
                                    <th align="center" valign="middle"></th>
                                    <th align="center" valign="middle"></th>
                                    <th align="center" valign="middle"></th>
                                    <th align="right" valign="middle"><input type="text" class="required small" style="text-align:right; 
                                    font-weight:bold; font-size:18px; width:120px; border:0px; background:none;" name="totalsub" id="totalsub" value="0" 
                                    onMouseOver="this.form.totalsub.value = <?php for($aa=1; $aa<=$inrow; $aa++){  ?>(this.form.am<?php echo $aa; ?>.value-0)<?php if($aa!=$inrow){ echo '+'; }  }  ?>;" readonly></th>
                                    <th>&nbsp;</th>
                                </tr>
                                
                            </thead>
                        </table>
                    </div>
									<div class="mws-button-row">
                                    <input name="limit" type="hidden" value="<?php echo $inrow; ?>">
                                    <input type="submit" value="Submit" class="btn btn-danger">
                                    <input type="reset" value="Reset" class="btn">
       								 </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Panels End -->
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
             <?php include('header_footer_file/footer.php'); ?>