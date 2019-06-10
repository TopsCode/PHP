<?php
//echo "<pre>";
//print_r($_SESSION['MyData'][0]);
//print_r($this->session->userdata()) ;
//echo "<pre>";
//print_r($this->session->userdata());
if($this->session->userdata('msg'))
{
	$msg=$this->session->userdata('msg');
	echo "<h3>".$msg."</h3>";
	
}
//echo $this->session->userdata('name');

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
            <tr>
            <td colspan="5">
                <?php echo anchor("MyController/send_mail/","Send Mail"); ?>
                <?php echo anchor("MyController/view_all/","View All"); ?>
            </td>
            <td>
                <label style="margin-left: 50px"><?php echo anchor("MyController/logout/","Logout"); ?></label>
            </td>
        </tr>
        </tr>
        <tr>
            <?php echo "<pre>";
            print_r($_SESSION);
            exit;
            ?>
            <td colspan="6"><center><h2>Hello <?php echo $Data[0]->username ?></h2></center></td>
        </tr>
        <tr>
            <th>Password</th>
            <th>Gender</th>
            <th>Hobbies</th>
            <th>Country</th>
            <th>image</th>
            <th>Action</th>
        </tr>
        <tr>
            <td>
                <label><?php echo $Data[0]->password ?></label>
            </td>
            <td>
                <label><?php echo $Data[0]->gender ?></label>
            </td>
            <td>
                <label><?php echo $Data[0]->hobby ?></label>
            </td>
            <td>
                <label><?php echo $Data[0]->city_name ?></label>
            </td>
            <td>
                <img src="<?php echo base_url();?>/image/<?php echo $Data[0]->image; ?>" height="80px"><br>
                <input type="hidden" value="<?php echo $Data[0]->image; ?>" name="image">
                <input type="submit" name="download" value="Download">
            </td>
            <td>
                <!--<a href="">Edit</a>-->
                <?php echo anchor("MyController/edit/".$Data[0]->uid,"Edit"); ?>
            </td>
        </tr>
        
    </table>
</div>
    </form>

</body>
</html>