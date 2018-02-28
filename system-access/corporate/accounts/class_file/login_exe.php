<?php
class login 
{
    public function open() {
       $con = mysqli_connect("localhost", "root", "", "uniaidems");
        return $con;
    }
	
    public function close($con) {
        mysqli_close($con);
    }
	
	function escapesql($col) {
        $con = $this->open();
        $coll = mysqli_real_escape_string($con, $col);
		$this->close($con);
		return $coll;
    }

	function redirect($link) 
	{
        echo "<script>location.href='$link'</script>";
    }
	
	function Error($msg,$location)
    {
        $errmsg_arr[]="<div class='mws-form-message error'>".$msg."</div>";
        $errflag = true;
        if ($errflag) {
            $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
            session_write_close();
            header("location:".$location);
            exit();
        }       
    }
	
	function Warning($msg,$location)
    {
        $errmsg_arr[]="<div class='mws-form-message warning'>".$msg."</div>";
        $errflag = true;
        if ($errflag) {
            $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
            session_write_close();
            header("location:".$location);
            exit();
        }       
    }
	
	function Info($msg,$location)
    {
        $errmsg_arr[]="<div class='mws-form-message info'>".$msg."</div>";
        $errflag = true;
        if ($errflag) 
        {
            $_SESSION['SMSG_ARR'] = $errmsg_arr;
            session_write_close();
            header("location:".$location);
            exit();
        }  
    }
    
    function Success($msg,$location)
    {
        $errmsg_arr[]="<div class='mws-form-message success'>".$msg."</div>";
        $errflag = true;
        if ($errflag) 
        {
            $_SESSION['SMSG_ARR'] = $errmsg_arr;
            session_write_close();
            header("location:".$location);
            exit();
        }  
    }
    
    function ShowMsg()
    {
        if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) 		{
            foreach($_SESSION['ERRMSG_ARR'] as $msg) 
            {
				unset($_SESSION['ERRMSG_ARR']);
                return $msg;  
            }
   			
			
        }

        if( isset($_SESSION['SMSG_ARR']) && is_array($_SESSION['SMSG_ARR']) && count($_SESSION['SMSG_ARR']) >0 ) {
            foreach($_SESSION['SMSG_ARR'] as $msgs) 
            {
				unset($_SESSION['SMSG_ARR']);
                return $msgs;  
            }
   			
        }       
    }

	
    function exists_multiple($object, $object_array) {
        $count = 0;
        $fields = '';
        $con = $this->open();
        foreach ($object_array as $col => $val) {
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
            $this->close($con);
            if ($count != 0) {
                return $count;
            } else {
                return 0;
            }
        } else {
            $this->close($con);
            return 0;
        }
    }

	
    
    function SelectAllByID_Multiple($object, $object_array) {
        $count = 0;
        $fields = '';
        $con = $this->open();
        foreach ($object_array as $col => $val) {
            if ($count++ != 0)
                $fields .= ' AND ';
            $col = mysqli_real_escape_string($con, $col);
            $val = mysqli_real_escape_string($con, $val);
            $fields .= "`$col` = '$val' ";
        }

        $query = "SELECT * FROM `$object` WHERE $fields ORDER BY id DESC";
        $result = mysqli_query($con, $query);
        if ($result) {
            $count = mysqli_num_rows($result);

            if ($count >= 1) {
                while ($rows = $result->fetch_object()) {
                    $objects[] = $rows;
                }
                $this->close($con);
                return $objects;
            }
        } else {
            $this->close($con);
            return 0;
        }
    }
	
	 function SelectAllByVal($object,$field,$fval,$fetch)
    {
        $link=$this->open();
        $sql="SELECT `$fetch` FROM `$object` WHERE `$field`='$fval'";
        $result=mysqli_query($link, $sql);
        if($result)
        {
            $row=  mysqli_fetch_array($result);
            return $row[$fetch];
        }
    }
	
	function SelectAllByVal2($object,$field,$fval,$field2,$fval2,$fetch)
    {
        $link=$this->open();
        $sql="SELECT `$fetch` FROM `$object` WHERE `$field`='$fval' AND `$field2`='$fval2'";
        $result=mysqli_query($link, $sql);
        if($result)
        {
            $row=  mysqli_fetch_array($result);
            return $row[$fetch];
        }
    }

    function filename() {
        return basename($_SERVER['PHP_SELF']);
    }

}
?>