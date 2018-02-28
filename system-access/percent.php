<?php
include("../class/auth.php");
extract($_GET);
if($t!='')
{
  echo $t;
}
else
{
    echo "Fail";
}
?>
