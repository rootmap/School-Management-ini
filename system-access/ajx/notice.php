<?php
include("../class/auth.php");
$table = "ams_notice";
extract($_GET);
if($s!='')
{
    $array=array("id"=>$s);
    $data=$obj->SelectAllByID($table,$array);
    foreach($data as $row)
    {
    ?>
    <div id="notice" class="" style="background:rgba(0,153,255,.1); border-radius:7px; float:left; width:100%; color:rgba(0,102,153,1); padding:15px;">
<ul style="width:50%; margin-right:auto; margin-left:auto;">
 <li style="color:rgba(153,0,0,1);">
   <?php echo $row->name; ?> 
 </li>
 <li>   
   <span style="color:rgba(51,0,204,1); font-size:12px;">Please download the attach word doc....</span>
   </li> 
   <li>   
   <span><a class="jjj" href="../Dreams/pdf/download.php?file=<?php echo $row->word; ?>">Clik here to download....</a></span>
   </li> 
   </ul>                  
</div>
     <?php
    }
}
else
{
    ?>
Not Selected
    <?php
}
?>
