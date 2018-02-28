<?php
include_once('class/auth.php');
$table="ams_all_manege_group_sms";
if(isset($_POST['save']))
{
	$phone=array();
	foreach($_POST['id_number'] as $nn):
		$ss=$_POST[$nn];
		$phone[]=$ss;
    endforeach;	
	$gotnumber=implode(",",$phone);
	$numbers=str_replace(",","|88",$gotnumber);
		
	
	$count=count($_POST['id_number']);
	if($count!=0)
	{
		$ops->sms($numbers,$_POST['name'],$brand,$school);
		echo $obj->Success("SMS Sent Successfully",$obj->filename());	
	}
	else
	{
		echo $obj->Error("Data Saved Failed( ".$count." )",$obj->filename());	
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
                        <div class="topbar_small_div left">
                           <img src="images/images.jpg"/>
                            <div class="topbar_small_div_text left height-30">SEND SMS</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30">
                            <h3>SEND SMS TO ALL</h3></div>
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

                    
                    <div class="admission_div" style="margin-top: 20px; height:auto;">
                        <div class="st_group_text_div2 height-40" style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30">
                                <left>SMS To All</left></h2>
                        </div>
                        <div class="admission_div_page auto-position shadow_inner" style="border:none; padding:10px; height:auto; min-height:500px;">


                            <!--tables code start from here-->
<form action="" method="post" name="sms_to manage">
  <div id="dynamic">
        <table cellpadding="0" cellspacing="1" border="0" class="display" id="example">
            <thead>
                <tr>
                    <th style="width:20px; text-decoration: none; background: none;">
                        <input type="checkbox" value="None" id="checkAll" name="check" /></th>
                    <th>SL.no</th>
                    <th>Name</th>
                    <th>Group</th>
                    <th>Number</th>
                </tr>
            </thead>
            <tbody>
            <tr class="">
                <td class="center" style=""></td>
                <td class="center" style=" color:rgba(0,51,102,1);">MANAGMANT LIST</td>
                <td class="center" style=""></td>
                <td class="center" style=""></td>
                <td class="center" style=""></td>
              </tr>
            <?php
            $data = $obj->SelectAllByID("ams_management_profile",array("school_id"=>$school));
            $x = 1;
            if (!empty($data))
                foreach ($data as $row):
                    ?>
              <tr class="">
                <td class="center" style="width:20px;">
                    <input type="checkbox" value="100<?php echo $row->id_number; ?>" id="slideThree" name="id_number[]" />
                </td>
                <td class="center"><?php echo $x; ?></td>
                <td class="center">
                <?php echo $row->name; ?>
                </td>
                <td class="center">
                    <input type="hidden" name="group[]" value="<?php echo $row->group_id;?>" /> 
                <?php echo $obj->SelectAllByVal("ams_management_group","id",$row->group_id,"name"); ?>
                </td>
                <input type="hidden" name="100<?php echo $row->id_number; ?>" value="<?php echo $row->number;?>" />
                <td class="center"><?php echo $row->number; ?></td>
              </tr>
    <?php $x++; endforeach; ?>
    
              
              <tr class="">
                <td class="center" ></td>
                <td class="center" style="color:rgba(0,51,102,1);">STUDENT LIST</td>
                <td class="center" ></td>
                <td class="center" ></td>
                <td class="center" ></td>
              </tr>
                
                <?php
            $data = $obj->SelectAllByID("ams_admission",array("school_id"=>$school));
            $x = 1;
            if (!empty($data))
            foreach ($data as $row):
                    ?>
              <tr class="">
                <td class="center" style="width:20px;">
                    <input type="checkbox" value="200<?php echo $row->id; ?>" id="slideThree" name="id_number[]" />
                </td>
                <td class="center"><?php echo $x; ?></td>
                <td class="center">
                <?php echo $row->name; ?>
                </td>
                <td class="center">
              
              <input type="hidden" name="group[]" value="<?php echo $row->group_id;?>" /> 
                <?php echo $obj->SelectAllByVal("ams_student_group","id",$row->group_id,"name"); ?>
                </td>
                <input type="hidden" name="200<?php echo $row->id; ?>" value="<?php echo $row->number;?>" />
                <td class="center"><?php echo $row->number; ?></td>
              </tr>
    <?php $x++; endforeach; ?>
            </tbody>
            
        </table>
        </div>
 
  <div class="menu_div" style="margin-top:40px; background:none; color:#09F;">
            
                <ul>
                    <li style="margin-left:10px;">
                     <a class="sa" style="" href='#'><span>Choose From SMS Book</span></a></li>

                </ul>
            
            <div class="margin_left10 b_radius5" style="margin-top:5px;">
                <div id="char_namb" class="left arial bold">
                    <span id="remaining">160 /</span> 
                    <span id="messages">1</span>
                </div>
                <textarea name="name" value="" id="message" class="smsbox" placeholder="Write Message Here……"></textarea>
                </div>
    
                <div class=" width-label-300 margin_left10 margin-top-15 b_radius5 bold "></div>
    
                <button type="submit" style="margin:0px; margin-left:190px;" class="div_btn" name="save">Send SMS</button>
          
        </div> 




                                </div>
                                </form>
                              
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