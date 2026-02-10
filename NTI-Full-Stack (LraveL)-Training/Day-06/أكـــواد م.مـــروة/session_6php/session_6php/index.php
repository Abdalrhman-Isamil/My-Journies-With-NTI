<?php
// $grade = 120;
// 0-100 

// 90 100   a+
// 90 75   b+
// 60 75   c+ 
// 50  60  d+
// <50     f


// if($grade >= 90   && $grade <= 100 ){
//     echo "A+";
// }
// elseif($grade <90 && $grade >=75  ){
//       echo "B+";
// }
// elseif($grade <75 && $grade >=60  ){
//       echo "C+";
// }

// elseif($grade <60 && $grade >=50  ){
//       echo "D+";
// }

// elseif($grade <50 && $grade >=0 ){
//       echo "F+";
// }

// else{
//     echo "not valid";
// }


// variables   
// echo  5+5 ;
// int num = 10 ;

// $num  =20 ;
// $num = null ;    

// echo gettype($num);


//switch

// $day = 1;

// if($day == 1){
//     echo "satarday";
// }
// elseif($day == 2){
//     echo 'san';
// }
// elseif($day == 3){
//      echo 'san';
// }

// switch($day ){
//     case  1 :

// }


// switch ($day) {
//   case 10:
//     echo "Today is Saturday";
//   break ;
//   case 1:
//     echo "Today is Sunday";
//    break ;

//   default:
//     echo "Looking forward to the Weekend";
// }


// $frute = 'orange';

// switch($frute){
//     case "tomato":
//         echo "veg";
//         break ;

//          case "orange":    //dry
     

//           case "banana":


//            case "mango":

//             echo "FRU" ;
   
// }




//1-100     boom  
// for($i = 0 ; $i<=50 ; $i++ ){
//     if($i% 2 == 0){
//          echo $i;
// continue ;
   
//     }
// // echo "welcome";

// echo "<br>";
// }


//%   10/2 0    11/2  1



// for($i = 1 ; $i<=50 ; $i++ ){
//     if($i% 5 == 0){
//    echo "BOOM"   ;
// continue ;
   
//     }
// // echo "welcome";

// echo "<br>";
//    echo $i;
// }




// $x = 5 ;
// // $x++ ;

// ++$x
// echo  $x ;   // 6
// echo $x++ ;   // 5
// echo $x  //6


// $enterPin = null ;
// $correctPin = 123 ;


// for($i = 0 ; $i<=10 ; $i++){
//     echo "welcome";
// }

// $i=0;
// while( $i<=10 ){
//         echo "welcome";
//         $i++;
// }

// while($enterPin != $correctPin){
//     echo  "mmm" ;
//     $correctPin = 123 ;
// }

//    $age = 18 ;

// while($age >20){
//     echo "hello";
// }

// do{
//    echo "hello";  
// }while($age >20);



//array   indexed array 

// $student = 'ahmed';
// $student1 = 'mohmed';

// $students = array(); 
               // 0       1          2        3         4
// $students = ['ahmed' , 'mohmemd' , 'ali' , 'eslam' , 'adel' , 'mona' , 22 , true];
// echo count($students);
//  echo "<br>";

// //  $students[0] = "nour";
// $students[] =  'malik'; 
// print_r($students);
// echo $students[4];

// for($i = 0 ; $i<= count($students) -1 ; $i++){
//    echo $students[$i];
//    echo "<br>";
// } 



//assocuative   key =>  value

$person=[
    'name' => 'ahmed' ,
    'age' =>  22 ,
    'gender' => 'mail'
];
  
// var_dump($person);
// echo $person['name'];
// echo count($person);
// // for($i = 0 ; $i<count($person) ; $i++){
// //   echo $person[$i];
// // }
// $person['friends'] = 'mm';

// foreach($person as $key=>$value){
//     echo $key ." : " .$value;
//     echo "<pre>";
// }

$persons=[
   'a'=> ['name' => 'ahmed'],
  'b'=>  ['red' , 'green' , 'blue'],
  'c' =>  [ 'gender' => 'mail']
];

foreach($persons as $key=>$value){
  foreach($value as $v){
    echo $v;
  }
}


//sort
$numbers = [4,3,5,7]; 
$num = count($numbers) ;
for($i=0 ; $i<= $num -1 ;$i++){
  for($j = 0 ; $j< $num - $i -1 ;$j++){
    if($numbers[$j] > $numbers[$j +1]){
      $temp = $numbers[$j]  ;
      $numbers[$j] = $numbers[$j+1] ;
      $numbers[$j +1]  = $temp ;
    }
  }
  print_r($numbers);
}


?>


<!-- <form action="">
    <input type="text" name="">
</form> -->