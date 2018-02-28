<?php
include_once('../class/auth.php');
extract($_POST);

if($status==1)
{
$table="ams_admission";
$table1="ams_student_login";

	if($obj->exists_Multiple($table,array("admition"=>$_POST['admission'],"school_id"=>$school))==0)
	{
	   
		if($obj->insert($table,array("name"=>$_POST['name'],"admition"=>$_POST['admission'],"class_id"=>$_POST['class'],"session_id"=>$_POST['session'],"roll"=>$_POST['roll'],"section_id"=>$_POST['section'],"group_id"=>$_POST['group'],"shift_id"=>$_POST['shift'],"guardian_name"=>$_POST['g_name'],"phone_number"=>$_POST['number'],"school_id"=>$school,"date"=>date('Y-m-d'),"status"=>1))==1)
		{
			echo 1;
		}
		else
		{
			echo 2;	
		}
	 }
	 else
	 {
		if($obj->update($table,array("admition"=>$_POST['admission'],"name"=>$_POST['name'],"class_id"=>$_POST['class'],"session_id"=>$_POST['session'],"roll"=>$_POST['roll'],"section_id"=>$_POST['section'],"group_id"=>$_POST['group'],"shift_id"=>$_POST['shift'],"guardian_name"=>$_POST['g_name'],"phone_number"=>$_POST['number'],"school_id"=>$school,"date"=>date('Y-m-d'),"status"=>1))==1)
		{
			echo 1;
		}
		else
		{
			echo 2;	
		}	
	 }
}
elseif($status==2)
{
	if($obj->exists_multiple("ams_admission",array("school_id"=>$school,"admition"=>$admission_id))==0)
	{
		if($obj->insert("ams_admission",array("school_id"=>$school,"user_id"=>$input_by,"admition"=>$admission_id,"photo"=>$photo))==1)
		{
			echo 1;	
		}
		else
		{
			echo 0;	
		}
	}
	else
	{
		if($obj->update("ams_admission",array("admition"=>$admission_id,"photo"=>$photo))==1)
		{
			echo 1;	
		}
		else
		{
			echo 0;	
		}
	}
	
}
elseif($status==3)
{
	
	$array=array("school_id"=>$school,"session_id"=>$session,"class_id"=>$class,"group_id"=>$group);
	$data=$obj->SelectAllByID_Multiple("ams_subject",$array);
	$x = 1;
	if (!empty($data))
		foreach ($data as $row):
			?>
            
    <tr>
        <td><?php echo $x; ?></td>
        <td class="center"><?php echo $row->name; ?></td>
        <td class="center">
            <div class="sms_plan_button1" id="m<?php echo $row->id; ?>"><input id="sms_1" type="radio" onclick="student_subjects('<?php echo $row->id; ?>','<?php echo $row->session_id; ?>','<?php echo $class; ?>','<?php echo $group; ?>','<?php echo $admission; ?>','1')" name="smsid" value="1"></input></div>
        </td>
        <td class="center">
            <div class="sms_plan_button2" id="o<?php echo $row->id; ?>"><input id="sms_2" type="radio"  onclick="student_subjects('<?php echo $row->id; ?>','<?php echo $row->session_id; ?>','<?php echo $class; ?>','<?php echo $group; ?>','<?php echo $admission; ?>','2')" name="smsid" value="2"></input></div>
        </td>
        <td class="center">
            <div class="sms_plan_button3" id="f<?php echo $row->id; ?>"><input id="sms_3" type="radio"  onclick="student_subjects('<?php echo $row->id; ?>','<?php echo $row->session_id; ?>','<?php echo $class; ?>','<?php echo $group; ?>','<?php echo $admission; ?>','3')" name="smsid" value="3"></input></div>
        </td>
        
    </tr>
            
			<?php
	$x++;
	endforeach;
	 
}
elseif($status==4)
{
	
	$array=array("school_id"=>$school,"session_id"=>$session,"class_id"=>$class,"group_id"=>$group,"student_id"=>$admission,"status"=>1);
	$data=$obj->SelectAllByID_Multiple("student_subject",$array);
	$x = 1;
	if (!empty($data))
		foreach ($data as $row):
			?>
            
    <tr id="<?php echo $row->id; ?>">
        <td><?php echo $x; ?></td>
        <td class="center"><?php echo $obj->SelectAllByVal("ams_subject","id",$row->subject_id,"name"); ?></td>
        <td class="center">
            <div class="sms_plan_button1"><input type="radio"  name="smsid" value="1"></input></div>
        </td>
    </tr>
            
			<?php
	$x++;
	endforeach;
	 
}
elseif($status==5)
{
	
	$array=array("school_id"=>$school,"session_id"=>$session,"class_id"=>$class,"group_id"=>$group,"student_id"=>$admission,"status"=>2);
	$data=$obj->SelectAllByID_Multiple("student_subject",$array);
	$x = 1;
	if (!empty($data))
		foreach ($data as $row):
			?>
            
    <tr id="<?php echo $row->id; ?>">
        <td><?php echo $x; ?></td>
        <td class="center"><?php echo $obj->SelectAllByVal("ams_subject","id",$row->subject_id,"name"); ?></td>
        <td class="center">
            <div class="sms_plan_button1"><input id="sms_1" type="radio"  name="smsid" value="1"></input></div>
        </td>
    </tr>
            
			<?php
	$x++;
	endforeach;
	 
}
elseif($status==6)
{
	
	$array=array("school_id"=>$school,"session_id"=>$session,"class_id"=>$class,"group_id"=>$group,"student_id"=>$admission,"status"=>3);
	$data=$obj->SelectAllByID_Multiple("student_subject",$array);
	$x = 1;
	if (!empty($data))
		foreach ($data as $row):
			?>
            
    <tr id="<?php echo $row->id; ?>">
        <td><?php echo $x; ?></td>
        <td class="center"><?php echo $obj->SelectAllByVal("ams_subject","id",$row->subject_id,"name"); ?></td>
        <td class="center">
            <div class="sms_plan_button1"><input id="sms_1"  type="radio"  name="smsid" value="1"></input></div>
        </td>
    </tr>
            
			<?php
	$x++;
	endforeach;
	 
}
elseif($status==7)
{
	$obj->delete("student_subject",array("id"=>$id));
}
elseif($status==8)
{
	if($obj->exists_multiple("previous_exam_record",array("user_id"=>$input_by,"admission_id"=>$admission_id,"exam_id"=>$exam_id,"institute_name"=>$institute_name,"roll"=>$roll,"regno"=>$regno,"board_id"=>$board_id,"group_id"=>$group_id,"passing_year"=>$passing_year,"exam_session"=>$passing_session,"gpa"=>$gpa,"date"=>date('Y-m-d'),"status"=>1))==0)
	{
		if($obj->insert("previous_exam_record",array("user_id"=>$input_by,"admission_id"=>$admission_id,"exam_id"=>$exam_id,"institute_name"=>$institute_name,"roll"=>$roll,"regno"=>$regno,"board_id"=>$board_id,"group_id"=>$group_id,"passing_year"=>$passing_year,"exam_session"=>$passing_session,"gpa"=>$gpa,"date"=>date('Y-m-d'),"status"=>1))==1)
		{
			echo "Successfully Added";	
		}
		else
		{
			echo "Failed, Please Try Again Later.";	
		}
	}
	else
	{
		echo "Already Exists,Please Try Another Exam Data";	
	}
}
elseif($status==9)
{
	//echo $totaldata;
	for($i=0; $i<=$totaldata-1; $i++):
		//echo $_POST['eid_'.$i].",";
		if($obj->exists_multiple("ams_add_marks_final",array("school_id"=>$school,"session_id"=>$session,"class_id"=>$class,"user_id"=>$input_by,"exam_id"=>$_POST['eid_'.$i]))==0)
		{		
			if($obj->insert("ams_add_marks_final",array("school_id"=>$school,"session_id"=>$session,"class_id"=>$class,"user_id"=>$input_by,"exam_id"=>$_POST['eid_'.$i],"mark"=>$_POST['fid_'.$i],"date"=>date('Y-m-d'),"status"=>1))==0)
			{
				echo 1;
			}
			else
			{
				echo 0;
			}
		}
		else
		{
			$mark_id=$obj->SelectAllByVal4("ams_add_marks_final","school_id",$school,"session_id",$session,"class_id",$class,"exam_id",$_POST['eid_'.$i],"id");
			if($obj->update("ams_add_marks_final",array("id"=>$mark_id,"mark"=>$_POST['fid_'.$i]))==1)
			{
				echo 2;	
			}
			else
			{
				echo 3;
			}
		}
		//$obj->insert("",array());
	endfor;
}
elseif($status==10)
{
	?>
    <div class="width-col4 auto_pos_x margin_top10 shadow_inner  bold subject_table">
        <table cellpadding="0" cellspacing="1" border="0" class="display" id="example">
                    <thead>
                        <tr>
                            <th>S/L</th>
                            <th>Exam Modul/Name</th>
                            <th> Marks( % to be added with Final/Anual exam ) </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
					$exam=$obj->SelectAllByID_Multiple("ams_add_marks_final",array("session_id"=>$session,"class_id"=>$class));
					$d=1;
					if(!empty($exam))
					foreach($exam as $sub):
					?>
						<tr>
							<td><?php echo $d; ?></td>
							<td><?php echo $obj->SelectAllByVal("ams_exam_category","id",$sub->exam_id,"name");?></td>
							<td><label> Input Marks Percentage : <?php echo $sub->mark; ?>  % </label></td>
						</tr>                        
					<?php   
					$d++;                   
					endforeach;
					?>
                    </tbody>
                </table>
            
    </div>
    <?php
}
elseif($status==11)
{
	$table="ams_admission";
	$table1="ams_student_login";

	if($obj->exists_Multiple($table,array("admition"=>$_POST['admission'],"school_id"=>$school))==0)
	{
	   
		if($obj->insert($table,array("name"=>$_POST['name'],"admition"=>$_POST['admission'],"class_id"=>$_POST['class'],"session_id"=>$_POST['session'],"roll"=>$_POST['roll'],"section_id"=>$_POST['section'],"group_id"=>$_POST['group'],"shift_id"=>$_POST['shift'],
		"dob"=>$_POST['dob'],"blood_group"=>$_POST['blood_group'],"gender"=>$_POST['gender'],"nationality"=>$_POST['nationality'],"religion"=>$_POST['religion'],
		"language"=>$_POST['language'],"mother_name"=>$_POST['m_name'],"father_name"=>$_POST['f_name'],"guardian_name"=>$_POST['g_name'],
		"occupation"=>$_POST['occupation'],"income"=>$_POST['income'],"number"=>$_POST['number'],"present_address"=>$_POST['ps_address'],
		"permanent_address"=>$_POST['pr_address'],"state"=>$_POST['division'],"city"=>$_POST['district'],"zip_code"=>$_POST['thana'],"countryr"=>$_POST['country'],
		"phone_number"=>$_POST['p_number'],"email"=>$_POST['email'],"school_id"=>$school,"date"=>date('Y-m-d'),"status"=>1))==1)
		{
			echo 1;
		}
		else
		{
			echo 2;	
		}
	 }
	 else
	 {
		if($obj->update($table,array("admition"=>$_POST['admission'],"name"=>$_POST['name'],"class_id"=>$_POST['class'],"session_id"=>$_POST['session'],"roll"=>$_POST['roll'],"section_id"=>$_POST['section'],"group_id"=>$_POST['group'],"shift_id"=>$_POST['shift'],
		"dob"=>$_POST['dob'],"blood_group"=>$_POST['blood_group'],"gender"=>$_POST['gender'],"nationality"=>$_POST['nationality'],"religion"=>$_POST['religion'],
		"language"=>$_POST['language'],"mother_name"=>$_POST['m_name'],"father_name"=>$_POST['f_name'],"guardian_name"=>$_POST['g_name'],
		"occupation"=>$_POST['occupation'],"income"=>$_POST['income'],"number"=>$_POST['number'],"present_address"=>$_POST['ps_address'],
		"permanent_address"=>$_POST['pr_address'],"state"=>$_POST['division'],"city"=>$_POST['district'],"zip_code"=>$_POST['thana'],"countryr"=>$_POST['country'],
		"phone_number"=>$_POST['p_number'],"email"=>$_POST['email'],"school_id"=>$school,"date"=>date('Y-m-d'),"status"=>1))==1)
		{
			echo 1;
		}
		else
		{
			echo 2;	
		}	
	 }
}
?>