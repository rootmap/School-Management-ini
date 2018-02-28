<table class="mws-table">
                            <tr>
                              <td style="font-weight:bolder;">Patient ID </td>
                              <td><?php echo $pid; ?></td>
                              <td colspan="2" style="font-weight:bolder;">Patient Name </td>
                              <td colspan="2"><?php echo $obj->SelectAllByVal($table1,"pid",$pid,"pname"); ?></td>
                              
                            </tr>
                            <tr>
                             
                              <td style="font-weight:bolder;">Age </td>
                              <td> 
                             <?php echo $obj->SelectAllByVal($table1,"pid",$pid,"age"); ?>
                              </td>
                              <td style="font-weight:bolder;">Sex</td>
                              <td><?php $gender=$obj->SelectAllByVal($table1,"pid",$pid,"sex"); if($gender==1) { echo "Male";}elseif($gender==2){ echo "Female";}else{ echo "None";}?>
                               </td>
                              <td style="font-weight:bolder;">Appoinment Date </td>
                              <td><?php echo date('Y-m-d');?></td>
                            </tr>
                            
                            <tr>
                             
                              <td style="font-weight:bolder;">Refferred By Prof/Dr. </td>
                              <td colspan="5"><?php echo $obj->SelectAllByVal($table1,"pid",$pid,"dname"); ?>dffd</td>
                            </tr>
                        </table>
<table class="mws-table">
                            <tr style="font-weight:bolder;">
                              <td>TEST</td>
                              <td>NORMAL VALUE</td>
                              <td>RUSELT</td>
                              <td>TEST</td>
                              <td>NORMAL VALUE</td>
                              <td>RUSELT</td>
                            </tr>
                            
                            <tr>
                              <td style="font-weight:bolder;">ESR</td>
                              <td>M 0-10mm F 1-15mm</td>
                              <td><?php echo $obj->SelectAllByVal($table1,"pid",$pid,"esc"); ?>"</td>
                              <td colspan="3"> <a class="btn btn-danger"> DEFFERENTIAL COUNTS (WBC)</a></td>
                            </tr>
                            
                            <tr>
                              <td style="font-weight:bolder;">HEAMOGLOBIN</td>
                              <td>M 12-16gm/dl F 10-12gm/dl</td>
                              <td><?php echo $obj->SelectAllByVal($table1,"pid",$pid,"hemo"); ?></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            
                            <tr>
                             <td colspan="3"><a class="btn btn-danger"> TOTAL COUNTS</a></td>
                             <td style="font-weight:bolder;">Polymorphs</td>
                              <td>40-75%</td>
                              <td><?php echo $obj->SelectAllByVal($table1,"pid",$pid,"poly"); ?></td>
                            </tr>
                            
                            <tr>
                             <td style="font-weight:bolder;">RBC</td>
                             <td>4.5-6.5*10 <sup>12</sup> L</td>
                             <td><?php echo $obj->SelectAllByVal($table1,"pid",$pid,"rbc"); ?></td>
                             <td style="font-weight:bolder;">Lymphocyte</td>
                              <td>20-50%</td>
                              <td><?php echo $obj->SelectAllByVal($table1,"pid",$pid,"lym"); ?></td>
                            </tr>
                            
                            <tr>
                             <td style="font-weight:bolder;">WBC</td>
                             <td>4.11-*10<sup>9</sup>  L</td>
                             <td><?php echo $obj->SelectAllByVal($table1,"pid",$pid,"wbc"); ?></td>
                             <td style="font-weight:bolder;">Monocyte</td>
                              <td>2-10%</td>
                              <td><?php echo $obj->SelectAllByVal($table1,"pid",$pid,"mono"); ?></td>
                            </tr>
                            
                            <tr>
                             <td style="font-weight:bolder;">PLATELETS COUNT</td>
                             <td>4150,000-400,000/cumm</td>
                             <td><?php echo $obj->SelectAllByVal($table1,"pid",$pid,"pleat"); ?></td>
                             <td style="font-weight:bolder;">Eosinophil</td>
                              <td>1-8%</td>
                              <td><?php echo $obj->SelectAllByVal($table1,"pid",$pid,"eosi"); ?></td>
                            </tr>
                            
                            <tr>
                             <td style="font-weight:bolder;">CIRCULATING EOSINOPHIL</td>
                             <td>400cmm</td>
                             <td><?php echo $obj->SelectAllByVal($table1,"pid",$pid,"circu"); ?></td>
                             <td style="font-weight:bolder;">Basophil</td>
                              <td>0-1%</td>
                              <td><?php echo $obj->SelectAllByVal($table1,"pid",$pid,"baso"); ?></td>
                            </tr>
                            
                            <tr>
                             <td colspan="2" style="font-weight:bolder;">RETICULOCYTESL</td>
                             <td><?php echo $obj->SelectAllByVal($table1,"pid",$pid,"reticu"); ?></td>
                             <td colspan="2" style="font-weight:bolder;">Others</td>
                              <td><?php echo $obj->SelectAllByVal($table1,"pid",$pid,"other"); ?></td>
                            </tr>
                            
                            <tr>
                             <td colspan="3"></td>
                             
                             <td style="font-weight:bolder;">Bleeding Time</td>
                             <td>2-6 min</td>
                              <td><?php echo $obj->SelectAllByVal($table1,"pid",$pid,"btime"); ?></td>
                            </tr>
                            
                            <tr>
                             <td colspan="3"></td>
                             
                             <td style="font-weight:bolder;">Cloting Time</td>
                             <td>2-11 min</td>
                              <td><?php echo $obj->SelectAllByVal($table1,"pid",$pid,"ctime"); ?></td>
                            </tr>
                            
                            <tr>
                             <td colspan="3"></td>
                            
                             <td colspan="2" style="font-weight:bolder;">Phothomdin Time</td>
                              <td><?php echo $obj->SelectAllByVal($table1,"pid",$pid,"ptime"); ?></td>
                            </tr>
                            
                            <tr>
                             <td style="font-weight:bolder;">MALARIAL PARASITE (MP)</td>
                              <td colspan="5"><?php echo $obj->SelectAllByVal($table1,"pid",$pid,"malay"); ?></td>
                            </tr>
                            
                            </table>