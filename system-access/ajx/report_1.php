<?php
include_once('../class/auth.php');
$table2="ams_report";
$table3="ams_report2";
extract($_GET);
if($rept!='')
/*{
	echo $name .$rept;
}else{ echo "ss";}*/
{
		   
	       if($obj->exists_multiple($table2,array("name"=>$name,"school_id"=>$school))==0 && !empty($name))
			
	{
        	if($obj->insert($table2,array("name"=>$name,"school_id"=>$school,"date"=>date('Y-m-d'),"status"=>1))==1)  { ?>
                         <ul>
                             <form action="" method="post" name="report">
                              <li class="margin-top-10 center">
                               
                                <input type="text" class="width-label-100 height-30 font_11 center" placeholder="Create Tex" id="name" name="name"  />
                                <button onClick="reportsave('3')" style="height:20px; width:20px; float:right;" type="button" name="creat" class=""><i class="fa fa-check-square-o"></i></button>
                              </li>
                             <span style="font-size:12px; color:rgba(0,102,0,1);">Successfully Save...</span>
                               </form>
                              <?php 
							 $array=array("school_id"=>$school);
							 $data=$obj->SelectAllByID($table2,$array);
							 if(!empty($data))
							 foreach ($data as $rowe ): ?>
                              <li id="reportt" class="margin-top-10" style="font-size:11px;">
                              
                                <label style="padding-left:5px;">
                                    
                                <input onclick="reportselect('5','<?php echo $rowe->id; ?>')" type="checkbox" value="<?php echo $rowe->id; ?>" name="subjec"  />  <?php echo $rowe->name; ?> 
                                 </label>
                                 <span class="right" ><a onClick="newdelet('3','<?php echo $rowe->id; ?>')" href="#" name="creat" class="colore-red"><i class="fa fa-times"></i></a></span>
                              </li>
                              
                              <?php endforeach; ?>
                              </ul>
 <?php } ?>
 <?php }else{  ?>
        <ul>
          <li class="margin-top-10 center">
           
            <input type="text" class="width-label-100 height-30 font_11 center" placeholder="Create Tex" id="name" name="name"  />
            <button onClick="reportsave('3')" style="height:20px; width:20px; float:right;" type="button" name="creat" class=""><i class="fa fa-check-square-o"></i></button>
          </li>
          <span style="font-size:12px; color:rgba(204,0,0,1);">Sumthing Wrong Pleas Try Again..</span>
          <?php 
         $array=array("school_id"=>$school);
         $data=$obj->SelectAllByID($table2,$array);
         if(!empty($data))
         foreach ($data as $rowe ):
        ?>
          
          <li id="reportt" class="margin-top-10" style="font-size:11px; padding-left:3px;">
            <label style="padding-left:5px;">
              <input onclick="reportselect('5','<?php echo $rowe->id; ?>')" type="checkbox" value="<?php echo $rowe->id; ?>" name="subjec"  />  <?php echo $rowe->name; ?>
             </label>
             <span class="right" ><a onClick="newdelet('3','<?php echo $rowe->id; ?>')" href="#" name="creat" class="colore-red"><i class="fa fa-times"></i></a></span>
          </li>
          <?php endforeach; ?>
          </ul>
    <?php
		
	}
}
?>