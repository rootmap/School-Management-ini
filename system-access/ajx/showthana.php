<?php
include("../class/no_auth.php");
$table="thana";
extract($_GET);
if($district!='')
{
    ?>
    <option>Thana / Zip Code</option>
    <?php
    $datadivision=$obj->SelectAllByID_Multiple($table,array("district_id"=>$district));
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
    <option> Thana/ Zip Code</option>
    <?php
}
?>
