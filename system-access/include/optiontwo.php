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
            <select name="exam1" id="exam1" onchange="allsubject(this.value)" class="border_red1" >
                <option>Select Exam</option>
                
                
            </select>
        </li>
        </ul>
       
       
        <div class="w">Exam Subject Configuration </div>
        <div class="ww">
            <div class="w1"> Exam’s Subject Name</div>
            <div class="w3">Selected Exam Subject</div>
            <div class="cl"></div>   
        </div>
        
        <div class="www">
         <div id="allsubject" style="width:200px; margin-left:-25px;" class="w2 left"></div>
         <div id="setp" class="w2 right"></div>
         <div class="cl"></div> 
        </div>

       
   <div class="cl"></div>    
</div>