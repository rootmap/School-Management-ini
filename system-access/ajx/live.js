// JavaScript Document
function live_catch(display_place,fid,fname)
{	
  if (window.XMLHttpRequest) {
    xmlhttp=new XMLHttpRequest();
  } else {
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {	  
	  document.getElementById(display_place).innerHTML=xmlhttp.responseText;  
    }
  }
 
  str=1;
 
 xmlhttp.open("GET","ajx/live.php?str="+str+"&fid="+fid+"&fname="+fname+"&display_place="+display_place,true);
  xmlhttp.send();
}

function livesave(display_place,fid,fname,fval)
{	
  if (window.XMLHttpRequest) {
    xmlhttp=new XMLHttpRequest();
  } else {
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {	  
	   $("#davesd").css("display","block");
	  document.getElementById(display_place).innerHTML=xmlhttp.responseText;  
    }
  }
 
  str=2;
 
 xmlhttp.open("GET","ajx/live.php?str="+str+"&fid="+fid+"&fname="+fname+"&display_place="+display_place+"&fval="+fval,true);
  xmlhttp.send();
}