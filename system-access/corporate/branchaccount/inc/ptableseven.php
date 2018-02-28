<table class="mws-table">
                            <tr>
                              <td style="font-weight:bolder;">Patient ID </td>
                              <td><?php echo $pid; ?></td>
                              <td colspan="2" style="font-weight:bolder;">Patient Name </td>
                              <td colspan="2"><?php echo $obj->SelectAllByVal($table7,"pid",$pid,"pname"); ?></td>
                              
                            </tr>
                            <tr>
                             
                              <td style="font-weight:bolder;">Age </td>
                              <td> 
                             <?php echo $obj->SelectAllByVal($table7,"pid",$pid,"age"); ?>
                              </td>
                              <td style="font-weight:bolder;">Sex</td>
                              <td><?php $gender=$obj->SelectAllByVal($table7,"pid",$pid,"sex"); if($gender==1) { echo "Male";}elseif($gender==2){ echo "Female";}else{ echo "None";}?>
                               </td>
                              <td style="font-weight:bolder;">Appoinment Date </td>
                              <td><?php echo $obj->SelectAllByVal($table7,"pid",$pid,"date"); ?></td>
                            </tr>
                            
                            <tr>
                             
                              <td style="font-weight:bolder;">Refferred By Prof/Dr. </td>
                              <td colspan="5"><?php echo $obj->SelectAllByVal($table7,"pid",$pid,"dname"); ?></td>
                            </tr>
                        </table>
 <table class="mws-table" style="width:80%; margin:70px auto 70px auto;">
                            <tr>
                              <td colspan="2"  style="font-weight:bolder;">Route : </td>
                              <td colspan="2">Indradermal</td>
                            </tr>
                            <tr>
                              <td colspan="2"  style="font-weight:bolder;">Reagent : </td>
                              <td colspan="2">ppd Standised by who</td>
                            </tr>
                            <tr>
                              <td colspan="4"  style="font-weight:bolder;">Amount of injections 5 tu 0.1 ml</td>
                            </tr>
                            <tr>
                              <td style="font-weight:bolder;">Injection Give :at:</td>
                              <td><?php echo $obj->SelectAllByVal($table7,"pid",$pid,"injection"); ?></td>
                              <td style="font-weight:bolder;">Am/Pm/On</td>
                              <td><?php echo $obj->SelectAllByVal($table7,"pid",$pid,"am"); ?></td>
                            </tr>
                            
                            <tr>
                              <td style="font-weight:bolder;">Result Taken :At :</td>
                              <td><?php echo $obj->SelectAllByVal($table7,"pid",$pid,"resutl"); ?></td>
                              <td style="font-weight:bolder;">Am/Pm/On</td>
                              <td><?php echo $obj->SelectAllByVal($table7,"pid",$pid,"pm"); ?></td>
                            </tr>
                            
                            <tr>
                              <td style="font-weight:bolder;">Result : At :</td>
                              <td><?php echo $obj->SelectAllByVal($table7,"pid",$pid,"resultat"); ?></td>
                              <td style="font-weight:bolder;">Home The Injection Is </td>
                              <td><?php echo $obj->SelectAllByVal($table7,"pid",$pid,"injectionis"); ?> / mm Diameter</td>
                            </tr>
                            
                            <tr>
                              <td colspan="4"  style="font-weight:bolder;">Comment : Normal 6-10 mm Diameter </td>
                            </tr>
                         </table>