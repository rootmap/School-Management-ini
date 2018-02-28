<?php
include("../class/auth.php");
extract($_GET);
if($q!=='')
{
?>
<form action="" method="post" name="claint">
  <?php 
    $array=array("eiin_number"=>$number);
	$data=$obj->SelectAllByID("ams_singup",$array);
	if(!empty($data))
	foreach ($data as $row ):
  ?>
  <input type="hidden" name="eiin_number" value="<?php echo $row->eiin_number; ?>"  />
  <input type="hidden" name="school" value="<?php echo $row->eiin_number; ?> "  />
  <?php endforeach; ?>
  <li class="height-30 font_2 left margin_left10">
 <input class="borber2 padding_5" readonly="readonly" value="<?php echo $t_quantity ?>" type="text" placeholder="Text Quantity" id="t_quantity" name="t_quantity" /> 
         </li>
               
               <li class="height-30 font_2 left margin_left10">
               <button class="borber2 padding_5 font_1 color_w backgroung_4" type="submit" name="confarm" />Conform </button>
               </li>
 </form>
<?php
}


else
{
    ?>
<input type="radio" value="">Not Selected
    <?php
}

?>
