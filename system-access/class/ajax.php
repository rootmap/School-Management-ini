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
				if(str == "1"){
                xmlhttp.open("GET", "ajx/optionone.php?o=" + str, true);
                xmlhttp.send();
				}else if(str == "2"){
				xmlhttp.open("GET", "ajx/optionone.php?o=" + str, true);
                xmlhttp.send();
				}else if(str == "3"){
				xmlhttp.open("GET", "ajx/optionone.php?o=" + str, true);
                xmlhttp.send();
				}else if(str == "4"){
				xmlhttp.open("GET", "ajx/optionone.php?o=" + str, true);
                xmlhttp.send();
				}else if(str == "5"){
				xmlhttp.open("GET", "ajx/optionone.php?o=" + str, true);
                xmlhttp.send();
				}else if(str == "6"){
				xmlhttp.open("GET", "ajx/optionone.php?o=" + str, true);
                xmlhttp.send();
				}
				
            }
     

            function showcls(str)
            {
                if (str == "")
                {
                    document.getElementById("class").innerHTML = "";
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
                        document.getElementById("class").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajx/session.php?s=" + str, true);
                xmlhttp.send();
            }
        </script>
       
        
        <script>
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
        </script>
        
        <script>
            function showexam(str)
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
                        document.getElementById("exam").innerHTML = xmlhttp.responseText;
                    }
                }
				
				ssession=document.getElementById('session').value;
				cclass=document.getElementById('class').value;
                xmlhttp.open("GET", "ajx/exam.php?group="+str+"&session="+ssession+"&class="+cclass, true);
                xmlhttp.send();
            }
        </script>
        
        <script>
            function switchexam(str)
            {
				ssession=document.getElementById('session').value;
				cclass=document.getElementById('class').value;
				group=document.getElementById('group').value;
				
                if (str == "")
                {
                    document.getElementById("sexam").innerHTML = "";
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
						$("#sexam").fadeOut();
                        $("#sexam").fadeIn();
                        document.getElementById("sexam").innerHTML = xmlhttp.responseText;
                    }
                }
				
                xmlhttp.open("GET", "ajx/sexam.php?exam_id="+str+"&session="+ssession+"&class="+cclass+"&group="+group, true);
				//xmlhttp.open("GET", "ajx/exam.php?group="+str, true);
                xmlhttp.send();

                xmlhttps = new XMLHttpRequest();
                xmlhttps.onreadystatechange = function()
                {
                    if (xmlhttps.readyState == 4 && xmlhttps.status == 200)
                    {
						$("#exam").fadeOut();
                        $("#exam").fadeIn();
                        document.getElementById("exam").innerHTML = xmlhttps.responseText;
                    }
                }
			
                xmlhttps.open("GET", "ajx/ssexam.php?exam_id="+str+"&session="+ssession+"&class="+cclass+"&group="+group, true);
				//xmlhttp.open("GET", "ajx/exam.php?group="+str, true);
                xmlhttps.send();
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
				group=document.getElementById('group').value;
                xmlhttp.open("GET", "ajx/delexam.php?exam_id="+str+"&session="+ssession+"&class="+cclass+"&group="+group, true);
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
				

                xmlhttps.open("GET", "ajx/s_exam.php?exam_id="+str+"&session="+ssession+"&class="+cclass+"&group="+group, true);
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
                xmlhttp.open("GET", "ajx/exam_setting.php?group="+str+"&session="+ssession+"&class="+cclass, true);
				
                //xmlhttp.open("GET", "ajx/exam_setting.php?e=" + str, true);
                xmlhttp.send();
            }
        </script>
        <script>
            function allsubject(str)
            {
				ssession=document.getElementById('session').value;
				cclass=document.getElementById('class').value;
				group=document.getElementById('group').value;
				
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
				
                xmlhttp.open("GET", "ajx/exam_setting_subject.php?exam1="+str+"&session="+ssession+"&class="+cclass+"&group="+group, true);
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
                xmlhttps.open("GET", "ajx/exam_subject_load.php?exam="+str+"&session="+ssession+"&class="+cclass+"&group="+group, true);
                xmlhttps.send();
            }
        </script>
        <script>
            function showsubjectsave(str)
            {
				ssession=document.getElementById('session').value;
				cclass=document.getElementById('class').value;
				group=document.getElementById('group').value;
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
				
                xmlhttp.open("GET", "ajx/insert_subject_exam.php?subject_id="+str+"&session="+ssession+"&class="+cclass+"&group="+group+"&exam1="+exam1, true);
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
			
                xmlhttps.open("GET", "ajx/exam_setting_subject.php?subject_id="+str+"&session="+ssession+"&class="+cclass+"&group="+group+"&exam1="+exam1, true);
                xmlhttps.send();
            }
        </script>
        
        <script>
            function delsubject(str)
            {
				ssession=document.getElementById('session').value;
				cclass=document.getElementById('class').value;
				group=document.getElementById('group').value;
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
				
                xmlhttp.open("GET", "ajx/exam_sub_delete.php?id="+str+"&session="+ssession+"&class="+cclass+"&group="+group+"&exam1="+exam1, true);
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
                xmlhttps.open("GET", "ajx/exam_setting_subject.php?id="+str+"&session="+ssession+"&class="+cclass+"&group="+group+"&exam1="+exam1, true);
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
						$('#shoee').fadeIn('slow');
						$('#shoee').fadeOut('slow');
                        document.getElementById("shoee").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ajx/teble_select.php?dd=" + str+"&category="+category, true);
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
				name=document.getElementById('select').value;
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