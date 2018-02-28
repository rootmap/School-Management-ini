<?php
include('../db_Class.php');
$obj = new db_class();
$obj->MySQL();
$q=$_GET["q"];
$sql="SELECT * FROM emp_info WHERE id='".$q."'";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
?>
                                    	<table class="nws-table">
                                        	<tbody>
                                            	<tr>
                                                	<td>Company Name : </td><td><?php echo $row['company_name']; ?></td>
                                                    <td>Pay Slip Date : </td><td><?php echo $row['payslipdate']; ?></td>
                                                </tr>
                                            	<tr>
                                                	<td>Emp.Code : </td><td><?php echo $row['empcode']; ?></td>
                                                    <td>Name : </td><td><?php echo $row['ename']; ?></td>
                                                </tr>
                                                <tr>
                                                	<td>Department : </td><td><?php $dep=$row['department'];
													$sqld=mysql_query("SELECT * FROM dd_info WHERE id='$dep'");
													$fetd=mysql_fetch_array($sqld);
													echo $fetd['name'];
													?></td>
                                                    <td>Designation : </td><td><?php $des=$row['designation'];
													$sqldd=mysql_query("SELECT * FROM dd_info WHERE id='$des'");
													$fetdd=mysql_fetch_array($sqldd);
													echo $fetdd['name'];
													
													?></td>
                                                </tr>
                                                <tr>
                                                	<td>PF Account No : </td><td><?php echo $row['pfac']; ?></td>
                                                    <td>Joining Date : </td><td><?php echo $row['joiningdate']; ?></td>
                                                </tr>
                                                <tr>
                                                	<td>Father/Husband Name : </td><td><?php echo $row['f_hname']; ?></td>
                                                    <td>Bank A/C : </td><td><?php echo $row['bankac']; ?></td>
                                                </tr>
                                               
                                                <tr>
                                                	<td>Emp Type : </td><td><?php $etype=$row['etype'];
													if($etype=="398")
													{
														echo "Staff";	
													}
													else
													{
														echo "Officers";	
													}
													?>
                                                    <input type="hidden" name="etype" value="<?php echo $row['etype']; ?>">
                                                    </td>
                                                    <td>&nbsp;</td><td>&nbsp;</td>
                                                </tr> 
                                              
                                        </table>