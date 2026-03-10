<?php

require('dbc.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){

$data = json_decode(file_get_contents("php://input"), true);

   $first_name = $data['first_name'];
$last_name = $data['last_name'];
$email = $data['email'];
$gender = $data['gender'];
$money = $data['money'];
$city = $data['city'];
$country = $data['country'];
$country_code = $data['country_code'];

  if(isset($first_name) && !empty($first_name )
    &&isset($last_name) && !empty($last_name )
    &&isset($email) && !empty($email )
 &&isset($gender) && !empty($gender )
 &&isset($money) && !empty($money )
 &&isset($city) && !empty($city )
 &&isset($country) && !empty($country )
 &&isset($country_code) && !empty($country_code )
    )    {


$query = "INSERT INTO customers (`first_name`,`last_name`,`email`,`gender`,`money`,`city`,`country`,`country_code`)
VALUES('$first_name','$last_name','$email','$gender','$money','$city','$country','$country_code')" ;
$result = mysqli_query($connection , $query);

if($result){
    echo json_encode(['message => the data insert susseccfully']);
}
else{
     echo json_encode(['message => no data']);
}
}

  }


  else{
    echo json_encode(['message => the method should be post']); 
}


////////////////////////////////////////////////////////////////////////




// else{
//     echo json_encode(['message => the method should be post']);
// }



// require('dbc.php');

// if($_SERVER['REQUEST_METHOD'] == 'POST'){

// if(isset($_POST['name']) && !empty($_POST['name'])
//     &&isset($_POST['email']) && !empty($_POST['email'])
//     ) 
// {

// $name = $_POST['name'];
// $email = $_POST['email'];
//  $query ="INSERT INTO test(`name`,`email`)
// VALUES('$name' ,'$email')"   ;
    
// $result = mysqli_query($connection , $query);

// if($result){
//     echo json_encode('[message => data inserted]');
// }
// else{
//        echo json_encode('[message => no data ]'); 
// }}

//   }




// else{
//     echo json_encode(['message => the method should be post']); 
// }