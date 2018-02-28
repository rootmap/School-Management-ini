<?php
include_once('class/auth.php');
$table="ams_marks_select";
$table1="ams_marks_mode";
$table2="ams_report";
$table3="ams_report2";
$table4="ams_performance";
$table5="ams_performance2";
$fainal_exam=100;
if(isset($_POST['save']))

{
	      foreach($_POST['subject'] as $nn ):
		  
                
				   if($obj->exists_multiple($table,array("subject_id"=>$nn,
				   "exam_id"=>$_POST['exam'],
				   "class_id"=>$_POST['class'],
				   "session_id"=>$_POST['session'],
				   /*"group_id"=>$_POST['group'],*/
				   "school_id"=>$school))==0)
					
					{
					$obj->insert($table,array("subject_id"=>$nn,
					"pass_marks"=>$_POST[$nn.'_pass_markss'],
					"full_marks"=>$_POST[$nn.'_full_marks'],
					"exam_id"=>$_POST['exam'],
					"class_id"=>$_POST['class'],
					"session_id"=>$_POST['session'],
					/*"group_id"=>$_POST['group'],*/
					"school_id"=>$school,
					"date"=>date('Y-m-d'),
					"status"=>1));
					}
					else
					{
						$fid=$obj->SelectAllByVal4($table,"subject_id",$nn,"exam_id",$_POST['exam'],"class_id",$_POST['class'],"school_id",$school,"id");
						$obj->update($table,array("id"=>$fid,"subject_id"=>$nn,"pass_marks"=>$_POST[$nn.'_pass_markss'],"full_marks"=>$_POST[$nn.'_full_marks'],
						"exam_id"=>$_POST['exam'],"class_id"=>$_POST['class'],"session_id"=>$_POST['session'],"school_id"=>$school,"date"=>date('Y-m-d'),"status"=>1));	
					}
				 
		endforeach;
		$count=count($_POST['subject']);
		if($count!=0)
		{
			echo $obj->Success("Data Saved Successfully",$obj->filename());	
		}
		else
		{
			echo $obj->Error("Data Saved Failed",$obj->filename());	
		}
}
if(@$_GET['schooll']== 'gered')
{
    $delet=array("school_id"=>$_GET['school']);
    if($obj->delete("ams_grading_system_dateils",$delet)==1)
	  {
		echo $obj->Success("Grading System Delete Successfully",$obj->filename());	
	  }
	     else
	  {
		echo $obj->Error("Delete Failed",$obj->filename());	
	  }
} 

if(isset($_POST['mode']))

{
	     foreach($_POST['exam'] as $index=>$nn ):
		   
	       if($obj->exists_multiple($table1,array("exam_id"=>$nn,
		   "mode"=>$_POST['modee'][$index],
		   "session_id"=>$_POST['session'],
		   "class_id"=>$_POST['class'],
		   /*"group_id"=>$_POST['group'],*/
		   "school_id"=>$school))==0)
			
			{
        	$obj->insert($table1,array("exam_id"=>$nn,
			"mode"=>$_POST['modee'][$index],
			"session_id"=>$_POST['session'],
		    "class_id"=>$_POST['class'],
		    /*"group_id"=>$_POST['group'],*/
			"school_id"=>$school,
			"date"=>date('Y-m-d'),
			"status"=>1));
			}
			
		endforeach;
		$count=count($_POST['exam']);
		if($count!=0)
		{
			echo $obj->Success("Data Saved Successfully",$obj->filename()."?group=".$group."&showstudent=".$school);	
		}
		else
		{
			echo $obj->Error("Data Saved Failed",$obj->filename()."?group=".$group."&showstudent=".$school);	
		}
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include('class/head.php'); ?>
<script>
    function showoption(str)
    {
        if (str == "")
        {
            document.getElementById("option").innerHTML = "";
            return;
        }
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                $("#option").fadeOut();
                $("#option").fadeIn();
                document.getElementById("option").innerHTML = xmlhttp.responseText;
            }
        }

        xmlhttp.open("GET", "ajx/optionone.php?o=" + str, true);
        xmlhttp.send();
        
        
    }
</script>

<script>
    function showcls(str)
    {
        if (str == "")
        {
            document.getElementById("class").innerHTML = "";
            return;
        }
        if (window.XMLHttpRequest)
        {
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                document.getElementById("class").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "ajx/session.php?s=" + str, true);
        xmlhttp.send();
    }
</script>


<!--<script>
    function showgroup(str)
    {
        if (str == "")
        {
            document.getElementById("group").innerHTML = "";
            return;
        }
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                document.getElementById("group").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "ajx/group_exam.php?s=" + str, true);
        xmlhttp.send();
    }
</script>-->

<script>
    function showexam(str)
    {
        if (str == "")
        {
            document.getElementById("exam").innerHTML = "";
            return;
        }
		
        ssession=document.getElementById('session').value;
        cclass=document.getElementById('class').value;
		
		if (window.XMLHttpRequest)
        {
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
				//load seleted exam
				xmlhttps = new XMLHttpRequest();
				xmlhttps.onreadystatechange = function()
				{
					if (xmlhttps.readyState == 4 && xmlhttps.status == 200)
					{
						document.getElementById("sexam").innerHTML = xmlhttps.responseText;
					}
				}
				xmlhttps.open("GET", "ajx/ssexam.php?exam_id="+str+"&session="+ssession+"&class="+cclass, true);
				xmlhttps.send();
				//load selected exam
				
                document.getElementById("exam").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "ajx/exam.php?exam="+str+"&session="+ssession+"&class="+cclass, true);
        xmlhttp.send();
    }
</script>

<script>
    function switchexam(str)
    {
        ssession=document.getElementById('session').value;
        cclass=document.getElementById('class').value;
        
    	if (window.XMLHttpRequest)
        {
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {	
				//load exam list
				xmlhttps = new XMLHttpRequest();
				xmlhttps.onreadystatechange = function()
				{
					if (xmlhttps.readyState == 4 && xmlhttps.status == 200)
					{
						document.getElementById("exam").innerHTML = xmlhttps.responseText;
					}
				}
				xmlhttps.open("GET", "ajx/exam.php?exam="+str+"&session="+ssession+"&class="+cclass, true);
				xmlhttps.send();
				//load exam list
			    document.getElementById("sexam").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "ajx/sexam.php?exam_id="+str+"&session="+ssession+"&class="+cclass, true);
        xmlhttp.send();
    }
	
	
</script>

<script>
    function switchexamx(str)
    {
        
        
        if (str == "")
        {
            document.getElementById("exam").innerHTML = "";
            return;
        }
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                $("#exam").fadeOut();
                $("#exam").fadeIn();
                document.getElementById("exam").innerHTML =xmlhttp.responseText;
            }
        }
        
        ssession=document.getElementById('session').value;
        cclass=document.getElementById('class').value;
        //group=document.getElementById('group').value;
        xmlhttp.open("GET", "ajx/delexam.php?exam_id="+str+"&session="+ssession+"&class="+cclass, true);
        //xmlhttp.open("GET", "ajx/exam.php?group="+str, true);
        xmlhttp.send();
        
        
        xmlhttps = new XMLHttpRequest();
        xmlhttps.onreadystatechange = function()
        {
            if (xmlhttps.readyState == 4 && xmlhttps.status == 200)
            {
                $("#sexam").fadeOut();
                $("#sexam").fadeIn();
                document.getElementById("sexam").innerHTML =xmlhttps.responseText;
            }
        }
        

        xmlhttps.open("GET", "ajx/s_exam.php?exam_id="+str+"&session="+ssession+"&class="+cclass, true);
        //xmlhttp.open("GET", "ajx/exam.php?group="+str, true);
        xmlhttps.send();
    }
</script>
<script>
    function showexam1(str)
    {
        if (str == "")
        {
            document.getElementById("exam1").innerHTML = "";
            return;
        }
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                document.getElementById("exam1").innerHTML = xmlhttp.responseText;
            }
        }
        
        ssession=document.getElementById('session').value;
        cclass=document.getElementById('class').value;
        xmlhttp.open("GET", "ajx/exam_setting.php?exam1="+str+"&session="+ssession+"&class="+cclass, true);
        
        //xmlhttp.open("GET", "ajx/exam_setting.php?e=" + str, true);
        xmlhttp.send();
    }
</script>
<script>
    function allsubject(str)
    {
        ssession=document.getElementById('session').value;
        cclass=document.getElementById('class').value;
       /* group=document.getElementById('group').value;*/
        
        if (str == "")
        {
            document.getElementById("allsubject").innerHTML = "";
            return;
        }
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                $("#allsubject").fadeOut();
                $("#allsubject").fadeIn();
                document.getElementById("allsubject").innerHTML = xmlhttp.responseText;
            }
        }
        
        xmlhttp.open("GET", "ajx/exam_setting_subject.php?exam1="+str+"&session="+ssession+"&class="+cclass, true);
        xmlhttp.send();
        
        
        
        
        xmlhttps = new XMLHttpRequest();
        xmlhttps.onreadystatechange = function()
        {
            if (xmlhttps.readyState == 4 && xmlhttps.status == 200)
            {
                $("#setp").fadeOut();
                $("#setp").fadeIn();
                document.getElementById("setp").innerHTML = xmlhttps.responseText;
            }
        }
        xmlhttps.open("GET", "ajx/exam_subject_load.php?exam="+str+"&session="+ssession+"&class="+cclass, true);
        xmlhttps.send();
    }
</script>
<script>
    function showsubjectsave(str)
    {
        ssession=document.getElementById('session').value;
        cclass=document.getElementById('class').value;
        /*group=document.getElementById('group').value;*/
        exam1=document.getElementById('exam1').value;
        
        if (str == "")
        {
            document.getElementById("setp").innerHTML = "";
            return;
        }
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                $("#setp").fadeOut();
                $("#setp").fadeIn();
                document.getElementById("setp").innerHTML = xmlhttp.responseText;
            }
        }
        
        xmlhttp.open("GET", "ajx/insert_subject_exam.php?subject_id="+str+"&session="+ssession+"&class="+cclass+"&exam1="+exam1, true);
        //xmlhttp.open("GET", "ajx/exam.php?group="+str, true);
        xmlhttp.send();

        xmlhttps = new XMLHttpRequest();
        xmlhttps.onreadystatechange = function()
        {
            if (xmlhttps.readyState == 4 && xmlhttps.status == 200)
            {
                $("#allsubject").fadeOut();
                $("#allsubject").fadeIn();
                document.getElementById("allsubject").innerHTML = xmlhttps.responseText;
            }
        }
    
        xmlhttps.open("GET", "ajx/exam_setting_subject.php?subject_id="+str+"&session="+ssession+"&class="+cclass+"&exam1="+exam1, true);
        xmlhttps.send();
    }
</script>

<script>
    function delsubject(str)
    {
        ssession=document.getElementById('session').value;
        cclass=document.getElementById('class').value;
       /* group=document.getElementById('group').value;*/
        exam1=document.getElementById('exam1').value;
        
        if (str == "")
        {
            document.getElementById("setp").innerHTML = "";
            return;
        }
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                $("#setp").fadeOut();
                $("#setp").fadeIn();
                document.getElementById("setp").innerHTML = xmlhttp.responseText;
            }
        }
        
        xmlhttp.open("GET", "ajx/exam_sub_delete.php?id="+str+"&session="+ssession+"&class="+cclass+"&exam1="+exam1, true);
        xmlhttp.send();

        xmlhttps = new XMLHttpRequest();
        xmlhttps.onreadystatechange = function()
        {
            if (xmlhttps.readyState == 4 && xmlhttps.status == 200)
            {
                $("#allsubject").fadeOut();
                $("#allsubject").fadeIn();
                document.getElementById("allsubject").innerHTML = xmlhttps.responseText;
            }
        }
        xmlhttps.open("GET", "ajx/exam_setting_subject.php?id="+str+"&session="+ssession+"&class="+cclass+"&exam1="+exam1, true);
        xmlhttps.send();
    }
</script>
<script>
    function marksselect(str)
    {
        if (str == "")
        {
            document.getElementById("marks").innerHTML = "";
            return;
        }
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                document.getElementById("marks").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "ajx/marks_select.php?t=" + str, true);
        xmlhttp.send();
    }
</script>
 <script>
    function selecttable(str,category)
    {
        if (str == "")
        {
            document.getElementById("shoee").innerHTML = "";
            return;
        }
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                //$('#shoee').fadeIn('slow');
               // $('#shoee').fadeOut('slow');
                document.getElementById("shoee").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "ajx/teble_select.php?dd=" + str+"&category="+category, true);
        xmlhttp.send();
    }
</script>

<script>
    function tabledelete(str,id)
    {
        if (str == "")
        {
            document.getElementById("deletel").innerHTML = "";
            return;
        }
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                //$('#deletel').fadeIn('slow');
                //$('#deletel').fadeOut('slow');
                document.getElementById("deletel").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "ajx/table_delete.php?ss=" + str+"&id="+id, true);
        xmlhttp.send();
    }
</script>

<script>
    function selemode(str)
    {
        if (str == "")
        {
            document.getElementById("selemodee").innerHTML = "";
            return;
        }
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                //$('#selemodee').fadeIn('slow');
                //$('#selemodee').fadeOut('slow');
                document.getElementById("selemodee").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "ajx/select_mode.php?df=" + str, true);
        xmlhttp.send();
    }
</script>
<!----------------Configured Exam List------------------>
<script>
    function add_percentage(str)
    {
        if (str == "")
        {
            document.getElementById("show_exam_list").innerHTML = "";
            return;
        }
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                document.getElementById("show_exam_list").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "ajx/add_marks_percentage.php?df=" + str, true);
        xmlhttp.send();
    }
</script>
<!-------------------------------ends--------------------->

<script>
    function reportsave(str)
    {
        name=document.getElementById('name').value;
        if (str == "")
        {
            document.getElementById("reportt").innerHTML = "";
            return;
        }
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                //$('#reportt').fadeIn('slow');
                //$('#reportt').fadeOut('slow');
                document.getElementById("reportt").innerHTML = xmlhttp.responseText;
            }
        }
        
        xmlhttp.open("GET", "ajx/report_1.php?rept=" + str+"&name="+name, true);
        xmlhttp.send();
    }
</script>
<script>
    function reportselect(str,id)
    {
        //name=document.getElementById('select').value;
        if (str == "")
        {
            document.getElementById("select").innerHTML = "";
            return;
        }
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                //$('#reportt').fadeIn('slow');
                //$('#reportt').fadeOut('slow');
                document.getElementById("select").innerHTML = xmlhttp.responseText;
            }
        }
        
        xmlhttp.open("GET", "ajx/report_select.php?sel=" + str+"&id="+id, true);
        xmlhttp.send();
    }
</script>

<script>
    function reportdelet(str,iddel)
    {
        if (str == "")
        {
            document.getElementById("select").innerHTML = "";
            return;
        }
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                //$('#reportt').fadeIn('slow');
                //$('#reportt').fadeOut('slow');
                document.getElementById("select").innerHTML = xmlhttp.responseText;
            }
        }
        
        xmlhttp.open("GET", "ajx/report_delete.php?sel=" + str+"&iddel="+iddel, true);
        xmlhttp.send();
    }
</script>
<script>
    function newdelet(str,newid)
    {
        if (str == "")
        {
            document.getElementById("reportt").innerHTML = "";
            return;
        }
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                //$('#reportt').fadeIn('slow');
                //$('#reportt').fadeOut('slow');
                document.getElementById("reportt").innerHTML = xmlhttp.responseText;
            }
        }
        
        xmlhttp.open("GET", "ajx/new_delete.php?sel=" + str+"&newid="+newid, true);
        xmlhttp.send();
    }
</script>
<script>
    function performancesave(str)
    {
       
        if (str == "")
        {
            document.getElementById("reportt1").innerHTML = "";
            return;
        }
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                //$('#reportt').fadeIn('slow');
                //$('#reportt').fadeOut('slow');
                document.getElementById("reportt1").innerHTML = xmlhttp.responseText;
            }
        }
         namesave=document.getElementById('namesave').value;
        xmlhttp.open("GET", "ajx/performance_1.php?rept=" + str+"&namesave="+namesave, true);
        xmlhttp.send();
    }
</script>
<script>
    function performanceselect(str,id)
    {
       // name=document.getElementById('select1').value;
        if (str == "")
        {
            document.getElementById("select1").innerHTML = "";
            return;
        }
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                //$('#reportt').fadeIn('slow');
                //$('#reportt').fadeOut('slow');
                document.getElementById("select1").innerHTML = xmlhttp.responseText;
            }
        }
        
        xmlhttp.open("GET", "ajx/performance_select.php?sel=" + str+"&id="+id, true);
        xmlhttp.send();
    }
</script>

<script>
    function performancedelet(str,iddel)
    {
        if (str == "")
        {
            document.getElementById("select1").innerHTML = "";
            return;
        }
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                //$('#reportt').fadeIn('slow');
                //$('#reportt').fadeOut('slow');
                document.getElementById("select1").innerHTML = xmlhttp.responseText;
            }
        }
        
        xmlhttp.open("GET", "ajx/performance_delete.php?sel=" + str+"&iddel="+iddel, true);
        xmlhttp.send();
    }
</script>
<script>
    function pernewdelet(str,newid)
    {
        if (str == "")
        {
            document.getElementById("reportt1").innerHTML = "";
            return;
        }
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                //$('#reportt').fadeIn('slow');
                //$('#reportt').fadeOut('slow');
                document.getElementById("reportt1").innerHTML = xmlhttp.responseText;
            }
        }
        
        xmlhttp.open("GET", "ajx/prenew_delete.php?sel=" + str+"&newid="+newid, true);
        xmlhttp.send();
    }
</script>

<style>
button{background:none; border:none;font-size:14px; display:block;height:35px; width:100%; padding:10px;}
.paddin{background:#CCC;margin-bottom:10px; border-radius:6px;}
.paddin:hover{background:rgba(102,204,255,1);-moz-transition:all 600ms ease-in-out;-ms-transition:all 600ms ease-in-out;-o-transition:all 600ms ease-in-out;-webkit-transition:all 600ms ease-in-out;transition:all 600ms ease-in-out;}
.wid{width:600px;}
.heid_min{min-height:400px;background:#cefab8;color:rgba(0,51,102,1); padding:10px; border:#069 solid 1px;}
.cl{clear:both; width:100%;}
.w{width:60%; background:#8b1000; border:rgba(255,153,153,1) 1px solid; border-radius:6px; text-align:center; color:rgba(255,255,255,1); font-weight:bold; text-decoration:underline; padding-bottom:10px; padding-top:10px; margin:0px auto 0px auto;}
.w_w{width:60%; background:rgba(102,204,255,1); border:rgba(153,0,0,.5) 1px solid; border-radius:4px; text-align:center;text-decoration:underline; padding-bottom:10px; padding-top:10px; margin:0px auto 0px auto;}
.ww{width:90%; margin:5px auto 0px auto;}
.www{width:86%; margin:0px auto 0px auto;}
.wwww{width:100%; margin:0px auto 0px auto;}
.w1{width:33%; background:rgba(102,204,255,1); border:rgba(255,153,153,1) 1px solid; border-radius:6px; text-align:center; color:rgba(0,51,102,1); text-decoration:underline; padding-bottom:10px; padding-top:10px; float:left;}
.w2{width:30%; background:rgba(102,204,51,.6); border:rgba(255,153,153,1) 1px solid; border-radius:6px; text-align:center; color:rgba(0,0,0,1); font-weight:100; padding-bottom:10px; margin:0px 0px 0px 0px;}
.w3{width:33%; background:rgba(102,204,255,1); border:rgba(255,153,153,1) 1px solid; border-radius:6px; text-align:center; color:rgba(0,51,102,1); text-decoration:underline; padding-bottom:10px; padding-top:10px; margin:0px 0px 0px 0px; float:right;}
.w4{width:90%; background:#e4f5d8; border:rgba(255,153,153,1) 1px solid; text-decoration:underline; padding-bottom:10px; padding-top:10px; margin:5px auto 0px auto;}
.w5{width:33%; background:rgba(255,204,255,1); border:rgba(255,153,153,1) 1px solid; border-radius:6px; text-align:center; color:rgba(0,51,102,1); text-decoration:underline; padding-bottom:10px; padding-top:10px; float:left;}
.w6{width:25%;border:rgba(153,0,0,.5) solid 1px; border-radius:5px; padding:10px; background:#f6f9e5}
.w7{width:25%;border:rgba(153,0,0,.5) solid 1px; border-radius:5px; padding:10px; margin-left:23px; background:#f6f9e5}
w8{height:30px; width:100px; border:1px solid rgba(0,102,51,1);}
table{font-size:12px; }
table th{padding:4px;}
table tr td{background: #a9db80;
background: -moz-linear-gradient(top,  #a9db80 0%, #96c56f 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#a9db80), color-stop(100%,#96c56f));
background: -webkit-linear-gradient(top,  #a9db80 0%,#96c56f 100%);
background: -o-linear-gradient(top,  #a9db80 0%,#96c56f 100%);
background: -ms-linear-gradient(top,  #a9db80 0%,#96c56f 100%);
background: linear-gradient(to bottom,  #a9db80 0%,#96c56f 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a9db80', endColorstr='#96c56f',GradientType=0 ); padding:3px 10px 3px 10px;}
.w9{width:40%; background:rgba(102,204,51,.6); border:rgba(255,153,153,1) 1px solid; border-radius:6px; text-align:center; color:rgba(0,0,0,1); font-weight:100; padding-bottom:10px; margin:0px 0px 0px 0px;}

.w10{width:48%; background:rgba(102,204,255,1); border:rgba(255,153,153,1) 1px solid; border-radius:6px; text-align:center; color:rgba(0,51,102,1); text-decoration:underline; padding-bottom:10px; padding-top:10px;}
.w11{width:30%; background:rgba(102,204,51,.6); border:rgba(255,153,153,1) 1px solid; border-radius:6px; text-align:center; color:rgba(0,0,0,1); font-weight:100; padding-bottom:0px; margin:0px 0px 0px 0px; line-height:30px;}
.w12{width:23%; background:rgba(102,204,51,.6); border:rgba(255,153,153,1) 1px solid; border-radius:6px; color:rgba(0,0,0,1); font-weight:100; padding-bottom:10px; margin:0px 0px 0px 0px;}
.ll{background: #e5e696;
background: -moz-linear-gradient(top,  #e5e696 0%, #d1d360 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#e5e696), color-stop(100%,#d1d360));
background: -webkit-linear-gradient(top,  #e5e696 0%,#d1d360 100%);
background: -o-linear-gradient(top,  #e5e696 0%,#d1d360 100%);
background: -ms-linear-gradient(top,  #e5e696 0%,#d1d360 100%);
background: linear-gradient(to bottom,  #e5e696 0%,#d1d360 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e5e696', endColorstr='#d1d360',GradientType=0 ); padding-left:10px;
}
.ll2{background: #e5e696;
background: -moz-linear-gradient(top,  #e5e696 0%, #d1d360 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#e5e696), color-stop(100%,#d1d360));
background: -webkit-linear-gradient(top,  #e5e696 0%,#d1d360 100%);
background: -o-linear-gradient(top,  #e5e696 0%,#d1d360 100%);
background: -ms-linear-gradient(top,  #e5e696 0%,#d1d360 100%);
background: linear-gradient(to bottom,  #e5e696 0%,#d1d360 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e5e696', endColorstr='#d1d360',GradientType=0 );}
</style>

</head>

<body>
        <!-- body starts from here---------------------------------------------------------------------------------------------->
        <div id="body_container">
            <div class="eims_soft_head_div">
                <?php include('class/homepage_header.php'); ?>
            </div>
            <div class="st_detail_body">
                <div class="st_detail_topbar">
                    <a href="#">
                        <div class="topbar_small_div left">
                            <img src="images/extra_images/examination_icon.png"/>
                            <div class="topbar_small_div_text left height-30">SETTING</div>
                        </div>
                        <div class="topbar_small_div_text2 left height-30"><h2>EXAMINATION SETTING</h2></div>
                    </a>
                    <div class="topbar_small_div right">
                        <ul>
<?php include('includes/back.php'); ?>

                        </ul>
                        

                    </div>
                </div>
                <script>
				function exampercentage()
				{
					var session_id=$('#session').val();
					var class_id=$('#class').val();
					var totalfid=$('#totalfid').val();
					//alert("SUccess, Session : "+session_id+" Class : "+class_id+" Total Field : "+totalfid+" Field : "+text);
					
					if(totalfid==1)
					{
						var fid_0=$('#fid_0').val();
						var eid_0=$('#eid_0').val();
						post_data2 = {'fid_0':fid_0,'eid_0':eid_0,'session': session_id,'class': class_id,'status': 9,'totaldata': totalfid};
					}
					else if(totalfid==2)
					{
						var fid_0=$('#fid_0').val();
						var fid_1=$('#fid_1').val();
						var eid_0=$('#eid_0').val();
						var eid_1=$('#eid_1').val();
						post_data2 = {'fid_0':fid_0,'fid_1':fid_1,'eid_0':eid_0,'eid_1':eid_1,'session': session_id,'class': class_id,'status': 9,'totaldata': totalfid};
					}
					else if(totalfid==3)
					{
						var fid_0=$('#fid_0').val();
						var fid_1=$('#fid_1').val();
						var fid_2=$('#fid_2').val();
						var eid_0=$('#eid_0').val();
						var eid_1=$('#eid_1').val();
						var eid_2=$('#eid_2').val();
						post_data2 = {'fid_0':fid_0,'fid_1':fid_1,'fid_2':fid_2,'eid_0':eid_0,'eid_1':eid_1,'eid_2':eid_2,'session': session_id,'class': class_id,'status': 9,'totaldata': totalfid};
					}
					else if(totalfid==4)
					{
						var fid_0=$('#fid_0').val();
						var fid_1=$('#fid_1').val();
						var fid_2=$('#fid_2').val();
						var fid_3=$('#fid_3').val();
						
						var eid_0=$('#eid_0').val();
						var eid_1=$('#eid_1').val();
						var eid_2=$('#eid_2').val();
						var eid_3=$('#eid_3').val();
						post_data2 = {'fid_0':fid_0,'fid_1':fid_1,'fid_2':fid_2,'fid_3':fid_3,'eid_0':eid_0,'eid_1':eid_1,'eid_2':eid_2,'eid_3':eid_3,'session': session_id,'class': class_id,'status': 9,'totaldata': totalfid};
					}
					else if(totalfid==5)
					{
						var fid_0=$('#fid_0').val();
						var fid_1=$('#fid_1').val();
						var fid_2=$('#fid_2').val();
						var fid_3=$('#fid_3').val();
						var fid_4=$('#fid_4').val();
						
						var eid_0=$('#eid_0').val();
						var eid_1=$('#eid_1').val();
						var eid_2=$('#eid_2').val();
						var eid_3=$('#eid_3').val();
						var eid_4=$('#eid_4').val();
						post_data2 = {'fid_0':fid_0,'fid_1':fid_1,'fid_2':fid_2,'fid_3':fid_3,'fid_4':fid_4,'eid_0':eid_0,'eid_1':eid_1,'eid_2':eid_2,'eid_3':eid_3,'eid_4':eid_4,'session': session_id,'class': class_id,'status': 9,'totaldata': totalfid};
					}
					else if(totalfid==6)
					{
						var fid_0=$('#fid_0').val();
						var fid_1=$('#fid_1').val();
						var fid_2=$('#fid_2').val();
						var fid_3=$('#fid_3').val();
						var fid_4=$('#fid_4').val();
						var fid_5=$('#fid_5').val();
						
						var eid_0=$('#eid_0').val();
						var eid_1=$('#eid_1').val();
						var eid_2=$('#eid_2').val();
						var eid_3=$('#eid_3').val();
						var eid_4=$('#eid_4').val();
						var eid_5=$('#eid_5').val();
						post_data2 = {'fid_0':fid_0,'fid_1':fid_1,'fid_2':fid_2,'fid_3':fid_3,'fid_4':fid_4,'fid_5':fid_5,'eid_0':eid_0,'eid_1':eid_1,'eid_2':eid_2,'eid_3':eid_3,'eid_4':eid_4,'eid_5':eid_5,'session': session_id,'class': class_id,'status': 9,'totaldata': totalfid};
					}
					else if(totalfid==7)
					{
						var fid_0=$('#fid_0').val();
						var fid_1=$('#fid_1').val();
						var fid_2=$('#fid_2').val();
						var fid_3=$('#fid_3').val();
						var fid_4=$('#fid_4').val();
						var fid_5=$('#fid_5').val();
						var fid_6=$('#fid_6').val();
						
						var eid_0=$('#eid_0').val();
						var eid_1=$('#eid_1').val();
						var eid_2=$('#eid_2').val();
						var eid_3=$('#eid_3').val();
						var eid_4=$('#eid_4').val();
						var eid_5=$('#eid_5').val();
						var eid_6=$('#eid_6').val();
						post_data2 = {'fid_0':fid_0,'fid_1':fid_1,'fid_2':fid_2,'fid_3':fid_3,'fid_4':fid_4,'fid_5':fid_5,'fid_6':fid_6,'eid_0':eid_0,'eid_1':eid_1,'eid_2':eid_2,'eid_3':eid_3,'eid_4':eid_4,'eid_5':eid_5,'eid_6':eid_6,'session': session_id,'class': class_id,'status': 9,'totaldata': totalfid};
					}
					else if(totalfid==8)
					{
						var fid_0=$('#fid_0').val();
						var fid_1=$('#fid_1').val();
						var fid_2=$('#fid_2').val();
						var fid_3=$('#fid_3').val();
						var fid_4=$('#fid_4').val();
						var fid_5=$('#fid_5').val();
						var fid_6=$('#fid_6').val();
						var fid_7=$('#fid_7').val();
						
						var eid_0=$('#eid_0').val();
						var eid_1=$('#eid_1').val();
						var eid_2=$('#eid_2').val();
						var eid_3=$('#eid_3').val();
						var eid_4=$('#eid_4').val();
						var eid_5=$('#eid_5').val();
						var eid_6=$('#eid_6').val();
						var eid_7=$('#eid_7').val();
						post_data2 = {'fid_0':fid_0,'fid_1':fid_1,'fid_2':fid_2,'fid_3':fid_3,'fid_4':fid_4,'fid_5':fid_5,'fid_6':fid_6,'fid_7':fid_7,'eid_0':eid_0,'eid_1':eid_1,'eid_2':eid_2,'eid_3':eid_3,'eid_4':eid_4,'eid_5':eid_5,'eid_6':eid_6,'eid_7':eid_7,'session': session_id,'class': class_id,'status': 9,'totaldata': totalfid};
					}
					else if(totalfid==9)
					{
						var fid_0=$('#fid_0').val();
						var fid_1=$('#fid_1').val();
						var fid_2=$('#fid_2').val();
						var fid_3=$('#fid_3').val();
						var fid_4=$('#fid_4').val();
						var fid_5=$('#fid_5').val();
						var fid_6=$('#fid_6').val();
						var fid_7=$('#fid_7').val();
						var fid_8=$('#fid_8').val();
						
						var eid_0=$('#eid_0').val();
						var eid_1=$('#eid_1').val();
						var eid_2=$('#eid_2').val();
						var eid_3=$('#eid_3').val();
						var eid_4=$('#eid_4').val();
						var eid_5=$('#eid_5').val();
						var eid_6=$('#eid_6').val();
						var eid_7=$('#eid_7').val();
						var eid_8=$('#eid_8').val();
						post_data2 = {'fid_0':fid_0,'fid_1':fid_1,'fid_2':fid_2,'fid_3':fid_3,'fid_4':fid_4,'fid_5':fid_5,'fid_6':fid_6,'fid_7':fid_7,'fid_8':fid_8,'eid_0':eid_0,'eid_1':eid_1,'eid_2':eid_2,'eid_3':eid_3,'eid_4':eid_4,'eid_5':eid_5,'eid_6':eid_6,'eid_7':eid_7,'eid_8':eid_8,'session': session_id,'class': class_id,'status': 9,'totaldata': totalfid};
					}
					else if(totalfid==10)
					{
						var fid_0=$('#fid_0').val();
						var fid_1=$('#fid_1').val();
						var fid_2=$('#fid_2').val();
						var fid_3=$('#fid_3').val();
						var fid_4=$('#fid_4').val();
						var fid_5=$('#fid_5').val();
						var fid_6=$('#fid_6').val();
						var fid_7=$('#fid_7').val();
						var fid_8=$('#fid_8').val();
						var fid_9=$('#fid_9').val();
						
						var eid_0=$('#eid_0').val();
						var eid_1=$('#eid_1').val();
						var eid_2=$('#eid_2').val();
						var eid_3=$('#eid_3').val();
						var eid_4=$('#eid_4').val();
						var eid_5=$('#eid_5').val();
						var eid_6=$('#eid_6').val();
						var eid_7=$('#eid_7').val();
						var eid_8=$('#eid_8').val();
						var eid_9=$('#eid_9').val();
						post_data2 = {'fid_0':fid_0,'fid_1':fid_1,'fid_2':fid_2,'fid_3':fid_3,'fid_4':fid_4,'fid_5':fid_5,'fid_6':fid_6,'fid_7':fid_7,'fid_8':fid_8,'fid_9':fid_9,'eid_0':eid_0,'eid_1':eid_1,'eid_2':eid_2,'eid_3':eid_3,'eid_4':eid_4,'eid_5':eid_5,'eid_6':eid_6,'eid_7':eid_7,'eid_8':eid_8,'eid_9':eid_9,'session': session_id,'class': class_id,'status': 9,'totaldata': totalfid};
					}
					else if(totalfid==11)
					{
						var fid_0=$('#fid_0').val();
						var fid_1=$('#fid_1').val();
						var fid_2=$('#fid_2').val();
						var fid_3=$('#fid_3').val();
						var fid_4=$('#fid_4').val();
						var fid_5=$('#fid_5').val();
						var fid_6=$('#fid_6').val();
						var fid_7=$('#fid_7').val();
						var fid_8=$('#fid_8').val();
						var fid_9=$('#fid_9').val();
						var fid_10=$('#fid_10').val();
						
						var eid_0=$('#eid_0').val();
						var eid_1=$('#eid_1').val();
						var eid_2=$('#eid_2').val();
						var eid_3=$('#eid_3').val();
						var eid_4=$('#eid_4').val();
						var eid_5=$('#eid_5').val();
						var eid_6=$('#eid_6').val();
						var eid_7=$('#eid_7').val();
						var eid_8=$('#eid_8').val();
						var eid_9=$('#eid_9').val();
						var eid_10=$('#eid_10').val();

						post_data2 = {'fid_0':fid_0,'fid_1':fid_1,'fid_2':fid_2,'fid_3':fid_3,'fid_4':fid_4,'fid_5':fid_5,'fid_6':fid_6,'fid_7':fid_7,'fid_8':fid_8,'fid_9':fid_9,'fid_10':fid_10,'eid_0':eid_0,'eid_1':eid_1,'eid_2':eid_2,'eid_3':eid_3,'eid_4':eid_4,'eid_5':eid_5,'eid_6':eid_6,'eid_7':eid_7,'eid_8':eid_8,'eid_9':eid_9,'eid_10':eid_10,'session': session_id,'class': class_id,'status': 9,'totaldata': totalfid};
					}
					var sudds="<div class='dash_label' style='margin-top:15px; padding:10px; line-height:40px; background:#fff; padding-left:10px; color:#000; border-top-left-radius:5px; border-top-right-radius:5px; text-align:left;'> <img src='images/loader-big.gif' style='margin-top:18px;'> <span style='margin-top:-5px;'>Data is procesing now...</span>  </div>";
					
					
					
					$.post('json/student.php', post_data2, function (datas2) 
					{
						if(datas2==1)
						{
							var sudd="<div class='dash_label' style='margin-top:15px; padding:10px; line-height:40px; background:#fff; padding-left:10px; color:#000; border-top-left-radius:5px; border-top-right-radius:5px; text-align:left;'> Student Exam Data Added Successfully .</div>";
							$("#wrong").html(sudd);
							post_data3 = {'session': session_id,'class': class_id,'status':10};
							$.post('json/student.php', post_data3, function (datas3) 
							{
								$("#wrong2").html(datas3);
							});
						}
						else if(datas2==2)
						{
							var sudd="<div class='dash_label' style='margin-top:15px; padding:10px; line-height:40px; background:#fff; padding-left:10px; color:#000; border-top-left-radius:5px; border-top-right-radius:5px; text-align:left;'> Student Exam Data Updated Successfully .</div>";
							$("#wrong").html(sudd);
							post_data3 = {'session': session_id,'class': class_id,'status':10};
							$.post('json/student.php', post_data3, function (datas3) 
							{
								$("#wrong2").html(datas3);
							});
						}
						else if(datas2==3)
						{
							var sudd="<div class='dash_label' style='margin-top:15px; padding:10px; line-height:40px; background:#fff; padding-left:10px; color:#000; border-top-left-radius:5px; border-top-right-radius:5px; text-align:left;'> Student Exam Data Updated Successfully .</div>";
							$("#wrong").html(sudd);
							post_data3 = {'session': session_id,'class': class_id,'status':10};
							$.post('json/student.php', post_data3, function (datas3) 
							{
								$("#wrong2").html(datas3);
							});
						}
						else
						{
							var sudds="<div class='dash_label' style='margin-top:15px; padding:10px; line-height:40px; background:#fff; padding-left:10px; color:#000; border-top-left-radius:5px; border-top-right-radius:5px; text-align:left;'> Student Exam Data Updated Successfully. </div>";
							$("#wrong").html(sudds);
							post_data3 = {'session': session_id,'class': class_id,'status':10};
							$.post('json/student.php', post_data3, function (datas3) 
							{
								$("#wrong2").html(datas3);
							});
						}
						
						//alert(datas2);
					});
					
				}
			</script>
                <div class="border_top"></div><?php include_once('class/esm.php'); ?>
                <!-----add student form div starts here-------------------------------------------------------------------------------------------------->                        
                <div style="clear:both; ">
                <form action="" method="post" name="exam">
                    <div class="admission_div_page" style="margin-top: 20px; height:auto;">
                        <div class="admission_text_div height-40 " style="border-bottom: 5px #CCCCCC ridge;">
                            <h2 class="margin_left30"><left>Examination Result Card Settings :</left></h2>
                        </div>
                        <div class="shadow_inner" style="height:auto;background:#90c078;">
                        
                        <?php include("include/side_manu_exam.php"); ?> 
                         <div style="height:auto; width:65%;" class="left margin_left10 wid margin-top-30">
                          <div id="option">
                            <!------------start------------>
                               <div style="font-size:24px; font-weight:bold; color:rgba(0,51,102,1);">
                                  Examination Result Card Settings ....
                               </div>
                         <!--<div id="reportt1"></div>-->
                   
                            <!------------end---------------> 
                           </div>
                         </div>
                             <div class="cl"></div>  
                        </div>
                        

                    </div>


                </form>
                </div>


            </div>


            <div class="footer_div_full">
                <div class="footer_div">
                    <?php include ('./class/footer.php'); ?>
                </div>
            </div>   
        </div>



    </body>
</html>