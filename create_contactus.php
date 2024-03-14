<?php

include('database.php');

if(isset($_POST['create'])){
   
      $msg=insert_data_contact($connection);
      
}

// insert query
function insert_data_contact($connection){
   
      $first_name = legal_input($_POST['fname']);
      $last_name = legal_input($_POST['lname']);
      $phone = legal_input($_POST['phone']);
      $address = legal_input($_POST['address']);


      $query="INSERT INTO contactus (Firstname,Lastname,phone,User_Address) VALUES ('$first_name','$last_name','$phone','$address')";


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