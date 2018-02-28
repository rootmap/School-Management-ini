<?php
include_once('class/auth.php');
$table="ams_sand_sms_class_wise";

if(@$_GET['action']=='delete')
{
    $delet=array("id"=>$_GET['id']);
    if($obj->delete($table,$delet)==1)
    {
        $error_data[]="<div class='sucess'>Successfully delete</div>". $_POST['id'];
         $error_flag=true;
         if($error_flag)
         {
             $_SESSION['SMSG_ARR']=$error_data;
             session_write_close();
             header('location:'.$obj->filename());
             exit();
         }
    }
 else
    {
     $error_data[]='Failed to save';
      $error_flag=true;
      if($error_flag)
      {
          $_SESSION['ERRMSG_ARR']=$error_data;
          session_write_close();
          header('location:'.$obj->filename());
          exit();
      }   
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include('class/head.php'); ?>
        <link href="css/dreams.css" rel="stylesheet" type="text/css" />
        <link href="css/menu.css" rel="stylesheet" type="text/css" />
        <!-----table starts------------------------------------------------------------------------------------------------------------->
         
        	
        <!-----table ends------------------------------------------------------------------------------------------------------------->
        <style type="text/css">
            /* The CSS */
            select {
                padding:3px;
                margin: 0;
                -webkit-border-radius:4px;
                -moz-border-radius:4px;
                border-radius:4px;
                /*-webkit-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
                -moz-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
                box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;*/
                background: #f8f8f8;
                color:#888;
                border:none;
                outline:none;
                display: inline-block;
                -webkit-appearance:none;
                -moz-appearance:none;
                appearance:none;
                cursor:pointer;
                width: 100px;
            }

            /* Targetting Webkit browsers only. FF will show the dropdown arrow with so much padding. */
            @media screen and (-webkit-min-device-pixel-ratio:0) {
                select {padding-right:18px}
            }

            label {position:relative}
            label:after {
                /*content:'Dreams';*/
                font:11px "Consolas", monospace;
                color:#aaa;
                -webkit-transform:rotate(90deg);
                -moz-transform:rotate(90deg);
                -ms-transform:rotate(90deg);
                transform:rotate(90deg);
                right:8px; top:2px;
                padding:0 0 2px;
                border-bottom:1px solid #ddd;
                position:absolute;
                pointer-events:none;
            }
            label:before {
                /*content:'';*/
                right:6px; top:0px;
                width:20px; height:20px;
                background:#f8f8f8;
                position:absolute;
                pointer-events:none;
                display:block;
            }

        </style>

    </head>

    <body>
        <!-- body starts from here---------------------------------------------------------------------------------------------->
        <div id="body_container">
            <div class="eims_soft_head_div">
                <?php include('class/homepage_header.php'); ?>
            </div>
            <div class="st_detail_body">
                <div class="st_detail_topbar">
                    <a href="#">
                        <div class="topbar_small_div left">
                            <img src="images/group_icon.jpg"/>
                            <div class="topbar_small_div_text left height-30">SEND SMS</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>SEND SMS ALL LIST</h2></div>
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
                    
                
                                         
                    <div class="admission_div_page height-auto" style="margin-top: 20px; ">
                        <div class="admission_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30"><left>SEND SMS ALL LIST :</left></h2>
                        </div>
                        <div class="admission_form_div width-col5 auto-position">
                        <!--tables code start from here-->

                            <div id="dynamic">
                                 <table cellpadding="0" cellspacing="1" border="0" class="display" id="example">
                                    <thead>
                                        <tr>
                                            <th>S/L</th>
                                            <th>Name</th>
                                            
                                            <th>Details</th>
                                            <th>Guardian_name</th>
                                            <th>Sending Date</th>
                                            <!--<th>Delete</th>
                                            <th>Details</th>-->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $data=$obj->SelectAll($table);
                                        $x=1;
                                        if(!empty($data))
                                        foreach($data as $row):
                                        ?>
                                        <tr class="">
                                                <td class="center"><?php echo $x; ?></td>
                                                <td class="center"><?php echo $obj->SelectAllByVal("ams_class","id",$row->class_id,"name"); ?></td>
                                                <td class="center"><?php echo $row->name; ?></td>
                                                 <td class="center"><?php echo $row->guardian_name; ?></td>
                                                 <td class="center"><?php echo $row->date; ?></td>
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
                                <div class="report_menu_div width-col3 right">
                                <ul>
                                    <li class="right">
                                        <a href="#">
                                            <img class="right" style="position:absolute; margin-top:5px;" src="images/adobe_pdf_icon.png" />
                                        </a>
                                    </li>
                                    <li class="right">
                                        <a href="#">
                                            <img class="right" style="position:absolute; margin-top:5px;" src="images/excel_icon.png" />
                                        </a> 
                                    </li>
                                    <li class="right">
                                        <a href="#">
                                            <img class="right" style="position:absolute; margin-top:5px;" src="images/mword_icon.png" />
                                        </a> 
                                    </li>
                                </ul><div class="clear"></div>
                            </div>
                            </div>
                            <div class="spacer"></div>
                            <!--tables code end here-->

                            
                        </div>
                        
<div class="clear"></div>
                    </div>

<div class="clear"></div>

                </div>

<div class="clear"></div>
            </div>
<div class="clear"></div>

            <div class="footer_div_full">
                <div class="footer_div">
                    <?php include ('./class/footer.php'); ?>
                </div>
            </div>   
        </div>



    </body>
</html>