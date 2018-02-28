<?php
if (is_numeric($_GET['employ_id'])) {
	include('../class_file/db_Class.php');
	$obj = new db_class();
	$obj->MySQL();
    $query="select * from product where id='".$_GET['employ_id']."'";
    $result=mysql_query($query);
    $employ=mysql_fetch_array($result);
    echo "<table border=\"1\">
        <tr>
            <td>Name:</td>
            <td>".$employ['name']."</td>
        </tr>
    </table>";
}
?> 