<?php
require('dbc.php');
 header("content-type:application/json");


if(! isset($_GET['id'])){
    echo json_encode(['message => you must send id']);
}
else{
$id=$_GET['id'];
$query = "SELECT * FROM `customers` WHERE id = $id";
 $result =  mysqli_query($connection , $query);

if(mysqli_num_rows($result) >0){
$customers =   mysqli_fetch_assoc($result);

// echo "<pre>";
// print_r($customers);

 echo json_encode($customers);
}
else{
 echo json_encode(['message =>the id not found']);
}


}
