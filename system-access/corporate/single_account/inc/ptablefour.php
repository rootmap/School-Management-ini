<table class="mws-table">
                            <tr>
                              <td style="font-weight:bolder;">Patient ID </td>
                              <td><?php echo $pid; ?></td>
                              <td colspan="2" style="font-weight:bolder;">Patient Name </td>
                              <td colspan="2"><?php echo $obj->SelectAllByVal($table4,"pid",$pid,"pname"); ?></td>
                              
                            </tr>
                            <tr>
                             
                              <td style="font-weight:bolder;">Age </td>
                              <td> 
                             <?php echo $obj->SelectAllByVal($table4,"pid",$pid,"age"); ?>
                              </td>
                              <td style="font-weight:bolder;">Sex</td>
                              <td><?php $gender=$obj->SelectAllByVal($table4,"pid",$pid,"sex"); if($gender==1) { echo "Male";}elseif($gender==2){ echo "Female";}else{ echo "None";}?>
                               </td>
                              <td style="font-weight:bolder;">Appoinment Date </td>
                              <td><?php echo $obj->SelectAllByVal($table4,"pid",$pid,"date"); ?></td>
                            </tr>
                            
                            <tr>
                             
                              <td style="font-weight:bolder;">Refferred By Prof/Dr. </td>
                              <td colspan="5"><?php echo $obj->SelectAllByVal($table4,"pid",$pid,"dname"); ?></td>
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
      <td style="font-weight:bolder;">Pregnancy test</td>
      <td><?php echo $obj->SelectAllByVal("amsit_urine_report","pid",$pid,"ptest"); ?></td>
      <td style="font-weight:bolder;">Pus cells</td>
      <td><?php echo $obj->SelectAllByVal("amsit_urine_report","pid",$pid,"pus"); ?></td>
    </tr>
    
    <tr>
      <td colspan="2" style="text-align:center; font-weight:bolder;"><a class="btn btn-danger">URINE R/M/E</a></td>
      <td style="font-weight:bolder;">RBC</td>
      <td><?php echo $obj->SelectAllByVal("amsit_urine_report","pid",$pid,"rbc"); ?></td>
    </tr>
    
    <tr>
      <td colspan="2"><a class="btn btn-danger" style="font-weight:bolder;">PHYSICAL</a></td>
      <td style="font-weight:bolder;">Epithelial cells</td>
      <td><?php echo $obj->SelectAllByVal("amsit_urine_report","pid",$pid,"epcel"); ?></td>
    </tr>
    
    <tr>
      <td style="font-weight:bolder;">Colour</td>
      <td><?php echo $obj->SelectAllByVal("amsit_urine_report","pid",$pid,"colore"); ?></td>
      <td style="font-weight:bolder;">Calcium oxalate</td>
      <td><?php echo $obj->SelectAllByVal("amsit_urine_report","pid",$pid,"calcium"); ?></td>
    </tr>
    
    <tr>
      <td style="font-weight:bolder;">Appearance</td>
      <td><?php echo $obj->SelectAllByVal("amsit_urine_report","pid",$pid,"appe"); ?></td>
      <td style="font-weight:bolder;">Triple phosphate</td>
      <td><?php echo $obj->SelectAllByVal("amsit_urine_report","pid",$pid,"trip"); ?></td>
    </tr>
    
    
    <tr>
      <td style="font-weight:bolder;">Sediment</td>
      <td><?php echo $obj->SelectAllByVal("amsit_urine_report","pid",$pid,"sediment"); ?></td>
      <td style="font-weight:bolder;">Casts</td>
      <td><?php echo $obj->SelectAllByVal("amsit_urine_report","pid",$pid,"casts"); ?></td>
    </tr>
    
    <tr>
      <td style="font-weight:bolder;">Sp: gravity</td>
      <td><?php echo $obj->SelectAllByVal("amsit_urine_report","pid",$pid,"sp"); ?></td>
      <td style="font-weight:bolder;">Sulphonamide crystals</td>
      <td><?php echo $obj->SelectAllByVal("amsit_urine_report","pid",$pid,"sulp"); ?></td>
    </tr>
    
    <tr>
      <td colspan="2"><a class="btn btn-danger" style="font-weight:bolder;">CHEMICAL</a></td>
      <td style="font-weight:bolder;">Amorphousphosph</td>
      <td><?php echo $obj->SelectAllByVal("amsit_urine_report","pid",$pid,"amor"); ?></td>
    </tr>
    
    <tr>
      <td style="font-weight:bolder;">Sugar</td>
      <td><?php echo $obj->SelectAllByVal("amsit_urine_report","pid",$pid,"sugar"); ?></td>
      <td style="font-weight:bolder;">Spermatoza</td>
      <td><?php echo $obj->SelectAllByVal("amsit_urine_report","pid",$pid,"seper"); ?></td>
    </tr>
    
    <tr>
      <td style="font-weight:bolder;">Albumin</td>
      <td><?php echo $obj->SelectAllByVal("amsit_urine_report","pid",$pid,"albumin"); ?></td>
      <td style="font-weight:bolder;">Others</td>
      <td><?php echo $obj->SelectAllByVal("amsit_urine_report","pid",$pid,"others"); ?></td>
    </tr>
    
    <tr>
      <td style="font-weight:bolder;">Reaction</td>
      <td><?php echo $obj->SelectAllByVal("amsit_urine_report","pid",$pid,"reaction"); ?></td>
      <td colspan="2"></td>
    </tr>
    
    <tr>
      <td style="font-weight:bolder;">Excess of phosphate</td>
      <td><?php echo $obj->SelectAllByVal("amsit_urine_report","pid",$pid,"excess"); ?></td>
      <td colspan="2"></td>
    
    </tr>
    
    </table>