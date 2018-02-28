<?php
include_once('class/auth.php');
$table="ams_contact";
if(isset($_POST['save']))
{
	include 'class/reader.php';
	$excel = new Spreadsheet_Excel_Reader();
	
	$xlfile=$obj->excel("file",time(),"class");
	if($xlfile==0)
	{
		$obj->Error("This is not a Excel File PLease Upload excel file in 97/2003 format which has (.xls) extension",$obj->filename());	
	}
	
	$excel->setOutputEncoding('CP1251');
	$excel->read('class/'.$xlfile); 
  	$s=0;   
	$x=1;
	while($x<=$excel->sheets[0]['numRows']) {
	  /*$y=1;
	  while($y<=$excel->sheets[0]['numCols']) {
		$cell = isset($excel->sheets[0]['cells'][$x][$y]) ? $excel->sheets[0]['cells'][$x][$y] : '';*/
		if($x!=1)
		{
			$exists=$obj->exists_multiple($table,
			array("name"=>$excel->sheets[0]['cells'][$x][1],
			"group_id"=>$_POST['group'],
			"category_id"=>$_POST['category'],
			"number"=>$excel->sheets[0]['cells'][$x][3],
			"school_id"=>$school));
			if($exists==0)
			{
				$obj->insert($table,
				array("name"=>$excel->sheets[0]['cells'][$x][1],
				"group_id"=>$_POST['group'],
				"category_id"=>$_POST['category'],
				"info"=>$excel->sheets[0]['cells'][$x][2],
				"gender"=>$_POST['gener'],
				"number"=>"0".$excel->sheets[0]['cells'][$x][3],
				"school_id"=>$school,
				"date"=>date('Y-m-d'),
				"status"=>1));
				
				$s+=1;
				
			}
			else
			{
				$s+=0;
			}
			//echo  $excel->sheets[0]['cells'][$x][1]."-".$excel->sheets[0]['cells'][$x][2]."-".$excel->sheets[0]['cells'][$x][3]."<br>";
		}
		//$s+=$obj->amsit_sms_send_multiple("0".$cell,$_POST['sms']);  
		//echo $cell[]."<br>";
		/*$y++;*/
	  /*}  */
	  $x++;
	}
	
	/*exit();*/
	
	if($s==0)
	{
		$obj->Error("No Info Found in Excel / Or All Data Already Exists. ",$obj->filename());	
	}
	else
	{
		$obj->Success($s." Contact is Added Successfully.",$obj->filename());	
	} 
	
	/*if($obj->exists_multiple($table,array("name"=>$_POST['name'],
	"group_id"=>$_POST['group'],
	"category_id"=>$_POST['category'],
	"info"=>$_POST['info'],
	"gender"=>$_POST['gener'],
	"number"=>$_POST['number'],
	"school_id"=>$school))==0 
	&& !empty($_POST['name'])
	&& !empty($_POST['group'])
	&& !empty($_POST['category'])
	&& !empty($_POST['info'])
	&& !empty($_POST['gener'])
	&& !empty($_POST['number']))
	{
		if($obj->insert($table,
		array("name"=>$_POST['name'],
		"group_id"=>$_POST['group'],
		"category_id"=>$_POST['category'],
		"info"=>$_POST['info'],
		"gender"=>$_POST['gener'],
		"number"=>$_POST['number'],
		"school_id"=>$school,
		"date"=>date('Y-m-d'),
		"status"=>1))==1)
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
		echo $obj->Error("Somthing Wrong Please Try Again...",$obj->filename());	
	}*/
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include('class/head.php'); ?>
        
      <script>
            function showcategory(str)
            {
                if (str == "")
                {
                    document.getElementById("category").innerHTML = "";
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
                        document.getElementById("category").innerHTML = xmlhttp.responseText;
                    }
                }
				
                xmlhttp.open("GET", "ajx/manage_group_t.php?t="+str, true);
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
                            <img src="images/group_icon.jpg"/>
                            <div class="topbar_small_div_text left height-30">MANAGE GROUP</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30">
                          <h2>ADD CONTACT FROM EXCEL</h2></div>
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
                      <div class="st_group_text_div2 height-40" >
                            <h2 class="margin_left30"><left>Add Contact To Excel</left></h2>
                    </div>
                    <form action="" method="post" name="contaact" enctype="multipart/form-data">
                         <div class="admission_div_page auto-position" style="border:none; background:none; width: 500px;" >
                            
                            <div class="dvi_test left"><span style="color:rgba(0,51,102,1);">Select To Group :</span>&lowast; </div>
                            <div class="dvi_test left">
                              <select class="hh_inpput" name="group" id="single" onchange="showcategory(this.value)" >
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
                            </div>
                            
                            <!--<div class="dvi_test left"><span style="color:rgba(0,51,102,1);">Contact Name :</span>&lowast;  </div>
                            <div class="dvi_test left">
                              <input name="name"  class="textbox " placeholder="Type a contact name here"/>
                            </div>
                            -->
                            <div class="dvi_test left"> <span style="color:rgba(0,51,102,1);">Category:</span> &lowast;</div>
                            <div class="dvi_test left">
                              <select class="hh_inpput" id="category" name="category" >
                                <option value="">Select Category</option>
                                
                            </select>
                            </div>
                            
                            <!--<div class="dvi_test left"><span style="color:rgba(0,51,102,1);">Information : </span>&lowast;  </div>
                            <div class="dvi_test left">
                              <input name="info" class="textbox " placeholder="Type contact information here"/>
                            </div>-->
                            
                            <div class="dvi_test left"><span style="color:rgba(0,51,102,1);">Gender :</span>&lowast; </div>
                            <div class="dvi_test left">
                              <select class="hh_inpput" name="gener" >
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                 <option value="Female">Female</option>
                              </select>
                            </div>
                            
                             <!--<div class="dvi_test left"><span style="color:rgba(0,51,102,1);">Mobile Number : </span>&lowast; </div>
                            <div class="dvi_test left">
                              <input name="number" class="textbox " placeholder="Type Mobile Number here"/>
                            </div>-->
                            
                            <div class="dvi_test left"><span style="color:rgba(0,51,102,1);">Upload Excel : </span>&lowast; </div>
                                <div class="dvi_test left">
                                  <input name="file" class="textbox " type="file" />
                                </div>
          

   
   
    
    <ul>
                    <li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
                          <button type="submit" name="save" class=" height-35 div_btn">Save</button>
                    </li>

                            </ul>

                            </div></form>
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