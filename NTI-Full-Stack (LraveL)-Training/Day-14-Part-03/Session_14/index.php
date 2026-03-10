<?php
require('dbc.php');
$query = "SELECT * FROM users ORDER BY id ASC";
$result = mysqli_query($connection,$query);
// $users = mysqli_fetch_all($result,MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Document</title>
</head>
<body>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">first name</th>
        <th scope="col">last name</th>
        <th scope="col">email</th>
        <th scope="col">gender</th>
        <th scope="col">salary</th>
      </tr>
    </thead>
    <tbody>
      <?php $id=1;
      while($row = mysqli_fetch_assoc($result )){ ?>
      <tr>
        <th scope="row"><?php echo $id++ ?></th>
        <td><?php echo $row['first_name'] ?></td>
        <td><?php echo $row['last_name'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['gender'] ?></td>
        <td><?php echo $row['salary'] ?></td>
        <td>
    <a href="update.php?id=<?php echo $row['id']; ?>" 
       class="btn btn-primary">Update</a>
</td>
        <td> <a href="delete.php?id=<?php echo $row['id']; ?>" 
   class="btn btn-danger">
   Delete
</a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</body>
</html>

