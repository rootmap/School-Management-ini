<?php
include("../class/no_auth.php");
$table="division";
extract($_GET);
if($country!='')
{
    ?>
    <option>Division/State</option>
    <?php
    $datadivision=$obj->SelectAllByID_Multiple($table,array("country_id"=>$country));
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
    <option>Division/State</option>
    <?php
}
?>
