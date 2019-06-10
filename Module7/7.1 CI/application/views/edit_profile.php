<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>

<div id="container">
    <form method="post" enctype="multipart/form-data">
        <table border="1">
            <tr>
                <td>User Name</td>
                <td><input type="text" name="uname" value="<?php echo $Data[0]->uname?>"><?php echo form_error('uname'); ?></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="pass" value="<?php echo $Data[0]->pass?>"><?php echo form_error('pass'); ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $Data[0]->email?>"><?php echo form_error('email'); ?></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="gender" value="Male" <?php if($Data[0]->gen == 'Male'){
                        echo "checked=checked";
                    }?>>Male
                    <input type="radio" name="gender" value="Female" <?php if($Data[0]->gen == 'Female'){
                        echo "checked=checked";
                    }?>>Female
                </td>
            </tr>
            <tr>
                <td>Hobbies</td>
                <td>
                    <?php $h = explode(',', $Data[0]->hobby)?>
                    <input type="checkbox" name="hobby[]" value="Cricket" <?php if(in_array('Cricket', $h)){ echo "checked=checked"; }?>>Cricket
                    <input type="checkbox" name="hobby[]" value="Music" <?php if(in_array('Music', $h)){ echo "checked=checked"; }?>>Music
                    <input type="checkbox" name="hobby[]" value="Reading" <?php if(in_array('Reading', $h)){ echo "checked=checked"; }?>>Reading
                </td>
            </tr>
            <tr>
                <td>Country</td>
                <td>
                    <select name="country">
                        <option>Select Country</option>
                        <?php 
                        
                        foreach ($country AS $d){ ?>
                        <option value="<?php echo $d->cid?>" <?php if($Data[0]->cid == $d->cid){ echo "selected=selected" ;} ?>><?php echo $d->cname?></option>
                       <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
            <td>Photo</td>
            <td>
                <input type="file" name="profile_pic" value="<?php echo $Data[0]->image?>"/>
            </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Update" name="Update"></td>
                
            </tr>
        </table>
    </form>
</div>

</body>
</html>