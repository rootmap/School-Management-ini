<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php if(isset($_SESSION['SESS_USERNAME'])){ ?>
<title><?php echo $obj->SelectAllByVal("ams_singup","eiin_number",$_SESSION['SESS_USERNAME'],"acount_name"); ?> ADMIN CMS | SKELETON IT</title>
<?php }else{ ?>
<title>SCHOOL ADMIN CMS | SKELETON IT</title>
<?php } ?>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

        <link href="css/menu.css" rel="stylesheet" type="text/css" />
         <link rel="stylesheet" type="text/css" href="skins/dhtmlxcalendar_dhx_skyblue.css">
          <link rel="stylesheet" type="text/css" href="skins/dhtmlxcalendar.css">
          <link href="css/dreams.css" rel="stylesheet" type="text/css" />
         <link href="tables/media/css/demo_page.css" rel="stylesheet" type="text/css" />
         <link href="tables/media/css/demo_table.css" rel="stylesheet" type="text/css" />
         <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css'>
        <script type="text/javascript" language="javascript" src="tables/media/js/jquery.js"></script>
        <script type="text/javascript" language="javascript" src="tables/media/js/jquery.dataTables.js"></script>
        <script type="text/javascript" language="javascript" src="js/pagination.js"></script>
		<script type="text/javascript" language="javascript" src="js/message_count.js"></script>
         <script src="skins/dhtmlxcalendar.js"></script>
         <script src="ckeditor/ckeditor.js"></script>
         <script type="text/javascript">
            jQuery(function($) {
                $('#checkAll').click(function() {
                    $('input:checkbox').prop('checked', this.checked);
                });
            })
        </script>
        
        <script>
      function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
    </script>
    <style type="text/css">

    #printable { display: none; }

    @media print
    {
    	#non-printable { display: none; }
    	#printable { display: block; }
    }
    </style>