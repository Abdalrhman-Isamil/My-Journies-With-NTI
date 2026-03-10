<?php
require('dbc.php');
if($_SERVER['REQUEST_METHOD'] == 'PUT'){
$data = json_decode(file_get_contents("php://input"), true);

  if(isset($data['first_name']) && !empty($data['first_name'])
  && isset($data['last_name']) && !empty($data['last_name'])
&& isset($data['email']) && !empty($data['email'])
&& isset($data['gender']) && !empty($data['gender'])
&& isset($data['money']) && !empty($data['money'])
&& isset($data['city']) && !empty($data['city'])
&& isset($data['country']) && !empty($data['country'])
&& isset($data['country_code']) && !empty($data['country_code']))
{

$first_name = $data['first_name'];
$last_name = $data['last_name'];
$email = $data['email'];
$gender = $data['gender'];
$money = $data['money'];
$city = $data['city'];
$country = $data['country'];
$country_code = $data['country_code'];

$id = $_GET['id'];

$query = "UPDATE  customers SET
 `first_name`='$first_name',
 `last_name`='$last_name',
 `email` ='$email',
 `gender`='$gender',
 `money` ='$money',
 `city` ='$city',
 `country` ='$country'
 ,`country_code`='$country_code'
 WHERE id = $id ";
  
  $result = mysqli_query($connection , $query);
  if($result){
     echo json_encode(['message=> the data updated successfully']); 
  }
  }
else{
      echo json_encode(['message=> you must send data']); 
}


}

else{
    echo json_encode(['message=> the method should be POST']);
}

//////////////////////////////////////////////////////////////////////////////

//   if(isset($_POST['name']) && !empty($_POST['name'])
//   && isset($_POST['email']) && !empty($_POST['email'])
// && isset($_POST['password']) && !empty($_POST['password']))
// {

// $name = $_POST['name'];
// $email = $_POST['email'];
// $password = $_POST['password'];



// $query = "INSERT INTO test (`name`,`email`,`password`)
// VALUES('$name','$email','$password')" ;
  
//   $result = mysqli_query($connection , $query);
//   if($result){
//      echo json_encode(['message=> the data inserted successfully']); 
//   }
//   }
// else{
//       echo json_encode(['message=> you must send data']); 
// }


// }

// else{
//     echo json_encode(['message=> the method should be POST']);
// }








// $result = mysqli_query($connection , $query);
// if($result){
//     echo "Inserted Successfully";
//     header('location:index.php');
//     exit();
// }
//   header('location:create.php');
//     exit();
// }