<?php
include("../class/auth.php");
$table="ams_subject";
extract($_GET);
if($s!='')
{
    
	?>
	
	
    <?php
	$array=array("id"=>$s);
    $data=$obj->SelectAllByID($table,$array);
	if(!empty($data))
    foreach($data as $row)
    {
    ?>
     
           <div class="slideThree left margin_left30 width-label-200 a-left padding_top10">	
                <label>
                <input id="subject" onclick="shownext(this.value)" type="checkbox" value="<?php echo $row->id;?>" name="subject" />
                <?php echo $row->name;?>
                </label>
			</div>                     
                               
                                
                                
                            
                        
    <?php
    }
}
else
{
    ?>
<option value="">Not Selected</option>
    <?php
}
?>
