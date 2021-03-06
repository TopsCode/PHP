<form id="form1" method="post">
    <div style="display:table">
        <div style="display:table-cell;width:55%">
            <p>Alphabetic characters only:<br>
                <input type="text" data-bvalidator="alpha,minlength[10],required">
            </p>
            <p>Alphanumeric characters only:<br>
                <input type="text" data-bvalidator="alphanum,required">
            </p>
            <p>Only digits:<br>
                <input type="text" data-bvalidator="digit,required">
            </p>
            <p>Number:<br>
                <input type="text" data-bvalidator="number,required">
            </p>
            <p>Email:<br>
                <input type="text" data-bvalidator="email,required">
            </p>
            <p>Url:<br>
                <input type="text" data-bvalidator="url,required">
            </p>
            <p>Date in format dd.mm.yyyy:<br>
                <input type="text" data-bvalidator="date[dd.mm.yyyy],required">
            </p>
            <p>Minimum value 10:<br>
                <input type="text" data-bvalidator="min[10],required">
            </p>
            <p>Value between 100 and 200:<br>
                <input type="text" data-bvalidator="between[100:200],required">
            </p>
            <p>IPv4 address:<br>
                <input type="text" data-bvalidator="ip4,required">
            </p>
        </div>
        <div style="display:table-cell">
            <p>Minimum length is 10 characters:<br>
                <input type="text" data-bvalidator="minlength[10],required">
            </p>
            <p>Maximum length is 10 characters:<br>
                <input type="text" data-bvalidator="maxlength[10],required">
        </p>
            <p>Valid length is between 10 and 20 characters:<br>
                <input type="text" data-bvalidator="rangelength[10:20],required">
            </p>
            <p>Value of the inputs must be equal:<br>
                <input type="text" id="equalto1">
                <input type="text" data-bvalidator="equalto[equalto1],required">
            </p>
            <p>Value of the inputs must not be equal:<br>
                <input type="text" id="differs1">
                <input type="text" data-bvalidator="differs[differs1],required">
            </p>
            <p>Select .jpg, .png or .txt file<br>
                <input type="file" data-bvalidator="extension[jpg:png:txt],required" data-bvalidator-msg="Please select file of type .jpg, .png or .txt">
            </p>
            <p>This checkbox is required:<br>
                <input name="a" type="checkbox" value="1" data-bvalidator="required,required">
            </p>
            <p>Select at least two checkboxes:<br>
                <input name="b[]" type="checkbox" value="1">
                <input name="b[]" type="checkbox" value="1">
                <input name="b[]" type="checkbox" value="1" data-bvalidator="min[2],required" data-bvalidator-msg="Select at least two checkboxes">
            </p>
            <p>Select no more than 2 options:<br>
                <select size="5" multiple="multiple" data-bvalidator="required,max[2],required" data-bvalidator-msg="Select no more than 2 options">
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    <option value="4">Four</option>
                </select>
            </p>
            <p>Choose one:
                <input name="e" type="radio" value="1">
                <input name="e" type="radio" value="1">
                <input name="e" type="radio" value="1" data-bvalidator="required" data-bvalidator-msg="Select one radio button">
            </p>
        </div>
    </div>
    <p>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </p>
</form>


<script type="text/javascript"> 
    $(document).ready(function () {
        $('#form1').bValidator();
    });
</script> 
Alphabetic characters only:


Alphanumeric characters only:


Only digits:


Number:


Email:


Url:


Date in format dd.mm.yyyy:


Minimum value 10:


Value between 100 and 200:


IPv4 address:


Minimum length is 10 characters:


Maximum length is 10 characters:


Valid length is between 10 and 20 characters:


Value of the inputs must be equal:

  

Value of the inputs must not be equal:

  

Select .jpg, .png or .txt file
Choose File

This checkbox is required:


Select at least two checkboxes:
    

Select no more than 2 options:
OneTwoThreeFour

Choose one:      

Submit  Reset

2 - Input specific error message