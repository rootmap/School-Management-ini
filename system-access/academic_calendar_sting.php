<?php
include_once('class/auth.php');
$table="ams_academic_calendar";
if(isset($_POST['save']))
{
    $exist_array=array("start_date"=>$_POST['start'],"end_date"=>$_POST['end'],"title"=>$_POST['title'],"events_id"=>$_POST['event'],"description"=>$_POST['description'],"school_id"=>$school);
	
	$insert_array=array("start_date"=>$_POST['start'],"end_date"=>$_POST['end'],"title"=>$_POST['title'],"events_id"=>$_POST['event'],"description"=>$_POST['description'],"school_id"=>$school,"date"=>date('Y-m-d'),"status"=>1);
	
    if($obj->exists_Multiple($table,$exist_array)==1)
    {
        $count=count($_POST['start_date']);
		if($count!=1)
		
		{
			echo $obj->Error("Data Already Exists",$obj->filename());	
		}
    }
    else 
    {
        
        if($obj->insert($table,$insert_array)==1)
        {
        $count=count($_POST['start_date']);
		if($count!=1)
		{
			echo $obj->Success("Data Saved Successfully",$obj->filename());	
		}
		else
		{
			echo $obj->Error("Data Saved Failed",$obj->filename());	
		}
    }}
    
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
                            <form method="post" name="acad" action="">
                            <ul>
                                <li class="admission_form_div_label height-30 width-label-200 left">Start Date <span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input size="12" id="calendar" readonly="readonly" placeholder="Type Group Name Here" name="start" class="textbox"/>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left">End Date <span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input size="12" id="calendar2" readonly="readonly" placeholder="Type Group Name Here" name="end" class="textbox"/>
                                </li>
                                
                                <li class="admission_form_div_label height-30 width-label-200 left">Title <span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input placeholder="Type Group Name Here" name="title" class="textbox"/>
                                </li>
                                
                                <li class="admission_form_div_label height-210 width-label-200 left">Description<span class="right">:</span></li>
                                <li class="admission_form_div_label width-label-250 right">
                                    <textarea name="description" placeholder="type your Description" class="text_area"></textarea>
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
                                    <button type="submit" name="save" class=" height-35 div_btn">Submit</button>
                                </li>

                            </ul>
                            </form>

                        </div>


                    </div>

                    <div class="admission_div" style="margin-top: 20px; height:auto;">
                        <div class="st_group_text_div2 height-40" style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30"><left>Settings to Academic Calendar</left></h2>
                        </div>
                        <div class="admission_div_page auto-position shadow_inner" style="border:none; padding:10px;">


                            <!--tables code start from here-->

                            <div id="dynamic">
                                <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
                                    <thead>
                                        <tr>
                                            <th>S/L</th>
                                            <th>Events Name</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Description</th>
                                            <th>Events</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
										    $array=array("school_id"=>$school); 
                                            $data=$obj->SelectAllByID($table,$array);
                                            $x=1;
											 if(!empty($data))
                                             foreach($data as $row):
                                        ?>
                                        <tr class="">
                                                <td class="center"><?php echo $x; ?></td>
                                                <td class="center"><?php echo $row->title; ?></td>
                                                <td class="center"><?php echo $row->start_date; ?></td>
                                                <td class="center"><?php echo $row->end_date; ?></td>
                                                <td class="center"><?php echo $row->description; ?></td>
                                                <td class="center"><?php echo $obj->SelectAllByVal("ams_events","id",$row->events_id,"name"); ?></td>
                                                
                                        </tr>
                                        <?php 
                                        $x++;
                                        endforeach; 
                                        ?>
                                                                             
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                           
                                        </tr>
                                    </tfoot>
                                </table>

                            </div>
                            <div class="spacer"></div>
                            <!--tables code end here-->
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