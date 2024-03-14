<?php

include('database.php');

if(isset($_POST['create'])){
   
      $msg=insert_data($connection);
      
}

// insert query
function insert_data($connection){
   
      $full_name= legal_input($_POST['name']);
      $email_address= legal_input($_POST['email']);
      $pass = legal_input($_POST['pass']);
      $mobile = legal_input($_POST['mobile']);


      $query="INSERT INTO signup (Full_Name,Email,pass,mobile) VALUES ('$full_name','$email_address','$pass','$mobile')";


      $exec= mysqli_query($connection,$query);
      if($exec){

        $msg="Data was created sucessfully";
        return $msg;
      
      }else{
        $msg= "Error: " . $query . "<br>" . mysqli_error($connection);
      }
}

// convert illegal input to legal input
function legal_input($value) {
  $value = trim($value);
  $value = stripslashes($value);
  $value = htmlspecialchars($value);
  return $value;
}
?>