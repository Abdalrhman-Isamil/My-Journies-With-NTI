<?php

require('dbc.php');

if($_SERVER["REQUEST_METHOD"]=="POST"){
  $first_name=$_POST['first_name'];
  $last_name=$_POST['last_name'];
  $email=$_POST['email'];
  $gender=$_POST['gender'];
  $salary=$_POST['salary'];


  $query = "INSERT INTO users 
(`first_name`,`last_name`,`email`,`gender`,`salary`) 
VALUES ('$first_name','$last_name','$email','$gender','$salary')";

  $result = mysqli_query($connection,$query);
  if($result)
    {
      echo "inserted data";
      header('location:index.php');
      exit();
    }
    header('location:create.php');
}