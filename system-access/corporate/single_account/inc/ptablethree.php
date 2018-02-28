<table class="mws-table">
                            <tr>
                              <td style="font-weight:bolder;">Patient ID </td>
                              <td><?php echo $pid; ?></td>
                              <td colspan="2" style="font-weight:bolder;">Patient Name </td>
                              <td colspan="2"><?php echo $obj->SelectAllByVal($table3,"pid",$pid,"pname"); ?></td>
                              
                            </tr>
                            <tr>
                             
                              <td style="font-weight:bolder;">Age </td>
                              <td> 
                             <?php echo $obj->SelectAllByVal($table3,"pid",$pid,"age"); ?>
                              </td>
                              <td style="font-weight:bolder;">Sex</td>
                              <td><?php $gender=$obj->SelectAllByVal($table3,"pid",$pid,"sex"); if($gender==1) { echo "Male";}elseif($gender==2){ echo "Female";}else{ echo "None";}?>
                               </td>
                              <td style="font-weight:bolder;">Appoinment Date </td>
                              <td><?php echo $obj->SelectAllByVal($table3,"pid",$pid,"date"); ?></td>
                            </tr>
                            
                            <tr>
                             
                              <td style="font-weight:bolder;">Refferred By Prof/Dr. </td>
                              <td colspan="5"><?php echo $obj->SelectAllByVal($table3,"pid",$pid,"dname"); ?></td>
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
                              <td style="font-weight:bolder;">S.BILIRUBIN</td>
                              <td>0.3 to 1mg/dl</td>
                              <td><?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"bil"); ?></td>
                              <td style="font-weight:bolder;">S. LDH</td>
                              <td>230 TO 460 U/L</td>
                              <td><?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"sldh"); ?></td>
                            </tr>
                            
                            <tr>
                              <td style="font-weight:bolder;">SGOT(AST)</td>
                              <td>up to 45 U/L</td>
                              <td><?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"sgt"); ?></td>
                              <td style="font-weight:bolder;">CREATI PHOSPHOKINASE(CPK)</td>
                              <td>24 tO 195 U/L</td>
                              <td><?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"cret"); ?></td>
                            </tr>
                            <tr>
                              <td style="font-weight:bolder;">GPT(ALT)</td>
                              <td>Up to 40 U/L</td>
                              <td><?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"gpt"); ?></td>
                              <td style="font-weight:bolder;">CPK.MB</td>
                              <td>Up to 11.7 U/L</td>
                              <td><?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"cpk"); ?></td>
                            </tr>
                            <tr>
                              <td style="font-weight:bolder;"> S.ALKALINE PHOS </td>
                              <td>3 to 13 KAU/L</td>
                              <td><?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"salk"); ?></td>
                              <td style="font-weight:bolder;">URINE AMYLASE</td>
                              <td>Up tO 220 U/L</td>
                              <td><?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"urinamy"); ?></td>
                            </tr>
                            <tr>
                              <td style="font-weight:bolder;">S.ACID PHOS</td>
                              <td>Up to 4.2 U/L</td>
                              <td><?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"sacid"); ?></td>
                              <td style="font-weight:bolder;">S.URIC ACID</td>
                              <td>2.4 tO 7MG/DL</td>
                              <td><?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"uric"); ?></td>
                            </tr>
                            <tr>
                              <td style="font-weight:bolder;">S.CHOLESTEROL</td>
                              <td>130 to 200mg/dl</td>
                              <td><?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"scho"); ?></td>
                              <td style="font-weight:bolder;">S.CALCIUM </td>
                              <td>8.4 tO 10.7 MG/DL</td>
                              <td><?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"scla"); ?></td>
                            </tr>
                            <tr>
                              <td style="font-weight:bolder;">S.HDL CHOLESTEROL </td>
                              <td>Up to 55 mg/dl</td>
                              <td><?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"shdl"); ?></td>
                              <td style="font-weight:bolder;">S.PROTEIN</td>
                              <td>6.6 TO 8.7 G/DL</td>
                              <td><?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"spro"); ?></td>
                            </tr>
                            <tr>
                              <td style="font-weight:bolder;">S.LDL CHOLESTEROL </td>
                              <td>10 to 150 mg/dl</td>
                              <td><?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"sldl"); ?></td>
                              <td style="font-weight:bolder;">BLOOD GLUCOSE/SUGAR</td>
                              <td>CORR:URINE SUGAR</td>
                              <td><?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"corurin"); ?></td>
                            </tr>
                            <tr>
                              <td style="font-weight:bolder;">TRIDLY CERIDES </td>
                              <td>Up to 200 mg/dl</td>
                              <td><?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"trid"); ?></td>
                              <td colspan="2" style="font-weight:bolder;">FASTING(Normal -76 to 116mg/dl)</td>
                              <td><?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"fast"); ?></td>
                            </tr>
                            <tr>
                              <td style="font-weight:bolder;">S.UREN </td>
                              <td>20 to 50 mg/dl</td>
                              <td><?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"urin"); ?></td>
                              <td style="font-weight:bolder;" colspan="2">RANDOM(Normal up to 160mg/dl)</td>
                              <td><?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"ran"); ?></td>
                            </tr>
                            <tr>
                              <td style="font-weight:bolder;">S.CREATININE</td>
                              <td>0.8 to mg/dl</td>
                              <td><?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"scre"); ?></td>
                              <td style="font-weight:bolder;" colspan="2">1hr after .50gm glucose drink</td>
                              <td><?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"oneafter"); ?></td>
                            </tr>
                            <tr>
                              <td style="font-weight:bolder;"> BUN </td>
                              <td>6 to 22 mg/dl</td>
                              <td><?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"bun"); ?></td>
                              <td style="font-weight:bolder;" colspan="2">2hr after .75mg glucose drink</td>
                              <td><?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"twoafter"); ?></td>
                            </tr>
                            <tr>
                              <td style="font-weight:bolder;">S.AMYLASE</td>
                              <td>Up to 220 U/LL</td>
                              <td><?php echo $obj->SelectAllByVal("amsit_biochamistry_report","pid",$pid,"samy"); ?></td>
                              <td colspan="3"></td>
                            </tr>
                            
                            </table>