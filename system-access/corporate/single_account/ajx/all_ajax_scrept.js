// JavaScript Document
function chack(str)
{
	if (str == "")
	{
		document.getElementById("chackchack").innerHTML = "";
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
			document.getElementById("chackchack").innerHTML = xmlhttp.responseText;
		}
	}
	pid=document.getElementById('pid').value;
	xmlhttp.open("GET", "ajx/add_report.php?id=" + str +"&pid="+pid, true);
	xmlhttp.send();
}
