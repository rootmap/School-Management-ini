<?php
include_once('class/auth.php');
$table = "message_book";
if (isset($_POST['submit'])) {
    $exist_array = array("title" => $_POST['title'], "message" => $_POST['message']); //exists array
    if ($obj->exists_multiple($table, $exist_array) == 1) { //exists multiple condition
        $obj->Error("This Message Already Exists", $obj->filename()); //error message
    } else {
        $insert_array = array("title" => $_POST['title'], "message" => $_POST['message'], "date" => date('Y-m-d'), "status" => 1);
        if ($obj->insert($table, $insert_array) == 1) {
            $obj->Success("Message Successfully Saved", $obj->filename());
        } else {
            $obj->Error("Message Saved Failed", $obj->filename());
        }
    }
}

if (@$_GET['action'] == 'delete') {
    if ($obj->delete($table, array("id" => $_GET['id'])) == 1) {
        $obj->Success("Message Deletion Successfully", $obj->filename());
    } else {
        $obj->Error("Message Deletion Failed", $obj->filename());
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include('class/head.php'); ?>
        <link href="css/dreams.css" rel="stylesheet" type="text/css" />
        <link href="css/menu.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript">
            jQuery(function($) {
                $('#checkAll').click(function() {
                    $('input:checkbox').prop('checked', this.checked);
                });
            })
        </script>

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
                            <div class="topbar_small_div_text left height-30">More</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30">
                            <h3>Message Book</h3></div>
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


                    <div class="admission_div" style="margin-top: 20px; height:auto;">
                        <div class="st_group_text_div2 height-40" style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30">
                                <left>Message List</left></h2>
                        </div>
                        <div class="admission_div_page auto-position" style="border:none; height:auto; min-height:500px;">


                            <!--tables code start from here-->

                            <div id="dynamic">
                                <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
                                    <thead>
                                        <tr>
                                            <th style="width:30px; text-decoration: none; background: none;">S/L</th>
                                            <th>Message Title</th>
                                            <th>Creation Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $data = $obj->SelectAll($table);
                                        $x = 1;
                                        if (!empty($data))
                                            foreach ($data as $row):
                                                ?>
                                                <tr class="gradeX">
                                                    <td style="width:30px;">
                                                        <?php echo $x; ?>
                                                        <td><?php echo $row->title; ?></td>
                                                        <td><?php echo $row->date; ?></td>
                                                        <td class="center"><a href="st_profile_info.php?id=<?php echo $row->id; ?>">View Details</a></td>
                                                </tr>
                                                <?php
                                                $x++;
                                            endforeach;
                                        ?>

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>S/L</th>
                                            <th>Message Title</th>
                                            <th>Creation Date</th>
                                            <th>Contact Details</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                <div>
                                </div>
                                <div class="spacer"></div>
                                <!--tables code end here-->


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