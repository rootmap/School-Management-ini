<?php
include("../class/auth.php");
extract($_GET);
if($b!='')
{
   
    ?>
    
       <li class="attendance_report_small_top_li height-40 width-label-150 left">Month & Year:</li>
        <li class="attendance_report_small_top_li height-40 width-label-200 left">
            <select class="select_option" name="Select a Month" >
                <option>Select a Month</option>
                <?php
					$months = array();
					for ($i = 0; $i < 12; $i++) {
					$timestamp = mktime(0, 0, 0, date('n') - $i, 1);
					$months[date('n', $timestamp)] = date('F', $timestamp);
					}
				?>
				<?php
					foreach ($months as $num => $name) 
					{
					printf('<option value="%u">%s</option>', $num, $name);
					}
			    ?>
                
            </select>
            
             <select class="select_option" name="Select a year" >
                <option>Select a Year</option>
                <option>Trial</option>
                <option>Licensed</option>
            </select>
        </li>

    <?php
   
}
else
{
    ?>
<option value="">Not Selected</option>
    <?php
}
?>
