<?php
class select_class {
    public function open() {
        @$con = mysqli_connect("localhost", "root", "", "dreams");
		//@$con = mysqli_connect("localhost", "dreamste_amsit", "amsit", "dreamste_amsit");
        return $con;
    }

    public function close($con) {
        mysqli_close($con);
    }

   function exists_range($val,$min,$max,$val2)
    {
	  if ($val >= $min && $val <= $max){
		   return $val2;
		  }
	  
	  
    }
	
	
	
	function delete_confirm()
	{
		 return "javascript:return confirm('Are you absolutely sure you want to delete?')";	
	}
	
	function GetCstomRes($object,$fetch,$fetch1,$stvalue,$f1,$v1,$f2,$v2,$let)
    {
        $link=$this->open();
        $sql="SELECT `$let` FROM `$object` WHERE `$f1`='$v1' AND `$f2`='$v2' AND `$fetch`<='$stvalue' AND `$fetch1`>='$stvalue' LIMIT 1";
        $result=mysqli_query($link, $sql);
        if($result)
        {
            $row=  mysqli_fetch_array($result);
            return $row[$let];
			
        }
		else
		{
			return 0;	
		}
    }	 
	
	function hahaha()
	{
		return "asdadasd";	
	}
	
	function GetCstomRes1($object,$fetch,$stvalue,$f2,$v2,$let)
    {
        $link=$this->open();
        $sql="SELECT `$let` FROM `$object` WHERE `$f2`='$v2' AND  `$fetch`>='$stvalue' LIMIT 1";
        $result=mysqli_query($link, $sql);
        if($result)
        {
            $row=  mysqli_fetch_array($result);
            return $row[$let];
			
        }
		else
		{
			return 0;	
		}
    }	 
  
	function checkgrade($num)
	{
		
	 //$ttt=$obj->SelectAllByVal("ams_marks_shite_chos","group_id",$ting->group_id,"grading_system_id");
	 //$aaaa=array("school_id"=>$school,"category_id"=>$ttt);
	 //$data=$obj->SelectAllByID_Multiple("ams_grading_system_dateils",$aaaa);
	// if(!empty($data))
	// foreach($data as $ro)  
		
		if($num>80)
		{
			return "A+";	
		}
		elseif($num>75)
		{
			return "A";	
		}
		elseif($num>70)
		{
			return"A-";
		}
		elseif($num>65)
		{
			return"B+";
		}
		elseif($num>60)
		{
			return"B";
		}
		elseif($num>55)
		{
			return"B-";
		}
		elseif($num>50)
		{
			return"C+";
		}
		elseif($num>45)
		{
			return"C";
		}
		elseif($num>40)
		{
			return"D";
		}
		elseif($num>35)
		{
			return"F";
		}
	     else
		{
			return"F";
		}
	}
	
	function checkGPA($gpa)
	{
		if($gpa>80)
		{
			return 4.00;
		}
		elseif($gpa>75)
		{
			return 3.50;
		}
		elseif($gpa>70)
		{
			return 3.25;
		}
		elseif($gpa>65)
		{
			return 3.00;
		}
		elseif($gpa>60)
		{
			return 2.75;
		}
		elseif($gpa>55)
		{
			return 2.50;
		}
		elseif($gpa>50)
		{
			return 2.25;
		}
		elseif($gpa>45)
		{
			return 2.00;
		}
		elseif($gpa>40)
		{
			return 2.00;
		}
		elseif($gpa>35)
		{
			return 0.00;
		}
		else
		{
			return 0.00;
		}
	}
	
	
	function totalgpa($sub,$total)
	{
    
		
		
		$getsumgpa=$total/$sub;
		if($getsumgpa>=4)
		{
			return "A+";
		}
		elseif($getsumgpa>=3.75)
		{
			return "A";
		}
		elseif($getsumgpa>=3.50)
		{
			return "A-";
		}
		elseif($getsumgpa>=3.25)
		{
			return "B+";
		}
		elseif($getsumgpa>=3.00)
		{
			return "B";
		}
		elseif($getsumgpa>=2.75)
		{
			return "B-";
		}
		elseif($getsumgpa>=2.50)
		{
			return "C+";
		}
		elseif($getsumgpa>=2.25)
		{
			return "C";
		}
		elseif($getsumgpa>=2.00)
		{
			return "D";
		}
		elseif($getsumgpa>=0.00)
		{
			return "F";
		}
		else
		{
			return "F";
		}
		
	}
	
    function getDays($start_date, $end_date) 
    {
        $days[] = $current_date = $start_date;
        while($current_date < $end_date){
            $current_date = date('Y-m-d', strtotime('+1 day', strtotime($current_date)));
            $days[] = $current_date;
        }
        return count($days);
    }
    
    function insert($object, $object_array) {
        $count = 0;
        $fields = '';
        $con = $this->open();
        foreach ($object_array as $col => $val) {
            if ($count++ != 0)
                $fields .= ', ';
            $col = mysqli_real_escape_string($con, $col);
            $val = mysqli_real_escape_string($con, $val);
            $fields .= "`$col` = '$val'";
        }
        $query = "INSERT INTO `$object` SET $fields";
        if (mysqli_query($con, $query)) {
            $this->close($con);
            return 1;
        } else {
            return 0;
        }
    }
	
	function multiple_insert($object, $object_array) {
        $count = 0;
        $fields = '';
        $con = $this->open();
        foreach ($object_array as $col => $val) {
            if ($count++ != 0)
                $fields .= ', ';
            $col =$col;
            $val =$val;
            $fields .= "`$col` = '$val'";
        }
        $query = "INSERT INTO `$object` SET $fields";
        if (mysqli_query($con, $query)) {
            $this->close($con);
            return 1;
        } else {
            return 0;
        }
    }
    
    function Error($msg,$location)
    {
        $errmsg_arr[]="<span class='error_msg'>".$msg."</span>";
        $errflag = true;
        if ($errflag) {
            $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
            session_write_close();
            header("location:".$location);
            exit();
        }       
    }
    
    function Success($msg,$location)
    {
        $errmsg_arr[]="<span class='sucess'>".$msg."</span>";
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
    
    
    function make_notification($getidfrom,$detail,$emplid,$supervisor,$status) 
    {
        //setting up
            $notification_array=array("emplid"=>$emplid,
                "f_emplid"=>$supervisor,
                "nid"=>$this->lasgettid($getidfrom),
                "detail"=>$detail,
                "s_status"=>1,
                "a_status"=>1,
                "status"=>$status,
                "date"=>date('Y-m-d'));
        //setting up        
        $sql=$this->insert("notification",$notification_array);
        if ($sql) 
        {
            return 1;
        } 
        else 
        {            
            return 0;
        }
    }
    
    
    
    function totalnotification($object) {
        $count = 0;
        $fields = '';
        $con = $this->open();
        $query = "SELECT * FROM notification WHERE a_status='1'";
        $result = mysqli_query($con, $query);
        if ($result) {
            $count = mysqli_num_rows($result);
            if($count!=0)
            {
                return $count;
                $this->close($con);
            }
        }
       
    }
    
    function notification_ind($status) {
        $count = 0;
        $fields = '';
        $con = $this->open();
        $query = "SELECT * FROM notification WHERE status='$status' AND a_status!='2'";
        $result = mysqli_query($con, $query);
        if ($result) {
            $count = mysqli_num_rows($result);
            if($count!=0)
            {
                return $count;
                $this->close($con);
            }
        }
       
    }
    
    function totalnotification_user($object) {
        $count = 0;
        $fields = '';
        $con = $this->open();
        $query = "SELECT * FROM notification WHERE s_status='1'";
        $result = mysqli_query($con, $query);
        if ($result) {
            $count = mysqli_num_rows($result);
            if($count!=0)
            {
                return $count;
                $this->close($con);
            }
        }
       
    }
    
    function notification_ind_user($status,$emplid) {
        $count = 0;
        $fields = '';
        $con = $this->open();
        $query = "SELECT * FROM notification WHERE status='$status' AND emplid='$emplid' AND s_status!='2'";
        $result = mysqli_query($con, $query);
        if ($result) {
            $count = mysqli_num_rows($result);
            if($count!=0)
            {
                return $count;
                $this->close($con);
            }
        }
       
    }
    
    function notification_ind_super($status,$emplid) {
        $count = 0;
        $fields = '';
        $con = $this->open();
        $query = "SELECT * FROM notification WHERE status='$status' AND f_emplid='$emplid' AND s_status!='2'";
        $result = mysqli_query($con, $query);
        if ($result) {
            $count = mysqli_num_rows($result);
            if($count!=0)
            {
                return $count;
                $this->close($con);
            }
            else 
            {
                return 0;
                $this->close($con);
            }
        }
       
    }
    
    function notification_check_user($nid,$req_st,$emplid) {
        $count = 0;
        $fields = '';
        $emp_status=$this->SelectAllByVal("employee","id",$emplid,"status");
        
        $con = $this->open();
        if($emp_status==1)
        {
            $query = "SELECT * FROM notification WHERE nid='$nid' AND status='$req_st' AND s_status='1'";
        }
        else 
        {
            $query = "SELECT * FROM notification WHERE nid='$nid' AND status='$req_st' AND a_status='1'";
        }
        $result = mysqli_query($con, $query);
        if ($result) {
            $count = mysqli_num_rows($result);
            if($count!=0)
            {
                return 1;
                $this->close($con);
            }
            else 
            {
                return 0;
                $this->close($con);                
            }
        }
       
    }
    
    function notification_check_user_update($nid,$req_st,$emplid) {
        $count = 0;
        $fields = '';
        $emp_status=$this->SelectAllByVal("employee","id",$emplid,"status");
        $con = $this->open();
        if($emp_status==1)
        {
            $query = "UPDATE notification SET s_status='2' WHERE nid='$nid' AND status='$req_st'";
        }
        else 
        {
            $query = "UPDATE notification SET a_status='2' WHERE nid='$nid' AND status='$req_st'";
        }
        $result = mysqli_query($con, $query);
        if ($result) {
                return 1;
                $this->close($con);
        }
        else 
        {
            return 0;
            $this->close($con);
        }
       
    } 
    
    
    function lasgettid($object) {
        $count = 0;
        $fields = '';
        $con = $this->open();
        $query = "SELECT * FROM `$object` ORDER BY id DESC LIMIT 1";
        $result = mysqli_query($con, $query);
        if ($result) {
            $count = mysqli_num_rows($result);
            if($count!=0)
            {
                $rows=  mysqli_fetch_array($result);
                return $rows['id'];
                $this->close($con);
            }
        }
       
    }
    
    
    function SelectAllByID_Order($object, $object_array,$des) {
        $count = 0;
        $fields = '';
        $con = $this->open();
        if (count($object_array) <= 1) {
            foreach ($object_array as $col => $val) {
                if ($count++ != 0)
                    $fields .= ', ';
                $col = mysqli_real_escape_string($con, $col);
                $val = mysqli_real_escape_string($con, $val);
                $fields .= "`$col` = '$val'";
            }
        }
        $query = "SELECT * FROM `$object` WHERE $fields ORDER BY id $des";
        $result = mysqli_query($con, $query);
        if ($result) {
            $count = mysqli_num_rows($result);

            if ($count >= 1) {
                //$object[]=array();
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
    
    
    function lastid($object) {
        $count = 0;
        $fields = '';
        $con = $this->open();
        $query = "SELECT * FROM `$object` ORDER BY id DESC LIMIT 1";
        $result = mysqli_query($con, $query);
        if ($result) {
            $count = mysqli_num_rows($result);

            if ($count >= 1) {
                //$object[]=array();
                while ($rows = $result->fetch_object()) {
                    $objects[] = $rows;
                }
                $this->close($con);
                return $objects;
            }
        }
       
    }
    
    function redirect($link)
    {
       echo "<script>location.href='$link'</script>";
    }
    function login($username, $password) {
        $count = 0;
        $fields = '';
        $con = $this->open();

        $fields = "username='$username' and password='$password'";

        $query = "SELECT * FROM `employee` WHERE $fields";
        $result = mysqli_query($con, $query);
        if ($result) {
            $count = mysqli_num_rows($result);
            $this->close($con);
            if ($count == 1) {
                return $count;
            }
        } else {
            $this->close($con);
            return 0;
        }
    }

    /**
     * if the object is exists
     * @param type $object
     * @param type $object_array
     * @return int
     */
    function exists($object, $object_array) {
        $count = 0;
        $fields = '';
        $con = $this->open();
        if (count($object_array) <= 1) {
            foreach ($object_array as $col => $val) {
                if ($count++ != 0)
                    $fields .= ', ';
                $col = mysqli_real_escape_string($con, $col);
                $val = mysqli_real_escape_string($con, $val);
                $fields .= "`$col` = '$val'";
            }
        }
        $query = "SELECT * FROM `$object` WHERE $fields";
        $result = mysqli_query($con, $query);
        if ($result) {
            $count = mysqli_num_rows($result);
            $this->close($con);
            if ($count == 1) {
                return 1;
            }
        } else {
            $this->close($con);
            return 0;
        }
    }
    
    
    function SelectAllByConditionWithAnd($object, $object_array) 
    { 
        $count = 0; 
        $fields = ''; 
        $con = $this->open(); 
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
            $counts=  mysqli_num_rows($result);
            return $counts;
           
    }
    
    function texists($object, $object_array) {
        $count = 0;
        $fields = '';
        $con = $this->open();
        if (count($object_array) <= 1) {
            foreach ($object_array as $col => $val) {
                if ($count++ != 0)
                    $fields .= ', ';
                $col = mysqli_real_escape_string($con, $col);
                $val = mysqli_real_escape_string($con, $val);
                $fields .= "`$col` = '$val'";
            }
        }
        $query = "SELECT * FROM `$object` WHERE $fields";
        $result = mysqli_query($con, $query);
        if ($result) {
            $count = mysqli_num_rows($result);
            $this->close($con);
            if ($count >= 1) {
                return $count;
            }
        } else {
            $this->close($con);
            return 0;
        }
    }
    
    function exists_multiple($object, $object_array) {
        $count = 0; 
        $fields = ''; 
        $con = $this->open(); 
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
            $this->close($con);
            if ($count !=0) {
                return $count;
            }
        } else {
            $this->close($con);
            return 0;
        }
    }
	
	function exists_multiple_date($object, $object_array,$dateval,$dateval2) {
        $count = 0; 
        $fields = ''; 
        $con = $this->open(); 
            foreach ($object_array as $col => $val) 
            { 
                if ($count++ != 0) 
                $fields .= ' AND '; 
            $col = mysqli_real_escape_string($con, $col); 
            $val = mysqli_real_escape_string($con, $val); 
            $fields .= "`$col` = '$val' "; 
            } 
            $query = "SELECT * FROM `$object` t WHERE $fields AND t.date>= '$dateval' and t.date <= '$dateval2'"; 
            $result = mysqli_query($con, $query);
        if ($result) {
            $count = mysqli_num_rows($result);
            $this->close($con);
            if ($count !=0) {
                return $count;
            }
			else
			{
				return 0;	
			}
        } else {
            $this->close($con);
            return 0;
        }
    }
    
    
    function existsnewtotal($object, $object_array) {
        $con_key_from_arr = array_keys($object_array);
        $key = $con_key_from_arr[0];
        $value = array_shift($object_array);
        $fields = array();
        $con = $this->open();
        foreach ($object_array as $field => $val) {
            $fields[] = "$field = '" . mysqli_real_escape_string($con, $val) . "'";
        }
        
        $query = "SELECT * FROM `$object` WHERE ". join(' AND ', $fields);
        $result = mysqli_query($con, $query);
        if ($result) {
            $count = mysqli_num_rows($result);
            $this->close($con);
            if ($count >= 1) {
                return $count;
            }
        } else {
            $this->close($con);
            return 0;
        }
    }
    
    
        function SelectAllByIDDouble($object, $object_array) {
        $con_key_from_arr = array_keys($object_array);
        $key = $con_key_from_arr[0];
        $value = array_shift($object_array);
        $fields = array();
        $con = $this->open();
        
        foreach ($object_array as $field => $val) {
            $fields[] = "$field = '" . mysqli_real_escape_string($con, $val) . "'";
        }
        $query = "SELECT * FROM `$object` WHERE " . join('AND ', $fields) . "";
        $result = mysqli_query($con, $query);
        if ($result) {
            $count = mysqli_num_rows($result);

            if ($count >= 1) {
                //$object[]=array();
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
    
    
    function existsbyid($object, $object_array) {
        $count = 0;
        $fields = '';
        $con = $this->open();
        if (count($object_array) <= 1) {
            foreach ($object_array as $col => $val) {
                if ($count++ != 0)
                    $fields .= ', ';
                $col = mysqli_real_escape_string($con, $col);
                $val = mysqli_real_escape_string($con, $val);
                $fields .= "`$col` = '$val'";
            }
        }
        $query = "SELECT * FROM `$object` WHERE $fields";
        $result = mysqli_query($con, $query);
        if ($result) {
            $count = mysqli_num_rows($result);
            $this->close($con);
            if ($count != 0) {
                return $count;
            }
        } else {
            $this->close($con);
            return 0;
        }
    }
    
    function totalrows($object) {
        $count = 0;
        $fields = '';
        $con = $this->open();
        $query = "SELECT * FROM `$object`";
        $result = mysqli_query($con, $query);
        if ($result) {
            $count = mysqli_num_rows($result);
            $this->close($con);
                return $count;
            } else {
            $this->close($con);
            return 0;
        }
    }
    
        function totalrowsbyID($object,$id) 
        {
            $count = 0;
            $fields = '';
            $con = $this->open();
            $query = "SELECT * FROM `$object` WHERE id='$id'";
            $result = mysqli_query($con, $query);
            if ($result) {
                $count = mysqli_num_rows($result);
                $this->close($con);
                    return $count;
                } else {
                $this->close($con);
                return 0;
            }
        }

            function totalrowsbyDID($object,$field,$id) {
        $count = 0;
        $fields = '';
        $con = $this->open();
        $query = "SELECT * FROM `$object` WHERE `$field`='$id'";
        $result = mysqli_query($con, $query);
        if ($result) {
            $count = mysqli_num_rows($result);
            $this->close($con);
                return $count;
            } else {
            $this->close($con);
            return 0;
        }
    }
    
    /**
     * Select all the objects
     * @param type $object
     * @return array
     */
    function SelectAll($object) {
        $count = 0;
        $fields = '';
        $con = $this->open();
        $query = "SELECT * FROM `$object`";
        @$result = mysqli_query($con, $query);
        if ($result) {
            $count = mysqli_num_rows($result);

            if ($count >= 1) {
                //$object[]=array();
                while ($rows = $result->fetch_object()) {
                    $objects[] = $rows;
                }
                $this->close($con);
                return $objects;
            }
        }
    }
    
    function SelectAll_limit_order($object) {
        $count = 0;
        $fields = '';
        $con = $this->open();
        $query = "SELECT * FROM `$object` ORDER BY id ASC LIMIT 10";
        $result = mysqli_query($con, $query);
        if ($result) {
            $count = mysqli_num_rows($result);

            if ($count >= 1) {
                //$object[]=array();
                while ($rows = $result->fetch_object()) {
                    $objects[] = $rows;
                }
                $this->close($con);
                return $objects;
            }
        }
    }
    
        function SelectAll_sdate($object,$field,$date) {
            $count = 0;
            $fields = '';
            $con = $this->open();
            $query = "SELECT * FROM `$object` WHERE `$field`='$date'";
            $result = mysqli_query($con, $query);
            if ($result) {
                $count = mysqli_num_rows($result);

                if ($count >= 1) {
                    //$object[]=array();
                    while ($rows = $result->fetch_object()) {
                        $objects[] = $rows;
                    }
                    $this->close($con);
                    return $objects;
                }
            }
        }
        
        function SelectAll_ddate($object,$field,$startdate,$enddate) {
            $count = 0;
            $fields = '';
            $con = $this->open();
            $query = "SELECT * FROM `$object` WHERE `$field` >= '$startdate' AND `$field` <= '$enddate'";
            $result = mysqli_query($con, $query);
            if ($result) {
                $count = mysqli_num_rows($result);

                if ($count >= 1) {
                    //$object[]=array();
                    while ($rows = $result->fetch_object()) {
                        $objects[] = $rows;
                    }
                    $this->close($con);
                    return $objects;
                }
            }
        }
        
        function SelectAll_ddate_ind($object,$field,$startdate,$enddate,$field,$fval) {
            $count = 0;
            $fields = '';
            $con = $this->open();
            $query = "SELECT * FROM `$object` WHERE `$field` >= '$startdate' AND `$field` <= '$enddate' AND `$field`='$fval'";
            $result = mysqli_query($con, $query);
            if ($result) {
                $count = mysqli_num_rows($result);

                if ($count >= 1) {
                    //$object[]=array();
                    while ($rows = $result->fetch_object()) {
                        $objects[] = $rows;
                    }
                    $this->close($con);
                    return $objects;
                }
            }
        }
    
        function SelectAllorderBy($object) {
        $count = 0;
        $fields = '';
        $con = $this->open();
        $query = "SELECT * FROM `$object` ORDER BY id DESC";
        $result = mysqli_query($con, $query);
        if ($result) {
            $count = mysqli_num_rows($result);

            if ($count >= 1) {
                //$object[]=array();
                while ($rows = $result->fetch_object()) {
                    $objects[] = $rows;
                }
                $this->close($con);
                return $objects;
            }
        }
    }
    
    function SelectAllorderByname($object) {
        $count = 0;
        $fields = '';
        $con = $this->open();
        $query = "SELECT * FROM `$object` ORDER BY name ASC";
        $result = mysqli_query($con, $query);
        if ($result) {
            $count = mysqli_num_rows($result);

            if ($count >= 1) {
                //$object[]=array();
                while ($rows = $result->fetch_object()) {
                    $objects[] = $rows;
                }
                $this->close($con);
                return $objects;
            }
        }
    }
    
    function title()
    {
        return "<title>Dreams </title>";
    }
	
    
    
    function filename()
    {
        return basename($_SERVER['PHP_SELF']);
    }
    
    function leave_status($status)
    {
        if($status==1)
        {
            return "Pending";
        }
        elseif($status==2) 
        {
            return "Acceped By Manager";
        }
        elseif($status==3) 
        {
            return "Rejected By Manager";
        }
    }
    
   


    /**
     * Select object by ID
     * @param type $object
     * @param type $object_array
     * @return int
     */
    function SelectAllByID($object, $object_array) {
        $count = 0;
        $fields = '';
        $con = $this->open();
        if (count($object_array) <= 1) {
            foreach ($object_array as $col => $val) {
                if ($count++ != 0)
                    $fields .= ', ';
                $col = mysqli_real_escape_string($con, $col);
                $val = mysqli_real_escape_string($con, $val);
                $fields .= "`$col` = '$val'";
            }
        }
        $query = "SELECT * FROM `$object` WHERE $fields ORDER BY id DESC";
        $result = mysqli_query($con, $query);
        if ($result) {
            $count = mysqli_num_rows($result);

            if ($count >= 1) {
                //$object[]=array();
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
    
	function zone()
	{
		$zonelist = array('Kwajalein' => -12.00, 'Pacific/Midway' => -11.00, 'Pacific/Honolulu' => -10.00, 'America/Anchorage' => -9.00, 'America/Los_Angeles' => -8.00, 'America/Denver' => -7.00, 'America/Tegucigalpa' => -6.00, 'America/New_York' => -5.00, 'America/Caracas' => -4.30, 'America/Halifax' => -4.00, 'America/St_Johns' => -3.30, 'America/Argentina/Buenos_Aires' => -3.00, 'America/Sao_Paulo' => -3.00, 'Atlantic/South_Georgia' => -2.00, 'Atlantic/Azores' => -1.00, 'Europe/Dublin' => 0, 'Europe/Belgrade' => 1.00, 'Europe/Minsk' => 2.00, 'Asia/Kuwait' => 3.00, 'Asia/Tehran' => 3.30, 'Asia/Muscat' => 4.00, 'Asia/Yekaterinburg' => 5.00, 'Asia/Kolkata' => 5.30, 'Asia/Katmandu' => 5.45, 'Asia/Dhaka' => 6.00, 'Asia/Rangoon' => 6.30, 'Asia/Krasnoyarsk' => 7.00, 'Asia/Brunei' => 8.00, 'Asia/Seoul' => 9.00, 'Australia/Darwin' => 9.30, 'Australia/Canberra' => 10.00, 'Asia/Magadan' => 11.00, 'Pacific/Fiji' => 12.00, 'Pacific/Tongatapu' => 13.00);
		return $zonelist;
	}
    
    function SelectAllByID_Multiple($object, $object_array) 
    {
        $count = 0; 
        $fields = ''; 
        $con = $this->open(); 
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

            if ($count >= 1) {
                //$object[]=array();
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
	
	function SelectAllByID_Multiple_date($object, $object_array,$dateval,$dateval2) 
    {
        $count = 0; 
        $fields = ''; 
        $con = $this->open(); 
            foreach ($object_array as $col => $val) 
            { 
                if ($count++ != 0) 
                $fields .= ' AND '; 
            $col = mysqli_real_escape_string($con, $col); 
            $val = mysqli_real_escape_string($con, $val); 
            $fields .= "`$col` = '$val' "; 
            } 
            
        $query = "SELECT * FROM `$object` t WHERE $fields AND t.date>= '$dateval' and t.date <= '$dateval2'";
        $result = mysqli_query($con, $query);
        if ($result) {
            $count = mysqli_num_rows($result);

            if ($count >= 1) {
                //$object[]=array();
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
	
	
	function SelectAllByID_Multiple_Limit15($object, $object_array) 
    {
        $count = 0; 
        $fields = ''; 
        $con = $this->open(); 
            foreach ($object_array as $col => $val) 
            { 
                if ($count++ != 0) 
                $fields .= ' AND '; 
            $col = mysqli_real_escape_string($con, $col); 
            $val = mysqli_real_escape_string($con, $val); 
            $fields .= "`$col` = '$val' "; 
            } 
            
        $query = "SELECT * FROM `$object` WHERE $fields ORDER BY id DESC LIMIT 15";
        $result = mysqli_query($con, $query);
        if ($result) {
            $count = mysqli_num_rows($result);

            if ($count >= 1) {
                //$object[]=array();
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
	
	
	  function SelectAllByID_Multiplejrder($object, $object_array) 
    {
        $count = 0; 
        $fields = ''; 
        $con = $this->open(); 
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

            if ($count >= 1) {
                //$object[]=array();
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
	
    
    function SelectAllByID2($object, $object_array,$f,$v) {
        $count = 0;
        $fields = '';
        $con = $this->open();
        if (count($object_array) <= 1) {
            foreach ($object_array as $col => $val) {
                if ($count++ != 0)
                    $fields .= ', ';
                $col = mysqli_real_escape_string($con, $col);
                $val = mysqli_real_escape_string($con, $val);
                $fields .= "`$col` = '$val'";
            }
        }
        $query = "SELECT * FROM `$object` WHERE $fields AND `$f`='$v'";
        $result = mysqli_query($con, $query);
        if ($result) {
            $count = mysqli_num_rows($result);

            if ($count >= 1) {
                //$object[]=array();
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
    
    function SelectAllByID3($object, $object_array,$f,$v,$f3,$v3) {
        $count = 0;
        $fields = '';
        $con = $this->open();
        if (count($object_array) <= 1) {
            foreach ($object_array as $col => $val) {
                if ($count++ != 0)
                    $fields .= ', ';
                $col = mysqli_real_escape_string($con, $col);
                $val = mysqli_real_escape_string($con, $val);
                $fields .= "`$col` = '$val'";
            }
        }
        $query = "SELECT * FROM `$object` WHERE $fields AND `$f`='$v' AND `$f3`='$v3'";
        $result = mysqli_query($con, $query);
        if ($result) {
            $count = mysqli_num_rows($result);

            if ($count >= 1) {
                //$object[]=array();
                while ($rows = $result->fetch_object()) {
                    $objects[] = $rows;
                }
                $this->close($con);
                return $objects;
            }
            else
            {
                return 0;
            }
        } else {
            $this->close($con);
            return 0;
        }
    }
    
    function SelectAllNotMe($object, $object_array) {
        $count = 0;
        $fields = '';
        $con = $this->open();
        if (count($object_array) <= 1) {
            foreach ($object_array as $col => $val) {
                if ($count++ != 0)
                    $fields .= ', ';
                $col = mysqli_real_escape_string($con, $col);
                $val = mysqli_real_escape_string($con, $val);
                $fields .= "`$col` != '$val'";
            }
        }
        $query = "SELECT * FROM `$object` WHERE $fields";
        $result = mysqli_query($con, $query);
        if ($result) {
            $count = mysqli_num_rows($result);

            if ($count >= 1) {
                //$object[]=array();
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
	function SelectAllByVal3($object,$field,$fval,$field2,$fval2,$field3,$fval3,$fetch)
    {
        $link=$this->open();
        $sql="SELECT `$fetch` FROM `$object` WHERE `$field`='$fval' AND `$field2`='$fval2' AND `$field3`='$fval3'";
        $result=mysqli_query($link, $sql);
        if($result)
        {
            $row=  mysqli_fetch_array($result);
            return $row[$fetch];
        }
    }
	function SelectAllByVal4($object, $field, $fval, $field2, $fval2,$field3, $fval3,$field4, $fval4, $fetch) {
        $link = $this->open();
        $sql = "SELECT `$fetch` FROM `$object` WHERE `$field`='$fval' AND `$field2`='$fval2' AND `$field3`='$fval3' AND `$field4`='$fval4'";
        $result = mysqli_query($link, $sql);
        if ($result) {
            $row = mysqli_fetch_array($result);
            return $row[$fetch];
        }
    }
    
    function SelectAllByCountMDI($object,$field1,$val1,$field2,$val2) {
        $count=0;
        $con = $this->open();
        $query = "SELECT * FROM `$object` WHERE `$field1`='$val1' AND `$field2`='$val2'";
        $result = mysqli_query($con, $query);
        if ($result) {
            $count = mysqli_num_rows($result);
                $this->close($con);
                return $count;
        } else {
            $this->close($con);
            return 0;
        }
    }
    
        function SelectAllByMDI($object,$field1,$val1,$field2,$val2) {
        $count=0;
        $con = $this->open();
        $query = "SELECT * FROM `$object` WHERE `$field1`='$val1' AND `$field2`='$val2'";
        $result = mysqli_query($con, $query);
        if ($result) {
            $count = mysqli_num_rows($result);

            if ($count >= 1) {
                //$object[]=array();
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

    /**
     * Delete the object from database
     * @param type $object
     * @param type $object_array
     * @return string|\Exception
     */
    function delete($object, $object_array) {
        $count = 0;
        $fields = '';
        $con = $this->open();
        if (count($object_array) <= 1) {
            foreach ($object_array as $col => $val) {
                if ($count++ != 0)
                    $fields .= ', ';
                $col = mysqli_real_escape_string($con, $col);
                $val = mysqli_real_escape_string($con, $val);
                $fields .= "`$col` = '$val'";
            }
        }
        $query = "Delete FROM `$object` WHERE $fields";
        if (mysqli_query($con, $query)) {

            $this->close($con);
            return 1;
        } else {
            return 0;
        }
    }

    /**
     * Delete the object
     * @param type $object
     * @param type $object_array
     */
    function update($object,$object_array) {
        $con_key_from_arr = array_keys($object_array);
        $key = $con_key_from_arr[0];
        $value = array_shift($object_array);
        $fields = array();
        $con = $this->open();
        foreach ($object_array as $field => $val) {
            $fields[] = "$field = '" . mysqli_real_escape_string($con, $val) . "'";
        }
        $query = "UPDATE `$object` SET " . join(', ', $fields) . " WHERE $key = '$value'";

        if (mysqli_query($con, $query)) {

            $this->close($con);
            return 1;
        } else {
            return 0;
        }
    }
	
	function update2($object, $object_array,$fid,$val) {
        $con_key_from_arr = array_keys($object_array);
        $key = $con_key_from_arr[0];
        $value = array_shift($object_array);
        $fields = array();
        $con = $this->open();
        foreach ($object_array as $field => $val) {
            $fields[] = "$field = '" . mysqli_real_escape_string($con, $val) . "'";
        }
        $query = "UPDATE `$object` SET " . join(', ', $fields) . " WHERE $key = '$value' AND `$fid`='$val'";

        if (mysqli_query($con, $query)) {

            $this->close($con);
            return 1;
        } else {
            return 0;
        }
    }
    
    function quantity($object, $object_array,$quantity) {
        $con_key_from_arr = array_keys($object_array);
        $key = $con_key_from_arr[0];
        $value = array_shift($object_array);
        $fields = array();
        $con = $this->open();
        foreach ($object_array as $field => $val) {
            $fields[] = "$field = '" . mysqli_real_escape_string($con, $val) . "'";
        }
        $query = "UPDATE `$object` SET quantity=quantity+'$quantity' WHERE $key = '$value'";

        if (mysqli_query($con, $query)) {

            $this->close($con);
            return 1;
        } else {
            return 0;
        }
    }
    
    function quantityd($object, $object_array,$quantity) {
        $con_key_from_arr = array_keys($object_array);
        $key = $con_key_from_arr[0];
        $value = array_shift($object_array);
        $fields = array();
        $con = $this->open();
        foreach ($object_array as $field => $val) {
            $fields[] = "$field = '" . mysqli_real_escape_string($con, $val) . "'";
        }
        $query = "UPDATE `$object` SET quantity=quantity-'$quantity' WHERE $key = '$value'";

        if (mysqli_query($con, $query)) {

            $this->close($con);
            return 1;
        } else {
            return 0;
        }
    }
    
    function amount_incre($object, $object_array,$field,$amount) {
        $con_key_from_arr = array_keys($object_array);
        $key = $con_key_from_arr[0];
        $value = array_shift($object_array);
        $fields = array();
        $con = $this->open();
        foreach ($object_array as $field => $val) {
            $fields[] = "$field = '" . mysqli_real_escape_string($con, $val) . "'";
        }
        $query = "UPDATE `$object` SET `$field`=`$field`+'$amount' WHERE $key = '$value'";

        if (mysqli_query($con, $query)) {

            $this->close($con);
            return 1;
        } else {
            return 0;
        }
    }
    
    
    function amount_decre($object, $object_array,$field,$amount) 
    {
        $con_key_from_arr = array_keys($object_array);
        $key = $con_key_from_arr[0];
        $value = array_shift($object_array);
        $fields = array();
        $con = $this->open();
        foreach ($object_array as $field => $val) 
        {
            $fields[] = "$field = '" . mysqli_real_escape_string($con, $val) . "'";
        }
        $query = "UPDATE `$object` SET `$field`=`$field`-'$amount' WHERE $key = '$value'";

        if (mysqli_query($con, $query)) 
        {
            $this->close($con);
            return 1;
        } else {
            return 0;
        }
    }
    

    
    function baseUrl($suffix = '') {
        $protocol = strpos($_SERVER['SERVER_SIGNATURE'], '443') !== false ? 'https://' : 'http://';
        $web_root = $protocol . $_SERVER['HTTP_HOST'] . "/" . "Dropbox/Dreams/";
		//$web_root = $protocol . $_SERVER['HTTP_HOST'] . "/" . "Dreams/";
        $suffix = ltrim($suffix, '/');
        return $web_root . trim($suffix);
    }

    
    
    function reqstatus($status)
    {
        if($status==1)
        {
            $msg="Pending";
        }
        elseif($status==2)
        {
            $msg="Accepted By Manager";
        }
        elseif($status==3)
        {
            $msg="Complete";
        }
        elseif($status==4)
        {
            $msg="Partial Complete";
        }
        return $msg;
    }
    
    
    
    
    function headlink()
    {
        return '<link rel="stylesheet" href='.$this->baseUrl("css/dreams.css").' />
				<link rel="stylesheet" href='.$this->baseUrl("css/menu.css").' />
				<link rel="stylesheet" href='.$this->baseUrl("css/select2.css").' />
				<link rel="stylesheet" href='.$this->baseUrl("css/select2-bootstrap.css").' />
                                <link href='.$this->baseUrl("tables/media/css/demo_page.css").' rel="stylesheet" type="text/css" />
                                <link href='.$this->baseUrl("tables/media/css/demo_table.css").' rel="stylesheet" type="text/css" />
                                <script type="text/javascript" language="javascript" src='.$this->baseUrl("tables/media/js/jquery.js").'></script>
                                <script type="text/javascript" language="javascript" src='.$this->baseUrl("tables/media/js/jquery.dataTables.js").'></script>
                                <script type="text/javascript" language="javascript" src='.$this->baseUrl("js/pagination.js").'></script>';
    }
	
    
    function footerlink()
    {
        return '<script src='.$this->baseUrl("js/select2.js").'></script>';
    }
    
    
    function clean($str) {
        $str = @trim($str);
        if (get_magic_quotes_gpc()) {
            $str = stripslashes($str);
        }
        return mysql_real_escape_string($str);
    }

    function RandNumber($e) {
        for ($i = 0; $i <=$e; $i++) {
            @$rand = $rand . rand(0, 9);
        }
        return $rand;
    }
    
    function empstatus($st)
    {
        if($st==1){ $power="Administrator"; }
        elseif ($st==2){ $power="Manager Access"; }
        else{ $power="Employee"; }
        return $power;
    }
    
    function sex($st)
    {
        if($st==1){ $power="Male"; }
        elseif ($st==2){ $power="Female"; }
        return $power;
    }
    
    function empreq_status($st)
    {
        if($st==1){ $power="Store Requisation"; }
        elseif ($st==2){ $power="Vehicle Request"; }
        elseif ($st==3){ $power="Meeting Reservation Request"; }
        elseif ($st==4){ $power="Leave Request"; }
        return $power;
    }
            
    function dmy($month)
    {
        $chkj = strlen($month);
        if ($chkj == 1) {
           return $chkjval = "0" . $month;
        } 
        else 
        {
           return $chkjval = $month;
        }
    }

    function randomPassword($e) {
        $alphabet = "EF+GHI234WXYZ567+89@(0-=1){<>/\_+$}[]%$*ABCD";
        $pass = array();
        for ($i = 0; $i<=$e; $i++) {
            $n = rand(0, strlen($alphabet) - 1);
            $pass[$i] = $alphabet[$n];
        }
        return implode($pass);
    }

    function cleanQuery($string) {
        if (get_magic_quotes_gpc())
            $string = stripslashes($string);
        return mysql_escape_string($string);
    }

    function limit_words($string, $word_limit) {
        $words = explode(" ", $string);
        return implode(" ", array_splice($words, 0, $word_limit)) . "...";
    }
    
    function today() {
        return date('Y-m-d');
    }

    function bn_date($str) {
        $en = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0);
        $bn = array('১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯', '০');
        $str = str_replace($en, $bn, $str);
        $en = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
        $en_short = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
        $bn = array('জানুয়ারী', 'ফেব্রুয়ারী', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'অগাস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর');
        $str = str_replace($en, $bn, $str);
        $str = str_replace($en_short, $bn, $str);
        $en = array('Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday');
        $en_short = array('Sat', 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri');
        $bn_short = array('শনি', 'রবি', 'সোম', 'মঙ্গল', 'বুধ', 'বৃহঃ', 'শুক্র');
        $bn = array('শনিবার', 'রবিবার', 'সোমবার', 'মঙ্গলবার', 'বুধবার', 'বৃহস্পতিবার', 'শুক্রবার');
        $str = str_replace($en, $bn, $str);
        $str = str_replace($en_short, $bn, $str);
        $en = array('am', 'pm');
        $bn = array('পূর্বাহ্ন', 'অপরাহ্ন');
        $str = str_replace($en, $bn, $str);
        return $str;
    }

    function getExtension($str) {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }
        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }

    function thumb($width, $height, $destination) 
    {
        list($w, $h) = getimagesize($_FILES['image']['tmp_name']);
        $ratio = max($width / $w, $height / $h);
        $h = ceil($height / $ratio);
        $x = ($w - $width / $ratio) / 2;
        $w = ceil($width / $ratio);
        $path = $destination . 'small_' . time() . '_' . $_FILES['image']['name'];
        $imgString = file_get_contents($_FILES['image']['tmp_name']);
        $image = imagecreatefromstring($imgString);
        $tmp = imagecreatetruecolor($width, $height);
        imagecopyresampled($tmp, $image, 0, 0, $x, 0, $width, $height, $w, $h);
        switch ($_FILES['image']['type']) {
            case 'image/jpeg':
                imagejpeg($tmp, $path, 100);
                break;
            case 'image/png':
                imagepng($tmp, $path, 0);
                break;
            case 'image/gif':
                imagegif($tmp, $path);
                break;
            default:
                exit;
                break;
        }
        return $path;
        imagedestroy($image);
        imagedestroy($tmp);
    }

    function image_caption($width, $height, $destination) {
        list($w, $h) = getimagesize($_FILES['image']['tmp_name']);
        $path = $destination . 'thumb_' . time() . '_' . $_FILES['image']['name'];
        $imgString = file_get_contents($_FILES['image']['tmp_name']);
        $image = imagecreatefromstring($imgString);
        $tmp = imagecreatetruecolor($width, $height);
        imagecopyresized($tmp, $image, 0, 0, 0, 0, $width, $height, $w, $h);
        switch ($_FILES['image']['type']) {
            case 'image/jpeg':
                imagejpeg($tmp, $path, 100);
                break;
            case 'image/png':
                imagepng($tmp, $path, 0);
                break;
            case 'image/gif':
                imagegif($tmp, $path);
                break;
            default:
                exit;
                break;
        }
        return $path;
        imagedestroy($image);
        imagedestroy($tmp);
    }

    function image_bigcaption($width, $height, $destination) {
        list($w, $h) = getimagesize($_FILES['image']['tmp_name']);
        $path = $destination . 'big_' . time() . '_' . $_FILES['image']['name'];
        $imgString = file_get_contents($_FILES['image']['tmp_name']);
        $image = imagecreatefromstring($imgString);
        $tmp = imagecreatetruecolor($width, $height);

        imagecopyresized($tmp, $image, 0, 0, 0, 0, $width, $height, $w, $h);

        switch ($_FILES['image']['type']) {
            case 'image/jpeg':
                imagejpeg($tmp, $path, 100);
                break;
            case 'image/png':
                imagepng($tmp, $path, 0);
                break;
            case 'image/gif':
                imagegif($tmp, $path);
                break;
            default:
                exit;
                break;
        }
        return $path;
        imagedestroy($image);
        imagedestroy($tmp);
    }
    
    function backup_tables($host,$user,$pass,$name,$tables = '*')
    {

        $link = mysql_connect($host,$user,$pass);
        mysql_select_db($name,$link);
        mysql_query("SET NAMES 'utf8'");

        //get all of the tables
        if($tables == '*')
        {
            $tables = array();
            $result = mysql_query('SHOW TABLES');
            while($row = mysql_fetch_row($result))
            {
                $tables[] = $row[0];
            }
        }
        else
        {
            $tables = is_array($tables) ? $tables : explode(',',$tables);
        }
        $return='';
        //cycle through
        foreach($tables as $table)
        {
            $result = mysql_query("SELECT * FROM `$table`");
            $num_fields = mysql_num_fields($result);

            $return.= 'DROP TABLE '.$table.';';
            $row2 = mysql_fetch_row(mysql_query("SHOW CREATE TABLE `$table`"));
            $return.= "\n\n".$row2[1].";\n\n";

            for ($i = 0; $i < $num_fields; $i++) 
            {
                while($row = mysql_fetch_row($result))
                {
                    $return.= 'INSERT INTO `$table` VALUES(';
                    for($j=0; $j<$num_fields; $j++) 
                    {
                        $row[$j] = addslashes($row[$j]);
                        $row[$j] = str_replace("\n","\\n",$row[$j]);
                        if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
                        if ($j<($num_fields-1)) { $return.= ','; }
                    }
                    $return.= ");\n";
                }
            }
            $return.="\n\n\n";
        }

        //save file
        $namesbackup=date('d_M_Y_H_i_s');
        $handle = fopen('db_backup/'.$namesbackup.'inventory_backup_db.sql','w+');
        fwrite($handle,$return);
        fclose($handle);
        return 1;
    }
    
    function holidays($year) {
        $count = 0;
        $fields = '';
        $con = $this->open();
        $query = "SELECT * FROM `$object` WHERE year='$year'";
        $result = mysqli_query($con, $query);
        if ($result) {
            $count = mysqli_num_rows($result);

            if ($count >= 1) {
                //$object[]=array();
                while ($rows = mysqli_fetch_array($result)) {
                    $objects[] = $rows['dates'];
                }
                $this->close($con);
                return $objects;
            }
        } else {
            $this->close($con);
            return 0;
        }
    }
    
    function getWorkingDays($startDate,$endDate,$holidays){
        // do strtotime calculations just once
        $endDate = strtotime($endDate);
        $startDate = strtotime($startDate);
        
        

        //The total number of days between the two dates. We compute the no. of seconds and divide it to 60*60*24
        //We add one to inlude both dates in the interval.
        $days = ($endDate - $startDate) / 86400 + 1;

        $no_full_weeks = floor($days / 7);
        $no_remaining_days = fmod($days, 7);

        //It will return 1 if it's Monday,.. ,7 for Sunday
        $the_first_day_of_week = date("N", $startDate);
        $the_last_day_of_week = date("N", $endDate);

        //---->The two can be equal in leap years when february has 29 days, the equal sign is added here
        //In the first case the whole interval is within a week, in the second case the interval falls in two weeks.
        if ($the_first_day_of_week <= $the_last_day_of_week) {
            if ($the_first_day_of_week <= 6 && 6 <= $the_last_day_of_week) $no_remaining_days--;
            if ($the_first_day_of_week <= 7 && 7 <= $the_last_day_of_week) $no_remaining_days--;
        }
        else {
            // (edit by Tokes to fix an edge case where the start day was a Sunday
            // and the end day was NOT a Saturday)

            // the day of the week for start is later than the day of the week for end
            if ($the_first_day_of_week == 7) {
                // if the start date is a Sunday, then we definitely subtract 1 day
                $no_remaining_days--;

                if ($the_last_day_of_week == 6) {
                    // if the end date is a Saturday, then we subtract another day
                    $no_remaining_days--;
                }
            }
            else {
                // the start date was a Saturday (or earlier), and the end date was (Mon..Fri)
                // so we skip an entire weekend and subtract 2 days
                $no_remaining_days -= 2;
            }
        }

        //The no. of business days is: (number of weeks between the two dates) * (5 working days) + the remainder
    //---->february in none leap years gave a remainder of 0 but still calculated weekends between first and last day, this is one way to fix it
       $workingDays = $no_full_weeks * 5;
        if ($no_remaining_days > 0 )
        {
          $workingDays += $no_remaining_days;
        }

        //We subtract the holidays
        foreach($holidays as $holiday){
            $time_stamp=strtotime($holiday);
            //If the holiday doesn't fall in weekend
            if ($startDate <= $time_stamp && $time_stamp <= $endDate && date("N",$time_stamp) != 6 && date("N",$time_stamp) != 7)
                $workingDays--;
        }

        return $workingDays;
    }

	function pdf($filup,$name, $destination) {
            if (is_uploaded_file($_FILES[$filup]['tmp_name'])) {
                  $filename=$name.".".$this->getExtension($_FILES[$filup]['name']);
                  $result = move_uploaded_file($_FILES[$filup]['tmp_name'], $destination."/".$filename);
                  if ($result == 1)
                      return $filename;
                  else 
                      return 0;
            }
    }
    
	function duration($d1,$d2)
    {
        $d1 = new DateTime($d1);
        $d2 = new DateTime($d2);
        $interval = $d2->diff($d1);
		//return $interval->format('%d days');
        return $interval->format('%d days, %H hours, %I minutes, %S seconds');
    }
	
	function daycount($d1,$d2)
    {
        $d1 = new DateTime($d1);
        $d2 = new DateTime($d2);
        $interval = $d2->diff($d1);
		return $interval->format('%d');
        //return $interval->format('%d days, %H hours, %I minutes, %S seconds');
    }
	
	function excel($filup,$name, $destination) {
            if (is_uploaded_file($_FILES[$filup]['tmp_name'])) {
				$extension=$this->getExtension($_FILES['file']['name']);
               if ($extension== "xls") {
				   $filename=$name.".".$extension;
                  $result = move_uploaded_file($_FILES[$filup]['tmp_name'], $destination."/".$filename);
                  if ($result == 1)
				  		{
                      return $filename;
						}
                  else 
				  {
                      return 0;
				  }
                 	  
               } else {
                   return 0;
               }
            }
    }

	
	function makedate($Date,$incre)
	{
		return date('Y-m-d', strtotime($Date. ' + '.$incre.' days'));
	}
	
}
?>
