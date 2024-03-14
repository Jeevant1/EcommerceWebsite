<?php

include('create_admin.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin Login</title>
  <link rel="stylesheet" href="contact_us.css">
</head>

<body>
    <div class="contactform">
        <form class="form" method="post" action="user-table.php">
            <h1 class="title">Admin Login</h1>

            <div class="inputcontainer">
                <input type="text" class="input" placeholder="a" name="user">
                <label for="" class="label">Username</label>
            </div>

            <div class="inputcontainer">
                <input type="password" class="input" placeholder="a" name="password">
                <label for="" class="label">Password</label>
            </div>
            
            
            
            <!-- <input type="submit" class="submitbutton" value="SUBMIT"> -->
          
            <button type="submit" name="create" class="submitbutton" value="" href="user-table.php">Submit</button>
        
        </form>
    </div>

    
</body>
</html>