<table class="mws-table">
                            <tr>
                              <td style="font-weight:bolder;">Patient ID </td>
                              <td><?php echo $pid; ?></td>
                              <td colspan="2" style="font-weight:bolder;">Patient Name </td>
                              <td colspan="2"><?php echo $obj->SelectAllByVal($table5,"pid",$pid,"pname"); ?></td>
                              
                            </tr>
                            <tr>
                             
                              <td style="font-weight:bolder;">Age </td>
                              <td> 
                             <?php echo $obj->SelectAllByVal($table5,"pid",$pid,"age"); ?>
                              </td>
                              <td style="font-weight:bolder;">Sex</td>
                              <td><?php $gender=$obj->SelectAllByVal($table5,"pid",$pid,"sex"); if($gender==1) { echo "Male";}elseif($gender==2){ echo "Female";}else{ echo "None";}?>
                               </td>
                              <td style="font-weight:bolder;">Appoinment Date </td>
                              <td><?php echo $obj->SelectAllByVal($table5,"pid",$pid,"date"); ?></td>
                            </tr>
                            
                            <tr>
                             
                              <td style="font-weight:bolder;">Refferred By Prof/Dr. </td>
                              <td colspan="5"><?php echo $obj->SelectAllByVal($table5,"pid",$pid,"dname"); ?></td>
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
                              <td colspan="4" style="text-align:center;"><a class="btn btn-danger" style="padding-left:200px; font-weight:bolder; padding-right:200px;"> STOOL R/M/E </a></td>
                            </tr>
                            
                            <tr style="text-align:center;">
                              <td colspan="2"><a class="btn btn-danger" style="padding-left:100px; font-weight:bolder; padding-right:100px;">Physical and chemical :</a></td>
                              <td colspan="2"><a class="btn btn-danger" style="padding-left:100px; font-weight:bolder; padding-right:100px;"> Microscopic : </a></td>
                            </tr>
                            
                            <tr>
                              <td style="font-weight:bolder;">Consistency :</td>
                              <td><?php echo $obj->SelectAllByVal($table5,"pid",$pid,"consistency"); ?></td>
                              <td style="font-weight:bolder;">Ova of :</td>
                              <td><?php echo $obj->SelectAllByVal($table5,"pid",$pid,"ova"); ?></td>
                            </tr>
                            
                            <tr>
                              <td style="font-weight:bolder;">Colour :</td>
                              <td><?php echo $obj->SelectAllByVal($table5,"pid",$pid,"colour"); ?></td>
                              <td style="font-weight:bolder;">Cysts of :</td>
                              <td><?php echo $obj->SelectAllByVal($table5,"pid",$pid,"cysts"); ?></td>
                            </tr>
                            
                            <tr>
                              <td style="font-weight:bolder;">Reaction :</td>
                              <td><?php echo $obj->SelectAllByVal($table5,"pid",$pid,"reaction"); ?></td>
                              <td style="font-weight:bolder;">Larva of :</td>
                              <td><?php echo $obj->SelectAllByVal($table5,"pid",$pid,"larva"); ?></td>
                            </tr>
                            
                            <tr>
                              <td style="font-weight:bolder;">Mucus :</td>
                              <td><?php echo $obj->SelectAllByVal($table5,"pid",$pid,"mucus"); ?></td>
                              <td style="font-weight:bolder;">RBC :</td>
                              <td><?php echo $obj->SelectAllByVal($table5,"pid",$pid,"rbc"); ?></td>
                            </tr>
                            
                            <tr>
                              <td style="font-weight:bolder;">Blood :</td>
                              <td><?php echo $obj->SelectAllByVal($table5,"pid",$pid,"blood"); ?></td>
                              <td style="font-weight:bolder;">Pus cell :</td>
                              <td><?php echo $obj->SelectAllByVal($table5,"pid",$pid,"pus"); ?></td>
                            </tr>
                            
                            <tr>
                              <td style="font-weight:bolder;">Occult blood :</td>
                              <td><?php echo $obj->SelectAllByVal($table5,"pid",$pid,"occult"); ?></td>
                              <td style="font-weight:bolder;">Vegetable cell :</td>
                              <td><?php echo $obj->SelectAllByVal($table5,"pid",$pid,"vegetable"); ?></td>
                            </tr>
                            
                            <tr>
                              <td style="font-weight:bolder;">Reducing :</td>
                              <td><?php echo $obj->SelectAllByVal($table5,"pid",$pid,"reducing"); ?></td>
                              <td style="font-weight:bolder;">Fat Globules :</td>
                              <td><?php echo $obj->SelectAllByVal($table5,"pid",$pid,"fat"); ?></td>
                            </tr>
                            
                            <tr>
                              <td style="font-weight:bolder;">Substance :</td>
                              <td><?php echo $obj->SelectAllByVal($table5,"pid",$pid,"substance"); ?></td>
                              <td style="font-weight:bolder;">Others :</td>
                              <td><?php echo $obj->SelectAllByVal($table5,"pid",$pid,"others"); ?></td>
                            </tr>
                            
                        </table>