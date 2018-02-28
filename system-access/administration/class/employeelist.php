<?php
include('class/auth.php');
$page = "<li><i class='icon-group group-icon'></i><a href='#'>User Info</a></li><li class='active'>Admin List</li>";
$table="employee";
$w=80; $h=100; $thumb="emp/";
if (isset ($_POST['edit'])) {
                    //$success="Edit";
                    
                    $updatearray=array("id"=>$_POST['id'],"name"=>$_POST['name'],"staff_id"=>$_POST['staff_id'],"ext_number"=>$_POST['ext_number'],"blood_group"=>$_POST['blood_group'],"designation"=>$_POST['designation'],"branch"=>$_POST['branch'],"gender"=>$_POST['gender'],"dob"=>$_POST['dob'],"contactnumber"=>$_POST['contact'],"address"=>$_POST['address'],"joiningdate"=>$_POST['joiningdate']);
                    if($obj->update($table,$updatearray)==1)
                    { 
                        $errmsg_arr[]= 'Successfully Saved';
                        $errflag = true;
                        if ($errflag) 
                        {
                            $_SESSION['SMSG_ARR'] = $errmsg_arr;
                            session_write_close();
                            header("location: ./".$obj->filename());
                            exit();
                        }   
                    } 
                    else 
                    { 
                        $errmsg_arr[]= 'Failed';
                        $errflag = true;
                        if ($errflag) {
                            $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
                            session_write_close();
                            header("location: ./".$obj->filename());
                            exit();
                        } 
                        
                    }
    
}
elseif (isset ($_GET['del'])=="delete") {
                    if($_GET['status']!=2)
                    {
                        $errmsg_arr[]= 'Failed';
                        $errflag = true;
                        if ($errflag) {
                            $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
                            session_write_close();
                            header("location: ./".$obj->filename());
                            exit();
                        } 
                    }
                    else 
                    {
                        $delarray=array("id"=>$_GET['id']);
                        if($obj->delete($table,$delarray)==1)
                        { 
                            $errmsg_arr[]= 'Successfully Deleted';
                            $errflag = true;
                            if ($errflag) 
                            {
                                $_SESSION['SMSG_ARR'] = $errmsg_arr;
                                session_write_close();
                                header("location: ./".$obj->filename());
                                exit();
                            }

                        } 
                        else 
                        { 
                            $errmsg_arr[]= 'Failed';
                            $errflag = true;
                            if ($errflag) {
                                $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
                                session_write_close();
                                header("location: ./".$obj->filename());
                                exit();
                            }
                        }
                  
                    }
}
?>
<?php
if(@$_GET['action']=='pdf')
{
include("pdf/MPDF57/mpdf.php");
$html.=$obj->company_report_logo()." ".$obj->company_report_head();
$html.=$obj->company_report_name("Employee List");
$html.="<div class='table-responsive'><table id='sample-table-2' class='table table-hover' border='1'><thead>
        <tr class='headerrow'>
            <th class='center'>S/N</th>
            <th> Staff ID </th>
            <th> Full Name </th>
            <th> Ext. Number </th>
            <th> Designation </th>
            <th> Gender </th>
            <th> Blood Group</th>
            <th> Phone </th>
            <th> Username </th>
        </tr>
    </thead><tbody>";

$data=$obj->SelectAll($table);
    $x=1;
    foreach ($data as $row):
        
      $html .="<tr><td>".$x."</td>
            <td>".$row->staff_id."</td>
            <td>".$row->name."</td>
            <td>".$row->ext_number."</td>
            <td>".$obj->SelectAllByVal("designation","id",$row->designation,"name")."</td>
            <td>".$obj->sex($row->gender)."</td>
            <td>".$row->blood_group."</td>
            <td>".$row->contactnumber."</td>
            <td>".$row->username."</td>
            </tr>";
     $x++;
     endforeach;


$html.="</tbody></table></div>";

$mpdf=new mPDF('c','A4','','',32,25,27,25,16,13); 

$mpdf->SetDisplayMode('fullpage');

$mpdf->list_indent_first_level = 0;	// 1 or 0 - whether to indent the first level of a list

// LOAD a stylesheet
$stylesheet = file_get_contents('pdf/MPDF57/examples/mpdfstyletables.css');
$mpdf->WriteHTML($stylesheet,1);	// The parameter 1 tells that this is css/style only and no body/html/text

$mpdf->WriteHTML($html,2);

$mpdf->Output('mpdf.pdf','I');
}
elseif(@$_GET['action']=='excel')
{

header('Content-type: application/excel');
$filename = 'leaveapplicationlist.xls';
header('Content-Disposition: attachment; filename='.$filename);

$data = '<html xmlns:x="urn:schemas-microsoft-com:office:excel">
<head>
    <!--[if gte mso 9]>
    <xml>
        <x:ExcelWorkbook>
            <x:ExcelWorksheets>
                <x:ExcelWorksheet>
                    <x:Name>Leave Application List</x:Name>
                    <x:WorksheetOptions>
                        <x:Print>
                            <x:ValidPrinterInfo/>
                        </x:Print>
                    </x:WorksheetOptions>
                </x:ExcelWorksheet>
            </x:ExcelWorksheets>
        </x:ExcelWorkbook>
    </xml>
    <![endif]-->
</head>';

$data .="<body>";
$data .=$obj->company_report_head()."Report Creation Date : ".date('d-m-Y H:i:s');
$data .=$obj->company_report_name("Employee List");
$data .="<table id='sample-table-2' class='table table-hover' border='1'>
    <thead>
        <tr>
            <th class='center'>S/N</th>
            <th> Staff ID </th>
            <th> Full Name </th>
            <th> Ext. Number </th>
            <th> Designation </th>
            <th> Gender </th>
            <th> Blood Group</th>
            <th> Username </th>
        </tr>
</thead>        
<tbody>";

$data .='</tr>';

$ss=$obj->SelectAll($table);
    $x=1;
    foreach ($ss as $row):
        
      $data .="<tr><td>".$x."</td>
            <td><span class='label label-sm label-success'>".$row->staff_id."</span></td>
            <td><span class='label label-sm label-primary'>".$row->name."</span></td>
            <td><span class='label label-sm label-info'>".$row->ext_number."</span></td>
            <td>".$obj->SelectAllByVal("designation","id",$row->designation,"name")."</td>
            <td><span class='label label-sm label-warning'>".$obj->sex($row->gender)."</span></td>
            <td><span class='label label-sm label-success'>".$row->blood_group."</span></td>
            <td><span class='label label-sm label-danger'>".$row->username."</span></td>
            </tr>";
     $x++;
     endforeach;


$data .="</tbody></table>";

$data .='</body></html>';

echo $data;

}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php echo $obj->bodyhead(); ?>
    </head>

    <body>
        <?php include('class/header.php'); ?>

        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    
                    <?php
                    include('class/esm.php');
                    ?>
                    <div class="row">
                        <div class="col-xs-12">

                                <div class="row">

                                    <div class="col-xs-12">
                                        <h3 class="header smaller lighter blue">Employee List
                                            <a href="<?php echo $obj->filename(); ?>?action=pdf"><img src="images/pdf.png"></a> 
                                            <a href="<?php echo $obj->filename(); ?>?action=excel"><img src="images/excel.png"></a>
                                
                                            <span style="float: right;"><a href="#" style="text-decoration: none;"  onclick="javascript:printDiv('printablediv')"><i class="icon-print"></i> Print Employee List</a></span>
                                        </h3>

                                        <div class="table-responsive" id="printablediv">
                                            <div>
                                
                                            <?php echo $obj->company_report_logo(); ?>
                                            <?php echo $obj->company_report_head(); ?>
                                            <?php echo $obj->company_report_name("Employee List"); ?>

                                            </div>
                                            <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th class="center">S/N</th>
                                                        <th> Staff ID </th>
                                                        <th> Full Name </th>
                                                        <th> Ext. Number </th>
                                                        <th> Designation </th>
                                                        <th> Gender </th>
                                                        <th> Blood Group</th>
                                                        <th> Username </th>
                                                        <th colspan="2"> </th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                <?php
                                                $data=$obj->SelectAll($table);
                                                if(!empty($data))
                                                foreach ($data as $row): ?>
                                                        <tr>
                                                            <td class="center"><?php echo $row->id; ?></td>
                                                            <td><span class="label label-sm label-success"><?php echo $row->staff_id; ?></span></td>
                                                            <td><span class="label label-sm label-primary"><?php echo $row->name; ?></span></td>
                                                            <td><span class="label label-sm label-info"><?php echo $row->ext_number; ?></span></td>
                                                            <td>
                                                            <?php  
                                                            $qdes=$obj->SelectAllByID("designation",array("id"=>$row->designation));
                                                            if(!empty($qdes))
                                                            foreach ($qdes as $dd):
                                                              echo $dd->name;
                                                            endforeach;
                                                            ?></td>
                                                            <td><span class="label label-sm label-warning"><?php echo $obj->sex($row->gender); ?></span></td>
                                                            <td><span class="label label-sm label-success"><?php echo $row->blood_group; ?></span></td>
                                                            <td><span class="label label-sm label-danger"><?php echo $row->username; ?></span></td>
                                                            
                                                            <td>
                                                                <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                                                    <a href="#modal-table<?php echo $row->id; ?>" role="button" data-toggle="modal" class="green"><i class="icon-pencil bigger-130"></i></a>
                                                                </div>
								<div id="modal-table<?php echo $row->id; ?>" class="modal fade" tabindex="-1">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header no-padding">
												<div class="table-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
														<span class="white">&times;</span>
													</button>
													Results for "Latest Registered Domains
												</div>
											</div>
                                                                                        <!-- /.modal-content -->
                                                                                        <form class="form-horizontal" name="designationedit" role="form" action="" method="POST">
                                                                                            <div class="form-group">
                                                                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Full Name </label>

                                                                                                <div class="col-sm-9">
                                                                                                    <input type="text" id="form-field-1" name="name" value="<?php echo $row->name; ?>" class="col-xs-10 col-sm-5" />
                                                                                                    <input type="hidden" name="id" value="<?php echo $row->id; ?>"  />
                                                                                                </div>
                                                                                            </div>
                                                                                            
                                                                                            <div class="form-group">
                                                                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Ext.Number </label>

                                                                                                <div class="col-sm-9">
                                                                                                    <input type="text" id="form-field-1" name="ext_number" value="<?php echo $row->ext_number; ?>" class="col-xs-10 col-sm-5" />
                                                                                                </div>
                                                                                            </div>
                                                                                            


                                                                                            <div class="form-group">
                                                                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Designation </label>

                                                                                                <div class="col-sm-9">
                                                                                                    <select class="width-10" name="designation">
                                                                                                        <option value="">Select Designation</option>
                                                                                                        <?php  $datas=$obj->SelectAllorderBy("designation"); foreach ($datas as $rows): ?>
                                                                                                        <option <?php if($rows->id==$row->designation): ?> selected="selected" <?php endif; ?> value="<?php echo $rows->id; ?>"><?php echo $rows->name; ?></option>
                                                                                                        <?php endforeach; ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="form-group">
                                                                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Branch </label>

                                                                                                <div class="col-sm-9">
                                                                                                    <select class="width-10" name="branch">
                                                                                                        <option value="">Select Branch</option>
                                                                                                        <?php  $data=$obj->SelectAllorderBy("branch"); foreach ($data as $rowss): ?>
                                                                                                            <option <?php if($rowss->id==$row->branch): ?> selected="selected" <?php endif; ?>  value="<?php echo $rowss->id; ?>"><?php echo $rowss->name; ?></option>
                                                                                                        <?php endforeach; ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="form-group">
                                                                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Gender </label>

                                                                                                <div class="col-sm-9">
                                                                                                    <select class="width-10" name="gender">
                                                                                                        <option value="">Select Sex</option>
                                                                                                        <option  <?php if($row->gender==1): ?> selected="selected" <?php endif; ?>  value="1">Male</option>
                                                                                                        <option <?php if($row->gender==2): ?> selected="selected" <?php endif; ?> value="2">Female</option>
                                                                                                     </select>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="form-group">
                                                                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date of Birth </label>

                                                                                                <div class="col-sm-9">
                                                                                                    <input type="text" id="form-field-1" name="dob" placeholder="Year-Month-Date" value="<?php echo $row->dob; ?>" class="col-xs-10 col-sm-5" />
                                                                    
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="form-group">
                                                                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Contact Number </label>

                                                                                                <div class="col-sm-9">
                                                                                                    <input type="text" id="form-field-1" name="contact" value="<?php echo $row->contactnumber; ?>"  placeholder="Contact Number " class="col-xs-10 col-sm-10" />
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="form-group">
                                                                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Address </label>

                                                                                                <div class="col-sm-9">
                                                                                                    <input type="text" id="form-field-1" name="address" value="<?php echo $row->address; ?>" placeholder="Address " class="col-xs-10 col-sm-5" />
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="form-group">
                                                                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Blood Group </label>

                                                                                                <div class="col-sm-9">
                                                                                                    <select class="width-10" name="blood_group">
                                                                                                        <option <?php if($row->blood_group=="A+"): ?> selected="selected" <?php endif; ?> value="A+">A+</option>
                                                                                                        <option <?php if($row->blood_group=="AB+"): ?> selected="selected" <?php endif; ?> value="AB+">AB+</option>
                                                                                                        <option <?php if($row->blood_group=="B+"): ?> selected="selected" <?php endif; ?> value="B+">B+</option>
                                                                                                        <option <?php if($row->blood_group=="O+"): ?> selected="selected" <?php endif; ?> value="O+">O+</option>
                                                                                                        <option <?php if($row->blood_group=="A-"): ?> selected="selected" <?php endif; ?> value="A-">A-</option>
                                                                                                        <option <?php if($row->blood_group=="AB-"): ?> selected="selected" <?php endif; ?> value="AB-">AB-</option>
                                                                                                        <option <?php if($row->blood_group=="B-"): ?> selected="selected" <?php endif; ?> value="B-">B-</option>
                                                                                                        <option <?php if($row->blood_group=="O-"): ?> selected="selected" <?php endif; ?> value="O-">O-</option>
                                                                                                    </select>                                                                                                 
                                                                                                </div>
                                                                                            </div>

                                                                                            
                                                                                            <div class="form-group">
                                                                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Staff ID </label>

                                                                                                <div class="col-sm-9">
                                                                                                        <input type="text" id="form-field-1" name="staff_id" value="<?php echo $row->staff_id; ?>" placeholder="Staff Id " class="col-xs-10 col-sm-5" />
                                                                                                
                                                                                                </div>
                                                                                            </div>







                                                                                            <div class="space-4"></div>

                                                                                            <div class="clearfix form-actions">
                                                                                                <div class="col-md-offset-3 col-md-9">
                                                                                                    <button class="btn btn-info" type="submit" name="edit"><i class="icon-ok bigger-110"></i>Edit Now</button>
                                                                                                    &nbsp; &nbsp; &nbsp;
                                                                                                    <button class="btn" type="reset"><i class="icon-undo bigger-110"></i>Reset</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>
										</div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
								</div><!-- end modal form -->


                                                            </td>
                                                            <td>
                                                                <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                                                    <a class="red" href="<?php echo $table; ?>.php?del=delete&AMP;id=<?php echo $row->id; ?>&AMP;status=<?php echo $row->status; ?>"><i class="icon-trash bigger-130"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                 <?php endforeach; ?>


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                                                                
                                                                								<div id="modal-table" class="modal fade" tabindex="-1">
									
                                <!-- PAGE CONTENT ENDS -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.page-content -->
            </div><!-- /.main-content -->

            <?php
//include('class/colornnavsetting.php');
            include('class/footer.php');
            ?>


                 <?php echo $obj->bodyfooter(); ?>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {

			})
		</script>
    </body>
</html>
