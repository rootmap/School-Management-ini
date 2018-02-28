<!-- Panels Start --> 
<div class="mws-panel-body no-padding" id="chackchack">

    <form id="mws-validate" name="frmMr"  class="mws-form" action="" method="post">
                               
            
<div class="mws-panel-body no-padding">
<table class="mws-table">
                            <tr>
                              <td>Patient ID </td>
                              <td><input type="text" style="width:60px;" value="<?php echo $pid; ?>" name="pid" id="pid" placeholder="ID"> <button class="btn btn-danger" type="button" onClick="chack('2')">Check</button></td>
                              <td colspan="2">Patient Name </td>
                              <td colspan="2"><input type="text" placeholder="Patient Name" name="pname" id="pname" value="<?php echo $obj->SelectAllByVal("amsit_urine_report","pid",$pid,"pname"); ?>"></td>
                              
                            </tr>
                            <tr>
                             
                              <td>Age </td>
                              <td> 
                              <select name="age" id="age" style="font-weight:bold;">
                               <option value="<?php echo $obj->SelectAllByVal("amsit_urine_report","pid",$pid,"age"); ?>"><?php echo $obj->SelectAllByVal("amsit_urine_report","pid",$pid,"age"); ?></option>
                               <?php for ($i=1; $i <=200; $i++) { ?>
                               <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                               <?php } ?>     
                              </select></td>
                              <td>Sex</td>
                              <td><select name="sex" id="sex" style="font-weight:bold;">
                               <option value="<?php echo $obj->SelectAllByVal("amsit_urine_report","pid",$pid,"sex"); ?>"><?php $gender=$obj->SelectAllByVal("amsit_urine_report","pid",$pid,"sex"); if($gender==1) { echo "Male";}elseif($gender==2){ echo "Female";}else{ echo "None";}?></option>
                               <option value="1">Male</option>
                               <option value="2">FeMale</option>
                              </select></td>
                              <td>Appoinment Date </td>
                              <td><input type="text" class="mws-datepicker" name="joiningdate" id="joiningdate" style="width:80px;" value="<?php echo date('Y-m-d');?>" ></td>
                            </tr>
                            
                            <tr>
                             
                              <td>Refferred By Prof/Dr. </td>
                              <td colspan="5"><input value="<?php echo $obj->SelectAllByVal("amsit_urine_report","pid",$pid,"dname"); ?>" type="text" placeholder="Refferred By Prof/Dr." style="width:600px;" name="dname" id="dname"></td>
                            </tr>
                        </table>
<table class="mws-table">
    <tr style="font-weight:bolder;">
      <td>TEST</td>
      <td>RUSELT</td>
      <td>TEST</td>
      <td>RUSELT</td>
    </tr>
    
    <tr>
      <td colspan="2"><a class="btn btn-danger" style="font-weight:bolder;">PREGNANCY TEST</a></td>
      <td colspan="2"><a class="btn btn-danger" style="font-weight:bolder;"> MICROSCOPIC</a></td>
    </tr>
    
    <tr>
      <td>Pregnancy test</td>
      <td><input placeholder="Pregnancy test" name="ptest" type="text" style="width:250px;" value="<?php echo $obj->SelectAllByVal("amsit_urine_report","pid",$pid,"ptest"); ?>"/></td>
      <td>Pus cells</td>
      <td><input type="text" name="pus" placeholder="Pus cells" style="width:250px;" value="<?php echo $obj->SelectAllByVal("amsit_urine_report","pid",$pid,"pus"); ?>"/></td>
    </tr>
    
    <tr>
      <td colspan="2" style="text-align:center; font-weight:bolder;"><a class="btn btn-danger">URINE R/M/E</a></td>
      <td>RBC</td>
      <td><input type="text" name="rbc" placeholder="RBC" style="width:250px;" value="<?php echo $obj->SelectAllByVal("amsit_urine_report","pid",$pid,"rbc"); ?>"/></td>
    </tr>
    
    <tr>
      <td colspan="2"><a class="btn btn-danger" style="font-weight:bolder;">PHYSICAL</a></td>
      <td>Epithelial cells</td>
      <td><input type="text" name="epcel" placeholder="Epithelial cells" style="width:250px;" value="<?php echo $obj->SelectAllByVal("amsit_urine_report","pid",$pid,"epcel"); ?>"/></td>
    </tr>
    
    <tr>
      <td>Colour</td>
      <td><input type="text" name="colore" placeholder="Colour" style="width:250px;" value="<?php echo $obj->SelectAllByVal("amsit_urine_report","pid",$pid,"colore"); ?>"/></td>
      <td>Calcium oxalate</td>
      <td><input type="text" name="calcium" placeholder="Calcium oxalate" style="width:250px;" value="<?php echo $obj->SelectAllByVal("amsit_urine_report","pid",$pid,"calcium"); ?>"/></td>
    </tr>
    
    <tr>
      <td>Appearance</td>
      <td><input type="text" name="appe" placeholder="Appearance" style="width:250px;" value="<?php echo $obj->SelectAllByVal("amsit_urine_report","pid",$pid,"appe"); ?>"/></td>
      <td>Triple phosphate</td>
      <td><input type="text" name="trip" placeholder="Triple phosphate" style="width:250px;" value="<?php echo $obj->SelectAllByVal("amsit_urine_report","pid",$pid,"trip"); ?>"/></td>
    </tr>
    
    
    <tr>
      <td>Sediment</td>
      <td><input type="text" name="sediment" placeholder="Sediment" style="width:250px;" value="<?php echo $obj->SelectAllByVal("amsit_urine_report","pid",$pid,"sediment"); ?>"/></td>
      <td>Casts</td>
      <td><input type="text" name="casts" placeholder="Casts" style="width:250px;" value="<?php echo $obj->SelectAllByVal("amsit_urine_report","pid",$pid,"casts"); ?>"/></td>
    </tr>
    
    <tr>
      <td>Sp: gravity</td>
      <td><input type="text" name="sp" placeholder="Sp: gravity" style="width:250px;" value="<?php echo $obj->SelectAllByVal("amsit_urine_report","pid",$pid,"sp"); ?>"/></td>
      <td>Sulphonamide crystals</td>
      <td><input type="text" name="sulp" placeholder="Sulphonamide crystals" style="width:250px;" value="<?php echo $obj->SelectAllByVal("amsit_urine_report","pid",$pid,"sulp"); ?>"/></td>
    </tr>
    
    <tr>
      <td colspan="2"><a class="btn btn-danger" style="font-weight:bolder;">CHEMICAL</a></td>
      <td>Amorphousphosph</td>
      <td><input type="text" name="amor" placeholder="Amorphousphosph" style="width:250px;" value="<?php echo $obj->SelectAllByVal("amsit_urine_report","pid",$pid,"amor"); ?>"/></td>
    </tr>
    
    <tr>
      <td>Sugar</td>
      <td><input type="text" name="sugar" placeholder="Sugar" style="width:250px;" value="<?php echo $obj->SelectAllByVal("amsit_urine_report","pid",$pid,"sugar"); ?>"/></td>
      <td>Spermatoza</td>
      <td><input type="text" name="seper" placeholder="Spermatoza" style="width:250px;" value="<?php echo $obj->SelectAllByVal("amsit_urine_report","pid",$pid,"seper"); ?>"/></td>
    </tr>
    
    <tr>
      <td>Albumin</td>
      <td><input type="text" name="albumin" placeholder="Albumin" style="width:250px;" value="<?php echo $obj->SelectAllByVal("amsit_urine_report","pid",$pid,"albumin"); ?>"/></td>
      <td>Others</td>
      <td><input type="text" name="others" placeholder="Others" style="width:250px;" value="<?php echo $obj->SelectAllByVal("amsit_urine_report","pid",$pid,"others"); ?>"/></td>
    </tr>
    
    <tr>
      <td>Reaction</td>
      <td><input type="text" name="reaction" placeholder="Reaction" style="width:250px;" value="<?php echo $obj->SelectAllByVal("amsit_urine_report","pid",$pid,"reaction"); ?>"/></td>
      <td colspan="2"></td>
    </tr>
    
    <tr>
      <td>Excess of phosphate</td>
      <td><input type="text" name="excess" placeholder="Excess of phosphate" style="width:250px;" value="<?php echo $obj->SelectAllByVal("amsit_urine_report","pid",$pid,"excess"); ?>"/></td>
      <td colspan="2"></td>
    
    </tr>
    
    </table>

</div>
           
  <div class="mws-button-row" style="padding-left:400px;"> 
    <input type="reset" value="RESET" class="btn btn-danger">
    <input type="submit" value="ADD" class="btn btn-success">
    <input type="submit"  id="btn1" value="SAVE" class="btn btn-success" name="submit">
    <input type="reset" value="CLOSE" class="btn btn-danger">
  </div>
</div>
</form>


<!-- Panels End -->