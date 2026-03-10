<?php
require('dbc.php');

header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $data = json_decode(file_get_contents("php://input"), true);

    if (!$data) {
        echo json_encode(['message => Invalid JSON data']);
        exit;
    }

    $first_name   = $data['first_name']   ?? null;
    $last_name    = $data['last_name']    ?? null;
    $email        = $data['email']        ?? null;
    // $gender       = $data['gender']       ?? null;
    // $money        = $data['money']        ?? null;
    // $city         = $data['city']         ?? null;
    // $country      = $data['country']      ?? null;
    // $country_code = $data['country_code'] ?? null;

    // if (
    //     isset($first_name)   && !empty($first_name)   &&
    //     isset($last_name)    && !empty($last_name)    &&
    //     isset($email)        && !empty($email)        &&
    //     isset($gender)       && !empty($gender)       &&
    //     isset($money)        && !empty($money)        &&
    //     isset($city)         && !empty($city)         &&
    //     isset($country)      && !empty($country)      &&
    //     isset($country_code) && !empty($country_code)
    // ) 
    

        $query = "INSERT INTO myemplyeee (first_name, last_name, email)
                VALUES ('$first_name', '$last_name', '$email')";

        $result = mysqli_query($connection, $query);

        if($result) {
            echo json_encode(['message => the data insert successfully']);
        }
        else {
            echo json_encode(['message => no data']);
        }

    // else {
    //     echo json_encode(['message=> all fields are required']);
    // }
}


else {
    echo json_encode(['message=> the method should be post']);
}