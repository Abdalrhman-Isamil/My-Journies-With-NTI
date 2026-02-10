<?php

////////////////////////////////////////////
//q1
// $students = [
// "ahmed" => ['arabic'=> 90 , 'english'=> 80 , 'math'=> 60],
// "tariq" => ['arabic'=> 70 , 'english'=> 85 , 'math'=> 90],
// "mohamed" => ['arabic'=> 100 , 'english'=> 88 , 'math'=> 99],

// ];

// get the avarage with the name of student 
//get the top student name and his marks

//key     value     array[key]    $arr =[ 'a'=> 'b'];

// foreach($students as $name=>$subj){
//   $avag = array_sum($subj)/count($subj);

// }  
// echo "the Ava ". $avag ."name".$$name ;


// ahmed 250      grade = 0

// $total = 0; 
// $studentName = '';

// foreach($students as $name=>$subj){
//     $max = array_sum($subj);
// if($max > $total){
//     $total = $max;
//     $studentName  = $name;
//     // echo $total;
// }
// }
// echo  $total ."students name is ".$studentName;

// $arr = [1,3,5 ,10];
// echo array_sum($arr );

// $arr =[ 'a'=> 'b'];
// echo $arr['a'];
// foreach($arr as $key=>$value);
///////////////////////////////
//q2





//bas by value   and refrece
// $x = 10 ;

// echo $x ;
// echo "<br>";

// $y =  &$x ;
// echo "<br>";

// echo $y ;

// echo "<br>";

// $x = 20;
// echo $x ;
// echo "<br>";

// echo $y ;


//function


// $icome = 200-50;
// $incomeWithTaxes = $icome *.014 ;
// $incomeAfterTaxes = $icome - $incomeWithTaxes ;
// $total = $incomeAfterTaxes -20;


// function countTax($rev =600, $expe=20 , $taxesRate=0.14 , $totalEpes=30 ){
// $icome = $rev-$expe;
// $incomeWithTaxes = $icome *$taxesRate ;
// $incomeAfterTaxes = $icome - $incomeWithTaxes ;
// $total = $incomeAfterTaxes -$totalEpes;
// echo $total;
// };

// countTax(200 , 30 , 0.14 , 30);
// echo "<br>";
// countTax(300 , 20 , 0.14 , 10);
// echo "<br>";
// countTax(200 , 30 , 0.14 , 30);
// echo "<br>";
// countTax(200 , 30 , 0.14 , 30);
// echo "<br>";
// countTax(taxesRate:0.15);



// function sum($a ,$b){
//    $sum = $a+$b ;
// return $sum ;
// }

// echo 50+  sum(10,200);





/////////////////////////////
//scope      global   local

$x =20;   // Global var


// function age($var){
//     $y = 10;  //local 
//     echo $var;
//     echo $y;

// }
// // echo $y;
// age($x);




// function age(){
//     $y = 10;  //local 
//     $y++;
//     // global $x;
//     // echo $x;
//     echo "<br>";
//     echo $y;

// }
// // echo $y;
// age();
// age();
// age();




// function age(){
//    static $y = 10;  //local 
//     $y++;
//     // global $x;
//     // echo $x;
//     echo "<br>";
//     echo $y;

// }
// // echo $y;
// age();
// age();
// age();
// age();
// age();
// age();


// function trackvisit(){
//     static $count = 0;
//     $count ++ ;
//     echo $count;

// }
// trackvisit();
// trackvisit();
// trackvisit();
// trackvisit();
// trackvisit();

// const NAME = "ahmed";
// echo NAME;

// define('x',10);

// function trackvisit(){
//     static $count = 0;
//     $count ++ ;
//     echo $count;
//     echo NAME ;


// }
// trackvisit();
// $x =10 ;
// echo "<br>";
// echo $GLOBALS['x'];
// print_r($GLOBALS);







//questions
// 1-write php function addNumbers() return the sum of two integers ;
// 2-write function check if the numbers is prime or not ;
// 3-write function that takes an array of numbers and return the total of them ;
// 4-write function that return the max number of an array ;


// $x = 10 ;
// $x *== $x 



// $arr = [2,5,7,9];

// function sumArray($arr){
// $sum = 0 ;
// for($i=0 ; $i< count($arr) ; $i++){
//   $sum += $arr[$i];
// }

// return $sum;
// }

// echo sumArray($arr);






////////////////Q3
// $arr = [2,5,7,9];
// function sumArray($arr){
// $sum = 0 ;
// for($i=0 ; $i< count($arr) ; $i++){
//   $sum += $arr[$i];
// }
// return $sum;
// }

// echo sumArray($arr);



////////////////Q4
// $arr = [2,5,7,9];
// function maxArray($arr){
// $max = $arr[0];
// for($i=1 ; $i<count($arr) ;$i++){
//     if($arr[$i] > $max){
//         $max = $arr[$i];
//     }
// }
// return $max;
// }
// echo maxArray($arr);
//////////////////////////////////////////////////////////////////////

// print_r($_POST);

// echo $_POST['user_name'];
// echo "<br>";
// echo $_POST['email'];
// echo "<br>";
// echo $_POST['password'];
// echo "<br>";

// $_POST['submit'];



// if(isset($_POST['submit'])){
//     echo "enter";
    
// echo $_POST['user_name'];
// echo "<br>";
// echo $_POST['email'];
// echo "<br>";
// echo $_POST['password'];
// echo "<br>";
// }
// else{
//     echo "not valid";
// }



// $username =  $_POST['user_name'];

//  $email = $_POST['email'];

// $password =  $_POST['password'];

// $arr = [
//     'user_name' => "ahmed",
//     'email' => "ahmed@gmail.com",
//     'password' => "123",
// ];

// if(isset($_POST['submit'])){

//     if($username  == $arr['user_name'] &&  $email == $arr['email'] 
//     && $password == $arr['password'] 
//     ){
//          echo "welcome"; 
//     }
//     else{
//          echo "not valid";
//     }
// };
///////////////////////////////////////////////////////

// echo "<pre>";

// print_r($_POST);

// if(isset($_POST['submit'])){

// $number1 =  $_POST['num1'];
// $number2 =  $_POST['num2'];
// $operators = $_POST['operators'] ;

// switch($operators){
//     case '+':
//         echo $number1+ $number2;
//         break;

//         case '-':
//         echo $number1- $number2;
//         break;

//         case '*':
//         echo $number1* $number2;
//         break;

//         case '/':
//         echo $number1/ $number2;
//         break;

//         default:
//         echo "invalid";
// }




// }




$username = $_POST['user_name'];
$email = $_POST['email'];
$password =  $_POST['password'];

// echo "{}"
setcookie("username",$username , time() +60);
setcookie("emil",$email  , time() +60);
setcookie("password",$password  , time() +60);

echo $_COOKIE['username'];
echo "<br>";
echo $_COOKIE['email'];
echo "<br>";
echo $_COOKIE['password'];




if(isset($_POST['submit'])){

if(isset($_POST['remember']) && $_POST['remember']  == true ){

setcookie("username",$username , time() +60);
setcookie("email",$email  , time() +60);
setcookie("password",$password  , time() +60);


}


}