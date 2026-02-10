<?php

// $students = [
//     "ahmed"  => ["arabic"=>60 , "english"=>90 , "mth"=>50],
//     "ali"    => ["arabic"=>70 , "english"=>30 , "mth"=>80],
//     "yasser" => ["arabic"=>20 , "english"=>100 , "mth"=>80],
// ];

// $maxStudent = "";
// $maxTotal   = 0;

// foreach ($students as $name => $grades) {

//     $total = array_sum($grades);       
//     $average = $total / count($grades); 

//     echo "Student: $name <br>";
//     echo "Total: $total <br>";
//     echo "Average: $average <br><br>";


//     if ($total > $maxTotal) {
//         $maxTotal = $total;
//         $maxStudent = $name;
//     }
// }

// echo "<br>";
// echo "Top Student: $maxStudent <br>";
// echo "Highest Total: $maxTotal";

// // ? Pass By Value :

// function addFive($num) {
//     $num = $num + 5;
// }

// $x = 10;
// addFive($x);

// echo $x;   //? 10


// // ? Pass By Reference : 

// function addFive(&$num) {
//     $num = $num + 5;
// }

// $x = 10;
// addFive($x);

// echo $x;   //? 15


//? ==============

// function sum($x,$y){
//     return $x + $y;
// }
// echo sum(3,7);  

//? ==============

// $numbers = [4, 3, 5, 7];

// function sum($myarr) {
//     $total = 0;
//     foreach ($myarr as $value) {
//         $total += $value;
//     }
//     return $total;
// }
// echo sum($numbers);  

//? ==============


// print_r($_POST);
// echo $_POST['email'];
// echo "<br>";
// echo $_POST['pass'];
// echo "<br>";

//? ==============

// $username= $_POST['username'];
// $mymail= $_POST['email'];
// $mypass=$_POST['password'];

// $arr = [
//     'username' => "3boody-Ismail",
//     'email' => "3boody_ismail@gmail.com",
//     'password' => "12345",
// ];

// if(isset($_POST['submit'])){
//     if($username == $arr['username'] && $mymail== $arr['email'] && $mypass == $arr['pass']){
//         echo "welcom ";
//     }else{
//         echo "not Valid ";
//     }
// }

// ? =====================


// $result = "";
// $message = "";

// if (isset($_POST['submit'])) {
//     $num1 = $_POST['num1'];
//     $num2 = $_POST['num2'];
//     $op   = $_POST['operator'];
//     if (is_numeric($num1) && is_numeric($num2)) {
//         switch ($op) {
//             case '+':
//                 $result = $num1 + $num2;
//                 break;
//             case '-':
//                 $result = $num1 - $num2;
//                 break;
//             case '*':
//                 $result = $num1 * $num2;
//                 break;
//             case '/':
//                 if ($num2 != 0) {
//                     $result = $num1 / $num2;
//                 } else {
//                     $result = "Cannot divide by zero";
//                 }
//                 break;
//             default:
//                 $result = "Invalid operator";
//         }

//         $message = $result;
//         echo $message;

//     } else {
//         $message = "Please enter valid numbers";
//         echo $message;
//     }
// }


// ? =====================

    // $username= $_POST['username'];
    // $mymail= $_POST['email'];
    // $mypass=$_POST['password'];

    // setcookie('username',$username,time()+60)
    // echo $_COOKIE['username'];
    // setcookie('username',$aboody,time()+60) //? override here output => aboody
    // echo $_COOKIE['username'];
    // setcookie('email',$mymail,time()+60)
    // echo $_COOKIE['email'];
    // setcookie('password',$mypass,time()+60)
    // echo $_COOKIE['password'];
    // if (isset($_POST['submit'])){
    //     if (isset($_POST['rememebr'])&&$_POST['rememebr']==true){
    //         setcookie('username',$username,time()+60)
    //         setcookie('email',$mymail,time()+60)
    //         setcookie('password',$mypass,time()+60)
    //     }
    // }


// //? Problem-01

// $age= 20;

// if ($age > 18 ) {
//   echo "Accepted";
// } else {
//   echo "NOT Accepted";
// }
// echo "<br>";

// //? Problem-02

// function my_fun($x ,$y){
//   echo "x + y = " . $x + $y . "<br>";
//   echo "x - y = " . $x - $y . "<br>";
//   echo "x * y = " . $x * $y . "<br>";
//   echo "x / y = " . $x / $y . "<br>";
// }
// my_fun(10,5);

//? problem-03

// function sumArray($arr) {
//     return array_sum($arr);
// }

// $nums = [1, 2, 3, 4, 5];
// echo sumArray($nums);


//? problem-04


// $films = array("Fast","Predestination","Persuit","Prestige");
// $keyword = "avatar";

// if (in_array($keyword, $films)) {
//     echo "Yes";
// } else {
//     echo "No";
// }

//? problem-05


// function RouteBubble($arr) {
//     $n = count($arr);
//     for ($i = 0; $i < $n; $i++) {
//         for ($j = 0; $j < $n - $i - 1; $j++) {
//             if ($arr[$j] > $arr[$j + 1]) {
//                 $temp = $arr[$j];
//                 $arr[$j] = $arr[$j + 1];
//                 $arr[$j + 1] = $temp;
//             }
//         }
//     }
//     return $arr;
// }

// print_r(RouteBubble([5,3,8,1,2]));

//? problem-06

// $tests=array(5,4,9,3,1,7,5,8,6); 
// echo max($tests);

//? problem-07

// $films=array("avatar","Prestige","avatar","Prestige"); 
// $keyword="avatar";
// $count = 0;
// foreach ($films as $film) {
//     if ($film == $keyword) {
//         $count++;
//     }
// }

// echo $count;

//? problem-08

// function RouteRandomPass($n) {
//     return substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $n);
//     //! str_shuffle() => ترتيب عشوائي string  بترتّب حروف الـ
//     //! substr(string $string, int $start, int $length) => النص اللي هتقص منه $string الــ // => sub from which index => length your string u need
// }
// echo RouteRandomPass(5);


//? problem-09

//* With foreach
// $tests = array(1,"tariq",1.5,true,7,'s',false);

// foreach ($tests as $item) {
//     if (is_bool($item)) {
//         echo ($item ? "Yes" : "No") . "<br>";
//     }
// }


//* With While

// $tests = array(1,"tariq",1.5,true,7,'s',false);

// $i = 0;
// $count = count($tests);

// while ($i < $count) {
//     if (is_bool($tests[$i])) {
//         echo ($tests[$i] ? "Yes" : "No") . "<br>";
//     }
//     $i++;
// }

//? problem-10

// $tests = array(6,4,9,3,12,8,7);
// sort($tests);
// print_r($tests);

//? problem-11

// $arr1 = array('a','b','c','d');
// $arr2 = array('c','d','e','f');

// $result = array_intersect($arr1, $arr2);
// echo implode(" - ", $result);


//? problem-12

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//         $price = $_POST['price'];
//         $qty = $_POST['qty'];

//         if (!is_numeric($price) || !is_numeric($qty) || $price < 0 || $qty < 0) {
//             echo "<div class='error'>❌ Please enter valid numeric values only</div>";
//             exit;
//         }

//         $total = $price * $qty;

//         if ($total < 1000) {
//             $discount = 0.10;
//         } else {
//             $discount = 0.15;
//         }

//         $finalPrice = $total - ($total * $discount);

//         echo "<div class='result'>";
//         echo "Total Before Discount: <b>$total</b><br>";
//         echo "Total After Discount: <b>$finalPrice</b>";
//         echo "</div>";
//     }


?>
