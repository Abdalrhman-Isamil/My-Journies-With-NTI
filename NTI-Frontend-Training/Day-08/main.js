
//let days=["d1","d2","d3","d4","d5","d6","d7"]

//*loops

// for( let i=10 ; i>0  ; i--  ){
// //    console.log("welcome");
//     console.log(i);
    
// }
/* for(let i=0;i<days.length;i++){
    console.log(days[i])
} 
    */

/*let name =window.prompt("enter your name")
console.log(name)

let age=Number(window.prompt("age"))
console.log(age+10)

let ag=parseInt(window.prompt("age"))
console.log(ag+10)
*/
// console.log("welcome"+name +"your age "+age) بس دي طريقة قديمة

//*console.log(` welcome ${name} your age is ${age} `)

/*

let numDays = prompt("How many holidays in the week?");


let holidays = [];


for (let i = 1; i <= numDays; i++) {
  //let day = prompt("Enter holiday " + i);
  let day = prompt(`Enter holiday  ${i+1}`);
  holidays.push(day);
}

console.log("Holidays you entered:");
console.log(holidays);


*/


// while 

/* 

let c=0;
while(c<10){
    console.log(c)
    c++
}

do{
    console.log(c)
}while(c<10)

let menue=`
 1- choosw iteme1
 2-choosw iteme2
 3-choosw iteme3
 4-exit
`
let n;
do{
   n=prompt(menue)
   console.log(n)
}while(n!=4)

*/

//*control flow :

//**1- if condition
/*

let sal=3000;
if(sal>3000){
    console.log("add")
}

let n=70;
if(n>70){
    console.log("tis is greater than 50")
} 
else if(n<50){
    console.log("")
}else{
    console.log("zero")
}

*/

 /*
 ********************************
let userNum=Number(prompt("enter numb"))
if(userNum>50 && userNum<100 ){
    console.log("grerater than 50")
}else if(userNum<50 && userNum>0 ){
    console.log("less than 50")
}else if(userNum==50){
    console.log("equal to 50")
}else{
    console.log("invalid number")
}
 //   console.log("Number: " + num);
*****************************************

*/


/*
while (true) {
  
  let num = Math.floor(Math.random() * 11);


  if (num > 5) {
    console.log("grerater than 5");
  } else if (num < 5) {
    console.log("less than 5");
  } else {
    console.log("equal to 5");
    break; 
  }
}*/

/*

let char="a";
switch(char){
  case "a":
  console.log(1)
  break;
    case "b":
  console.log(2)
    break;
    case "c":
  console.log(3)
    break;
  default:
  console.log("not valid")
}

*/

/*
let day="tue"
switch(day){
     case "sat":
         case "fri":
        console.log("weekend")
        break;
     case "sun":
     case "mon":
     case "tue":
     case "wed":
     case "thu":
        console.log("workday")
        break;
    
     default:
        console.log("not valid")   
} 
        */

//* break , continue tutorial
/*for(let i=1;i<=10;i++){
    if(i%2==0){
        console.log(i)
    }
}*/
/*
let numberSec = "Abood";
let trying = 0;

while (trying < 3) {
  let pass = prompt("Enter password:");

  if (pass == numberSec) {
    console.log("Correct");
    break;
  } else {
    console.log("Wrong");
    trying+=1;
  }
}

if (trying == 3) {
  console.log("closed");
}
*/

/*
let numberSec = "Abood";
let trying = 0;
do{ 
let pass = prompt("Enter password:");
if (pass == numberSec&&trying>0) {
    console.log("Correct");
    break;
}else{
    if(trying>0){
        console.log(`wrong password,yo have ${trying} tryes left `)
    }
}    
    
}while(true)

*/


/*
 let numberSec = "Abood123";
for (let trying = 1;  trying <= 3;  tryings++) {
  let pass = prompt("Enter password");

  if (pass == numberSec) {
    console.log("Correct");
    break; 
  } else {
    if ( trying < 3) {
      console.log("Wrong");
    } else {
      console.log("closed");
    }
  }
}

*/

/*---------------------------------------

let now=new Date()
console.log(now)

// let month=now.getMonth()
// console.log(month)
let months=["a","b","c"]
let month=now.getMonth()
console.log(months[month])
*/


let now = new Date();
let month = now.getMonth();
let months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

let season = "";
if (month >= 2 && month <= 4) {
    season = "Spring";
} else if (month >= 5 && month <= 7) {
    season = "Summer";
} else if (month >= 8 && month <= 10) {
    season = "Autumn";
} else {
    season = "Winter";
}

console.log(`This month is  ${months[month]} and This season is ${season}`);





