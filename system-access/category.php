<?php
include_once('class/auth.php');
$table="ams_category";
if(isset($_POST['save']))

{
	if($obj->exists_multiple($table,array("name"=>$_POST['name'],"group_id"=>$_POST['group'],"school_id"=>$school))==0 &&!empty($_POST['name']))
	{
				
        	if($obj->insert($table,array("name"=>$_POST['name'],"group_id"=>$_POST['group'],"school_id"=>$school,"date"=>date('Y-m-d'),"status"=>1))==1)
		
		
		{
			echo $obj->Success("Data Saved Successfully",$obj->filename());	
		}
		else
		{
			echo $obj->Error("Data Saved Failed",$obj->filename());	
		}
	}
			else
		{
			echo $obj->Error("Sumthing Wrong..Please Try agin..",$obj->filename());	
		}
}

if(isset($_POST['update']))
{
	$array=array("id"=>$_POST['id'],"name"=>$_POST['name']);
	
	if($obj->update($table,$array)==1)
	
      if($_POST['name'])
	  {
		echo $obj->Success("Subject Update Successfully",$obj->filename());	
	  }
	     else
	  {
		echo $obj->Error("Subject Update Failed",$obj->filename());	
	  }
}

if(@$_GET['action']=='delete')
{
    if($obj->delete($table,array("id"=>$_GET['id']))==1)
    
    $count=count($_GET['id']);
      if($count!==0)
	  {
			echo $obj->Success("Data Delete Successfully",$obj->filename());	
		}
		else
		{
			echo $obj->Error("Data Delete Failed",$obj->filename());	
		}
            
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include('class/head.php'); ?>
         <script>
            function subjectedit(str)
            {
                if (str == "")
                {
                    document.getElementById("subjectshow").innerHTML = "";
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
                        document.getElementById("subjectshow").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajx/edit_category.php?s=" + str, true);
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
                        <div class="topbar_small_div left ">
                            <img src="images/admission_icon.png"/>
                            <div class="topbar_small_div_text left height-30">CATEGORY</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>ADD MANAGE CATEGORY</h2></div>
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
                        <div class="admission_text_div height-40" style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30"><left>ADD CATEGORY :</left></h2>
                        </div>
                       
                        <div id="subjectshow" class="admission_form_div width-col2 auto-position">
                        <form action="" method="post" name="session">
                            <ul>
                             <li class="admission_form_div_label height-30 width-label-200 left">MANAGE GROUP<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                   <select class="hh_inpput" name="group" id="group" class="form-control select2">
                                <option>Select Group</option>
                                           <?php 
										  $array=array("school_id"=>$school); 
										 $group=$obj->SelectAllByID('ams_management_group',$array);
										 if(!empty($group))
										 foreach($group as $grp):
										 ?>
                                        <option value="<?php echo $grp->id; ?>"><?php echo $grp->name; ?></option>
                                        <?php
                                          endforeach;
										?>
                                       </select>
                                </li>
                              
                               <li class="admission_form_div_label height-30 width-label-200 left">Add category<span class="right">:</span></li>
                                <li class="admission_form_div_label height-30 width-label-250 right">
                                    <input name="name" placeholder="Type category Name Here" class="textbox"/>
                                </li>
                               
                                
                                <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                                    <a href="" style="text-decoration:none">
                                    <button type="submit" name="save" class=" height-35 div_btn">Submit</button>
                                    </a>
                                </li>

                            </ul>
                            </form>

                        </div>
                        <div style="padding:10px;" class="width-auto height-auto">
                          <table cellpadding="0" cellspacing="1" border="0" class="display" id="example">
                                    <thead>
                                        <tr>
                                            <th width="5%">S/L</th>
                                            <th width="24%">Category Name</th>
                                            <th width="24%">Edit</th>
                                            <th width="24%">Delete</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody style="font-weight:500;">
                                        <?php 
										$array=array("school_id"=>$school);
                                        $data=$obj->SelectAllByID($table,$array);
                                        $x=1;
                                        if(!empty($data))
                                        foreach($data as $row):
                                        ?>
                                        <tr class="">
                                        <td><?php echo $x; ?></td>
                                        <td class="center"><?php echo $row->name; ?></td>
                                        <td class="center"><a href="#" name="edit" id="edit" onclick="subjectedit('<?php echo $row->id; ?>')"><i class="fa fa-edit"></i></a></td>
                                        <td class="center">
                                        <a onclick="<?php echo $obj->delete_confirm();?>" href="<?php echo $obj->filename(); ?>?id=<?php echo $row->id; ?>&amp;action=delete"><img src="images/deletered.gif" /></a>
                                        </td>   
                                        </tr>
                                        <?php 
                                        $x++;
                                        endforeach; 
                                        ?>
                                                                             
                                    </tbody>
                                    
                                </table>
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