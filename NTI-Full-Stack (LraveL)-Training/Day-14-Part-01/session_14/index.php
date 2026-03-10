
<?php 
require('dbc.php');
 $query ="SELECT * FROM `customers` ORDER by id ASC"  ;
$result =  mysqli_query($connection ,$query) ;
//  $customers = mysqli_fetch_all($result ,MYSQLI_ASSOC );
// while($row = mysqli_fetch_assoc($result ))

// echo "<pre>";
// print_r($customers);
// die();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    



<table class="table">
  <thead>
    <tr>
      <th scope="col">index</th>
      <th scope="col">first_name</th>
      <th scope="col">last_name</th>
      <th scope="col">email</th>
      <th scope="col">gender</th>
      <th scope="col">money</th>
      <th scope="col">city</th>
      <th scope="col">country</th>
      <th scope="col">country_code</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php  
    $i = 1;
   // foreach($customers as $customer)
    while($row = mysqli_fetch_assoc($result ))
    {   ?>
    <tr>
      <th scope="row"><?php echo $i++ ?></th>
      <td><?php echo $row['first_name']  ?></td>
      <td><?php echo $row['last_name']  ?></td>
      <td><?php echo $row['email']  ?></td>
      <td><?php echo $row['gender']  ?></td>
      <td><?php echo $row['money']  ?></td>
      <td><?php echo $row['city']  ?></td>
      <td><?php echo $row['country']  ?></td>
      <td><?php echo $row['country_code']  ?></td>
      <td><a class="btn btn-warning" href="">Update</a></td>
      <td><a class="btn btn-danger" href="delete.php?id=<?php echo $row['id'] ; ?>">Delete</a></td>
    </tr>
 <?php }  ?>
 
  </tbody>
</table>




</body>
</html>