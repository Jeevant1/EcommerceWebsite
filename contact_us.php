<?php

include('create_contactus.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="contact_us.css">
</head>

<body>
    <div class="contactform">
        <form class="form" method="post" action="">
            <h1 class="title">Contact Us</h1>

            <div class="inputcontainer">
                <input type="text" class="input" placeholder="a" name="fname">
                <label for="" class="label">First Name</label>
            </div>

            <div class="inputcontainer">
                <input type="text" class="input" placeholder="a" name="lname">
                <label for="" class="label">Last Name</label>
            </div>

            <div class="inputcontainer">
                <input type="text" class="input" placeholder="a" name="phone">
                <label for="" class="label">Phone Number</label>
            </div>

            <div class="inputcontainer">
                <input type="text" class="input" placeholder="a" name="address">
                <label for="" class="label">Address</label>
            </div>
            
            
            
            <!-- <input type="submit" class="submitbutton" value="SUBMIT"> -->
          
            <button type="submit" name="create" class="submitbutton" value="">Submit</button>
        
        </form>
    </div>

    
</body>
</html>