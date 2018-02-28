<?php
include_once('class/auth.php');
$table="ams_time_table_teacher";
extract($_GET);
if(isset($_POST['save']))
{
	    extract($_POST);
		if($obj->update($table,array("id"=>$id,"time1"=>$time1,"time2"=>$time2,"time3"=>$time3,"time4"=>$time4,"time5"=>$time5,"time6"=>$time6,"time7"=>$time7,"time8"=>$time8,"subject1"=>$subject1,"subject2"=>$subject2,"subject3"=>$subject3,"subject4"=>$subject4,"subject5"=>$subject5,"subject6"=>$subject6,"subject7"=>$subject7,"subject8"=>$subject8,"subject9"=>$subject9,"subject10"=>$subject10,"subject11"=>$subject11,"subject12"=>$subject12,"subject13"=>$subject13,"subject14"=>$subject14,"subject15"=>$subject15,"subject16"=>$subject16,"subject17"=>$subject17,"subject18"=>$subject18,"subject19"=>$subject19,"subject20"=>$subject20,"subject21"=>$subject21,"subject22"=>$subject22,"subject23"=>$subject23,"subject24"=>$subject24,"subject25"=>$subject25,"subject26"=>$subject26,"subject27"=>$subject27,"subject28"=>$subject28,"subject29"=>$subject29,"subject30"=>$subject30,"subject31"=>$subject31,"subject32"=>$subject32,"subject33"=>$subject33,"subject34"=>$subject34,"subject35"=>$subject35,"subject36"=>$subject36,"subject37"=>$subject37,"subject38"=>$subject38,"subject39"=>$subject39,"subject40"=>$subject40,"subject41"=>$subject42,"subject42"=>$subject42,"subject6a"=>$subject6a,"subject6b"=>$subject6b,"subject6c"=>$subject6c,"subject6d"=>$subject6d,"subject6e"=>$subject6e,"subject6f"=>$subject6f,"subject6g"=>$subject6g,"teacher1"=>$teacher1,"teacher2"=>$teacher2,"teacher3"=>$teacher3,"teacher4"=>$teacher4,"teacher5"=>$teacher5,"teacher6"=>$teacher6,"teacher7"=>$teacher7,"teacher8"=>$teacher8,"teacher9"=>$teacher9,"teacher10"=>$teacher10,"teacher11"=>$teacher11,"teacher12"=>$teacher12,"teacher13"=>$teacher13,"teacher14"=>$teacher14,"teacher15"=>$teacher15,"teacher16"=>$teacher16,"teacher17"=>$teacher17,"teacher18"=>$teacher18,"teacher19"=>$teacher19,"teacher20"=>$teacher20,"teacher21"=>$teacher21,"teacher22"=>$teacher22,"teacher23"=>$teacher23,"teacher24"=>$teacher24,"teacher25"=>$teacher25,"teacher26"=>$teacher26,"teacher27"=>$teacher27,"teacher28"=>$teacher28,"teacher29"=>$teacher29,"teacher30"=>$teacher30,"teacher31"=>$teacher31,"teacher32"=>$teacher32,"teacher33"=>$teacher33,"teacher34"=>$teacher34,"teacher35"=>$teacher35,"teacher36"=>$teacher36,"teacher37"=>$teacher37,"teacher38"=>$teacher38,"teacher39"=>$teacher39,"teacher40"=>$teacher40,"teacher41"=>$teacher41,"teacher42"=>$teacher42,"teacher6a"=>$teacher6a,"teacher6b"=>$teacher6b,"teacher6c"=>$teacher6c,"teacher6d"=>$teacher6d,"teacher6e"=>$teacher6e,"teacher6f"=>$teacher6f,"teacher6g"=>$teacher6g,"tffin"=>$tiffin,"day1"=>$day1,"day2"=>$day2,"day3"=>$day3,"day4"=>$day4,"day5"=>$day5,"day6"=>$day6,"day7"=>$day7,"school_id"=>$school))==1)
		{
		echo $obj->Success("Time Table Update Successfully ".$t_id,$obj->filename()."?id=".$id."&category=".$category."&school=".$school);
	}
	else
	{
		echo $obj->Error("Time Table Update Failed".$t_id ,$obj->filename()."?id=".$id."&category=".$category."&school=".$school);	
	}		
	
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <?php include('class/head.php'); ?>
     <style>
       input{text-align:center;width:120px; height:25px;}
	   table{text-align:center; color:rgba(255,255,255,1);}
	   table tr td{padding:8px;}
     </style>  
       
    </head>

    <body>
        <!-- body starts from here---------------------------------------------------------------------------------------------->
        <div id="body_container">
            <div class="eims_soft_head_div">
                <?php include('class/homepage_header.php'); ?>
            </div>
            <div class="st_detail_body">
                <div class="st_detail_topbar">
                    <a href="#">
                        <div class="topbar_small_div left">
                            <img src="images/Setting_icon.png"/>
                            <div class="topbar_small_div_text left height-30">SETTING</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>TEACHER TIME TABLE EDIT</h2></div>
                    </a>
                    <div class="topbar_small_div right">
                        <ul>
<?php include('includes/back.php'); ?>

                        </ul>
                        

                    </div>
                </div>
                <div class="border_top"></div><?php include_once('class/esm.php'); ?>
                <!-----add student form div starts here-------------------------------------------------------------------------------------------------->                        
                <div style="clear:both; ">
                    <form action="" method="post" name="table">
                     
                                           
                    <div class="admission_div_page shadow_inner color_1" style="margin-top: 20px;">
                        <div class="admission_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30"><left>Weekly Class / Course Time and Day Edit :</left></h2>
                        </div>
                        <div id="ttt" class="admission_form_div width-col5 auto-position" style="overflow:auto;">
                       
                       <?php
						  $array=array("id"=>$id,"category_id"=>$category,"school_id"=>$school);
						  $data=$obj->SelectAllByID_Multiple($table,$array);
						  $r=1;
						  if(!empty($data))
						  foreach($data as $row):
						
						 ?>
                          <table  width="100%" cellspacing="1" >
                             <tr style="background:rgba(204,102,51,1)">
                               <td>Time & Day</td>
                               <td><input name="time1" value="<?php echo $row->time1; ?>" placeholder="time"  /></td>
                               <td><input name="time2" value="<?php echo $row->time2; ?>" placeholder="time"  /></td>
                               <td><input name="time3" value="<?php echo $row->time3; ?>" placeholder="time"  /></td>
                               <td><input name="time4" value="<?php echo $row->time4; ?>" placeholder="time"  /></td>
                               <td><input name="time5" value="<?php echo $row->time5; ?>" placeholder="time"  /></td>
                               <td><input name="time6" value="<?php echo $row->time6; ?>" placeholder="time"  /></td>
                               <td><input name="time7" value="<?php echo $row->time7; ?>" placeholder="time"  /></td>
                               <td><input name="time8" value="<?php echo $row->time8; ?>" placeholder="time"  /></td>
                             </tr>
                              <tr >
                               <td rowspan="2" style="background:rgba(204,102,51,1)">
                               <input name="day1" value="<?php echo $row->day1; ?>" placeholder="Day"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input value="<?php echo $row->subject1; ?>" name="subject1" placeholder="subject"  /></td>
                               
                               <td style="background:rgba(0,153,204,.6)"><input name="subject2" value="<?php echo $row->subject2; ?>" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject3" value="<?php echo $row->subject3; ?>" placeholder="subject"  /></td>
                               
                               <td style="background:rgba(0,153,204,.6)"><input name="subject4" value="<?php echo $row->subject4; ?>" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)" rowspan="14">
                               <input name="tiffin" value="<?php echo $row->tffin; ?>" placeholder="TIFFIN"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject5" value="<?php echo $row->subject5; ?>" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject6" value="<?php echo $row->subject6; ?>" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject6a" value="<?php echo $row->subject6a; ?>" placeholder="subject"  /></td>
                             </tr>
                              <tr style="background:rgba(153,153,153,1)">
                               <td><input name="teacher1" value="<?php echo $row->teacher1; ?>" placeholder="Teacher"  /></td>
                               <td><input name="teacher2" value="<?php echo $row->teacher2; ?>" placeholder="Teacher"  /></td>
                               <td><input name="teacher3" value="<?php echo $row->teacher3; ?>" placeholder="Teacher"  /></td>
                               <td><input name="teacher4" value="<?php echo $row->teacher4; ?>" placeholder="Teacher"  /></td>
                               <td><input name="teacher5" value="<?php echo $row->teacher5; ?>" placeholder="Teacher"  /></td>
                               <td><input name="teacher6" value="<?php echo $row->teacher6; ?>" placeholder="Teacher"  /></td>
                                <td><input name="teacher6a" value="<?php echo $row->teacher6a; ?>" placeholder="Teacher"  /></td>
                             </tr>
                             <tr >
                              <td rowspan="2" style="background:rgba(204,102,51,1)">
                              <input name="day2" value="<?php echo $row->day2; ?>" placeholder="Day"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject7" value="<?php echo $row->subject7; ?>" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject8" value="<?php echo $row->subject8; ?>" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject9" value="<?php echo $row->subject9; ?>" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject10" value="<?php echo $row->subject10; ?>" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject11" value="<?php echo $row->subject11; ?>" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject12" value="<?php echo $row->subject12; ?>" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject6b" value="<?php echo $row->subject6b; ?>" placeholder="subject"  /></td>
                             </tr>
                              <tr style="background:rgba(153,153,153,1)">
                               <td><input name="teacher7" value="<?php echo $row->teacher7; ?>" placeholder="Teacher"  /></td>
                               <td><input name="teacher8" value="<?php echo $row->teacher8; ?>" placeholder="Teacher"  /></td>
                               <td><input name="teacher9" value="<?php echo $row->teacher9; ?>" placeholder="Teacher"  /></td>
                               <td><input name="teacher10" value="<?php echo $row->teacher10; ?>" placeholder="Teacher"  /></td>
                               <td><input name="teacher11" value="<?php echo $row->teacher11; ?>" placeholder="Teacher" /></td>
                               <td><input name="teacher12" value="<?php echo $row->teacher12; ?>" placeholder="Teacher"  /></td>
                               <td><input name="teacher6b" value="<?php echo $row->teacher6b; ?>" placeholder="Teacher"  /></td>
                             </tr>
                             <tr >
                              <td rowspan="2" style="background:rgba(204,102,51,1)">
                              <input name="day3" value="<?php echo $row->day3; ?>" placeholder="Day"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject13" value="<?php echo $row->teacher13; ?>" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject14" value="<?php echo $row->teacher14; ?>" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject15" value="<?php echo $row->teacher15; ?>" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject16" value="<?php echo $row->teacher16; ?>" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject17" value="<?php echo $row->teacher17; ?>" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject18" value="<?php echo $row->teacher18; ?>" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject6c" value="<?php echo $row->subject6c; ?>" placeholder="subject"  /></td>
                             </tr>
                              <tr style="background:rgba(153,153,153,1)">
                               <td><input name="teacher13" value="<?php echo $row->teacher13; ?>" placeholder="Teacher"  /></td>
                               <td><input name="teacher14" value="<?php echo $row->teacher14; ?>" placeholder="Teacher" /></td>
                               <td><input name="teacher15" value="<?php echo $row->teacher15; ?>" placeholder="Teacher" /></td>
                               <td><input name="teacher16" value="<?php echo $row->teacher16; ?>" placeholder="Teacher" /></td>
                               <td><input name="teacher17" value="<?php echo $row->teacher17; ?>" placeholder="Teacher" /></td>
                               <td><input name="teacher18" value="<?php echo $row->teacher18; ?>" placeholder="Teacher" /></td>
                               <td><input name="teacher6c" value="<?php echo $row->teacher6c; ?>" placeholder="Teacher"  /></td>
                             </tr>
                             
                             <tr >
                              <td rowspan="2" style="background:rgba(204,102,51,1)">
                              <input name="day4" value="<?php echo $row->day4; ?>" placeholder="Day"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject19" value="<?php echo $row->teacher19; ?>" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject20" value="<?php echo $row->teacher20; ?>" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject21" value="<?php echo $row->teacher21; ?>" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject22" value="<?php echo $row->teacher22; ?>" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject23" value="<?php echo $row->teacher23; ?>" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject24" value="<?php echo $row->teacher24; ?>" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject6d" value="<?php echo $row->subject6d; ?>" placeholder="subject"  /></td>
                             </tr>
                              <tr style="background:rgba(153,153,153,1)">
                               <td><input name="teacher19" value="<?php echo $row->teacher19; ?>" placeholder="Teacher"  /></td>
                               <td><input name="teacher20" value="<?php echo $row->teacher20; ?>" placeholder="Teacher"  /></td>
                               <td><input name="teacher21" value="<?php echo $row->teacher21; ?>" placeholder="Teacher" /></td>
                               <td><input name="teacher22" value="<?php echo $row->teacher22; ?>" placeholder="Teacher" /></td>
                               <td><input name="teacher23" value="<?php echo $row->teacher23; ?>" placeholder="Teacher" /></td>
                               <td><input name="teacher24" value="<?php echo $row->teacher24; ?>" placeholder="Teacher" /></td>
                               <td><input name="teacher6d" value="<?php echo $row->teacher6d; ?>" placeholder="Teacher"  /></td>
                             </tr>
                             
                             <tr >
                              <td rowspan="2" style="background:rgba(204,102,51,1)">
                              <input name="day5" value="<?php echo $row->day5; ?>" placeholder="Day"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject25"value="<?php echo $row->teacher25; ?>" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject26"value="<?php echo $row->teacher26; ?>" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject27" value="<?php echo $row->teacher27; ?>" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject28" value="<?php echo $row->teacher28; ?>" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject29" value="<?php echo $row->teacher29; ?>" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject30" value="<?php echo $row->teacher30; ?>" placeholder="subject" /></td>
                              <td style="background:rgba(0,153,204,.6)"> <input name="subject6e" value="<?php echo $row->subject6e; ?>" placeholder="subject"  /></td>
                             </tr>
                              <tr style="background:rgba(153,153,153,1)">
                               <td><input name="teacher25" value="<?php echo $row->teacher25; ?>" placeholder="Teacher" /></td>
                               <td><input name="teacher26" value="<?php echo $row->teacher26; ?>" placeholder="Teacher" /></td>
                               <td><input name="teacher27" value="<?php echo $row->teacher27; ?>" placeholder="Teacher" /></td>
                               <td><input name="teacher28" value="<?php echo $row->teacher28; ?>" placeholder="Teacher" /></td>
                               <td><input name="teacher29" value="<?php echo $row->teacher29; ?>" placeholder="Teacher" /></td>
                               <td><input name="teacher30" value="<?php echo $row->teacher30; ?>" placeholder="Teacher" /></td>
                               <td><input name="teacher6e" value="<?php echo $row->teacher6e; ?>" placeholder="Teacher"  /></td>
                             </tr>
                             
                             <tr >
                              <td rowspan="2" style="background:rgba(204,102,51,1)">
                              <input name="day6" value="<?php echo $row->day6; ?>" placeholder="Day"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject31" value="<?php echo $row->teacher31; ?>" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject32" value="<?php echo $row->teacher32; ?>" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject33" value="<?php echo $row->teacher33; ?>" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject34" value="<?php echo $row->teacher34; ?>" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject35" value="<?php echo $row->teacher35; ?>" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject36" value="<?php echo $row->teacher36; ?>" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject6f" value="<?php echo $row->subject6f; ?>" placeholder="subject"  /></td>
                             </tr>
                              <tr style="background:rgba(153,153,153,1)">
                               <td><input name="teacher31" value="<?php echo $row->teacher31; ?>" placeholder="Teacher" /></td>
                               <td><input name="teacher32" value="<?php echo $row->teacher32; ?>" placeholder="Teacher" /></td>
                               <td><input name="teacher33" value="<?php echo $row->teacher33; ?>" placeholder="Teacher" /></td><input type="hidden" name="id" id="id" value="<?php echo $row->id; ?>" />
                               <td><input name="teacher34" value="<?php echo $row->teacher34; ?>" placeholder="Teacher" /></td>
                               <td><input name="teacher35" value="<?php echo $row->teacher35; ?>" placeholder="Teacher" /></td>
                               <td><input name="teacher36" value="<?php echo $row->teacher36; ?>" placeholder="Teacher" /></td>
                               <td><input name="teacher6f" value="<?php echo $row->teacher6f; ?>" placeholder="Teacher"  /></td>
                             </tr>
                              <tr >
                              <td rowspan="2" style="background:rgba(204,102,51,1)"><input name="day7" value="<?php echo $row->day7; ?>" placeholder="Day"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject37" value="<?php echo $row->subject37; ?>" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject38" value="<?php echo $row->subject38; ?>" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject39" value="<?php echo $row->subject39; ?>" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject40" value="<?php echo $row->subject40; ?>" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject41" value="<?php echo $row->subject41; ?>" placeholder="subject"  /></td> 
                               <td style="background:rgba(0,153,204,.6)"><input name="subject42" value="<?php echo $row->subject42; ?>" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject6g" value="<?php echo $row->subject6g; ?>" placeholder="subject"  /></td>
                             </tr>
                              <tr style="background:rgba(153,153,153,1)">
                               <td><input name="teacher37" value="<?php echo $row->teacher37; ?>" placeholder="Teacher" /></td>
                               <td><input name="teacher38" value="<?php echo $row->teacher38; ?>" placeholder="Teacher" /></td>
                               <td><input name="teacher39" value="<?php echo $row->teacher39; ?>" placeholder="Teacher" /></td>
                               <td><input name="teacher40" value="<?php echo $row->teacher40; ?>" placeholder="Teacher" /></td>
                               <td><input name="teacher41" value="<?php echo $row->teacher41; ?>" placeholder="Teacher" /></td>
                               <td><input name="teacher42" value="<?php echo $row->teacher42; ?>" placeholder="Teacher" /></td>
                               <td><input name="teacher6g" value="<?php echo $row->teacher6g; ?>" placeholder="Teacher"  /></td>
                             </tr>
                          </table>
                         <?php endforeach; ?>  
                           
                            <div class="clear"></div>
                       
                            
                        </div>
                         <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                    <a href="#" style="text-decoration:none">
                                    <button type="submit" name="save" class="height-35 div_btn" >Update</button>
                                    </a>
                                </li>
                        </div>
     </form>                  

                    </div>



                </div>


            </div>


            <div class="footer_div_full">
                <div class="footer_div">
                    <?php include ('./class/footer.php'); ?>
                </div>
            </div>   
        </div>



    </body>
</html>