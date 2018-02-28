<?php
include_once('class/auth.php');
$table="ams_singup";
if(isset($_GET['general']))
{
	
	$array=array("id"=>$_GET['id'],"board_id"=>$_GET['genera']);
	if($obj->update($table,$array)==1)
	
	
	  $count=count($_GET['general']);
      if($count!==0)
	  {
		echo $obj->Success("General Institute  Active Successfully",$obj->filename());	
	  }
	     else
	  {
		echo $obj->Error("General Institute  Active Failed",$obj->filename());	
	  }
	  
	
}
if(isset($_GET['general1']))
{
	
	$array=array("id"=>$_GET['id'],"board_id"=>$_GET['generaa']);
	if($obj->update($table,$array)==1)
	
	
	  $count=count($_GET['generaa']);
      if($count!==0)
	  {
		echo $obj->Success("Technical & Engineering Active Successfully",$obj->filename());	
	  }
	     else
	  {
		echo $obj->Error("Technical & Engineering Active Failed",$obj->filename());	
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
        <div id="body_container">
            <div class="eims_soft_head_div">
                <?php include('class/homepage_header.php'); ?>
            </div>
            <div class="st_detail_body">
                <div class="st_detail_topbar ">
                    <a href="#">
                        <div class="topbar_small_div left">
                            <img src="images/Setting_icon.png"/>
                            <div class="topbar_small_div_text left height-30">SETTING</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>MARKS SHEET SETTINGS</h2></div>
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
                                           
                    <div class="attendance_mode_div shadow_inner color_1" style="margin-top: 20px; ">
                        <div class="admission_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30"><left>Exam Tabulation Mark Sheet Settings :</left></h2>
                        </div>
                        <div class="height-100"></div>
                          
                        <div class="admission_mode_form_div width-col4 auto-position">
                        <?php
						  $array=array("eiin_number"=>$school); 
						  $data=$obj->SelectAllByID($table,$array);
						  if(!empty($data))
						  foreach ($data as $row):
						?> 
                            <div class="left">
                              <label>
                                <a name="generall" href="mark_shit_settings.php?general=yeas&amp;genera=2&id=<?php echo $row->id; ?>" class="autoposition"> 
                               <?php 
				$ex=$obj->exists_multiple($table,array("board_id"=>2,"id"=>$row->id));
				if($ex==0){
				 ?>
                 <span>  <input type="radio" /> General Institute </span>
				 <?php }else{ ?>
                 <span style="color:#C00; font-size:24px;">  <input checked="checked" type="radio" /> General Institute </span>
				 <?php } ?></a>
                                </label>
                            </div>
                            <div class=" right">
                               <label>
                                 <a name="general" href="mark_shit_settings.php?general1=yeas&amp;generaa=3&id=<?php echo $row->id; ?>" class="autoposition">
                            <?php 
				$ex=$obj->exists_multiple($table,array("board_id"=>3,"id"=>$row->id));
				if($ex==0){
				 ?>
                 <span> <input type="radio" /> Technical & Engineering</span>
				 <?php }else{ ?>
                 <span style="color:#C00; font-size:24px;"> <input checked="checked" type="radio" /> Technical & Engineering</span>
				 <?php } ?></a>
                               </label>
                            </div>
                            <?php endforeach; ?>
                           <div class="clear height-100"></div>
    
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