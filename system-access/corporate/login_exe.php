<?php
class login 
{
    public function open() {
       $con = mysqli_connect("localhost", "root", "", "dreams");
	   //@$con = mysqli_connect("localhost", "dreamste_amsit", "amsit", "dreamste_amsit");
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
	
	function login_access_check($username,$password)
	{
		$table="account_module_company_user";
		$chklogged=$this->exists_multiple($table,array("username"=>$username,"password"=>$password));
		if($chklogged==1)
		{
			$active=array("username"=>$username,"password"=>$password,"account_status"=>1);
			if($this->exists_multiple($table,$active)==1)
			{
				$loginst_one=array("username"=>$username,"password"=>$password,"account_status"=>1,"status"=>1);
				$loginst_two=array("username"=>$username,"password"=>$password,"account_status"=>1,"status"=>2);
				$loginst_three=array("username"=>$username,"password"=>$password,"account_status"=>1,"status"=>3);
				if($this->exists_multiple($table,$loginst_one)==1)
				{
					$_SESSION['SESS_AMSIT_BRANCH_ID']=$this->SelectAllByVal2($table,"username",$username,"password",$password,"branch_id");
					$_SESSION['SESS_AMSIT_APPS_ID']=$this->SelectAllByVal2($table,"username",$username,"password",$password,"id");
					$_SESSION['SESS_AMSIT_EMP_STATUS']=1;
					$_SESSION['SESS_AMSIT_EMP_NAME']=$this->SelectAllByVal2($table,"username",$username,"password",$password,"name");
					session_write_close();
					$this->Success("Your Are Successfully Logged in as a Admin, Please contact to admin.","single_account/dashboard.php");
				}
				elseif($this->exists_multiple($table,$loginst_two)==1)
				{
					$_SESSION['SESS_AMSIT_BRANCH_ID']=$this->SelectAllByVal2($table,"username",$username,"password",$password,"branch_id");
					$_SESSION['SESS_AMSIT_APPS_ID']=$this->SelectAllByVal2($table,"username",$username,"password",$password,"id");
					$_SESSION['SESS_AMSIT_EMP_STATUS']=2;
					$_SESSION['SESS_AMSIT_EMP_NAME']=$this->SelectAllByVal2($table,"username",$username,"password",$password,"name");
					session_write_close();
					$this->Success("Your Are Successfully Logged in as a manager, Please contact to admin.","single_account/dashboard.php");
				}
				elseif($this->exists_multiple($table,$loginst_three)==1)
				{
					$_SESSION['SESS_AMSIT_BRANCH_ID']=$this->SelectAllByVal2($table,"username",$username,"password",$password,"branch_id");
					$_SESSION['SESS_AMSIT_APPS_ID']=$this->SelectAllByVal2($table,"username",$username,"password",$password,"id");
					$_SESSION['SESS_AMSIT_EMP_STATUS']=3;
					$_SESSION['SESS_AMSIT_EMP_NAME']=$this->SelectAllByVal2($table,"username",$username,"password",$password,"name");
					session_write_close();
					$this->Success("Your Are Successfully Logged in as a manager, Please contact to admin.","single_account/dashboard.php");
				}
				else
				{
					$this->Warning("Your login info is blocked, Please contact to admin.",$this->filename());
				}
			}
			else
			{
				$this->Warning("Your login info is blocked, Please contact to admin.",$this->filename());
			}
		}
		else
		{
			$this->Error("Invalid login info, Please try again.",$this->filename());
		}
	}
	

}
?>