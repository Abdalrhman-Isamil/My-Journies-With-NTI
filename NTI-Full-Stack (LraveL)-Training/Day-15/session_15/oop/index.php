<?php


// class Car{
//     public $model ;
//     public $color ;
//     public $speed ;

//     // public function __construct($model, $color ,$speed )
//     // {
//     //     $this->model =$model ; 
//     //     $this->color =$color ; 
//     //     $this->speed =$speed ; 
//     // }


//  public  function start(){
// echo "start";
//     }
    

//      public  function engine(){
// echo "the model is $this->model color is $this->color speed is $this->speed 120km/h  ";
//     }
//     public function __destruct()
//     {
//         echo "hi";
//     }
// }

// $car = new Car("toyota",'red' , 120) ;
// echo $car->model = "toyota";
// echo "<br>";
// echo $car->color = 'red';
// echo "<br>";

// echo $car->speed = 120 ;
// echo "<br>";

//  $car = new Car ;
//  $car->engine();



//   $car1 = new Car ;
//  $car1->engine();


// $car2 = new Car ;
// echo $car2->model = "BMW";
// echo "<br>";
// echo $car2->color = 'black';
// echo "<br>";

// echo $car2->speed = 120 ;
// echo "<br>";


// echo gettype($car2);

// $arr = ['red','black'];
// $arr[0];



// class Animal{
//   public $name ;
//   public $color ;
//   public $age ;
 
//   // public function __construct($d ,$f)
//   // {
    
//   // }
//   public function eat(){
//     echo "eat";
//   }
//   public function makeSound(){
//     echo "animal sound";
//       }



// }



// class Cat extends Animal{

//   public function makeSound(){
//     echo "neow neow";
//   }
// }

// $cat = new Cat ;
// $cat->makeSound();
//  class Dog{


// }

//? ====================================================================================================


class Mother
{
    public function __construct($a = null)
    {
        if ($a === null) {
            echo "Mother With Empty Constructor\n";
        } else {
            echo "Mother With Parameterized Constructor = $a\n";
        }
    }

    public function __destruct()
    {
        echo "Mother Destructor\n";
    }
}

class Daughter extends Mother
{
    public function __construct($a = null)
    {
        parent::__construct($a);

        if ($a === null) {
            echo "Daughter With Empty Constructor\n";
        } else {
            echo "Daughter With Parameterized Constructor = $a\n";
        }
    }

    public function __destruct()
    {
        echo "Daughter Destructor\n";
        parent::__destruct();
    }
}



$Abeer = new Daughter(1);

echo "-----------------\n";

$Abeer2 = new Daughter();


