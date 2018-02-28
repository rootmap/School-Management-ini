<?php 
session_start();
$error_data[]='';
$error_flag=false;
include('class/db_Class_index.php');
$table="ams_notic";
$obj=new db_class();
extract($_GET);
?>
<?php include("include/head_titel.php");?>
	
<body>
<div id="body">
  <?php include("include/head_menu.php");?>
<!----body_main start here-------------------------------------------->
   <div id="body_main">
    <!----head_sec start here--------------------------------------------> 
     <div class="head_sec">
       
       <div class="head_logo left">
         <img src="img/logo.png" />
       </div>
       <div class="head_manu left">
         <?php include("include/menu.php");?>
       </div>
       
       </div>
     <!----head_sec End here-------------------------------------------->
     
     <!----welcome start here-------------------------------------------->
     <div id="welcom">
       <div class="welcom_admin">
         
           <?php include("include/body_head.php");?>
            
            <div class="body_adin height_300">
            
            <div class="proflie left ">
               <?php include("include/contact.php");?>
            </div>
            
           <div class="mcq left">
               
             <div class="mcq_head background_14 shawdow_1 colore_11">
               Notice
             </div>
            
             <div class="mcq_text_fild margin_top_5">
                 
           </div>
           
            </div>
            
       </div>  
     </div>
     <!----welcome End here-------------------------------------------->
     
    
     
   </div>
<!----body_main End here-------------------------------------------->

<!----fotter start here-------------------------------------------->
<?php include("include/fotter.php");?>
<!----fotter End here-------------------------------------------->

</div>

</body>
</html>
