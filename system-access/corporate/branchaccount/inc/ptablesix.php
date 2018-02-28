<table class="mws-table">
                            <tr>
                              <td style="font-weight:bolder;">Patient ID </td>
                              <td><?php echo $pid; ?></td>
                              <td colspan="2" style="font-weight:bolder;">Patient Name </td>
                              <td colspan="2"><?php echo $obj->SelectAllByVal($table6,"pid",$pid,"pname"); ?></td>
                              
                            </tr>
                            <tr>
                             
                              <td style="font-weight:bolder;">Age </td>
                              <td> 
                             <?php echo $obj->SelectAllByVal($table6,"pid",$pid,"age"); ?>
                              </td>
                              <td style="font-weight:bolder;">Sex</td>
                              <td><?php $gender=$obj->SelectAllByVal($table6,"pid",$pid,"sex"); if($gender==1) { echo "Male";}elseif($gender==2){ echo "Female";}else{ echo "None";}?>
                               </td>
                              <td style="font-weight:bolder;">Appoinment Date </td>
                              <td><?php echo $obj->SelectAllByVal($table6,"pid",$pid,"date"); ?></td>
                            </tr>
                            
                            <tr>
                             
                              <td style="font-weight:bolder;">Refferred By Prof/Dr. </td>
                              <td colspan="5"><?php echo $obj->SelectAllByVal($table6,"pid",$pid,"dname"); ?></td>
                            </tr>
                        </table>
<table class="mws-table" style="width:60%; margin-left:auto; margin-right:auto;">
                            <tr style="font-weight:bolder;">
                              <td>TEST</td>
                              <td>RUSELT</td>
                            </tr>
                            
                            <tr>
                              <td style="font-weight:bolder;">METHOD OF COLLECTION :</td>
                              <td ><?php echo $obj->SelectAllByVal($table6,"pid",$pid,"method"); ?></td>
                            </tr>
                            
                            <tr>
                              <td style="font-weight:bolder;">TIME COLLECTION :</td>
                              <td ><?php echo $obj->SelectAllByVal($table6,"pid",$pid,"timeco"); ?></td>
                            </tr>
                            <tr>
                              <td style="font-weight:bolder;">TIME OF EXAMINATION :</td>
                              <td ><?php echo $obj->SelectAllByVal($table6,"pid",$pid,"timee"); ?></td>
                            </tr>
                            <tr>
                              <td style="font-weight:bolder;">VOLUME :</td>
                              <td ><?php echo $obj->SelectAllByVal($table6,"pid",$pid,"volume"); ?></td>
                            </tr>
                            <tr>
                              <td style="font-weight:bolder;">COLOUR :</td>
                              <td ><?php echo $obj->SelectAllByVal($table6,"pid",$pid,"colour"); ?></td>
                            </tr>
                            <tr>
                              <td style="font-weight:bolder;">ODOUR :</td>
                              <td ><?php echo $obj->SelectAllByVal($table6,"pid",$pid,"odour"); ?></td>
                            </tr>
                            <tr>
                              <td style="font-weight:bolder;">VISCOSITY :</td>
                              <td ><?php echo $obj->SelectAllByVal($table6,"pid",$pid,"visc"); ?></td>
                            </tr>
                            <tr>
                              <td style="font-weight:bolder;">REACTION :</td>
                              <td ><?php echo $obj->SelectAllByVal($table6,"pid",$pid,"reaction"); ?></td>
                            </tr>
                            <tr>
                              <td style="font-weight:bolder;">SPERMATOZA COUNT :</td>
                              <td ><?php echo $obj->SelectAllByVal($table6,"pid",$pid,"motile"); ?></td>
                            </tr>
                            <tr>
                              <td style="font-weight:bolder;">ACTIVE MOTILE :</td>
                              <td ><?php echo $obj->SelectAllByVal($table6,"pid",$pid,"dname"); ?></td>
                            </tr>
                            <tr>
                              <td style="font-weight:bolder;">S.ACTIVE MOTILE :</td>
                              <td ><?php echo $obj->SelectAllByVal($table6,"pid",$pid,"sactive"); ?></td>
                            </tr>
                            <tr>
                              <td style="font-weight:bolder;">DEAD :</td>
                              <td ><?php echo $obj->SelectAllByVal($table6,"pid",$pid,"dead"); ?></td>
                            </tr>
                            <tr>
                              <td style="font-weight:bolder;">ABNORMALS :</td>
                              <td ><?php echo $obj->SelectAllByVal($table6,"pid",$pid,"abno"); ?></td>
                            </tr>
                            <tr>
                              <td style="font-weight:bolder;">PUS CELLS :</td>
                              <td ><?php echo $obj->SelectAllByVal($table6,"pid",$pid,"cells"); ?></td>
                            </tr>
                            <tr>
                              <td style="font-weight:bolder;">EPI CELL :</td>
                              <td ><?php echo $obj->SelectAllByVal($table6,"pid",$pid,"cell"); ?></td>
                            </tr>
                            <tr>
                              <td style="font-weight:bolder;">OPINION :</td>
                              <td ><?php echo $obj->SelectAllByVal($table6,"pid",$pid,"option"); ?></td>
                            </tr>
                            
                            </table>