<?php
include_once('class/auth.php');
$table="ams_contact";

if(isset($_POST['update']))
{
	$array=array("id"=>$_POST['id'],"name"=>$_POST['name'],"group_id"=>$_POST['group'],"category_id"=>$_POST['category'],"info"=>$_POST['info'],"gender"=>$_POST['gener'],"number"=>$_POST['number'],"school_id"=>$school);
	
	if($obj->update($table,$array)==1)
	
      if($_POST['name'])
	  {
		echo $obj->Success("Update Successfully",$obj->filename());	
	  }
	     else
	  {
		echo $obj->Error("Update Failed",$obj->filename());	
	  }
}
if(@$_GET['action']=='delete')
{
    if($obj->delete($table,array("id"=>$_GET['id']))==1)
    {
         $count=count($_GET['id']);
		if($count!=0)
		{
			echo $obj->Success("Data Saved Successfully( ".$count." )",$obj->filename());	
		}
		else
		{
			echo $obj->Error("Data Saved Failed( ".$count." )",$obj->filename());	
		}
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include('class/head.php'); ?>
        <script>
            function showee(str)
            {
                if (str == "")
                {
                    document.getElementById("df").innerHTML = "";
                    return;
                }
                if (window.XMLHttpRequest)
                {// code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                }
                else
                {// code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        document.getElementById("df").innerHTML = xmlhttp.responseText;
                    }
                }
				
                xmlhttp.open("GET", "ajx/edit_contact.php?s="+str, true);
                xmlhttp.send();
            }
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
                            <img src="images/contacts-icon.png"/>
                            <div class="topbar_small_div_text left height-30">CONTACT LIST</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30">
                          <h3>SETTING TO CONTACT LIST</h3></div>
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
                      <div class="st_group_text_div2 height-40" style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30">
                              <left>SETTING CONTACT LIST</left></h2>
                    </div>
                       <div id="df" class="admission_div_page auto-position" style="border:none; background:none; width: 500px;" >
                           

                            </div>
                    
                        <div class="admission_div_page auto-position" style="border:none; padding:10px; height:auto;">


                            <!--tables code start from here-->

                            <div id="printableArea">
                                <table cellpadding="0" cellspacing="1" border="0" class="display" id="example">
                                    <thead>
                                        <tr>
                                           <th>S/L</th>
                                            <th>Name</th>
                                            <th>Group Name</th>
                                            <th>Category</th>
                                            <th>Information </th>
                                            <th>Gender</th>
                                            <th>Number</th>
                                            <th>Date</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
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
                                        <tr>
                                                <td class="center"><?php echo $x; ?></td>
                                                <td class="center"><?php echo $row->name; ?></td>
                                                <td class="center">
                                                <?php echo $obj->SelectAllByVal("ams_management_group","id",$row->group_id,"name"); ?>
                                                </td>
                                                <td class="center">
                                                <?php echo $obj->SelectAllByVal("ams_category","id",$row->category_id,"name"); ?>
                                                </td>
                                                <td class="center"><?php echo $row->info; ?></td>
                                                <td class="center"><?php echo $row->gender; ?></td>
                                                <td style="background:#d4f7f2;" class="center"><?php echo $row->number; ?></td>
                                                <td class="center"><?php echo $row->date; ?></td>
                                                <td><a title="clik to Edit" onclick="showee('<?php echo $row->id; ?>')" href="#"><i class="fa fa-edit"></i></a></td>
                                                <td class="center"><a onclick="<?php echo $obj->delete_confirm();?>"  href="<?php echo $obj->filename();?>?id=<?php echo $row->id;?>&amp;action=delete"><img src="images/deletered.gif"/></a></td>
                                        </tr>
                                        <?php 
                                        $x++;
                                        endforeach; 
                                        ?>
                                                                             
                                    </tbody>
                                    <tfoot>
                                        
                                    </tfoot>
                                </table>
                            </div>
                             <?php include ('./include/print.php'); ?>
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