<?php
include_once('class/auth.php');
$table = "ams_academic_calendar";
extract($_GET);
if (@$_GET['action'] == 'delete') {
    if ($obj->delete($table, array("id" => $_GET['id'])) == 1) {
        $error_data[] = "Group Name Successfully Deleted";
        $error_flag = true;
        if ($error_flag) {
            $_SESSION['SMSG_ARR'] = $error_data;
            session_write_close();
            header('location: ' . $obj->filename());
            exit();
        }
    } else {
        $error_data[] = "Group Name Delete Failed";
        $error_flag = true;
        if ($error_flag) {
            $_SESSION['ERRMSG_ARR'] = $error_data;
            session_write_close();
            header('location: ' . $obj->filename());
            exit();
        }
    }
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
		<?php include('class/head.php'); ?>
<link href='js/fullcalendar.css' rel='stylesheet' />
<link href='js/fullcalndar.print.css' rel='stylesheet' media='print' />
<script src='js/moment.min.js'></script>
<script src='js/jquery.min.js'></script>
<script src='js/jquery-ui.custom.min.js'></script>
<script src='js/fullcalendar.min.js'></script>

       <script>

	$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			defaultDate: '<?php $datt=date('Y-m-d'); echo $datt; ?>',
			editable: true,
			events: [
			
			<?php
			     
				$aray=array("events_id"=>$show_event,"school_id"=>$school);
			    $data=$obj->SelectAllByID_Multiple($table,$aray);
				if(!empty($data))
				foreach($data as $rowe):
				?>
				{
					title: '<?php echo $rowe->title; ?>',
					start: '<?php echo $rowe->start_date; ?>',
					end: '<?php echo $rowe->end_date; ?>',
					color:'<?php echo $obj->SelectAllByVal("ams_events","id",$rowe->events_id,"color"); ?>'
				},
				<?php
				endforeach;
				?>
				{
					title: 'Click for Google',
					url: '',
					start: '2014-04-029'
				}
				
			]
		});
		
	});

</script>
<style>

	
	#calendar {
		width: 60%;
		background:#FFF;
	}

</style>
 
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
                        <div class="topbar_small_div left">
                            <img src="images/group_icon.jpg"/>
                            <div class="topbar_small_div_text left height-30">MORE +</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30">
                            <h3>VIEW ACADEMIC CALENDAR</h3></div></a>
                    <div class="topbar_small_div right">
                        <ul>
<?php include('includes/back.php'); ?>
                        </ul>

                    </div>
                </div>
                <div class="border_top"></div><?php include_once('class/esm.php'); ?>
                <!-----add student form div starts here-------------------------------------------------------------------------------------------------->               
                <div style="clear:both; ">
                
                
                
                
                  <div class="admission_div" style="margin-top: 20px; height:auto;">
                      <div class="st_group_text_div2 height-40" style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30">
                                <left>ACADEMIC CALENDAR &raquo; <?php $dd=date('D-M-Y'); { echo"$dd"; } ?></left></h2>
                        </div>
                        <div class="admission_div_page auto-position" style="border:none; height:auto; min-height:500px;">


                            <!--tables code start from here-->

                            	<div id='calendar' class="left"></div>
                                
                                <div class="left height-auto kk" >
                                
                                <?php 
								$aray=array("events_id"=>$show_event,"school_id"=>$school);
						        $data=$obj->SelectAllByID_Multiple("ams_academic_calendar",$aray);
						        if(!empty($data))
						        foreach($data as $row ):
					           ?>
                                
                                <div class="hhhh showdd">
                                  <h1 class="font-size_20px"><?php echo $row->start_date;?></h1>
                                   <ul class="pi">
                                     <li class="pi_li">
                                     <span class="snp" style="background:<?php echo $obj->SelectAllByVal("ams_events","id",$row->events_id,"color"); ?>"></span>
                                     <a class="color50685a" href="#"><?php echo $row->title;?></a></li>
                                     
                                     <li class="pi_li_li">
                                      <?php echo $row->description;?>
                                     </li>
                                     
                                   </ul>
                                   <a class="pi_a showdd" href="<?php echo $obj->filename();?>?id=<?php echo $row->id;?>&amp;action=delete">
                                   <img src="images/deletered.gif" />
                                   </a> 
                                   <a class="pi_a showdd" href="">
                                   <img src="images/write.gif" />
                                   </a>
                                </div>
                                 <?php endforeach; ?>
                                <!--<div class="hhhh showdd" >
                                  <h1 class="font-size_20px">April   2014</h1>
                                   <ul class="pi">
                                     <li class="pi_li">
                                     <span>ll</span>
                                     <a class="color50685a" href="#">2nd Semester Examination</a></li>
                                     
                                     <li class="pi_li_li">
                                      2nd Semester Examination 2014
                                     </li>
                                     
                                   </ul>
                                   <a class="pi_a showdd" href=""><img src="images/deletered.gif" /></a> 
                                   <a class="pi_a showdd" href=""><img src="images/write.gif" /></a>
                                </div>
                                
                                <div class="hhhh showdd">
                                  <h1 class="font-size_20px">April   2014</h1>
                                   <ul class="pi">
                                     <li class="pi_li">
                                     <span>ll</span>
                                     <a class="color50685a" href="#">2nd Semester Examination</a></li>
                                     
                                     <li class="pi_li_li">
                                      2nd Semester Examination 2014
                                     </li>
                                     
                                   </ul>
                                   <a class="pi_a showdd" href=""><img src="images/deletered.gif" /></a> 
                                   <a class="pi_a showdd" href=""><img src="images/write.gif" /></a>
                                </div>-->
                                
                                </div>
                                
                                <div class="spacer"></div>
                                <!--tables code end here-->
<div class="clear"></div>

                            </div>


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
        <script>

            var placeholder = "Please Select";

            $('.select2, .select2-multiple').select2({placeholder: placeholder});

            $(".select2, .select2-multiple, .select2-allow-clear, .select2-remote").on(select2OpenEventName, function() {
                if ($(this).parents('[class*="has-"]').length) {
                    var classNames = $(this).parents('[class*="has-"]')[0].className.split(/\s+/);
                    for (var i = 0; i < classNames.length; ++i) {
                        if (classNames[i].match("has-")) {
                            $('#select2-drop').addClass(classNames[i]);
                        }
                    }
                }

            });

        </script>



    </body>
</html>