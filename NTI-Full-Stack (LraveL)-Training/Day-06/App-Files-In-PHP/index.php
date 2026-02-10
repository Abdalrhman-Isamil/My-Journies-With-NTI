<?php

// phpinfo();
// $name="ali";
// $gender='male';

// echo(($name=='ali' || $gender=='male')&&($gender=='male' && $name=='ff'))? 'true':'false';

//? **********************************

// $grade = 1;

// if ($grade >= 90 && $grade <= 100) {
//     echo "A+";
// } else if ($grade < 90 && $grade >= 75) {
//     echo "B+";
// } else if ($grade < 75 && $grade >= 60) {
//     echo "C+";
// } else if ($grade < 60 && $grade >= 50) {
//     echo "D+";
// } else {
//     echo "F";
// }


//? **********************************

// $favcolor = "red";

// switch ($favcolor) {
//   case "red":
//     echo "Your favorite color is red!";
//     break;
//   case "blue":
//     echo "Your favorite color is blue!";
//     break;
//   case "green":
//     echo "Your favorite color is green!";
//     break;
//   default:
//     echo "Your favorite color is neither red, blue, nor green!";
// }


// $favcolor = "red";

// switch ($favcolor) {
//   case "red":
//   case "blue":
//   case "green":
//   default:
//     echo "Your favorite color is neither red, blue, nor green!";
// }

//? **********************************

// for ($x = 0; $x <= 10; $x++) {
//   echo "The number is: $x <br>";
// }

// ================================

// for ($x = 1; $x <= 50; $x++) {
//     if($x%5==0){
//        echo"BOOM <br>"; 
//     }
//     else{
//     echo "$x <br>";
// }
// }

//? ========================

// $cars = array("Volvo", "BMW", "Toyota");

// echo count($cars);
// echo "<br>";

// print_r($cars); 

// echo "<br>";

// for ($x = 0; $x <= count($cars) - 1; $x++) {
//     echo $cars[$x];
//     echo "<br>";
// }

//? ========================


// $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
// foreach ($car as $key => $val) {
//     echo "$key: $val <br>";
// }





//? ========================

// $car =[
//     'a'=>["brand"=>"Ford"],
//     'b'=> ["model"=>"Mustang"],
//     'c'=> ["year"=>1964]
// ];

// foreach($car as $key=>$val){
//     foreach($val as $v){
//         echo $v;
//         echo "<br>";
//     }
// }

//? ========================

$numbers = [4, 3, 5, 7];

$n = count($numbers);

for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
        if ($numbers[$j] > $numbers[$j + 1]) {
            $temp = $numbers[$j];
            $numbers[$j] = $numbers[$j + 1];
            $numbers[$j + 1] = $temp;
        }
    }
}
print_r($numbers);

// sort($numbers);
// print_r($numbers);

?>
