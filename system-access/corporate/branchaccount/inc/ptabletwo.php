<table class="mws-table">
                            <tr>
                              <td style="font-weight:bolder;">Patient ID </td>
                              <td><?php echo $pid; ?></td>
                              <td colspan="2" style="font-weight:bolder;">Patient Name </td>
                              <td colspan="2"><?php echo $obj->SelectAllByVal($table2,"pid",$pid,"pname"); ?></td>
                              
                            </tr>
                            <tr>
                             
                              <td style="font-weight:bolder;">Age </td>
                              <td> 
                             <?php echo $obj->SelectAllByVal($table2,"pid",$pid,"age"); ?>
                              </td>
                              <td style="font-weight:bolder;">Sex</td>
                              <td><?php $gender=$obj->SelectAllByVal($table2,"pid",$pid,"sex"); if($gender==1) { echo "Male";}elseif($gender==2){ echo "Female";}else{ echo "None";}?>
                               </td>
                              <td style="font-weight:bolder;">Appoinment Date </td>
                              <td><?php echo $obj->SelectAllByVal($table2,"pid",$pid,"date"); ?></td>
                            </tr>
                            
                            <tr>
                             
                              <td style="font-weight:bolder;">Refferred By Prof/Dr. </td>
                              <td colspan="5"><?php echo $obj->SelectAllByVal($table2,"pid",$pid,"dname"); ?></td>
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
                              <td colspan="4"> <a class="btn btn-danger"> PHYSICAL</a></td>
                            </tr>
                            
                            <tr>
                              <td style="font-weight:bolder;">C.REACTIVE PROTINE</td>
                              <td><?php echo $obj->SelectAllByVal($table2,"pid",$pid,"dname"); ?></td>
                              <td style="font-weight:bolder;">Widal Test :</td>
                              <td><?php echo $obj->SelectAllByVal($table2,"pid",$pid,"dname"); ?></td>
                            </tr>
                            
                            <tr>
                              <td style="font-weight:bolder;">A S O TITRE</td>
                              <td><?php echo $obj->SelectAllByVal($table2,"pid",$pid,"aso"); ?></td>
                              <td style="font-weight:bolder;">To :</td>
                              <td><?php echo $obj->SelectAllByVal($table2,"pid",$pid,"to"); ?></td>
                            </tr>
                            
                            <tr>
                              <td style="font-weight:bolder;">GROUP RH</td>
                              <td><?php echo $obj->SelectAllByVal($table2,"pid",$pid,"group"); ?></td>
                              <td style="font-weight:bolder;">TH :</td>
                              <td><?php echo $obj->SelectAllByVal($table2,"pid",$pid,"th"); ?></td>
                            </tr>
                            
                            <tr>
                              <td style="font-weight:bolder;">VDRL</td>
                              <td><?php echo $obj->SelectAllByVal($table2,"pid",$pid,"vdrl"); ?></td>
                              <td style="font-weight:bolder;">AH</td>
                              <td><?php echo $obj->SelectAllByVal($table2,"pid",$pid,"ah"); ?></td>
                            </tr>
                            
                            <tr>
                              <td style="font-weight:bolder;">HBs Ag</td>
                              <td><?php echo $obj->SelectAllByVal($table2,"pid",$pid,"hbs"); ?></td>
                              <td style="font-weight:bolder;">BH :</td>
                              <td><?php echo $obj->SelectAllByVal($table2,"pid",$pid,"bh"); ?></td>
                            </tr>
                            
                            <tr>
                              <td style="font-weight:bolder;">RA (RF)</td>
                              <td><?php echo $obj->SelectAllByVal($table2,"pid",$pid,"ra"); ?></td>
                              <td >OPINION</td>
                              <td><?php echo $obj->SelectAllByVal($table2,"pid",$pid,"opinion"); ?> </td>
                            </tr>
                            
                            </table>