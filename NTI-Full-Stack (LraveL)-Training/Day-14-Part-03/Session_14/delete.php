<?php

require('dbc.php');
$id = $_GET['id'];

$query = "DELETE FROM users WHERE id = $id  ";
$result = mysqli_query($connection ,$query);

if($result){
    header('location:index.php');
}

// if(isset($_GET['id'])){

//     $id = $_GET['id'];

//     $stmt = $connection->prepare("DELETE FROM users WHERE id = ?");
//     $stmt->bind_param("i", $id);
//     $stmt->execute();

//     header("Location: index.php");
//     exit;
// }