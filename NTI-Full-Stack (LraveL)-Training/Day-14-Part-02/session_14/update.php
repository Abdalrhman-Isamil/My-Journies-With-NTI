<?php
$conn = mysqli_connect("localhost", "root", "", "test");

if(isset($_POST['update'])){

    $id = $_POST['id'];
    $name = $_POST['name'];

    $query = "UPDATE employees 
            SET name='$name' 
            WHERE id=$id";

    mysqli_query($conn, $query);
}
?>