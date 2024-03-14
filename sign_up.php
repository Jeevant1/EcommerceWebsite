<?php

include('create-script.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Sign Up</title>
<link rel="stylesheet" href="sign_up.css">
<script>
// Defining a function to display error message
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form 
function validateForm() {
    // Retrieving the values of form elements 
    var name = document.contactForm.name.value;
    var email = document.contactForm.email.value;
    var pass = document.contactForm.pass.value;
    var cpass =document.contactForm.cpass.value;
    var mobile = document.contactForm.mobile.value;
    
    
	// Defining error variables with a default value
    var nameErr = emailErr = passErr = true;
    
    // Validate name
    if(name == "") {
        printError("nameErr", "Please enter your name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(name) === false) {
            printError("nameErr", "Please enter a valid name");
        } else {
            printError("nameErr", "");
            nameErr = false;
        }
    }
    
    // Validate email address
    if(email == "") {
        printError("emailErr", "Please enter your email address");
    } else {
        // Regular expression for basic email validation
        var regex = /^\S+@\S+\.\S+$/;
        if(regex.test(email) === false) {
            printError("emailErr", "Please enter a valid email address");
        } else{
            printError("emailErr", "");
            emailErr = false;
        }
    }

     
    //Validate Password
    if(pass == "") {
        printError("passErr", "Passwords must have at least 8 characters");
    }
    
    else 
        {
            //Regular expression for basic password validation
            var regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$@!%&*?])[A-Za-z\d#$@!%&*?]{8,15}$/;
            if(regex.test(pass) === false) {
                printError("passErr", "Passwords must have at least 8 characters and contain at least one of the following: upper case letters, lower case letters, numbers and symbols.");
            }
            else {
                printError("passErr", "");
                passErr = false;
            }
        }
   //Validate Confirm Password
    if(cpass=="") 
        printError("cpassErr", "The passwords do not match.");
    else if(pass==cpass)
        {
            printError("cpassErr","");
            cpassErr = false;
        }
    else
        printError("cpassErr", "The passwords do not match.");
    // Validate mobile number
    if(mobile == "") {
        printError("mobileErr", "Please enter your mobile number");
    } else {
        var regex = /([789]{2})[0-9]{8}/;
        if(regex.test(mobile) === false) {
            printError("mobileErr", "Please enter a valid 10 digit mobile number");
        } else{
            printError("mobileErr", "");
            mobileErr = false;
        }
    }
    
   
    // Prevent the form from being submitted if there are any errors
    if((nameErr || emailErr || passErr || cpassErr || mobileErr) == true) {
       return false;
    } else {
        // Creating a string from input data for preview
        var dataPreview = "You've entered the following details: \n" +
                          "Full Name: " + name + "\n" +
                          "Email Address: " + email + "\n" +
                          "Password: " + pass + "\n" +
                          "Mobile Number: " + mobile + "\n" 
                          ;
        
        // Display input data in a dialog box before submitting the form
        alert(dataPreview);
    }
};
</script>
</head>
<body>
<form name="contactForm" onsubmit="return validateForm()" method="post">
    
    <h2>Sign Up</h2>

    <div class="row">
        <label>Full Name</label>
        <input type="text" name="name">
        <div class="error" id="nameErr"></div>
    </div>
    <div class="row">
        <label>Email Address</label>
        <input type="text" name="email">
        <div class="error" id="emailErr"></div>
    </div>
    <div class="row">
        <label>Password</label>
        <input type="password" name="pass">
        <div class="error" id="passErr"></div>
    </div>
    <div class="row">
        <label>Confirm Password</label>
        <input type="password" name="cpass">
        <div class="error" id="cpassErr"></div>
    </div>
    <div class="row">
        <label>Mobile Number</label>
        <input type="text" name="mobile" maxlength="10">
        <div class="error" id="mobileErr"></div>
    </div>
    
    </div>

        <button type="submit" name="create" class="submitbutton" value="">Submit</button>
    
</form>
</body>
</html>