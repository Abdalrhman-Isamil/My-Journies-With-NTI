// display data:
// 1-console............................
// console.log("welcome");
// console.error("error");
// console.warn("warn");
//comment

// 2-window..............................
// window.alert("welcome in js")
// window.prompt("enter your name")

// 3- document..........................
// document.write("welcome fatma")
// document.write("<h1>some data</h1>")
// document.write(`
//     <ul>
//     <li>hi</li>
//     <li>new</li>
//     </ul>
//     `)
//----------------------------------

// var username= "fatma"; 
// var age=20;
//  var course="html"


// data types:------------------
//string, number, boolean, object, undefined
// var name= "fatma";
// console.log(name);
// console.log(typeof(name))


// var salary =200;
// console.log(salary);
// console.log(typeof(salary))


// var isStudent= true;
// console.log(isStudent);
// console.log(typeof(isStudent))

// var book={
//     author:"waleed",
//     price:1000,
//     year:2009,
// }

// console.log(book)
// console.log(book.author)
// console.log(book.price)
// console.log(typeof(book))


// var x;
// console.log(x)
// console.log(typeof(x))

// var y=null;
// console.log(y)
// console.log(typeof(y))

// var data=["ahmed","fatma","mahmoud",100,false,10]
// console.log(data)
// console.log(typeof(data))


//----------------------------------------
// operators:-----------------------------
// 1- arithmetic: +, -, *, /, %, **
var a=5;
var b=10;
var c="5c";

// console.log("welcome "+ "fatma your age is "+ a)
// console.log(a+b)
// console.log(a+c)

// console.log(a*c)
// console.log( Number("11c"))

// console.log(a**2)

// 2- assignment: =, +=, -=, /=, *=

// let q=20;
// q=q+10;
// console.log(q)

// q=q+20;
// console.log(q)

// q+=5;  //q=q+5;
// console.log(q)

// q-=40; // q=q-40;
// console.log(q)

// 3- increment & decrement:
// ++, --
// let x=20;
// let y=10;
// console.log(x++) //20 
// //21
// console.log(x)//21

// x++
// console.log(x)
// console.log(++x) //22


// let k=10;
// let r=3;

// k-- //9
// k++ //10
// --k //9
// k+=r //12
// console.log(k) //12
// console.log(k++) //12
// //13
// k++ //14
// console.log(++k) //15
// k-- //14
// console.log(k--) //14
// //13
// console.log(k) //13

// 4- comparison: >, <, >=, <=, ==, ===, !=, !==
// let q=5
// console.log(q!=="5")


// 5- logical: &&, ||, !
// console.log(!true)
// console.log(!false)

// let years=5;
// let salary=7000;

//1- and
// true && true => true
// true && false => false
// false && true => false
// false && false => false
// console.log(years>3 && salary>5000)//true
//console.log(years>=3 && salary>7000) //false

// 2- or
// true||true => true
// true||false => true
// false||true => true
// false||false => false
// console.log(years>10 ||salary>5000)

//----------------------------------------

//Math library:
//min,max
// pI
// abs
// pow
// ceil, floor, round, trunc
// random


// console.log(Math.min(80,40,90))
// console.log(Math.abs(-20))
// console.log(Math.PI)
// console.log(Math.pow(6,5))

let n=-3.2;
var v=-3.7;


// console.log(Math.floor(n))
// console.log(Math.floor(v))
// let r=Math.round(Math.random()*10)
// console.log(r)
//--------------------------------

//--------------------------------
//array methods: 
// length, .join(" ")
// [index] -> .at(index)
// push() , pop()
// shift(), unshift()

// let arr= [1,"z",true,"g","q"]
// console.log(arr)
// console.log(arr[1])
// console.log(arr[arr.length-1])

// console.log(arr.length)
// document.write(arr.join(" * "))
// console.log(arr.at(2))



let fruits=["kiwi","apple","banana","orange"]
console.log(fruits)


//---------------------------------
// let sliceOutput= fruits.slice(1,2)
// console.log(fruits)
// console.log(sliceOutput)

// let spliceOutput= fruits.splice(3,0,"kiwi")
// console.log(fruits)
// console.log(spliceOutput)

//---------------------------------
// let pushOutput= fruits.push("kiwi","mango","grapes")
// console.log(fruits)
// console.log(pushOutput)

// fruits.push("strawberry")
// fruits.pop()
// fruits.pop()
// let popOutput= fruits.pop()
// console.log(fruits)
// console.log(popOutput)

//--------------------------------

// let shiftOutput=fruits.shift()
// console.log(fruits)
// console.log(shiftOutput)

// let unshiftOutput=fruits.unshift("strawberry","melon")
// console.log(fruits)
// console.log(unshiftOutput)

// ex:
// let first= fruits.shift()
// let last = fruits.pop()

// fruits.push(first)
// fruits.unshift(last)
// console.log(fruits)

//---------------------------------
// let chars=["c","l","x","a"]
// chars.pop() //clx
// chars.push("o") //clxo
// chars.push() //clxo
// chars.slice(1,2) //clxo
// chars.splice(3,0,"q") //clxqo
// chars.slice(1,2) //clxqo
// chars.push("h") //clxqoh
// chars.unshift("z") //zclxqoh
// chars.splice(2,3) //zcoh
// chars.shift() //coh
// chars.unshift("n") //ncoh
// console.log(chars) 