<?php
include_once('class/auth.php');
$table="ams_academic_calendar";
extract($_GET);
if(isset($_POST['save']))
{
        
  if($obj->update($table,array("id"=>$_POST['id'],"start_date"=>$_POST['start'],"end_date"=>$_POST['end'],"title"=>$_POST['title'],"events_id"=>$_POST['event'],"description"=>$_POST['description'],"date"=>date('Y-m-d')))==1)
       
        
		{
			echo $obj->Success("Data Successfully Update",$obj->filename()."?id=".$id."&school=".$school);	
		}
		else
		{
			echo $obj->Error("Data Update Failed",$obj->filename()."?id=".$id."&school=".$school);	
		}
	
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include('class/head.php'); ?>
       
       <style>
		#calendar,
		#calendar2,
		#calendar3 {
			border: 1px solid #909090;
			font-family: Tahoma;
			font-size: 12px;
		}
	</style>
	<script>
		var myCalendar;
		function doOnLoad() {
			myCalendar = new dhtmlXCalendarObject(["calendar","calendar2","calendar3"]);
		}
	</script>

    </head>

    <body  onload="doOnLoad();">
        <!-- body starts from here---------------------------------------------------------------------------------------------->
        <div id="body_container ">
            <div class="eims_soft_head_div">
                <?php include('class/homepage_header.php'); ?>
            </div>
            <div class="st_detail_body">
                <div class="st_detail_topbar">
                    <a href="#">
                        <div class="topbar_small_div left">
                            <img src="images/extra_images/calendar_icon.png"/>
                            <div class="topbar_small_div_text left height-30">SETTING</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h3>SETTING TO ACADEMIC CALENDAR </h3></div>
                    </a>
                    <div class="topbar_small_div right">
                        <ul>
<?php include('includes/back.php'); ?>

                        </ul>
                        
                    </div>
                </div>
                <div class="border_top"></div> <?php include_once('class/esm.php'); ?>
                <!-----add student form div starts here-------------------------------------------------------------------------------------------------->                        
                <div style="clear:both; ">
                    


                    <div class="admission_div shadow_inner" style="margin-top: 20px;">
                        <div class="st_group_text_div height-40" style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30"><left> Settings to Academic Calendar  </left></h2>
                        </div>
                        <div class="admission_form_div width-col2 auto-position">
                            <form method="post" name="edit" action="">
                            <?php
								$array=array("school_id"=>$school,"id"=>$id); 
								$data=$obj->SelectAllByID_Multiple($table,$array);
								$x=1;
								 if(!empty($data))
								 foreach($data as $row1):
							?>
                            <ul>
                                <li class="admission_form_div_label height-30 width-label-200 left">Start Date <span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input size="12" id="calendar" readonly="readonly" placeholder="Type Group Name Here" value="<?php echo $row1->start_date; ?>" name="start" class="textbox"/>
                                </li><input type="hidden" name="id" id="id" value="<?php echo $row1->id; ?>" />
                                
                                <li class="admission_form_div_label height-30 width-label-200 left">End Date <span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input size="12" id="calendar2" readonly="readonly" placeholder="Type Group Name Here" name="end" value="<?php echo $row1->end_date; ?>" class="textbox"/>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left">Title <span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input value="<?php echo $row1->title; ?>" placeholder="Type Group Name Here" name="title" class="textbox"/>
                                </li>
                                
                                <li class="admission_form_div_label height-210 width-label-200 left">Description<span class="right">:</span></li>
                                <li class="admission_form_div_label width-label-250 right">
                                    <textarea name="description" placeholder="type your Description" class="text_area"> <?php echo $row1->description; ?></textarea>
                                </li>
                                
                                
                                <li style="margin-top:20px;" class="admission_form_div_label height-30 width-label-200 left">Events<span class="right">:</span></li>
                                
                                
                                      
                                      
                                      
                                    
                                <li style="margin-top:30px;" class="admission_form_div_label height-auto width-label-250 right">
                                     <?php 
									    
									    $data=$obj->SelectAll('ams_events');
										if(!empty($data))
										foreach($data as $row):
									  ?>
                                   <label style="height:30px;width:210px; margin-top:10px; float:left;"> 
                                     <?php echo $row->name;?>
                                    <span style="height:30px; margin-right:5px; border-radius:7px; width:40px;background:<?php echo $row->color;?>" class="left"></span>
                                    <input type="radio" class="right" value="<?php echo $row->id;?>" name="event"/>
                                    </label>
                                    
                                    <?php endforeach; ?>
                                </li>



                                <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
              <button type="submit" name="save" class=" height-35 div_btn">Update</button>
                                </li>

                            </ul>
                         <?php endforeach; ?>
                            </form>

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