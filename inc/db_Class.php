<?php

class db_class {

    public function open() {
        if ($_SERVER['HTTP_HOST'] == "localhost") {
            @$con = mysqli_connect("localhost", "root", "", "natoparabdm");
        } else {
            @$con = mysqli_connect("localhost", "natopara_bdm", "N@toparabdm", "natopara_bdm");
        }
        return $con;
    }

    public function close($con) {
        mysqli_close($con);
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

    function Error($msg, $location) {
        $errmsg_arr[] = "<span class='error_msg'>" . $msg . "</span>";
        $errflag = true;
        if ($errflag) {
            $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
            session_write_close();
            header("location:" . $location);
            exit();
        }
    }

    function Success($msg, $location) {
        $errmsg_arr[] = "<span class='sucess'>" . $msg . "</span>";
        $errflag = true;
        if ($errflag) {
            $_SESSION['SMSG_ARR'] = $errmsg_arr;
            session_write_close();
            header("location:" . $location);
            exit();
        }
    }

    function ShowMsg() {
        if (isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) > 0) {
            foreach ($_SESSION['ERRMSG_ARR'] as $msg) {
                unset($_SESSION['ERRMSG_ARR']);
                return $msg;
            }
        }

        if (isset($_SESSION['SMSG_ARR']) && is_array($_SESSION['SMSG_ARR']) && count($_SESSION['SMSG_ARR']) > 0) {
            foreach ($_SESSION['SMSG_ARR'] as $msgs) {
                unset($_SESSION['SMSG_ARR']);
                return $msgs;
            }
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
            if ($count != 0) {
                $rows = mysqli_fetch_array($result);
                return $rows['id'];
                $this->close($con);
            }
        }
    }

    function SelectAllByID_Order($object, $object_array, $des) {
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

    function redirect($link) {
        echo "<script>location.href='$link'</script>";
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

            if ($count != 0) {
                $this->close($con);
                return $count;
            } else {
                $this->close($con);
                return 0;
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

    function title() {
        return "<title> SCHOOL MANAGEMENT SYSTEM </title>";
    }

    function filename() {
        return basename($_SERVER['PHP_SELF']);
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

    function SelectAllByID_Multiple_Limit($object, $object_array, $limit) {
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

        $query = "SELECT * FROM `$object` WHERE $fields LIMIT $limit";
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

    function SelectAllByVal($object, $field, $fval, $fetch) {
        $link = $this->open();
        $sql = "SELECT `$fetch` FROM `$object` WHERE `$field`='$fval'";
        $result = mysqli_query($link, $sql);
        if ($result) {
            $row = mysqli_fetch_array($result);
            return $row[$fetch];
        }
    }

    function SelectAllByVal2($object, $field, $fval, $field2, $fval2, $fetch) {
        $link = $this->open();
        $sql = "SELECT `$fetch` FROM `$object` WHERE `$field`='$fval' AND `$field2`='$fval2'";
        $result = mysqli_query($link, $sql);
        if ($result) {
            $row = mysqli_fetch_array($result);
            return $row[$fetch];
        }
    }

    function SelectAllByVal3($object, $field, $fval, $field2, $fval2, $field3, $fval3, $fetch) {
        $link = $this->open();
        $sql = "SELECT `$fetch` FROM `$object` WHERE `$field`='$fval' AND `$field2`='$fval2' AND `$field3`='$fval3'";
        $result = mysqli_query($link, $sql);
        if ($result) {
            $row = mysqli_fetch_array($result);
            return $row[$fetch];
        }
    }

    function SelectAllByVal4($object, $field, $fval, $field2, $fval2, $field3, $fval3, $field4, $fval4, $fetch) {
        $link = $this->open();
        $sql = "SELECT `$fetch` FROM `$object` WHERE `$field`='$fval' AND `$field2`='$fval2' AND `$field3`='$fval3' AND `$field4`='$fval4'";
        $result = mysqli_query($link, $sql);
        if ($result) {
            $row = mysqli_fetch_array($result);
            return $row[$fetch];
        }
    }

    function SelectAllByVal5($object, $field, $fval, $field2, $fval2, $field3, $fval3, $field4, $fval4, $field5, $fval5, $fetch) {
        $link = $this->open();
        $sql = "SELECT `$fetch` FROM `$object` WHERE `$field`='$fval' AND `$field2`='$fval2' AND `$field3`='$fval3' AND `$field4`='$fval4' AND `$field5`='$fval5'";
        $result = mysqli_query($link, $sql);
        if ($result) {
            $row = mysqli_fetch_array($result);
            return $row[$fetch];
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
    function update($object, $object_array) {
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

    function baseUrl($suffix = '') {
        $protocol = strpos($_SERVER['SERVER_SIGNATURE'], '443') !== false ? 'https://' : 'http://';
        if ($_SERVER['HTTP_HOST'] == "localhost") {
            $web_root = $protocol . $_SERVER['HTTP_HOST'] . "/" . "natoparabdm/";
        } else {
            $web_root = $protocol . $_SERVER['HTTP_HOST'] . "/" . "";
        }
        $suffix = ltrim($suffix, '/');
        return $web_root . trim($suffix);
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

}

?>
