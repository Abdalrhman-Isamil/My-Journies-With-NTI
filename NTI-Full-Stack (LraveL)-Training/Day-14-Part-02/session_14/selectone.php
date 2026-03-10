<?php
require('dbc.php');

header("content-type: application/json");

if (!isset($_GET['id'])) {
    echo json_encode(['message' => 'you must send id']);
} else {

    $id = $_GET['id'];

    $query  = "SELECT * FROM `myemplyeee` WHERE id = $id OR 1=1 ";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {

        $customers = mysqli_fetch_assoc($result);

        echo json_encode($customers);

    } else {

        echo json_encode(['message' => 'the id not found']);

    }
}