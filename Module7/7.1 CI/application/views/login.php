<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//echo "<pre>";
//print_r($_SESSION);
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
            <td colspan="2"><center><h2>Login</h2></center></td>
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
            <td colspan="2" align="center">
                <br>
                <input type="submit" name="login" value="Login">
                <input type="reset" name="cancel" value="Cancel">
                <br>
                 <?php echo anchor("MyController/index/","Register"); ?>
                 <?php

                 echo $this->session->msg;
                 ?>
            </td>
        </tr>
    </table>
</div>
    </form>

</body>
</html>