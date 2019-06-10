<?php
//CI Registration Form for insert data

defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Application</title>
        <script src="<?php echo base_url();?>js/jquery.js" type="text/javascript"></script>
        <script>
function getstate(cid)
{
	$.ajax({
		type:'POST',
		//url: "<?php // base_url();?>controller/ajax_state/"+cid,
		url:'<?php echo base_url(); ?>Controller/ajax_state', 
		data:'cid='+cid,
		success:function(data)
		{ 
                       alert(data);
                    //return false;
                    $("#state").html(data);	
		}
		
	});	
}
</script>

<script type="text/javascript">
function getstatexml(vs)
{
//    alert(vs);
	if(window.XMLHttpRequest)
	{
		var s = new XMLHttpRequest();					
	}
	else
	{
		var s = new ActiveXObject("Microsoft.XMLHTTP");
	}			
	s.onreadystatechange = function()
	{
		if(s.readyState == 4)
		{
			document.getElementById('state').innerHTML = s.responseText;
		}
	}
	s.open('get',"<?php echo base_url(); ?>MyController/ajax_state/"+vs,true);
	s.send();
}
</script>



</head>
<body>
    <form method="post" enctype="multipart/form-data">
<div id="container">
    <table border="1" align="center">
        <tr>
            <td colspan="2"><center><h2>Registration Form</h2></center></td>
        </tr>
        <tr>
            <td>
                <label>User Name</label>
            </td>
            <td>
                <input type="text" name="uname"><?php echo form_error('uname');?>
            </td>
        </tr>
        <tr>
            <td>
                <label>Password</label>
            </td>
            <td>
                <input type="password" name="pass"><?php echo form_error('pass');?>
            </td>
        </tr>
        <tr>
            <td>
                <label>Email</label>
            </td>
            <td>
                <input type="text" name="email"><?php echo form_error('email');?>
            </td>
        </tr>
        <tr>
            <td>
                <label>Gender</label>
            </td>
            <td>
                <input type="radio" name="gender" value="Male">Male
                <input type="radio" name="gender" value="Female">Female
                <?php echo form_error('gender');?>
            </td>
        </tr>
        <tr>
            <td>
                <label>Hobbies</label>
            </td>
            <td>
                <input type="checkbox" name="hobby[]" value="Cricket">Cricket
                <input type="checkbox" name="hobby[]" value="Music">Music
                <input type="checkbox" name="hobby[]" value="Reading">Reading
            </td>
        </tr>
        <tr>
            <td>
                <label>Photo</label>
            </td>
            <td>
                <input type="file" name="profile_pic" >
            </td>
        </tr>
        <tr>
            <td>
                <label>Country</label>
            </td>
            <td>
                <?php
//                echo "<pre>";
//                print_r($country );
                ?>
                <select name="country" onchange="getstatexml(this.value)">
                    <option>Select Country</option>
                    <?php foreach ($country AS $c) { ?>
                    <option value="<?php echo $c->cid; ?>"><?php echo $c->cname; ?></option>
                    <?php } ?>
                </select>
                <?php echo form_error('country');?>
            </td>
        </tr>
        
        <tr>
            <td>
                <label>state</label>
            </td>
            <td>
                <select name="state" id="state">
                    <option>Select state</option>
                    <?php // foreach ($country AS $c) { ?>
                    <!--<option value="<?php echo $c->cid; ?>"><?php echo $c->cname; ?></option>-->
                    <?php // } ?>
                </select>
                <?php echo form_error('state');?>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <br>
                <input type="submit" name="Save" value="Register">
                <input type="reset" name="cancel" value="Cancel">
                <?php echo anchor("MyController/login/","Login"); ?>
            </td>
        </tr>
    </table>
</div>
    </form>

</body>
</html>
