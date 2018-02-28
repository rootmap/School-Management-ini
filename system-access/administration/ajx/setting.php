<?php
include("../class/auth.php");
$table="ams_singup";
extract($_GET);
if($e!=='')
{
?>
   <?php 
   $array=array("eiin_number"=>$e);
    $date=$obj->SelectAllByID($table, $array);
	 if(!empty($date))
	  foreach ($date as $row):
   ?>
   <!-----SMS Inbox  start--------->
       <div class="width_30 height_auto left padding_left_5">
          <div class="backgroung_3 width_100 height-30 font_2 color_w text_aling_center">
            Administration SMS Inbox
          </div>
          
          <div class="width_95 backgroung_12">
              <ul class="padding">
                <li class="borber2 backgroung_5 marging_left_right width_70 height-40 text_aling_center font_2 color_red">Quantity of SMS
                </li>
                <li class="marging_left_right width_70 height-40 text_aling_center">
                 <input name="quantity" value="<?php  echo $balance;  ?>" readonly="readonly" placeholder="Quantity" class="borber2 marging_left_right width_70 height-25 padding_5 text_aling_center font_3" />
                </li>
              </ul>
          </div>
       </div>
     <!-----SMS Inbox  end--------->
     
     <!-----SMS Settings  start--------->
        <div class="width_69 right height_auto">
           <div class="backgroung_3 width_100 height-30 font_2 color_w text_aling_center">SMS Settings</div>
           
           <div class="backgroung_12 width_99 marging_left_right height_auto">
             <ul class="padding_5">
               <li class="height-30 font_2 left">EIIN Number :  </li>
               <li class="height-30 font_2 left margin_left10">
                <input id="number" value="<?php  echo $row->eiin_number;  ?>" class="borber2 padding_5" placeholder="Tex EIIN Number" name="number" /></li>
               <li class="height-30 width_55 font_2 left margin_left25">
                <input class="borber2 padding_5 width_94" value="<?php  echo $row->acount_name;  ?>" placeholder="School/Collage Name" name="school" />
               </li>
               
               <li class="height-30 font_2 left margin-top-10">
                SMS Quantity   :
               </li>
               <li class="height-30 font_2 left margin_left10 margin-top-10">
                <input id="t_quantity" class="borber2 padding_5" value="" placeholder="Tex EIIN Number" name="number" />
               </li>
               
               <li class="height-30 font_2 left margin_left10 margin-top-10">
                <button onclick="showsquantity('4')" class="borber2 padding_5 color_w backgroung_4" type="submit" name="send" />Send </button>
               </li>
               
               <li id="sms" class="height-30 font_2 left margin_left10 margin-top-10">
               
               </li>
               
              
               
               <div class="celre"></div>
             </ul>
             <div class="celre"></div>
           </div>
            
        </div>
     <!-----SMS Settings  end--------->
       
   <?php endforeach; ?>
<?php
}


else
{
    ?>
<input type="radio" value="">Not Selected
    <?php
}

?>
