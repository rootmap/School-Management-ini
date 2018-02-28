<?php 
include('../inc/eset.php');
include('../class_file/newclass/db_Class.php');
$obj=new db_class;
extract($_GET);
if($id!='')
{
	?>
    <?php if ($id==1) { include("../inc/tableone.php"); }elseif ($id==2) { include("../inc/tabletwo.php"); }elseif ($id==3) { include("../inc/tablethree.php");}elseif ($id==4) {include("../inc/tablefour.php"); }elseif ($id==5) { include("../inc/tablefive.php"); }elseif ($id==6) { include("../inc/tablesix.php"); }elseif ($id==7) { include("../inc/tableseven.php"); }elseif ($id==8) { include("../inc/tableeight.php"); }else{ echo "Nothing..."; } ?>
	
	<?php
	
}else{
	echo "f";
}
?>