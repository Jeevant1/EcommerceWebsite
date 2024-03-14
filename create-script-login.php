<?php

include('database.php');

if(isset($_POST['create'])){
   
      $msg=insert_data_login($connection);
      
}

// insert query
function insert_data_login($connection){
   
      $email = legal_input($_POST['email']);
      $pass = legal_input($_POST['pass']);
    


      $query="INSERT INTO login (Email, Pass) VALUES ('$email','$pass')";


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