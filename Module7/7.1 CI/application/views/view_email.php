<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Application</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
<div id="container">
    <table border="1" align="center">
        <tr>
            <td colspan="2"><center><h2>Send Email</h2></center><?php echo anchor("MyController/my_profile/".$_SESSION['MyData'][0]->uid,"Profile"); ?></td>
        </tr>
        <tr>
            <td>
                <label>To</label>
            </td>
            <td>
                <input type="text" name="to"><?php echo form_error('to');?>
            </td>
        </tr>
        <tr>
            <td>
                <label>Password</label>
            </td>
            <td>
                <textarea name="subject" id="subject" ></textarea><?php echo form_error('pass');?>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <br>
                <input type="submit" name="send" value="Send">
                <input type="reset" name="cancel" value="Cancel">
            </td>
        </tr>
    </table>
</div>
    </form>

</body>
</html>