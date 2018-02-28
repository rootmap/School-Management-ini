<?php
extract($_GET);
if($q=='new')
{
    ?>
<input type="text" class="border_red1" value="<?php $dd=date(' H:i:s'); { echo"$dd"; }?>" style="width:100px;border-radius:5px;height:25px;" name="time_start" id="artistnew" placeholder="Add New Time">
<input type="hidden" value="new" name="new_time">
<?php
}

