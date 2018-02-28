
<?php
include("../class/auth.php");
$table="ams_time_table_teacher";
extract($_GET);
if($h!='')
{
	
	?>               
	<?php
          $array=array("school_id"=>$school,"category_id"=>4,"group_id"=>$group);
          $data=$obj->SelectAllByID_Multiple($table,$array);
          $r=1;
          if(!empty($data))
          foreach($data as $row):
        
         ?>
        
         <table width="100%" cellspacing="1" >
                 <tr style="background:rgba(153,0,0,1); font-size:18px;">
                 <td colspan="8">TIME TABLE</td>
                 <td><a style="color:rgba(255,255,255,1);" target="new" href="edit_time_tablee3.php?id=<?php echo $row->id; ?>&amp;category=<?php echo $h; ?>&amp;school=<?php echo $school; ?>">Edit <i class="fa fa-edit"></i></a></td>
                 </tr>
                             <tr style="background:rgba(204,102,51,1)">
                               <td>Time & Day</td>
                               <td><?php echo $row->time1; ?></td>
                               <td><?php echo $row->time2; ?></td>
                               <td><?php echo $row->time3; ?></td>
                               <td><?php echo $row->time4; ?></td>
                               <td><?php echo $row->time5; ?></td>
                               <td><?php echo $row->time6; ?></td>
                               <td><?php echo $row->time7; ?></td>
                               <td><?php echo $row->time8; ?></td>
                             </tr>
                              <tr >
                               <td rowspan="2" style="background:rgba(204,102,51,1)"><?php echo $row->day1; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject1; ?></td>
                              
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject2; ?></td>
                               
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject3; ?></td>
                                
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject4; ?></td>
                               <td style="background:rgba(0,153,204,.6); font-size:18px;" rowspan="14"><?php echo $row->tffin; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject5; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject6; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject6a; ?></td>
                             </tr>
                              <tr style="background:rgba(153,153,153,1);color:rgba(0,0,0,1); font-weight:100; font-size:12px;">
                               <td><?php echo $row->teacher1; ?></td>
                               <td><?php echo $row->teacher2; ?></td>
                               <td><?php echo $row->teacher3; ?></td>
                               <td><?php echo $row->teacher4; ?></td>
                               <td><?php echo $row->teacher5; ?></td>
                               <td><?php echo $row->teacher6; ?></td>
                               <td><?php echo $row->teacher6d; ?></td>
                             </tr>
                             <tr >
                              <td rowspan="2" style="background:rgba(204,102,51,1)"><?php echo $row->day2; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject7; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject8; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject9; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject10; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject11; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject12; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject6b; ?></td>
                             </tr>
                              <tr style="background:rgba(153,153,153,1);color:rgba(0,0,0,1); font-weight:100; font-size:12px;">
                               <td><?php echo $row->teacher7; ?></td>
                               <td><?php echo $row->teacher8; ?></td>
                               <td><?php echo $row->teacher9; ?></td>
                               <td><?php echo $row->teacher10; ?></td>
                               <td><?php echo $row->teacher11; ?></td>
                               <td><?php echo $row->teacher12; ?></td>
                               <td><?php echo $row->teacher6c; ?></td>
                             </tr>
                             <tr >
                              <td rowspan="2" style="background:rgba(204,102,51,1)"><?php echo $row->day3; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject13; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject14; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject15; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject16; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject17; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject18; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject6c; ?></td>
                             </tr>
                              <tr style="background:rgba(153,153,153,1);color:rgba(0,0,0,1); font-weight:100; font-size:12px;">
                               <td><?php echo $row->teacher13; ?></td>
                               <td><?php echo $row->teacher14; ?></td>
                               <td><?php echo $row->teacher15; ?></td>
                               <td><?php echo $row->teacher16; ?></td>
                               <td><?php echo $row->teacher17; ?></td>
                               <td><?php echo $row->teacher18; ?></td>
                               <td><?php echo $row->teacher6d; ?></td>
                             </tr>
                             
                             <tr >
                              <td rowspan="2" style="background:rgba(204,102,51,1)"><?php echo $row->day4; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject19; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject20; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject21; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject22; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject23; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject24; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject6d; ?></td>
                             </tr>
                              <tr style="background:rgba(153,153,153,1);color:rgba(0,0,0,1); font-weight:100; font-size:12px;">
                               <td><?php echo $row->teacher19; ?></td>
                               <td><?php echo $row->teacher20; ?></td>
                               <td><?php echo $row->teacher21; ?></td>
                               <td><?php echo $row->teacher22; ?></td>
                               <td><?php echo $row->teacher23; ?></td>
                               <td><?php echo $row->teacher24; ?></td>
                               <td><?php echo $row->teacher6e; ?></td>
                             </tr>
                             
                             <tr >
                              <td rowspan="2" style="background:rgba(204,102,51,1)"><?php echo $row->day5; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject25; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject26; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject27; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject28; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject29; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject30; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject6e; ?></td>
                             </tr>
                              <tr style="background:rgba(153,153,153,1);color:rgba(0,0,0,1); font-weight:100; font-size:12px;">
                               <td><?php echo $row->teacher25; ?></td>
                               <td><?php echo $row->teacher26; ?></td>
                               <td><?php echo $row->teacher27; ?></td>
                               <td><?php echo $row->teacher28; ?></td>
                               <td><?php echo $row->teacher29; ?></td>
                               <td><?php echo $row->teacher30; ?></td>
                               <td><?php echo $row->teacher6e; ?></td>
                             </tr>
                             
                             <tr >
                              <td rowspan="2" style="background:rgba(204,102,51,1)"><?php echo $row->day6; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject31; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject32; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject33; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject34; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject35; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject36; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject6f; ?></td>
                             </tr>
                              <tr style="background:rgba(153,153,153,1);color:rgba(0,0,0,1); font-weight:100; font-size:12px;">
                               <td><?php echo $row->teacher31; ?></td>
                               <td><?php echo $row->teacher32; ?></td>
                               <td><?php echo $row->teacher33; ?></td>
                               <td><?php echo $row->teacher34; ?></td>
                               <td><?php echo $row->teacher35; ?></td>
                               <td><?php echo $row->teacher36; ?></td>
                               <td><?php echo $row->teacher6f; ?></td>
                             </tr>
                             <tr >
                              <td rowspan="2" style="background:rgba(204,102,51,1)"><?php echo $row->day7; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject37; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject38; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject39; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject40; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject41; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject42; ?></td>
                               <td style="background:rgba(0,153,204,.6)"><?php echo $row->subject6g; ?></td>
                             </tr>
                              <tr style="background:rgba(153,153,153,1);color:rgba(0,0,0,1); font-weight:100; font-size:12px;">
                               <td><?php echo $row->teacher37; ?></td>
                               <td><?php echo $row->teacher38; ?></td>
                               <td><?php echo $row->teacher39; ?></td>
                               <td><?php echo $row->teacher40; ?></td>
                               <td><?php echo $row->teacher41; ?></td>
                               <td><?php echo $row->teacher42; ?></td>
                               <td><?php echo $row->teacher6g; ?></td>
                             </tr>
                          </table>
        
        <?php endforeach ;?>
        
<?php
}

else
{
    ?>
Not Selected
    <?php
}
?>
