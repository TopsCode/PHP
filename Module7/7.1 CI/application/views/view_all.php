<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Application</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
      <?php
      $uid=$this->session->userdata['MyData'][0]->uid;
      ?>  
<div id="container">
    <table border="1" align="center" width="60%"> 
        <tr>
            <td colspan="6">
                <?php echo anchor("MyController/send_mail/","Send Mail"); ?>
                <?php echo anchor("MyController/my_profile/".$uid,"My Profile"); ?>
            </td>
            <td style="width:10% ">
                <label style="margin-left: 50px"><?php echo anchor("MyController/logout/","Logout"); ?></label>
            </td>
        </tr>
        <tr>
            <td colspan="7"><center><h2>All User List</h2></center></td>
        </tr>
        <tr>
            <th>User Name</th>
            <th>Password</th>
            <th>Gender</th>
            <th>Hobbies</th>
            <th>Country</th>
            <th>image</th>
            <th style="width:10% ">Action</th>
        </tr>
        <?php foreach ($Data AS $d) { ?>
        
        <tr>
            <td>
                <label><?php echo $d->uname?></label>
            </td>
            <td>
                <label><?php echo $d->pass ?></label>
            </td>
            <td>
                <label><?php echo $d->gen ?></label>
            </td>
            <td>
                <label><?php echo $d->hobby ?></label>
            </td>
            <td>
                <label><?php echo $d->cname ?></label>
            </td>
            <td>
                <img src="<?php echo base_url();?>/image/<?php echo $d->image; ?>" height="80px"><br>
                
            </td>
            <td>
                <!--<a href="">Edit</a>-->
                <?php echo anchor("MyController/edit/".$d->uid,"Edit"); ?>
                <?php echo anchor("MyController/delete/".$d->uid,"Delete"); ?>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
    </form>

</body>
</html>