<?php
include("../class/auth.php");
extract($_GET);
if($d!='')
{
	?>
      <table id="ttt" width="100%" cellspacing="1" >
                             <tr style="background:rgba(204,102,51,1)">
                               <td>Time & Day</td>
                               <td><input name="time1" placeholder="time"  /></td>
                               <td><input name="time2" placeholder="time"  /></td>
                               <td><input name="time3" placeholder="time"  /></td>
                               <td><input name="time4" placeholder="time"  /></td>
                               <td><input name="time5" placeholder="time"  /></td>
                               <td><input name="time6" placeholder="time"  /></td>
                               <td><input name="time7" placeholder="time"  /></td>
                               <td><input name="time8" placeholder="time"  /></td>
                             </tr>
                              <tr >
                               <td rowspan="2" style="background:rgba(204,102,51,1)"><input name="day1" placeholder="Day"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject1" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject2" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)" rowspan="14"><input style="font-weight:bold;" name="tiffin" placeholder="TIFFIN"  /></td>
                                <td style="background:rgba(0,153,204,.6)"><input name="subject3" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject4" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject5" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject6" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject6a" placeholder="subject"  /></td>
                             </tr>
                              <tr style="background:rgba(153,153,153,1)">
                               <td><input name="teacher1" placeholder="Teacher"  /></td>
                               <td><input name="teacher2" placeholder="Teacher"  /></td>
                               <td><input name="teacher3" placeholder="Teacher"  /></td>
                               <td><input name="teacher4" placeholder="Teacher"  /></td>
                               <td><input name="teacher5" placeholder="Teacher"  /></td>
                               <td><input name="teacher6" placeholder="Teacher"  /></td>
                               <td><input name="teacher6a" placeholder="Teacher"  /></td>
                             </tr>
                             <tr >
                              <td rowspan="2" style="background:rgba(204,102,51,1)"><input name="day2" placeholder="Day"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject7" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject8" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject9" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject10" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject11" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject12" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject6b" placeholder="subject"  /></td>
                             </tr>
                              <tr style="background:rgba(153,153,153,1)">
                               <td><input name="teacher7" placeholder="Teacher"  /></td>
                               <td><input name="teacher8" placeholder="Teacher"  /></td>
                               <td><input name="teacher9" placeholder="Teacher"  /></td>
                               <td><input name="teacher10" placeholder="Teacher"  /></td>
                               <td><input name="teacher11" placeholder="Teacher" /></td>
                               <td><input name="teacher12" placeholder="Teacher"  /></td>
                               <td><input name="teacher6b" placeholder="Teacher"  /></td>
                             </tr>
                             <tr >
                              <td rowspan="2" style="background:rgba(204,102,51,1)"><input name="day3" placeholder="Day"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject13" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject14" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject15" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject16" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject17" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject18" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject6c" placeholder="subject"  /></td>
                             </tr>
                              <tr style="background:rgba(153,153,153,1)">
                               <td><input name="teacher13" placeholder="Teacher"  /></td>
                               <td><input name="teacher14" placeholder="Teacher" /></td>
                               <td><input name="teacher15" placeholder="Teacher" /></td>
                               <td><input name="teacher16" placeholder="Teacher" /></td>
                               <td><input name="teacher17" placeholder="Teacher" /></td>
                               <td><input name="teacher18" placeholder="Teacher" /></td>
                               <td><input name="teacher6c" placeholder="Teacher"  /></td>
                             </tr>
                             
                             <tr >
                              <td rowspan="2" style="background:rgba(204,102,51,1)"><input name="day4" placeholder="Day"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject19" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject20" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject21" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject22" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject23" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject24" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject6d" placeholder="subject"  /></td>
                             </tr>
                              <tr style="background:rgba(153,153,153,1)">
                               <td><input name="teacher19" placeholder="Teacher"  /></td>
                               <td><input name="teacher20" placeholder="Teacher"  /></td>
                               <td><input name="teacher21" placeholder="Teacher" /></td>
                               <td><input name="teacher22" placeholder="Teacher" /></td>
                               <td><input name="teacher23" placeholder="Teacher" /></td>
                               <td><input name="teacher24" placeholder="Teacher" /></td>
                               <td><input name="teacher6d" placeholder="Teacher"  /></td>
                             </tr>
                             
                             <tr >
                              <td rowspan="2" style="background:rgba(204,102,51,1)"><input name="day5" placeholder="Day"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject25" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject26" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject27" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject28" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject29" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject30" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject6e" placeholder="subject"  /></td>
                             </tr>
                              <tr style="background:rgba(153,153,153,1)">
                               <td><input name="teacher25" placeholder="Teacher" /></td>
                               <td><input name="teacher26" placeholder="Teacher" /></td>
                               <td><input name="teacher27" placeholder="Teacher" /></td>
                               <td><input name="teacher28" placeholder="Teacher" /></td>
                               <td><input name="teacher29" placeholder="Teacher" /></td>
                               <td><input name="teacher30" placeholder="Teacher" /></td>
                               <td><input name="teacher6e" placeholder="Teacher"  /></td>
                             </tr>
                             
                             <tr >
                              <td rowspan="2" style="background:rgba(204,102,51,1)"><input name="day6" placeholder="Day"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject31" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject32" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject33" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject34" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject35" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject36" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject6f" placeholder="subject"  /></td>
                             </tr>
                              <tr style="background:rgba(153,153,153,1)">
                               <td><input name="teacher31" placeholder="Teacher" /></td>
                               <td><input name="teacher32" placeholder="Teacher" /></td>
                               <td><input name="teacher33" placeholder="Teacher" /></td>
                               <td><input name="teacher34" placeholder="Teacher" /></td>
                               <td><input name="teacher35" placeholder="Teacher" /></td>
                               <td><input name="teacher36" placeholder="Teacher" /></td>
                               <td><input name="teacher6f" placeholder="Teacher"  /></td>
                             </tr>
                             
                             <tr >
                              <td rowspan="2" style="background:rgba(204,102,51,1)"><input name="day7" placeholder="Day"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject37" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject38" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject39" placeholder="subject" /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject40" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject41" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject42" placeholder="subject"  /></td>
                               <td style="background:rgba(0,153,204,.6)"><input name="subject6g" placeholder="subject"  /></td>
                             </tr>
                              <tr style="background:rgba(153,153,153,1)">
                               <td><input name="teacher37" placeholder="Teacher" /></td>
                               <td><input name="teacher38" placeholder="Teacher" /></td>
                               <td><input name="teacher39" placeholder="Teacher" /></td>
                               <td><input name="teacher40" placeholder="Teacher" /></td>
                               <td><input name="teacher41" placeholder="Teacher" /></td>
                               <td><input name="teacher42" placeholder="Teacher" /></td>
                               <td><input name="teacher6g" placeholder="Teacher"  /></td>
                             </tr>
                          </table>
   <?php
}
else
{
   
 echo "No Data in Here";
    
}
?>
