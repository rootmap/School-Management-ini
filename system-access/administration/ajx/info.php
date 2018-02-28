<?php
include("../class/auth.php");
$table="ams_admin_sms_stteing";
extract($_GET);
if($g!=='')
{
?>
   
   <div class="backgroung_3 width_100 padding_bottom10 padding_top10 text_aling_center font_2 color_w">
                   SMS Information Details 
                 </div>
                 <div class="width_100">
                   <table class="width_97 marging_left_right text_aling_center font_2" cellpadding="0" cellspacing="1" border="0">
                     <thead class="backgroung_1 padding color_w">
                      <th class="padding">SL</th>
                      <th class="padding">SMS Quantity</th>
                      <th class="padding">Purchase Time</th>
                      <th class="padding">Purchase Date</th>
                     </thead>
                     <?php 
   $array=array("eiin_number"=>$g);
    $date=$obj->SelectAllByID($table, $array);
	$s=1;
	 if(!empty($date))
	  foreach ($date as $row):
   ?>
                     <tr class="backgroung_2">
                       <td class="padding_5"><?php echo $s; ?></td>
                       <td class="padding_5"><?php echo $row->cline_quantity; ?></td>
                       <td class="padding_5"><?php echo $row->time; ?></td>
                       <td class="padding_5"><?php echo $row->date; ?></td>
                     </tr>
                     <?php $s++;  endforeach; ?>
                   </table>
                 </div>
       
   
<?php
}


else
{
    ?>
<input type="radio" value="">Not Selected
    <?php
}

?>
