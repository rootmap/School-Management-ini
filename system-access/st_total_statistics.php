<?php
include_once('class/auth.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include('class/head.php'); ?>
      
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
                            <img src="images/iuu0p.jpg"/>
                            <div class="topbar_small_div_text left height-30">STUDENT</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>STUDENT STATISTICS</h2></div>
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
                    <div class="admission_div_page" style="margin-top: 20px; " id="printableArea">
                        <div class="admission_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30">
                              <left>Student STATISTICS :</left></h2>
                        </div>
                        <div class="admission_form_div  height-auto width-auto color_1 shadow_inner auto-position" style="padding:10px;">
                        <!--tables code start from here-->

                            <div id="dynamic">
                                <table cellpadding="0" cellspacing="1" border="0" class="display" id="example">
                                    <thead>
                                        <tr>
                                            <th>S/L</th>
                                            <th>Class / Course</th>
                                            <th>Group</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody style="font-weight:500;">
                                        <?php 
										
										$array=array("school_id"=>$school);
                                        $data=$obj->SelectAllByID('ams_student_group',$array);
                                        $x=1;
										$c=0;
                                        if(!empty($data))
                                        foreach($data as $row):
										 
                                        ?>
                                        <tr class="">
                                                <td class="center"><?php echo $x; ?></td>
                                                <td class="center">
                                                 <?php echo $obj->SelectAllByVal("ams_class","id",$row->class_id,"name"); ?>
                                                </td>
                                                </td>
                                                <td class="center"><?php echo $row->name; ?></td>
                                                
                                                <td class="center">
												<?php 
												$total=0;
												$tt=$obj->exists_multiple("ams_admission",array("school_id"=>$school,"group_id"=>$row->id));
												if($tt==''){ $total+=0; }else{ $total+=$tt; } echo $total; $c+=$total; ?>
                                                Students
                                                </td>
                                        </tr>
                                        
                                       
                                        
                                        <?php 
                                        $x++;
                                        endforeach; 
                                        ?>
                                                                             
                                    </tbody>
                                    <tfoot>
                                        <tr class="shadow_inner" style="background:#C30; color:#FFF;">
                                            <td width="5%"></td>
                                            <td width="24%"></td>
                                            <td width="24%" align="right">Total</td>
                                            <td class="center" width="24%"><?php echo $c; ?> Students</td>
                                        </tr>
                                    </tfoot>
                                    
                                   
                                </table>
                                <div class="report_menu_div width-col3 right">
                                <ul>
                                    <li class="right">
                                        <button type="button" onClick="printDiv('printableArea')" value="print a div!" />    
                                            
                                            <img class="right" style="margin-top:5px;" src="images/adobe_pdf_icon.png" />
                                        </button>
                                    </li>
                                    <li class="right">
                                         <button type="button" onClick="printDiv('printableArea')" value="print a div!" />    
                                          
                                            <img class="right" style="margin-top:5px;" src="images/excel_icon.png" />
                                        </button>
                                    </li>
                                    <li class="right">
                                         <button type="button" onClick="printDiv('printableArea')" value="print a div!" />    
                                          
                                            <img class="right" style=" margin-top:5px;" src="images/mword_icon.png" />
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            
                            </div>
                            
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