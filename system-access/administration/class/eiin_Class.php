<?php
class eiin_class {
    
    function LoadByLast($object,$id) {
		$obj=new db_class();
        $count = 0;
        $fields = '';
        $con = $obj->open();
        $query = "SELECT * FROM `$object` ORDER BY $id DESC";
        @$result = mysqli_query($con, $query);
        if ($result) {
            $count = mysqli_num_rows($result);

            if ($count >= 1) {
                //$object[]=array();
                while ($rows = $result->fetch_object()) {
                    $objects[] = $rows;
                }
                $obj->close($con);
                return $objects;
            }
        }
    }
	
	function RecentLoadByLast($object,$id) {
		$obj=new db_class();
        $count = 0;
        $fields = '';
        $con = $obj->open();
        $query = "SELECT * FROM `$object` ORDER BY $id DESC LIMIT 50";
        @$result = mysqli_query($con, $query);
        if ($result) {
            $count = mysqli_num_rows($result);

            if ($count >= 1) {
                //$object[]=array();
                while ($rows = $result->fetch_object()) {
                    $objects[] = $rows;
                }
                $obj->close($con);
                return $objects;
            }
        }
    }
    
    
	
}
?>
