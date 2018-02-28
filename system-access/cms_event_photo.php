<?php
include_once('class/auth.php');
$table="cms_event_photo";
$w=150;
$h=150;
$thumb = "../gallery";

$ww=650;
$hh=650;
if(isset($_POST['save']))
{
	if (!empty($_FILES['photo']['name'])) {
		@$files=$obj->upload_image($w,$h,$thumb,"photo",'event');
		@$files2=$obj->upload_image($ww,$hh,$thumb,"photo",'event');
		$photo=$files;
		$photo2=$files2;
	} else {
		echo $obj->Error("Please Select A Photo, Then Try Again.",$obj->filename());
	}
	
	extract($_POST);
	if($obj->exists_multiple($table,array("name"=>$_POST['name'],"school_id"=>$school))==0 && !empty($_POST['eid']))
	{
		if($obj->insert($table,array("eid"=>$_POST['eid'],"photo"=>$photo,"photo2"=>$photo2,"school_id"=>$school,"date"=>date('Y-m-d'),"status"=>1))==1)
		{ echo $obj->Success("Your Data Saved Successfully.",$obj->filename()); }
		else
		{ echo $obj->Error("Saved Failed, Please Try Again.",$obj->filename()); }
	}
	else
	{ echo $obj->Error("Somthin Went Wrong,  Please Try Again...",$obj->filename());	}
}

if(isset($_GET['action']))
{
    if($obj->delete($table,array("id"=>$_GET['id']))==1)
	{
		echo $obj->Success("Data Deleted Successfully",$obj->filename());	
	}
	else
	{
		echo $obj->Error("Data Deletion Failed, Please Try Again Later",$obj->filename());	
	}         
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include('class/head.php'); ?>
    </head>

    <body>
        <!-- body starts from here---------------------------------------------------------------------------------------------->
        <div id="body_container ">
            <div class="eims_soft_head_div">
                <?php include('class/homepage_header.php'); ?>
            </div>
            <div class="st_detail_body">
                <div class="st_detail_topbar">
                    <a href="#">
                        <div class="topbar_small_div left ">
                            <img src="images/can-stock-photo_csp9752136.png"/>
                            <div class="topbar_small_div_text left height-30">Photo</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>Add New Event Photo</h2></div>
                    </a>
                    <div class="topbar_small_div right">
                        <ul>
							<?php include('includes/back.php'); ?>
                        </ul>
                    </div>
                </div>
                <div class="border_top"></div><?php include_once('class/esm.php'); ?>
                <!-----add student form div starts here-------------------------------------------------------------------------------------------------->                        
                <div style="clear:both; ">
                
                  


                    <div class="admission_div shadow_inner" style="margin-top: 20px; height:auto;">
                        <div class="admission_text_div height-40" style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30"><left>Add Event Photo Detail :</left></h2>
                        </div>
                       
                        <div id="sessionshow" class="admission_form_div width-col2 auto-position">
                        <form action="" method="post" enctype="multipart/form-data">
                            <ul>
                             	<li class="admission_form_div_label height-30 width-label-200 left">Event Name <span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <select name="eid" placeholder="Event Name" class="textbox">
                                    	<option value="">Select A Event</option>
                                        <?php 
										$sqlevent=$obj->SelectAllByID("cms_event",array("school_id"=>$school)); 
										if(!empty($sqlevent))
										foreach($sqlevent as $event):
										?>
                                        <option value="<?php echo $event->id; ?>"><?php echo $event->name; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </li>
                                <li class="admission_form_div_label height-30 width-label-200 left">Upload Photo <span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input name="photo" placeholder="Select A Photo" class="textbox" type="file" />
                                </li>
                                
                                <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                    <button type="submit" name="save" class="height-35 div_btn">Submit</button>
                                </li>
                            </ul>
                            </form>

                        </div>
                        <div style="padding:10px;" class="width-auto height-auto">
                          <table cellpadding="0" cellspacing="1" border="0" class="display" id="example">
                                    <thead>
                                        <tr>
                                            <th width="5%">S/L</th>
                                            <th width="24%">Event Name</th>
                                            <th width="24%">Photo</th>
                                            <th width="24%">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody style="font-weight:500;">
                                        <?php 
										$array=array("school_id"=>$school);
                                        $data=$obj->SelectAllByID($table,$array);
                                        $x=1;
                                        if(!empty($data))
                                        foreach($data as $row):
                                        ?>
                                        <tr class="">
                                        <td><?php echo $x; ?></td>
                                        <td class="center"><?php echo $obj->SelectAllByVal("cms_event","id",$row->eid,"name"); ?></td>
                                        <td class="center"><?php echo $row->photo; ?></td>
                                        <td class="center">
                                        <a onclick="<?php echo $obj->delete_confirm(); ?>" href="<?php echo $obj->filename(); ?>?id=<?php echo $row->id; ?>&amp;action=delete"><img src="images/deletered.gif" /></a>
                                        </td>   
                                        </tr>
                                        <?php 
                                        $x++;
                                        endforeach; 
                                        ?>
                                                                             
                                    </tbody>
                                    
                                </table>
                                <div class="clear"></div>
                        </div>

                    </div>



                </div>


            </div>


            <div class="footer_div_full">
                <div class="footer_div">
                    <?php include ('./class/footer.php'); ?>
                </div>
            </div>   
        </div>



    </body>
</html>