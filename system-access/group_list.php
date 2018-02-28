<?php
include_once('class/auth.php');
$table="ams_management_group";

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
                            <img src="images/group_icon.jpg"/>
                            <div class="topbar_small_div_text left height-30">MANAGE GROUP</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30">
                          <h2>GROUP LIST</h2></div>
                    </a>
                    <div class="topbar_small_div right">
                        <ul>
<?php include('includes/back.php'); ?>

                        </ul>
                       
                    </div>
                </div>
                <div class="border_top"></div> <?php include_once('class/esm.php'); ?>
                <!-----add student form div starts here-------------------------------------------------------------------------------------------------->                        
                <div style="clear:both;">
                  <div class="admission_div" style="margin-top: 20px; height:auto;">
                      <div class="st_group_text_div2 height-40" style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30"><left>Group List</left></h2>
                    </div>
                        <div class="admission_div_page auto-position shadow_inner" style="border:none; padding:10px;">


                            <!--tables code start from here-->

                            <div id="dynamic">
                                <table cellpadding="0" cellspacing="1" border="0" class="display" id="example">
                                    <thead>
                                        <tr>
                                            <th>S/L</th>
                                            <th>Group Name</th>
                                            <th>Creation Date</th>
                                            
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
                                                <td class="center"><?php echo $row->name; ?></td>
                                                <td  class="center"><?php echo $row->date; ?></td>
                                               
                                        </tr>
                                        <?php 
                                        $x++;
                                        endforeach; 
                                        ?>
                                                                             
                                    </tbody>
                                    <tfoot>
                                        
                                    </tfoot>
                                </table>
                                <div class="clear"></div>
                            </div>
                            <div class="spacer"></div>
                            <!--tables code end here-->


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