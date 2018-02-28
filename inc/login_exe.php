<?php
class login_class {
    
    function login($object, $object_array) {
        $obj=new db_class();
		$count = 0; 
        $fields = ''; 
        $con = $obj->open(); 
            foreach ($object_array as $col => $val) 
            { 
                if ($count++ != 0) 
                $fields .= ' AND '; 
            $col = mysqli_real_escape_string($con, $col); 
            $val = mysqli_real_escape_string($con, $val); 
            $fields .= "`$col` = '$val' "; 
            } 
            $query = "SELECT * FROM `$object` WHERE $fields"; 
            $result = mysqli_query($con, $query);
        if ($result) {
            $count = mysqli_num_rows($result);
            $obj->close($con);
            if ($count !=0) {
				
                return $count;
				
            }
        } else {
            $obj->close($con);
            return 0;
        }
    }
	
}
?>
