<?php 
include('class/auth.php');
$table="thana";
$table2="district";
$table3="division";
if(isset($_POST['save']))
{
	if(!empty($_POST['name']))
	{
		$array=array("name"=>$_POST['name'],"district_id"=>$_POST['district_id'],"division_id"=>$_POST['division_id'],"country_id"=>1,"date"=>date('Y-m-d'),"status"=>1);
		if($obj->insert($table,$array)==1)
		{
			echo $obj->Success("Thana Successfully Saved",$obj->filename());	
		}
		else
		{
			echo $obj->Error("Thana Save Failed, Please Try Again",$obj->filename());	
		}
	}
	else
	{
		echo $obj->Error("Thana Field Is Empty, Please Try Again",$obj->filename());	
	}
}

if(isset($_POST['update']))
{
	if(!empty($_POST['name']))
	{
		$array=array("id"=>$_POST['id'],"name"=>$_POST['name'],"district_id"=>$_POST['district_id'],"division_id"=>$_POST['division_id'],"date"=>date('Y-m-d'),"status"=>1);
		if($obj->update($table,$array)==1)
		{
			echo $obj->Success("Thana Successfully Updated",$obj->filename());	
		}
		else
		{
			echo $obj->Error("Thana Update Failed, Please Try Again",$obj->filename());	
		}
	}
	else
	{
		echo $obj->Error("Thana Field Is Empty, Please Try Again",$obj->filename());	
	}
}

if(isset($_GET['del']))
{
		if($obj->delete($table,array("id"=>$_GET['del']))==1)
		{
			echo $obj->Success("Thana Successfully Deleted",$obj->filename());	
		}
		else
		{
			echo $obj->Error("Thana Deletion Failed, Please Try Again",$obj->filename());	
		}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
	
<title>Thana | ADMINISTRATION</title>
<link href="css/dreams.css" rel="stylesheet" type="text/css" />
<link href="css/dreams_admin.css" rel="stylesheet" type="text/css" />
<link rel='stylesheet' type='text/css' href='css/admin_menu.css' />
<link rel='stylesheet' type='text/css' href='css/amsit_style.css' />
<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css'>
<!--scroll script-->
    <script type="text/javascript" src="js/jquery_ui_min_1_8_8.js"></script>
    <script type="text/javascript" src="js/facescroll.js"></script>
    <!-- scroll script-->


<style>
	.TFtable{
		margin: 0 auto 0 auto;
		border-collapse:collapse;
		font-family:Tahoma, Geneva, sans-serif;
		font-size:13px;
		
		
	}
	.TFtable td{ 
		padding:5px; border:#09F 1px solid; 
	}
	/* provide some minimal visual accomodation for IE8 and below */
	.TFtable tr{
		background: #D19500;

	}
	/*  Define the background color for all the ODD background rows  */
	.TFtable tr:nth-child(odd){ 
		background:#dbe5f1;
	}
	/*  Define the background color for all the EVEN background rows  */
	.TFtable tr:nth-child(even){
		background:#f2dbdb;
	}

.btn {
  background: #d93434;
  background-image: -webkit-linear-gradient(top, #d93434, #b82b2b);
  background-image: -moz-linear-gradient(top, #d93434, #b82b2b);
  background-image: -ms-linear-gradient(top, #d93434, #b82b2b);
  background-image: -o-linear-gradient(top, #d93434, #b82b2b);
  background-image: linear-gradient(to bottom, #d93434, #b82b2b);
  -webkit-border-radius: 5;
  -moz-border-radius: 5;
  border-radius: 5px;
  font-family: Arial;
  color: #ffffff;
  font-size: 18px;
  padding: 6px 10px 6px 10px;
  text-decoration: none;
  border:none;
}

.btn:hover {
  background: #fc3c3c;
  background-image: -webkit-linear-gradient(top, #fc3c3c, #d93434);
  background-image: -moz-linear-gradient(top, #fc3c3c, #d93434);
  background-image: -ms-linear-gradient(top, #fc3c3c, #d93434);
  background-image: -o-linear-gradient(top, #fc3c3c, #d93434);
  background-image: linear-gradient(to bottom, #fc3c3c, #d93434);
  text-decoration: none;
}
</style>
</head>

<body>
	<!-- body starts from here-->
        <?php include('include/head.php');?>
<div class="height-100 width_960 auto-position"> 
   <?php include('include/manu.php');?>
</div>
<div class="width_960 marging_left_right" >
  
</div>
<!----------body_all strart------------------------------------------------->
<div id="body_all" class="padding_top_5 padding_butttom_5">
   
   
   <!-----table_body start--------->
     <div class="table_body">
       <!----------------head end-------------------->
        <div id="table1111" class="padding_5 width_99 height_auto" style="margin-top:-25px;">
   
   <div class="backgroung_3 width_100 padding_bottom10 padding_top10 text_aling_center font_2 color_w" style="font-weight:bolder; font-size:22px;">
     <?php if(isset($_GET['edit'])){ ?> Update Thana Name <?php }else{ ?> New Thana Name <?php } ?>
                 </div>
                 <div class="width_100">
                  <style type="text/css">
                   #dd tr td{ padding-left:30px; }
                  </style>
                  <?php if(isset($_GET['edit'])){ ?>
                  <form action="" enctype="multipart/form-data" method="post">
                  <input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>" />
                   <table id="dd" class="width_100 font_2 color_b" cellpadding="0" cellspacing="1" border="0">
                    
                     
                     <tr class="backgroung_2">
                       <td class="padding_5" width="200"></td>
                       <td class="padding_5"><?php include_once('class/esm.php'); ?></td>
                       
                     </tr>
                     <tr class="backgroung_2">
                       <td class="padding_5" width="200">Division Name </td>
                       <td class="padding_5">
                       <select  class="borber2 padding_5" name="division_id">
							<?php
							$div_id=$obj->SelectAllByVal($table,"id",$_GET['edit'],"division_id");
                       	    $div3=$obj->SelectAll($table3);
                            if(!empty($div3))
                            foreach ($div3 as $rw3):
							?>
                            <option <?php if($div_id==$rw3->id){ ?> selected="selected" <?php } ?> value="<?php echo $rw3->id; ?>"><?php echo $rw3->name; ?></option>
                            <?php endforeach; ?>
                       </select>
                       </td>
                       
                     </tr>
                     <tr class="backgroung_2">
                       <td class="padding_5" width="200">District Name </td>
                       <td class="padding_5">
                       <select  class="borber2 padding_5" name="district_id">
							<?php
							$dis_id=$obj->SelectAllByVal($table,"id",$_GET['edit'],"district_id");
                       	    $div2=$obj->SelectAll($table2);
                            if(!empty($div2))
                            foreach ($div2 as $rw2):
							?>
                            <option <?php if($dis_id==$rw2->id){ ?> selected="selected" <?php } ?> value="<?php echo $rw2->id; ?>"><?php echo $rw2->name; ?></option>
                            <?php endforeach; ?>
                       </select>
                       </td>
                       
                     </tr>
                     <tr class="backgroung_2">
                       <td class="padding_5" width="200">Thana Name </td>
                       <td class="padding_5"><input size="60" type="text" value="<?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"name"); ?>"  class="borber2 padding_5" name="name"   /></td>
                       
                     </tr>
                     
                      <tr class="backgroung_2">
                       <td class="padding_5"></td>
                       <td class="padding_5"><button class="btn" type="submit" name="update"> Change District Name </button> </td>
                      
                     </tr>
                     
                     
                     
                   </table>
                   </form>
                   <?php }else{ ?>
                   <form action="" enctype="multipart/form-data" method="post">
                   <table id="dd" class="width_100 font_2 color_b" cellpadding="0" cellspacing="1" border="0">
                    
                     
                     <tr class="backgroung_2">
                       <td class="padding_5" width="200"></td>
                       <td class="padding_5"><?php include_once('class/esm.php'); ?></td>
                       
                     </tr>
                     <tr class="backgroung_2">
                       <td class="padding_5" width="200">Division Name </td>
                       <td class="padding_5">
                       <select  class="borber2 padding_5" name="division_id">
							<?php
                       	    $div3=$obj->SelectAll($table3);
                            if(!empty($div3))
                            foreach ($div3 as $rw3):
							?>
                            <option value="<?php echo $rw3->id; ?>"><?php echo $rw3->name; ?></option>
                            <?php endforeach; ?>
                       </select>
                       </td>
                       
                     </tr>
                     <tr class="backgroung_2">
                       <td class="padding_5" width="200">District Name </td>
                       <td class="padding_5">
                       <select  class="borber2 padding_5" name="district_id">
							<?php
                       	    $div2=$obj->SelectAll($table2);
                            if(!empty($div2))
                            foreach ($div2 as $rw2):
							?>
                            <option value="<?php echo $rw2->id; ?>"><?php echo $rw2->name; ?></option>
                            <?php endforeach; ?>
                       </select>
                       </td>
                       
                     </tr>
                     <tr class="backgroung_2">
                       <td class="padding_5" width="200">Thana Name </td>
                       <td class="padding_5"><input size="60" type="text"  class="borber2 padding_5" name="name"   /></td>
                       
                     </tr>
                     
                      <tr class="backgroung_2">
                       <td class="padding_5"></td>
                       <td class="padding_5"><button class="btn" type="submit" name="save"> Save District </button> </td>
                      
                     </tr>
                     
                     
                     
                   </table>
                   </form>
                   <?php } ?>
                 </div>
                 
       
        </div>
     
             <!----------------Table_1 start-------------------->
              
               <div id="table1" class="padding_5 width_99 height_auto">
               <div class="backgroung_3 width_100 padding_bottom10 padding_top10 text_aling_center font_2 color_w" style="font-weight:bolder; font-size:22px;">
     <h3>Thana List : <?php echo $obj->totalrows("thana"); ?></h3>
                 </div>
                 <table cellpadding="0" class="width_100 font_3 text_aling_center marging_top_5" cellspacing="1" border="0">
          <?php 
		    $data3=$obj->SelectAll($table3);
			$s3=1;
			if(!empty($data3))
			foreach ($data3 as $row3):
			$chkdiv=$obj->exists_multiple($table2,array("division_id"=>$row3->id));
			if($chkdiv!=0)
			{
				$data2=$obj->SelectAll($table2);
				$s2=1;
				if(!empty($data2))
				foreach ($data2 as $row2):
				$chkdis=$obj->exists_multiple($table,array("division_id"=>$row3->id,"district_id"=>$row2->id));
				if($chkdis!=0)
				{
		  ?> 
          <thead class="backgroung_3 color_w">
            <th class="padding_5" colspan="4" align="left" valign="middle" height="30"><?php echo " Division - : ".$row3->name; ?> | District : <?php echo $row2->name." ( ".$chkdis." )"; ?> </th>
          </thead>      
          <thead class="backgroung_1 color_red">
            <th class="padding_5">S.L</th>
            <th class="padding_5">Name</th>
            <th class="padding_5">Edit</th>
            <th class="padding_5">Delete</th>
          </thead>
          <tbody class="backgroung_2">
          <?php 
		    $data=$obj->SelectAllByID_Multiple($table,array("division_id"=>$row3->id,"district_id"=>$row2->id));
			$s=1;
			if(!empty($data))
			foreach ($data as $row):
		  ?>
            <tr>
              <td class="padding_5"><?php echo $s; ?></td>
              <td class="padding_5" style="text-align:left;"><?php echo $row->name; ?></td>
              <td class="padding_5"><a href="<?php echo $obj->filename(); ?>?edit=<?php echo $row->id; ?>">Edit</a></td>
              <td class="padding_5"><a href="<?php echo $obj->filename(); ?>?del=<?php echo $row->id; ?>">Delete</a></td>
            </tr>
            <?php $s++; endforeach; ?>
          </tbody>
          <?php 
			}
		  $s2++; endforeach; ?>
          <?php 
			}
		  $s3++; endforeach; ?>
        </table>
               </div>
       <!----------------Table_1 End-------------------->
       
       
       
       <!----------------Table_2 start-------------------->
               <div id="table2" class="padding_5 width_99 height_auto">
                 
               </div>
       <!----------------Table_2 End-------------------->
       
       <!-----table_sms_setting start--------->
     <div  id="table3" class="width_100 height_auto  padding_butttom_5">
     
      
     
       <div class="celr"></div>
     </div>
   <!-----table_sms_setting start--------->
       
      <div class="celr"></div>
     </div>
   <!-----table_body end--------->
   
   
   
   
</div>
<!----------body_all end------------------------------------------------->  
              
 <!----------footer start------------------------------------------------->                
 <?php include ('./class/footer.php'); ?>
<!----------footer end------------------------------------------------->   
   <?php include('include/admin.php');?>
     
</body>
</html>