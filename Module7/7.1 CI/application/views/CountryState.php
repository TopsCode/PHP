<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
   function states(str)
   {
//	   alert(str);
	   
	   var abc;
	   if(window.XMLHttpRequest)
	   {
		   abc=new XMLHttpRequest();
	   }
	   else
	   {
		   abc=new ActiveXObject("Microsoft.XMLHTTP");
	   }
	   var strurl="<?php echo base_url(); ?>MyController/ajax_state/"+str;
	   
	   abc.open('GET',strurl,true);
           abc.send();
    
       abc.onreadystatechange=function()
       {
        if(abc.readyState==4)
        {
            document.getElementById('state').innerHTML=abc.responseText;
        }

    } 
    
}
</script>
</head>

<body>
<form method="post">
<table border="3" align="center" cellpadding="5" cellspacing="5">
<tr>
<td>Country</td>
<td>
<select name="country" onchange="states(this.value)">
    <option value="">Select Country</option>
    <option value="1">India</option>
    <option value="2">USA</option>
    
</select>
</td>
</tr>

<tr>
<td>state</td>
<td>
<select name="state" id="state">

</select>
</td>
</tr>
</table>
</form>
</body>
</html>