<?php
include('class_file/auth.php');
$q=$_GET['q'];
if($q!='')
{

	//$ss=$obj->SelectAllByVal("account_module_list_of_head_accounts","id",$q,"");
	//$row=mysql_fetch_array($ss);
	$tablename=$obj->SelectAllByVal("account_module_list_of_head_accounts","id",$q,"tab_name");
	$table=$obj->SelectAllByVal("account_module_list_of_head_accounts","id",$q,"head_title");
	
	
	?>
    <option value="0" selected>-------<?php echo $table; ?>------</option>
    <?php
	$sss=$obj->SelectAll("account_module_".$tablename);
	foreach($sss as $rows)
	{
	?>
	<option value="<?php echo $q."".$rows->id; ?>"><?php echo $table; echo "--";  echo $rows->head_title; ?></option>
	<?php
	}
													
}
else
{
?>
<option selected>--------------------------</option>

<?php	
	
}
?>