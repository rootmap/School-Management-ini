<div id="option" class="heid_min">
        <ul style="height:100px;">
        <li class="add_st_form_div_label_view_details width-label-50 left">Session:</li>
        <li class="add_st_form_div_label_view_details width-label-100 left">
            <select name="session" class="border_red1" id="session" onchange="showcls(this.value)" >
                <option>Session</option>
                <?php
                $array=array("school_id"=>$school); 
				$session=$obj->SelectAllByID("ams_session",$array);
				if(!empty($session))
				foreach($session as $ses):
				?>
        <option value="<?php echo $ses->id;?>"><?php echo $ses->name;?></option>
        <?php endforeach; ?>
                
            </select>
        </li>
   <li class="add_st_form_div_label_view_details width-label-7 left">Class/Course:</li>
        <li class="add_st_form_div_label_view_details width-label-100 left">
            <select name="class" id="class" onchange="showexam1(this.value)" class="border_red1" >
                <option>Class/Course</option>
               
                
            </select>
        </li>
      
        <li class="add_st_form_div_label_view_details width-label-100 left">Exam Module  :</li>
        <li class="add_st_form_div_label_view_details width-label-100 left">
            <select name="exam1" id="exam1" onchange="marksselect(this.value)" class="border_red1" >
                <option>Select Exam</option>
                
                
            </select>
        </li>
        </ul>
       <div class="w">Exam Marks Configuration</div>
       
        <form action="" method="post" name="mm"> 
       <div class="w4">
            <div class="w_w">Marks Select to Subject </div>
              <div class="ww">
                <div class="left center w6">Subject Select</div>
                
                 <div class="left center w7">Full Marks</div>
                 
                  <div class="left center w7">Pass Marks</div>
                  
               <div class="cl"></div>   
             </div>                  
           <ul id="marks" style="margin-top:40px; color:rgba(0,0,0,1); margin-left:40px;">
        
          </ul>
     </div>
     <button style="border:rgba(0,102,102,1) 1px solid; width:80px; margin-top:10px; height:30px; background:rgba(255,255,255,1); padding:0px; color:rgba(0,51,102,1);" onclick="('2')" name="save" type="submit" class="right">Save</button>
      
</form>
       
   <div class="cl"></div>    
</div>