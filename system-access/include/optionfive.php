<div id="option" class="heid_min">
        <ul style="height:80px;" class="margin_left105">
        <li class="add_st_form_div_label_view_details width-label-70 left">Session:</li>
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
            <select name="class" id="class" onchange="add_percentage(this.value)" class="border_red1" >
                <option>Class</option>
               
                
            </select>
        </li>
        <!--<li class="add_st_form_div_label_view_details width-label-70 left">Group:</li>
        <li class="add_st_form_div_label_view_details width-label-100 left">
            <select name="group" id="group" onchange="selemode(this.value)"  class="border_red1" >
                <option>Group</option>
                
                
            </select>
        </li>-->
        </ul>
        <div class="w">Add Marks (%) with Final/Annual Exam  </div>
        <!--<div class="ww">
        <div class="w1">Select Mode </div>
        <div class="w3" style="width:40%;">Marks (%) Count of Final Exam</div>
        <div class="cl"></div>   
        </div>-->
        <div id="wrong"></div>
        <div id="add_percentage" class="wwww">
         <!-- Select Classwise subject starts here------------------------------------------------------------------------------------>
                    <div class="width-col4 auto_pos_x margin_top10 shadow_inner  bold subject_table">
                        <table cellpadding="0" cellspacing="1" border="0" class="display" id="example">
                                    <thead>
                                        <tr>
                                            <th>S/L</th>
                                            <th>Exam Modul/Name</th>
                                            <th> Marks( % to be added with Final/Anual exam ) </th>
                                        </tr>
                                    </thead>
                                    <tbody id="show_exam_list">
                                    </tbody>
                                </table>
                            <div style="clear: both; display: block; width: 100%; padding: 10px; text-align: left;" class="">
                        <button type="button" onclick="exampercentage()" id="save_record" class="width-label-80 button-success pure-button auto_pos_y"><i class="fa fa-floppy-o margin_right5"></i>Save</button>
                    </div>
                        <div id="wrong2"></div>
                    </div>
                    <!-- Select Classwise subject ends here------------------------------------------------------------------------------------>
         <div class="cl"></div> 
        </div>
        
        

       
   <div class="cl"></div>    
</div>