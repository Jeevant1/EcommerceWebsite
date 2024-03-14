<?php

include('database.php');

if(isset($_POST['create'])){
   
      $msg=insert_data_admin($connection);
      
}

// insert query
function insert_data_admin($connection){
   
      $username = legal_input($_POST['user']);
      $password = legal_input($_POST['password']);


      $query="INSERT INTO admin (username, pass) VALUES ('$username','$password')";


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