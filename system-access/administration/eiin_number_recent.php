<?php
include('class/auth.php');
$table="ams_admin_eiin_number";
if(isset($_GET['statuss']))
{
	
	$array=array("id"=>$_GET['id'],"eiin"=>$_GET['eiin'],"date"=>date('Y-m-d'),"status"=>$_GET['status']);
	if($obj->update($table,$array)==1)
	
	
	  $count=count($_GET['eiin']);
      if($count!==0)
	  {
		echo $obj->Success("EIIN Number Active Successfully",$obj->filename());	
	  }
	     else
	  {
		echo $obj->Error("EIIN Number Active Failed",$obj->filename());	
	  }
	  
	
}
if(isset($_GET['statuss1']))
{
	
	$array=array("id"=>$_GET['id'],"eiin"=>$_GET['eiin'],"date"=>date('Y-m-d'),"status"=>$_GET['status']);
	if($obj->update($table,$array)==1)
	
	
	  $count=count($_GET['eiin']);
      if($count!==0)
	  {
		echo $obj->Success("EIIN Number Deactive Successfully",$obj->filename());	
	  }
	     else
	  {
		echo $obj->Error("EIIN Number Deactive Failed",$obj->filename());	
	  }
	  
	
}
if(@$_GET['action']== 'delete')
{
    $delet=array("id"=>$_GET['id']);
    if($obj->delete($table,$delet)==1)
	
    $count=count($_GET['id']);
      if($count!==0)
	  {
		echo $obj->Success("EIIN Number Delete Successfully",$obj->filename());	
	  }
	     else
	  {
		echo $obj->Error("EIIN Number Delete Failed",$obj->filename());	
	  }
} 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
	
<title>ADMINISTRATION</title>
<link href="css/dreams.css" rel="stylesheet" type="text/css" />
<link href="css/dreams_admin.css" rel="stylesheet" type="text/css" />
<link rel='stylesheet' type='text/css' href='css/admin_menu.css' />
<link rel='stylesheet' type='text/css' href='css/amsit_style.css' />

<script>
            function showlist(str)
            {
                if (str == "")
                {
                    document.getElementById("eiins").innerHTML = "";
                    return;
                }
                if (window.XMLHttpRequest)
                {// code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                }
                else
                {// code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        document.getElementById("eiins").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajx/eiin_number_all.php?s=" + str, true);
                xmlhttp.send();
            }
        </script>

</head>

<body>
<?php include('include/head.php');?>
<div class="height-100 width_960 auto-position"> 
   <?php include('include/manu.php');?>
</div>
<div class="width_960 marging_left_right" >
  <?php include_once('class/esm.php'); ?>
</div>
  <div class="height-10 min-height_600 shadow_inset_1 width_960 marging_left_right">
  <!----------select start------------------------------------------------->       
    <div class="width_100 height_auto padding_top_10">
      <ul class="padding width_97 marging_left_right backgroung_3">
        <li class="left font_2 color_w line-height_25">All EIIN Number :</li>
        <li class="left padding_left_10">
         <select class="padding_5 borber2 width-label-150 color_b font_11" name="eiin_number" id="" onchange="showlist(this.value)">
           <option>Search EIIN Number </option>
           <?php 
		     $data=$obj->SelectAll($table);
			 if(!empty($data))
			 foreach ($data as $row):
		   ?>
           <option value="<?php echo $row->eiin; ?>"><?php echo $row->eiin; ?></option>
           <?php endforeach; ?>
         </select>
        </li><div class="clear"></div>
      </ul>
    </div>
    <!----------select end------------------------------------------------->
    
    <!----------Table start------------------------------------------------->
   <div id="eiins" class="width_97 height_auto marging_left_right margin-top-10">
   <form action="" method="get" name="en">
     <table border="0" cellpadding="0" cellspacing="1" class="width_100 text_aling_center height_auto">
       <thead class="backgroung_1 font_1 color_red">
         <th class="padding">SL no.</th>
         <th class="padding">EIIN Number</th>
         <th class="padding">Time</th>
         <th class="padding">Active</th>
         <th class="padding">Deactive</th>
         <th class="padding">Delete</th>
       </thead>
       <tbody>
       <?php 
		     $data=$obj->SelectAll($table);
			 $s=1;
			 if(!empty($data))
			 foreach ($data as $row):
		   ?>
         <tr class="backgroung_6 font_11">
           <td class="padding_5"><?php echo $s; ?></td>
           <td class="padding_5"><?php echo $row->eiin; ?></td>
           <td class="padding_5"><?php echo $row->time; ?></td>
           <td class="padding_5 font_14">
             <a name="edit" href="all_eiin_number_list.php?statuss=yes&amp;eiin=<?php echo $row->eiin; ?>&amp;status=3&amp;id=<?php echo $row->id; ?>">
												<?php 
				$ex=$obj->exists_multiple($table,array("status"=>3,"eiin"=>$row->eiin));
				if($ex==0){
				 ?><span class="color_w">Active</span><?php }else{ ?><span class="color_gr">Active</span><?php } ?></a>
           </td>
           
           <td class="padding_5 font_14">
             <a name="edit" href="all_eiin_number_list.php?statuss1=yes&amp;eiin=<?php echo $row->eiin; ?>&amp;status=2&amp;id=<?php echo $row->id; ?>">
												<?php 
				$ex=$obj->exists_multiple($table,array("status"=>2,"eiin"=>$row->eiin));
				if($ex==0){
				 ?><span class="color_w">Deactive</span><?php }else{ ?><span class="color_red">Deactive</span><?php } ?></a>
           </td>
           <td class="padding_5"><a href="<?php echo $obj->filename();?>?id=<?php echo $row->id;?>&amp;action=delete"><img src="../images/delete.gif" /></a></td>
         </tr>
         <?php $s++; endforeach; ?>
         
       </tbody>
     </table>
     </form>
   </div>
 <!----------Table end------------------------------------------------->   
  </div>               
 
                                   
                       
 <!----------footer start------------------------------------------------->                
<?php include ('./class/footer.php'); ?><?php include('include/admin.php');?>
<!----------footer end------------------------------------------------->   
</body>
</html>