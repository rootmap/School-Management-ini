<?php
include("../class/no_auth.php");
$table="district";
extract($_GET);
if($division!='')
{
    ?>
    <option>District</option>
    <?php
    $datadivision=$obj->SelectAllByID_Multiple($table,array("division_id"=>$division));
    if(!empty($datadivision))
    foreach($datadivision as $division):
    ?>
    <option value="<?php echo $division->id; ?>"><?php echo $division->name; ?></option>
    <?php
    endforeach;
}
else
{
    ?>
    <option>District</option>
    <?php
}
?>
