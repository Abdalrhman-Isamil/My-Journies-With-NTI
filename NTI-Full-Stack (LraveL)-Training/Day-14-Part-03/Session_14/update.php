<?php
require('dbc.php');

$id = $_GET['id'];

if(isset($_POST['update'])){

    $first_name = $_POST['first_name'];
    $last_name  = $_POST['last_name'];
    $email      = $_POST['email'];
    $gender     = $_POST['gender'];
    $salary     = $_POST['salary'];

    $query = "UPDATE users SET 
            first_name='$first_name',
            last_name='$last_name',
            email='$email',
            gender='$gender',
            salary='$salary'
            WHERE id=$id";

    $result = mysqli_query($connection,$query);

    if($result){
        header("location:index.php");
        exit();
    }
}

$query = "SELECT * FROM users WHERE id=$id";
$result = mysqli_query($connection,$query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<title>Update</title>
</head>
<body>

<form class="w-75 m-auto my-5" method="post">

<div class="mb-3">
<label class="form-label">First Name</label>
<input type="text" name="first_name" 
class="form-control"
value="<?php echo $row['first_name']; ?>">
</div>

<div class="mb-3">
<label class="form-label">Last Name</label>
<input type="text" name="last_name" 
class="form-control"
value="<?php echo $row['last_name']; ?>">
</div>

<div class="mb-3">
<label class="form-label">Email</label>
<input type="email" name="email" 
class="form-control"
value="<?php echo $row['email']; ?>">
</div>

<div class="mb-3">
<label class="form-label">Gender</label>
<input type="text" name="gender" 
class="form-control"
value="<?php echo $row['gender']; ?>">
</div>

<div class="mb-3">
<label class="form-label">Salary</label>
<input type="text" name="salary" 
class="form-control"
value="<?php echo $row['salary']; ?>">
</div>

<button type="submit" name="update" class="btn btn-success">
Update Data
</button>

</form>

</body>
</html>