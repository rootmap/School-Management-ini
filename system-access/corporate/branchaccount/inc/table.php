<table class="mws-table">
                            <tr>
                              <td style="font-weight:bolder;">Patient ID </td>
                              <td><input type="text" style="width:60px;" value="<?php echo rand(); ?>" name="pid" id="pid" placeholder="ID"> <button class="btn btn-danger" type="button" onClick="chack('<?php echo $_GET['id'];?>')">Check</button></td>
                              <td colspan="2" style="font-weight:bolder;">Patient Name </td>
                              <td colspan="2"><input type="text" placeholder="Patient Name" name="pname" id="pname"></td>
                              
                            </tr>
                            <tr>
                             
                              <td style="font-weight:bolder;">Age <?php echo $_GET['id'];?></td>
                              <td> 
                              <select name="age" id="age" style="font-weight:bold;">
                               <option >Age</option>
                               <?php for ($i=1; $i <=200; $i++) { ?>
                               <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                               <?php } ?>     
                              </select></td>
                              <td style="font-weight:bolder;">Sex</td>
                              <td><select name="sex" id="sex" style="font-weight:bold;">
                               <option >Sex</option>
                               <option value="1">Male</option>
                               <option value="2">FeMale</option>
                              </select></td>
                              <td style="font-weight:bolder;">Appoinment Date </td>
                              <td><input type="text" class="mws-datepicker" name="joiningdate" id="joiningdate" style="width:80px;" value="<?php echo date('Y-m-d');?>" ></td>
                            </tr>
                            
                            <tr>
                             
                              <td style="font-weight:bolder;">Refferred By Prof/Dr. </td>
                              <td colspan="5"><input type="text" placeholder="Refferred By Prof/Dr." style="width:600px;" name="dname" id="dname"></td>
                            </tr>
                        </table>