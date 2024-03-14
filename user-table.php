<?php

include('read-script.php');
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CRUD Operations</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.8.3/angular.min.js"></script>
<style>
     table, td, th {  
      border: 1px solid #ddd;
      text-align: centre;
    
    }
    
    table {
      border-collapse: collapse;
      max-width: 100%;
     width:90%;
     margin-left: auto;
     margin-right: auto;
    }
    .table-data{
      
      width:100%;
      float: right;
    }
    th{
      padding: 15px;
      background-color: #c3cfe2;
    }
    td {
      padding: 15px;
    }
    tr:nth-child(even) {
  background-color: #f2f2f2;
    }
body{
    overflow-x: hidden;
}

* {
  box-sizing: border-box;}
</style>
</head>
<body>


<div class="table-data">
        <div class="list-title">
 <h2 style="text-align:center">Registered Users</h2>
          
            </div>

            <table border="1" ng-app="myApp" ng-controller="namesCtrl">
    <thead>
        <tr>
            <th>S.No</th>
            <th ng-click="orderByMe('Full_Name')">Full Name</th>

            <th>Email Address</th>
            <th>Password</th>
            <th>Mobile</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <tr ng-repeat="x in names | orderBy:myOrderBy">
            <td>{{$index+1}}</td>
            <td>{{x.Full_Name}}</td>
            <td>{{x.Email}}</td>
            <td>{{x.pass}}</td>
            <td>{{x.Mobile}}</td>
            <td><a href="update-form.php?edit={{x.id}}">Edit</a></td>
            <td><a href="delete-script.php?delete={{x.id}}">Delete</a></td>
        </tr>
    </tbody>
</table>

            <script>
    angular.module('myApp', []).controller('namesCtrl', function($scope) {
        $scope.names = <?php echo json_encode($fetchData); ?>;
        $scope.myOrderBy = 'Full_Name';
        
        $scope.orderByMe = function(x){
    $scope.myOrderBy = x;
}

    });
</script>
    
<?php

        if(count($fetchData)>0){
        $sn=1;
        foreach($fetchData as $data){
            
?> 
<!-- <tr>
<td><?php echo $sn; ?></td>
<td><?php echo $data['Full_Name']; ?></td>
<td><?php echo $data['Email'];?> </td>
<td><?php echo $data['pass']; ?></td>
<td><?php echo $data['Mobile']; ?></td>
<td><a href="update-form.php?edit=<?php echo $data['id']; ?>">Edit</a></td>
<td><a href="delete-script.php?delete=<?php echo $data['id']; ?>">Delete</a></td>
</tr>  -->
<?php

      $sn++; }

      }else{
            
?>

      <tr>
        <td colspan="7">No Data Found</td>
      </tr>
                
<?php

    }
?>
 
    </table>
    </div>

</body>
</html>