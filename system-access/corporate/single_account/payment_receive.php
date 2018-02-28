<?php
include('class_file/auth.php');
if(isset($_GET['del']))
{
	$obj->delete("account_module_invoice_payment",array("id"=>$_GET['del']));
	$obj->Success("Payment Data Successfully Deleted. ",$obj->filename());
		
}
if(isset($_GET['payment_confirm']))
{
	extract($_GET);
	$branch_id=$obj->SelectAllByVal("account_module_invoice_payment","id",$payment_confirm,"branch_id");
	$link_id=$obj->SelectAllByVal("account_module_invoice_payment","id",$payment_confirm,"branch_id");
	$pa=$obj->SelectAllByVal("account_module_invoice_payment","id",$payment_confirm,"pa");
	$pdate=$obj->SelectAllByVal("account_module_invoice_payment","id",$payment_confirm,"date");
	$amount=$obj->SelectAllByVal("account_module_invoice_payment","id",$payment_confirm,"amount");
	$cid=$obj->SelectAllByVal("account_module_invoice_payment","id",$payment_confirm,"cid");
	$memo=$obj->SelectAllByVal("account_module_invoice_payment","id",$payment_confirm,"memo");
	$uid=$obj->SelectAllByVal("account_module_invoice_payment","id",$payment_confirm,"input_by");
	$invoice_id=$obj->SelectAllByVal("account_module_invoice_payment","id",$payment_confirm,"invoice_id");
	
	
	if($obj->update("account_module_invoice_payment",array("id"=>$payment_confirm,"status"=>1))==1)
	{
		$ladgername="Accounts Receivables"; //dr
	
	$accreciveableladger=$obj->SelectAllByVal("account_module_ladger_list_properties","head_sub_list_name",$ladgername,"id");
				
	$invoice="N".$invoice_id;
	$obj->insert("account_module_ladger",array("ladger_id"=>$pa,"link_id"=>$link_id,"invoice_id"=>$invoice,"ladger_date"=>$pdate,"debit"=>$amount,"cradit"=>0,"branch_id"=>$branch_id));
	$obj->insert("account_module_ladger",array("ladger_id"=>$accreciveableladger,"link_id"=>$link_id,"invoice_id"=>$invoice,"ladger_date"=>$pdate,"debit"=>0,"cradit"=>$amount,"branch_id"=>$branch_id));		
	
	$backdue=$due-$amount;
	
	
	
	
	
	$student_id=$obj->SelectAllByVal("ams_admission","id",$cid,"admition");
	$session_id=$obj->SelectAllByVal("ams_admission","id",$cid,"session_id");
	$class_id=$obj->SelectAllByVal("ams_admission","id",$cid,"class_id");
	$group_id=$obj->SelectAllByVal("ams_admission","id",$cid,"group_id");
	$newgivenamount=$amount;	
	$sql_fees_manage=$obj->SelectAllByID("fees_paid_ledger",array("branch_id"=>$school,"session_id"=>$session_id,"class_id"=>$class_id,"group_id"=>$group_id));
	if(!empty($sql_fees_manage))
	foreach($sql_fees_manage as $manage):
		$new_fees_amount=$manage->percent;
		$chkm=$obj->exists_multiple("fees_paid_ledger_amount",array("branch_id"=>$school,"session_id"=>$session_id,"class_id"=>$class_id,"group_id"=>$group_id,"student_id"=>$student_id));
		if($chkm==0)
		{
			if($newgivenamount<=$new_fees_amount)
			{
				$newgivenamount-=$new_fees_amount;
				$obj->insert("fees_paid_ledger_amount",array("amount"=>$new_fees_amount,"ledger_id"=>$manage->ledger_id,"branch_id"=>$school,"session_id"=>$session_id,"class_id"=>$class_id,"group_id"=>$group_id,"student_id"=>$student_id));
				$obj->insert("account_module_ladger",array("ladger_id"=>$manage->ledger_id,"link_id"=>$link_id,"invoice_id"=>$invoice,"ladger_date"=>$pdate,"debit"=>$new_fees_amount,"cradit"=>0,"branch_id"=>$school));
			}
			else
			{
				$chkexamountgiventomanagement=$obj->SelectAllByVal6("fees_paid_ledger_amount","ledger_id",$manage->ledger_id,"branch_id",$school,"session_id",$session_id,"class_id",$class_id,"group_id",$group_id,"student_id",$student_id,"amount");
				if($chkexamountgiventomanagement!=$new_fees_amount)
				{
					$dueexamount=$new_fees_amount-$chkexamountgiventomanagement;
					if($dueexamount<=$newgivenamount)
					{
						$newgivenamount-=$dueexamount;
						$obj->insert("fees_paid_ledger_amount",array("amount"=>$dueexamount,"ledger_id"=>$manage->ledger_id,"branch_id"=>$school,"session_id"=>$session_id,"class_id"=>$class_id,"group_id"=>$group_id,"student_id"=>$student_id));
						$obj->insert("account_module_ladger",array("ladger_id"=>$manage->ledger_id,"link_id"=>$link_id,"invoice_id"=>$invoice,"ladger_date"=>$pdate,"debit"=>$new_fees_amount,"cradit"=>0,"branch_id"=>$school));
					}
					else
					{
						$input_amount_last=$dueexamount-$newgivenamount;
						$newgivenamount-=$input_amount_last;
						$obj->insert("fees_paid_ledger_amount",array("amount"=>$input_amount_last,"ledger_id"=>$manage->ledger_id,"branch_id"=>$school,"session_id"=>$session_id,"class_id"=>$class_id,"group_id"=>$group_id,"student_id"=>$student_id));
						$obj->insert("account_module_ladger",array("ladger_id"=>$manage->ledger_id,"link_id"=>$link_id,"invoice_id"=>$invoice,"ladger_date"=>$pdate,"debit"=>$new_fees_amount,"cradit"=>0,"branch_id"=>$school));
					}
					
					
				}
			}
			
		}
		
	endforeach;
	
	
	if($newgivenamount!=0)
	{
		$obj->insert("student_fees_amount",array("branch_id"=>$school,"session_id"=>$session_id,"class_id"=>$class_id,"group_id"=>$group_id,"student_id"=>$student_id,"amount"=>$newgivenamount));	
		$obj->insert("account_module_ladger",array("ladger_id"=>$manage->ledger_id,"link_id"=>$link_id,"invoice_id"=>$invoice,"ladger_date"=>$pdate,"debit"=>$newgivenamount,"cradit"=>0,"branch_id"=>$school));
	}
		$obj->Success("Payment Successfully Confirmed",$obj->filename());
	}
	else
	{
		$obj->Error("Payment Failed",$obj->filename());
	}
}

$con=$obj->open();
$sql = "ALTER TABLE `account_module_invoice_payment` ADD `status` INT(2) NOT NULL AFTER `input_by`;";
if (mysqli_query($con, $sql)) {
	$obj->close($con);
	//$obj->Success("Column Successfully Altered",$obj->filename());
}
function convert_number_to_words($number) {
   
    $hyphen      = '-';
    $conjunction = ' and ';
    $separator   = ', ';
    $negative    = 'negative ';
    $decimal     = ' point ';
    $dictionary  = array(
        0                   => 'Zero',
        1                   => 'One',
        2                   => 'Two',
        3                   => 'Three',
        4                   => 'Four',
        5                   => 'Five',
        6                   => 'Six',
        7                   => 'Seven',
        8                   => 'Eight',
        9                   => 'Nine',
        10                  => 'Ten',
        11                  => 'Eleven',
        12                  => 'Twelve',
        13                  => 'Thirteen',
        14                  => 'Fourteen',
        15                  => 'Fifteen',
        16                  => 'Sixteen',
        17                  => 'Seventeen',
        18                  => 'Eighteen',
        19                  => 'Nineteen',
        20                  => 'Twenty',
        30                  => 'Thirty',
        40                  => 'Fourty',
        50                  => 'Fifty',
        60                  => 'Sixty',
        70                  => 'Seventy',
        80                  => 'Eighty',
        90                  => 'Ninety',
        100                 => 'Hundred',
        1000                => 'Thousand',
        1000000             => 'Million',
        1000000000          => 'Billion',
        1000000000000       => 'Trillion',
        1000000000000000    => 'Quadrillion',
        1000000000000000000 => 'Quintillion'
    );
   
    if (!is_numeric($number)) {
        return false;
    }
   
    if (($number >= 0 && (int) $number < 0) || (int) $number < 0 - PHP_INT_MAX) {
        // overflow
        trigger_error(
            'convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX,
            E_USER_WARNING
        );
        return false;
    }

    if ($number < 0) {
        return $negative . convert_number_to_words(abs($number));
    }
   
    $string = $fraction = null;
   
    if (strpos($number, '.') !== false) {
        list($number, $fraction) = explode('.', $number);
    }
   
    switch (true) {
        case $number < 21:
            $string = $dictionary[$number];
            break;
        case $number < 100:
            $tens   = ((int) ($number / 10)) * 10;
            $units  = $number % 10;
            $string = $dictionary[$tens];
            if ($units) {
                $string .= $hyphen . $dictionary[$units];
            }
            break;
        case $number < 1000:
            $hundreds  = $number / 100;
            $remainder = $number % 100;
            $string = $dictionary[$hundreds] . ' ' . $dictionary[100];
            if ($remainder) {
                $string .= $conjunction . convert_number_to_words($remainder);
            }
            break;
        default:
            $baseUnit = pow(1000, floor(log($number, 1000)));
            $numBaseUnits = (int) ($number / $baseUnit);
            $remainder = $number % $baseUnit;
            $string = convert_number_to_words($numBaseUnits) . ' ' . $dictionary[$baseUnit];
            if ($remainder) {
                $string .= $remainder < 100 ? $conjunction : $separator;
                $string .= convert_number_to_words($remainder);
            }
            break;
    }
   
    if (null !== $fraction && is_numeric($fraction)) {
        $string .= $decimal;
        $words = array();
        foreach (str_split((string) $fraction) as $number) {
            $words[] = $dictionary[$number];
        }
        $string .= implode(' ', $words);
    }
   
    return $string;
}
?>
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>-->
<script language="Javascript">

function IsEmpty(){ 

if(document.form.taka.value < 1)
{
alert("empty");
}
    return;
}


</script>
 <script type="text/javascript">

    function PrintElems(elem)
    {
        Popupd($(elem).html());
    }

    function Popupd(data) 
    {
        var mywindow = window.open('', 'Payment Receipt', 'height=1500,width=950');
        mywindow.document.write('<html><head><title>Payment Receipt | Powered By Dreamstech | Developed By AMS IT</title>');
        //mywindow.document.write('<link rel="stylesheet" href="css/main.css" type="text/css" />'); //<link href= rel="stylesheet" type="text/css" />
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.print();
        mywindow.close();

        return true;
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
            		
                	
                    <!-- Statistic Item -->
                <?php //include('header_footer_file/accjournalbalance.php'); ?>
                
               
                
                <!-- Panels Start -->
                <?php if(!isset($_GET['print'])){ ?>
           	  <div class="grid_12">
                    <div class="mws-panel">
                    	<h2 align="center" style="margin-top:0px; border-left:#666 medium dotted;  border-right:#666 medium dotted;"><i class="icon-publish"></i> Receive Payment </h2>
                        <div class="mws-panel-header">
                            <span><i class="icon-publish"></i> Receive Payment List </span>
                            <span style="float:right; margin-top:-30px;">
                            <a href="add_payment_receive.php" class="btn btn-success"><i class="icon-plus"></i>Receive New Payment</a>
                          	</span>
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
							if($userstatus==1)
							{
					$sql1=$obj->SelectAll("account_module_invoice_payment");
							}
							else
							{
					$sql1=$obj->SelectAllByID("account_module_invoice_payment",array("branch_id"=>$school));			
							}
							$a=1;
							if(!empty($sql1))
							foreach($sql1 as $row)
							{
								
							?>
                                <tr>
                                    <td valign="middle" align="center" style="width:30px;"><?php echo $a; ?> </td>
                                    <td valign="middle" align="center"><a style="font-size:14px; font-weight:bolder; color:#333;" href="#"> <?php echo $obj->dates($row->date); ?></a></td>
                                    <td align="center" valign="middle"><?php echo "Payment-".$row->id; ?></td>
                                    <td align="center" valign="middle"><a style="color:rgba(51,51,51,1); font-weight:bolder;" href="customer.php?view=<?php echo $row->cid; ?>"><?php echo $obj->SelectAllByVal("ams_student_list","id",$row->cid,"name"); ?></a></td>
                                    <td align="center" valign="middle"><?php echo $row->memo; ?></td>
                                    <td align="center" valign="middle"><?php echo $obj->SelectAllByVal("account_module_ladger_list_properties","id",$row->pa,"head_sub_list_name"); ?></td>
                                    <td align="center" valign="middle"><?php echo number_format($row->amount,2); ?></td>
                                    <td align="center" valign="middle"><?php echo $obj->SelectAllByVal("account_module_company_user","id",$row->input_by,"name"); ?></td>
                                    <td align="center" valign="middle">
                                    <?php 
									if($row->status==0)
									{
									?>
                                    <a href="<?php echo $obj->filename(); ?>?payment_confirm=<?php echo $row->id; ?>" class="hovertip" style="color:#000;"  onclick="javascript:return confirm('Are you absolutely sure to Go Process Transaction Page?')" title="Process"><i class="icon-picassa-2"></i></a>
                                    <a href="<?php echo $obj->filename(); ?>?print=<?php echo $row->id; ?>" class="hovertip" style="color:#000;"  onclick="javascript:return confirm('Are you absolutely sure to Go Print Page?')" title="Print"><i class="icon-print"></i></a>
                                    <a href="<?php echo $obj->filename(); ?>?del=<?php echo $row->id; ?>" class="hovertip" style="color:#000;"  onclick="javascript:return confirm('Are you absolutely sure to delete This?')" title="Delete"><i class="icon-trash"></i></a>
                                    <?php }else{ ?>
                                    <a href="#"  style="color:#000;" class="icon-check"></a>
                                    <a href="<?php echo $obj->filename(); ?>?print=<?php echo $row->id; ?>" class="hovertip" style="color:#000;"  onclick="javascript:return confirm('Are you absolutely sure to Go Print Page?')" title="Print"><i class="icon-print"></i></a>
                                    <?php } ?>
                                    </td>
                                </tr>
                             <?php 
							 $a++;
							 } ?> 
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div> 
                <?php }elseif(isset($_GET['print'])){ ?>
                <div class="grid_12">
                    <div class="mws-panel">
                    	<h2 align="center" style="margin-top:0px; border-left:#666 medium dotted;  border-right:#666 medium dotted;"><i class="icon-print"></i> Print Receipt </h2>
                        <div class="mws-panel-header">
                            <span><i class="icon-print"></i> Print Money Receipt </span>
                            <span style="float:right; margin-top:-30px;">
                            <button class="btn btn-danger" type="button" onClick="PrintElems('#print_content')"><i class="icon-print"></i> Print Receipt</button>
                          	</span>
                        </div>
                        
                        <div class="mws-panel-body no-padding" style="padding-top:10px;" id="print_content">
                            <!--receipt code start from here --> 
                            <style type="text/css">
                        	table a:link {
								color: #666;
								font-weight: bold;
								text-decoration:none;
							}
							table a:visited {
								color: #999999;
								font-weight:bold;
								text-decoration:none;
							}
							table a:active,
							table a:hover {
								color: #bd5a35;
								text-decoration:underline;
							}
							table {
								font-family:Arial, Helvetica, sans-serif;
								color:#666;
								font-size:12px;
								text-shadow: 1px 1px 0px #fff;
								background:#eaebec;
								border:#ccc 1px solid;
							
								-moz-border-radius:3px;
								-webkit-border-radius:3px;
								border-radius:3px;
							
								-moz-box-shadow: 0 1px 2px #d1d1d1;
								-webkit-box-shadow: 0 1px 2px #d1d1d1;
								box-shadow: 0 1px 2px #d1d1d1;
								width:100%;
							}
							table th {
								padding:10px 7px 12px 7px;
								border-top:1px solid #fafafa;
								border-bottom:1px solid #e0e0e0;
							
								background: #ededed;
								background: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#ebebeb));
								background: -moz-linear-gradient(top,  #ededed,  #ebebeb);
							}
							table th:first-child {
								text-align: left;
							}
							table tr:first-child th:first-child {
								-moz-border-radius-topleft:3px;
								-webkit-border-top-left-radius:3px;
								border-top-left-radius:3px;
							}
							table tr:first-child th:last-child {
								-moz-border-radius-topright:3px;
								-webkit-border-top-right-radius:3px;
								border-top-right-radius:3px;
							}
							table tr {
								text-align: left;
							}
							table td:first-child {
								text-align: left;
								
								border-left: 0;
							}
							table td {
								padding:8px;
								border-top: 1px solid #ffffff;
								border-bottom:1px solid #e0e0e0;
								border-left: 1px solid #e0e0e0;
							
								background: #fafafa;
								background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
								background: -moz-linear-gradient(top,  #fbfbfb,  #fafafa);
							}
							table tr.even td {
								background: #f6f6f6;
								background: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#f6f6f6));
								background: -moz-linear-gradient(top,  #f8f8f8,  #f6f6f6);
							}
							table tr:last-child td {
								border-bottom:0;
							}
							table tr:last-child td:first-child {
								-moz-border-radius-bottomleft:3px;
								-webkit-border-bottom-left-radius:3px;
								border-bottom-left-radius:3px;
							}
							table tr:last-child td:last-child {
								-moz-border-radius-bottomright:3px;
								-webkit-border-bottom-right-radius:3px;
								border-bottom-right-radius:3px;
							}
							table tr:hover td {
								background: #f2f2f2;
								background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
								background: -moz-linear-gradient(top,  #f2f2f2,  #f0f0f0);	
							}
                        </style>
                        <style type="text/css">
							.main_frame{ width:900px;  margin-left:10px; margin-bottom:10px; height:335px; clear:both; display:block; border:3px #09F solid; }
							.main_frame_grid_1{ width:600px;  background:rgba(102,102,102,0.02); display:block; float:left; }
							.main_frame_grid_2{ width:287px; margin-right:5px; margin-top:3px; margin-bottom:5px; background:rgba(102,102,102,0.02); display:block; float:right; }
							
							.gre_top{ width:600px; height:80px; /*background:rgba(204,102,255,1);*/  }
							.gre_top_grid_1{ width:70px; height:70px; padding-left:5px; margin-top:3px; display:block; float:left; }
							
							.gre_top_grid_1 img{ width:70px; height:70px; border:2px #CCCCCC solid;  /*background:rgba(0,0,0,1);*/ }
							
							.gre_top_grid_2{ width:507px; height:70px; border:2px #CCCCCC solid; padding-left:5px; margin-top:3px; /*background:rgba(0,0,51,1);*/ display:block; float:right; }
							.gre_top_grid_2 .block_1{ width:507px; font-size:22px; height:40px; line-height:40px; text-align:center; /*background:rgba(0,255,102,1);*/ display:block; clear:both; }
							.gre_top_grid_2 .block_2{ width:507px; font-size:17px; height:25px; line-height:25px; text-align:center; /*background:rgba(102,0,51,1);*/ display:block; clear:both; }
							.gre_middle{ width:595px;  /*background:rgba(153,204,102,1);*/ padding:3px 5px;  }
							.gre_fot{ width:595px;  /*background:rgba(153,153,102,1);*/ padding:3px 5px 5px;  }
						</style>
                        <style type="text/css">
									.rf_box{ width:282px; clear:both; display:block; /*background:rgba(0,0,204,1);*/ }
									.rf_box_fbg{ width:282px; height:42px; clear:both; display:block; background:url(images/money_receipt_tri.png) no-repeat left; }
									.rf_box_fbg .block_3{ width:270px; height:42px; clear:both; display:block; text-align:center; font-family:Century;  line-height:42px; font-weight:bolder; font-size:19px; }
									.rf_box_fbg_2{ width:255px; border:1px #666 solid; height:30px; line-height:30px; font-size:18px; text-align:center; margin-top:3px; clear:both; display:block;  }
									
									.rf_box_2{ width:275px; margin-top:3px; clear:both; border:1px #CCCCCC solid; display:block; padding:5px;  }
						</style>
                        <?php for($i=1; $i<=4; $i++){ ?>
                        <?php 
						$sid=$obj->SelectAllByVal("account_module_invoice_payment","id",$_GET['print'],"cid");
						$pd=$obj->SelectAllByVal("account_module_invoice_payment","id",$_GET['print'],"date");
						$phh=$obj->SelectAllByVal("ams_singup","eiin_number",$school,"photo");
						$bank_name=$obj->SelectAllByVal("ams_singup","eiin_number",$school,"bank_name");
						$ac=$obj->SelectAllByVal("ams_singup","eiin_number",$school,"ac");
						$branch_name=$obj->SelectAllByVal("ams_singup","eiin_number",$school,"branch_name");
						 ?>
                            <div class="main_frame">
                            	<div class="main_frame_grid_1">
                                	<div class="gre_top">
                                    	<div class="gre_top_grid_1"><img src="../../photo/<?php echo $phh; ?>" alt="no img" /></div>
                                        <div class="gre_top_grid_2">
                                        	<div class="block_1"><?php echo $obj->SelectAllByVal("ams_singup","eiin_number",$school,"acount_name"); ?></div>
                                            <div class="block_2"><?php echo $obj->SelectAllByVal("ams_singup","eiin_number",$school,"address"); ?>. Pho: <?php echo $obj->SelectAllByVal("ams_singup","eiin_number",$school,"number"); ?></div>
                                        </div>
                                    </div>
                                    <div class="gre_middle">
                                    	<!--normal table-->
                                    	<table cellspacing='0'> <!-- cellspacing='0' is important, must stay -->

                                                <!-- Table Header -->
                                                <!-- Table Header -->
                                            
                                                <!-- Table Body -->
                                                <tbody>
                                            		<tr>
                                                        <td>Student Name</td>
                                                        <td colspan="3"><?php echo $obj->SelectAllByVal("ams_student_list","id",$sid,"name"); ?></td>
                                                    </tr>
                                                    <tr class="even">
                                                        <td width="100">Class/ Course</td>
                                                        <td width="170"><?php echo $obj->SelectAllByVal("ams_student_list","id",$sid,"class"); ?></td>
                                                        <td width="100">Session</td>
                                                        <td><?php echo $obj->SelectAllByVal("ams_student_list","id",$sid,"session"); ?></td>
                                                    </tr><!-- Table Row -->
                                                    
                                                    <tr>
                                                        <td>Roll No.</td>
                                                        <td><?php echo $obj->SelectAllByVal("ams_student_list","id",$sid,"session"); ?></td>
                                                        <td>Shift</td>
                                                        <td><?php echo $obj->SelectAllByVal("ams_student_list","id",$sid,"session"); ?></td>
                                                    </tr><!-- Table Row -->
                                            
                                                    <tr class="even">
                                                        <td>Group</td>
                                                        <td><?php echo $obj->SelectAllByVal("ams_student_list","id",$sid,"group"); ?></td>
                                                        <td>Section</td>
                                                        <td><?php echo $obj->SelectAllByVal("ams_student_list","id",$sid,"section"); ?></td>
                                                    </tr><!-- Darker Table Row -->
                                            
                                                </tbody>
                                                <!-- Table Body -->
                                            
                                            </table>
                                        <!--table design end-->
                                    </div>
                                    <div class="gre_fot">
                                    	<!--normal table-->
                                    	<table cellspacing='0'> <!-- cellspacing='0' is important, must stay -->

                                                <!-- Table Header -->
                                                <thead>
                                                    <tr>
                                                        <th>Description</th>
                                                        <th width="100">Amount</th>
                                                        <th width="160">Receipt/ Voucher No</th>
                                                    </tr>
                                                </thead>
                                                <!-- Table Header -->
                                            
                                                <!-- Table Body -->
                                                <tbody>
                                            		<?php 
													$description=$obj->SelectAllByVal("account_module_invoice_payment","id",$_GET['print'],"memo");
													$amount=$obj->SelectAllByVal("account_module_invoice_payment","id",$_GET['print'],"amount");
													$paymentid=$obj->SelectAllByVal("account_module_invoice_payment","id",$_GET['print'],"link_id");
													?>
                                                    <tr>
                                                        <td><?php echo $description; ?></td>
                                                        <td><?php echo number_format($amount,2); ?></td>
                                                        <td><?php echo $paymentid."".$_GET['print']; ?></td>
                                                    </tr><!-- Table Row -->
                                                    
                                                    <tr class="even">
                                                        <td colspan="3">In Word (TK.)  : <span><?php echo convert_number_to_words($amount)." Taka Only"; ?></span></td>
                                                    </tr><!-- Table Row -->
                                            
                                            
                                                </tbody>
                                                <!-- Table Body -->
                                            
                                            </table>
                                        <!--table design end-->
                                    </div>
                                </div>
                                
                                <div class="main_frame_grid_2">
                                	<div class="rf_box">
                                    	<div class="rf_box_fbg">
                                        	<?php if($i==1){ ?>
                                        	<div class="block_3"><?php echo "Student Copy"; ?></div>
                                            <?php }elseif($i==2){ ?>
                                        	<div class="block_3"><?php echo "Computer Analyst Copy"; ?></div>
                                            <?php }elseif($i==3){ ?>
                                        	<div class="block_3"><?php echo "College Copy"; ?></div>
                                            <?php }elseif($i==4){ ?>
                                        	<div class="block_3"><?php echo "Bank Copy"; ?></div>
                                            <?php } ?>
                                        </div>
                                        <div class="rf_box_fbg_2">Date: <?php echo str_replace("/","-",$obj->dates($pd)); ?></div>
                                    </div>
                                    
                                    <div class="rf_box_2">
                                    	<!--normal table-->
                                    	<table cellspacing='0'> <!-- cellspacing='0' is important, must stay -->

                                                <!-- Table Header -->
                                                <thead>
                                                    <tr>
                                                        <th colspan="2"><?php echo $bank_name; ?></th>
                                                    </tr>
                                                </thead>
                                                <!-- Table Header -->
                                            
                                                <!-- Table Body -->
                                                <tbody>
                                            
                                                    <tr>
                                                        <td>A/C No.</td>
                                                        <td><?php echo $ac; ?></td>
                                                    </tr><!-- Table Row -->
                                                    
                                                    <tr class="even">
                                                        <td>Branch</td>
                                                        <td><?php echo $branch_name; ?></td>
                                                    </tr><!-- Table Row -->
                                            
                                                </tbody>
                                                <!-- Table Body -->
                                            
                                            </table>
                                        <!--table design end-->
                                    </div>
                                    
                                    
                                    <div class="rf_box_2">
                                    	<!--normal table-->
                                    	<table cellspacing='0'> <!-- cellspacing='0' is important, must stay -->

                                                <!-- Table Header -->
                                                <thead>
                                                    <tr>
                                                        <th style="text-align:center;">Student Signature And Date</th>
                                                        <th style="text-align:center;">Office Signature And Date</th>
                                                    </tr>
                                                </thead>
                                                <!-- Table Header -->
                                            
                                                <!-- Table Body -->
                                                <tbody>
                                            
                                                    <tr>
                                                        <td height="56"></td>
                                                        <td></td>
                                                    </tr><!-- Table Row -->
                                                    
                                                </tbody>
                                                <!-- Table Body -->
                                            
                                            </table>
                                        <!--table design end-->
                                    </div>
                                </div>
                            </div>
                            <!--receipt code end-->
                            <?php } ?>
                        </div>
                    </div>
                </div> 
                <?php } ?>
                <!-- Panels End -->
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
             <?php include('header_footer_file/footer.php'); ?>