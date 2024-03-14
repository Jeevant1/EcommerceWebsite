<?php

include('create-script-login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<link rel="stylesheet" href="sign_up.css">
<script>
// Defining a function to display error message
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form 
function validateForm() {
    // Retrieving the values of form elements 
    
    var email = document.contactForm.email.value;
    var pass = document.contactForm.pass.value;
    var cpass =document.contactForm.cpass.value;
    
    
    
	// Defining error variables with a default value
    var emailErr = passErr = true;
    
    
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
    if((emailErr || passErr || cpassErr) == true) {
       return false;
    } else {
        // Creating a string from input data for preview
        // var dataPreview = "You've entered the following details: \n" +
        //                   "Full Name: " + name + "\n" +
        //                   "Email Address: " + email + "\n" +
        //                   "Password: " + pass + "\n" +
        //                   "Mobile Number: " + mobile + "\n" 
        //                   ;
        
        // // Display input data in a dialog box before submitting the form
        // alert(dataPreview);
    }
};
</script>

</head>
<body>
<div ng-app = "mainApp" ng-controller = "studentController">
<form name = "studentForm" novalidate>  
    
    <h2>Login</h2>
    
    <div class="row">
    <label>Email:</label>
   <input name = "email" type = "email" ng-model = "email" length = "100" required>  
                     <span style = "color:red" ng-show = "studentForm.email.$dirty && studentForm.email.$invalid">  
                        <span ng-show = "studentForm.email.$error.required">Email is required.</span>  
                        <span ng-show = "studentForm.email.$error.email">Invalid email address.</span>  
                     </span>
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
    <button ng-disabled = "studentForm.firstname.$dirty &&  
                        studentForm.firstname.$invalid || studentForm.lastname.$dirty &&  
                        studentForm.lastname.$invalid || studentForm.email.$dirty &&  
                        studentForm.email.$invalid" ng-click="submit()" name="create" type="submit" value="">Submit</button>  
       
    </div>
    <div class="row">
    <button ng-click = "reset()">Reset</button>
    </div>

</form>
<script>  
         var mainApp = angular.module("mainApp", []);  
           
         mainApp.controller('studentController', function($scope) {  
            $scope.reset = function(){  
               
               $scope.email = "xyz@gmail.com";  
            }  
              
            $scope.reset();  
         });  
      </script>  
</body>
</html>