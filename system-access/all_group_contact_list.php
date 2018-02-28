<?php
include_once('class/auth.php');
$table="ams_contact";

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
                          <h3>ALL CONTACT LIST</h3></div>
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
           
                  <div  class="admission_div shadow_inner" style="margin-top: 20px; height:auto;">
                      <div class="st_group_text_div2 height-40" style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30">
                              <left>Group CONTACT List</left></h2>
                    </div>
                        <div class="admission_div_page auto-position" style="border:none; height:auto; padding:10px;">


                            <!--tables code start from here-->

                            <div id="printableArea" >
                               <table cellpadding="0" cellspacing="1" border="0" class="display" id="example">
                                    <thead>
                                        <tr>
                                            <th>S/L</th>
                                            <th>Name</th>
                                            
                                            <th>Category</th>
                                            <th>Information </th>
                                            <th>Number</th>
                                            <th>Group Name</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									 <?php
                                          $array=array("school_id"=>$school);
                                          $data=$obj->SelectAllByID($table,$array);
                                          $x=1;
                                          if(!empty($data))
                                          foreach($data as $row)
                                
                                {        ?>
                                
                                  <tr class="">
                                                <td class="center"><?php echo $x; ?></td>
                                                <td class="center"><?php echo $row->name; ?></td>
                                                
                                                
                                                
                                                <td class="center">
                                                <?php echo $obj->SelectAllByVal("ams_category","id",$row->category_id,"name"); ?>
                                                </td>
                                                <td class="center"><?php echo $row->info; ?></td>
                                                
                                                <td class="center">
                                                <?php echo $row->number; ?>
                                                </td>
                                                <td class="center">
												<?php echo $obj->SelectAllByVal("ams_management_group","id",$row->group_id,"name"); ?>
                                                </td>
                                                <td class="center">
                                                <?php echo $row->date; ?>
                                                </td>
                                        </tr>
                                
                               
                                        </tr>
                                        <?php 
                                       $x++;
}
                                        ?>
                                                                             
                                    </tbody>
                                    <tfoot>
                                       
                                    </tfoot>
                                </table> 
                            <div class="clear"></div>
                            </div>
                            <!--tables code end here-->
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
        <script>

  var placeholder = "Please Select";

  $('.select2, .select2-multiple').select2({ placeholder: placeholder });

  $(".select2, .select2-multiple, .select2-allow-clear, .select2-remote").on( select2OpenEventName, function() {
	if ( $(this).parents('[class*="has-"]').length ) {
	  var classNames = $(this).parents('[class*="has-"]')[0].className.split(/\s+/);
	  for (var i=0; i<classNames.length; ++i) {
		  if ( classNames[i].match("has-") ) {
			$('#select2-drop').addClass( classNames[i] );
		  }
	  }
	}

  });

</script>



    </body>
</html>