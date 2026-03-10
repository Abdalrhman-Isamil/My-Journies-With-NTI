<?php

/**
 * 
 * 
 */

// class Car{
//    public $model ;
//    public $color ;
//    public $speed ;

//    public function moveCar(){
//     echo "the car model is $this->model color is $this->color   move $this->speed";
//    }

//     public function stopCar(){
//     echo "stop move";
//    }
// }

// $car = new Car;
// echo $car->model ="BMW";
// echo "<br>";
// echo $car->color ="red";
// echo "<br>";

// echo $car->speed =120;
// echo "<br>";
//  $car->moveCar(); 

// echo "<br>";

//  $car1 = new Car;
// echo $car1->model ="BMW";
// echo "<br>";
// echo $car1->color ="black";
// echo "<br>";

// echo $car1->speed =120;
// echo "<br>";
//  $car1->moveCar(); 

// echo gettype($car);

// $arr=["a",'b'];
// $arr[1]


// class Animal{
//     public $color;
//     public $sound;
//     public $age;

// public function __construct($color , $age)
// {
//     // echo "hi";
//    echo $this->color = $color ;
//    echo $this->age = $age ;
// }

//    public function eat(){
     
//        echo "start eating";
//     }

//      public function move(){
//        echo "start moveing";
//     }

//     public function makeSound(){
//         echo "generic";
//     }
// }

// class Dog extends Animal{

//  public function __construct(){
// parent::__construct("red",10);
// echo "strat __construct";
//  }
//   public function makeSound(){
//         echo "how how";
//     }
// }

// class Cat extends Animal{
//      public function __construct(){

//  }
//       public function makeSound(){
//         echo "neow neow";
//     }
// }

// class German extends Dog {

// }
// $german = new German;
// $german->move() ;
// echo "<br>";

// $dog =new Dog;

// $dog->move();
// echo "<br>";
// $dog->eat();
// echo "<br>";
// // echo $dog->sound = "how how";

// $dog->makeSound();
 
// echo "<br>";

// $cat =new Cat;

// $cat->move();
// echo "<br>";
// $cat->eat();
// echo "<br>";
// // echo $cat->sound = "neow neow";
// $cat->makeSound();






//  abstract class Animal{
// public $name ;

// // abstract public function eat();

// abstract public function makeSound();

// }


// abstract class Animal {
// public $color;
// public function move(){

// }
// abstract public function makeSound();
// }


// class Dog extends Animal{
// public function makeSound(){

// }
// }

// class Dog extends Animal{
// public function makeSound(){
// echo ""
// }
// }

// class Cat extends Animal{
//      public function makeSound(){
    
//  }
// }


// abstract  class Engine{

//   abstract public function startEngine();
// }
// class Coffee extends Engine{
  
//  public function startEngine(){
//     echo "make coffee";
//  }

// }









// abstract class PayGetway{ 
// abstract public function pay($amount);
// }
// class Paypal extends PayGetway{
// public function pay($amount){
//     echo "pay with paypal $amount";
// }
// }
// class stripe extends PayGetway{
// public function pay($amount){
//     echo "pay with stripe $amount";
// }
// }
// function proccessPay($gatway , $amount){
//    echo $gatway->pay($amount);
// }
// proccessPay(new Paypal , 2000);
// echo "<br>";
// proccessPay(new stripe , 5000);
// $paypal = new Paypal;
// $paypal->pay(2000) 




// class User{

// const ROLE = "admin";
// public $name ;
// public function eat(){
//     // return $this->name;
//     User::ROLE;
//     self::ROLE;
// }

// }
// $user = new User;
// // $user->name;
// $user::ROLE;




//  class Animal{

//   protected $name  = 'max';

//  public function eat(){
//     echo "eat";

// }

//  public function makeSound(){
//     // echo "generic";
//     // echo $this->name;
//     $this->name;
//  }


// }
// $animal = new Animal ;
// // echo $animal->name;

// class Dog extends Animal{
//  public function makeSound(){

//  }
//  public function sayName(){
//     echo $this->name;
//  }
// }
// $dog = new Dog;
// $dog->sayName();
// $dog->name;











// class BankAccount{
//     private $balance;

//     public function setBalance($balance){
//         $this->balance = $balance;
//     }
//     public function getBalance(){
//         echo $this->balance;
//     }
// }
// $account = new BankAccount;
// $account->getBalance();
// echo "<br>";
// $account->setBalance(6000);
// echo "<br>";
// $account->getBalance();

// $account->setBalance(8000);
// echo "<br>";
// $account->getBalance();
// // $account->balance;





//  class Animal{

// final public function makeSound(){

// }
// }
// class Dog extends Animal{
//     public function makeSound(){
//    echo "how how";
// }
// }
// $animal = new Dog ;
// $animal->makeSound();







// interface paymentMethod{
  
//     public function paypal();
//     public function stripe();
// }

// interface Animal{
//     public function eat();
// }


// class paypal implements paymentMethod,Animal{
//   public function Paypal(){

//   }
//     public function stripe(){

//     }
//     public function eat(){
// echo "eating";
//     }
// }
// $paypal= new Paypal;
// $paypal->eat();





// class calculator{
//  public $result;
// public function sum($a,$b){
//       $this->result =  $a+$b;
//     //   echo $result;
//       return $this;
// }
// public function sub($a){
//       $this->result -=  $a;
//     //   echo $result;
//        return $this;
// }
// public function multi($a){
//       $this->result  *=$a;
//     //   echo $result;
//        return $this;
// }
// public function dev($a){
//       $this->result /=  $a;
//       //echo $result;
//        return $this;
// }

// // public function div($num1){
// //     $this->result /=$num1;
 
// //     return $this;
// // }

// public function result(){
//     // $result =  $this->result;
 
//     echo $this->result;
// }

// }
// $calac= new calculator;
// $calac->sum(70,30)->sub(30)->multi(30)->dev(30)->result();
// $calac->sum(10,30);
// echo "<br>";
// $calac->div(10,30);
// echo "<br>";

// $calac->multi(10,30);
// echo "<br>";

// $calac->dev(10,30);
// echo "<br>";




// require_once 'Admin/test.php';
// require_once "customer/User.php";
// require 'Admin/User.php';
// use Admin\User;

// require 'customer/User.php';
// use Customer\User as customerUser;


// $user = new User;
// $user->index();

// $user = new customerUser;
// $user->index();





//1
// $connection = new mysqli('localhost','root','','nti11');
// $query ="SELECT * FROM `customers`";
// $result = $connection->query($query);
// $data = $result->fetch_all(MYSQLI_ASSOC);

// echo "<pre>";
// print_r($data);

// $connection = mysqli_connect('localhost','root','','session_11');
// $query = "SELECT * FROM `customers`";
// $result = mysqli_query($connection , $query);
// $data = mysqli_fetch_all($result,MYSQLI_ASSOC);

// $connection = new mysqli('localhost','root','','session_11');
// $query = "SELECT * FROM `customers`";
// $result = $connection->query($query);
// $data = $result->fetch_all(MYSQLI_ASSOC);

// echo "<pre>";
// print_r($data);

//pdo
// $pod = new PDO("mysql:host=localhost;dbname=nti11",'root','');
// $query ="SELECT * FROM `customers`";
// $result = $pod->query($query);
// $data = $result->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($data);



/**fetch all */
//$dsn = "mysql:host=localhost;dbname=session_11";
// $pdo = new PDO("mysql:host=localhost;dbname=session_11", 'root','');
// $query ="SELECT * FROM `customers`";
// $result = $pdo->query($query );
// $data = $result->fetchAll(pdo::FETCH_ASSOC);
// echo "<pre>";
// print_r($data);


/**fetch one */
// $pdo = new PDO("mysql:host=localhost;dbname=session_11", 'root','');
// $query ="SELECT first_name FROM `customers` WHERE ID =2";
// $result = $pdo->query($query );
// $data = $result->fetch(pdo::FETCH_ASSOC);
// echo "<pre>";
// print_r($data);



// // $insertedQuery = "INSERT INTO employees(name) VALUES('eslam')";
// // $result = $pod->query($insertedQuery);
// // $result->execute();

// /*Bind param */
// $insertedQuery = "INSERT INTO employees(name) VALUES(:name)";
// $result = $pod->prepare($insertedQuery);
// $name="malik";
// // $result->bindParam(":name",$name);
// // $result->execute();
//  $result->execute(['name' => "mohamed"]);


// $insertQuery = new PDO("mysql:host=localhost;dbname=session_11",'root','');
// $query = "INSERT INTO employees(`name`)
// VALUES(:name)";
// $result = $insertQuery->prepare($query );
// $name = "zain";
// $result->bindParam(":name", $name);
// $result->execute();







// interface Database{
// public function select($columns,$table,$condation,$operator,$value);
// public function selectAll($columns,$table);
// public function insert($table,$columns,$value);
// public function update($table,$columns,$columnsValue,$condation ,$operator,$value);
// public function delete($table ,$condation,$operator,$value);

// }




namespace index;

interface DataBase{
    public function select($column,$table,$codation ,$operator,$value);
    public function selectAll();
    public function insert();
    public function update();
    public function delete();
}