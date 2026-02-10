// function great(user){
   
//     console.log(`welcome ${user}`)
// }
//  let mname="abood"
// great("abood")
// great(mname)

//****************************************** */

// function sum(a=0,b=0){
//     console.log(a+b)
// }
// let a=9;
// let b=10;
// sum(b,b) // 20 لانها اعتبرت ال اي الاولى هي ال بي 

//***************************************** */

// function display(x,y,z){
//     console.log(x)
//     console.log(z)
// }
// let x=9;
// let y=10;
// let z=11;
// display(x,z) // 9 and undefind 


//***************************************** */

// function mul(a,b){
     // console.log(a*b)
//     return a*b
// }
// console.log(mul(3,4)) //12 
// let result =mul(3,4)
// console.log(result);

//***************************************** */


// let gender=prompt("enter your gender")
// function validate(g){
//     if(g=="male" || g=="female" ){
//         console.log("valid")
//     }else{
//         console.log("in valid")
//     }
// }
// validate(gender)

//***************************************** */

// function oddOrEven(n){
//     if(n%2==0){
//         console.log("even")
//     }else{
//         console.log("odd")
//     }
// }

// let nums=[20,89,78,40,33]
// for(let i=0;i<nums.length;i++){
//     console.log(nums[i])
//     oddOrEven(nums[i])
// }

//***************************************** */


// function add(a, b) {
//     return a + b;
// }

// function subtract(a, b) {
//     return a - b;
// }

// function multiply(a, b) {
//     return a * b;
// }

// function divide(a, b) {
//     return a / b;
// }

// function power(a, b) {
//     return a ** b;
// }


// let num1 = Number(prompt("Enter number 1:"));
// let num2 = Number(prompt("Enter number 2:"));
// let operator = prompt("Choose your operator (*, /, +, -, **):");


// let result;


// if (operator === "+") {
//     result = add(num1, num2);
// } else if (operator == "-") {
//     result = subtract(num1, num2);
// } else if (operator == "*") {
//     result = multiply(num1, num2);
// } else if (operator == "/") {
//     result = divide(num1, num2);
// } else if (operator == "**") {
//     result = power(num1, num2);
// } else {
//     result = "Invalid operator";
// }


// console.log(`Result = ${result}`);




/*

الفانكشن العادية (Normal Function)

هي ببساطة كتلة كود (block of code) بتعمل مهمة معينة.

بدل ما تكتب نفس الكود كذا مرة، بتحطه جوة function وتنده عليها لما تحتاج.

بتوفر وقت ومجهود، وتخلي الكود منظم وسهل التعديل.

*/

//***************************************** */

//* arrow fun
//* callback fun

// function sayHallo(){
//     console.log("hello")
// }
// sayHallo()

// //***************************************** */

// //* arrow fun  معندناش كي ورد فانكشن مفيش كيرل براكت لو هي لاين واحد مفيش اسم للفانكشن مفيش ريتين لما يكون سطر واحد ولو فيه نرجع الكيرل براكت تاني 
// let arrow=()=>{
//     console.log("hello meme ")
//     arrow()
// }

// v

// //* callback fun نفس الحقيقة لكن ملهاش اسم 
// let cb=  function (){
//     console.log("callback")
// }
// cb()


//***************************************** */


//* HOF : Higher order function فانكشن بتاخد فانكشن 

// function test(a,b){
//     console.log(a)
//     b();
// }


//* json: js object notation 

//* array HOF
//* map  بتلف وبتريترن, foreach بتلف ومبتريترنش , filter , reduce ترجع فاليو واحدة بس 

//* positional argument , 

/*

let books= [
    {
        title: "book 1",
        author: "author 1",
        price: 120,
        quantity:30,
        category:"comedy"
    },
    {
        title: "book 2",
        author: "author 2",
        price: 10,
        quantity:40,
        category:"novel"
    },
    {
        title: "book 3",
        author: "author 3",
        price: 100,
        quantity:70,
        category:"science"
    },{
        title: "book 4",
        author: "author 4",
        price: 90,
        quantity:1,
        category:"comedy"
    },{
        title: "book 5",
        author: "author 5",
        price: 230,
        quantity:3,
        category:"novel"
    },{
        title: "book 6",
        author: "author 6",
        price: 510,
        quantity:0,
        category:"novel"
    }
]

// books.map(book => console.log(book.title));

// let fijterOutput=books.filter((book,i)=>
//     console.log(book.title)

// )
// console.log(filt)

//* filter بتاخد كول باك فان اللي بتاخد الاليمنت وبترجع الاليمنت اللي انا عايزه وبتشتغل على الريترين 

// let prices=books.filter((b)=>{
//     return b.price>=100;

// })
// console.log(prices)

// prices .map

//* reduce : بتاخد كول باك فان والانيشيال فاليو وبتاخد قبل الاليمنت المكان اللي بنجمع فيه البيانات اللي انا مدخلها والريترن مبتاخدش مني كونديشن 
let numbers=[10,40,3,8,7]
let reduceOutput= numbers.reduce(

)

*/



/*

let books= [
    {
        title: "book 1",
        author: "author 1",
        price: 120,
        quantity:30,
        year:2005,
        category:"comedy"
    },
    {
        title: "book 2",
        author: "author 2",
        price: 10,
        quantity:40,
        year:2010,
        category:"novel"
    },
    {
        title: "book 3",
        author: "author 3",
        price: 100,
        quantity:70,
        year:2015,
        category:"science"
    },{
        title: "book 4",
        author: "author 4",
        price: 90,
        quantity:100,
        year:2000,
        category:"comedy"
    },{
        title: "book 5",
        author: "author 5",
        price: 230,
        quantity:3,
        category:"novel"
    },{
        title: "book 6",
        author: "author 6",
        price: 510,
        year:1999,
        quantity:0,
        category:"novel"
    }
]

let filteredBooks = books.filter(function(book) {
    return book.year > 2005;
});


filteredBooks.map(function(book) {
    return console.log(book.author);
});

let booksAfter2005 = books.reduce(function(count, book) {
    if (book.year > 2005) {
        return count + 1;                  دي فيها غلطة جايب مطلوب غير المطلوب 
    }              
    return count;
}, 0);

console.log("Books after 2005:", booksAfter2005);

*/



// let clothes=products2.filter(function(product){
//     return product.category=="clothes";
// });

// clothes.map(function(product){
//     return console.log(product.name);
// });

// let totalClothesQuantity=clothes.reduce(function(sum, product) {
//     return sum + product.quantity;
// },0);

// console.log(totalClothesQuantity);

// let electronics = products2.filter(function(product) {
//     return product.category=="electronics";
// });

// electronics.map(function(product) {
//     return console.log( product.name);
// });

// let totalElectronicsQuantity=electronics.reduce(function(sum, product){
//     return sum+product.quantity;
// },0);

// console.log( totalElectronicsQuantity);

// let shoes = products2.filter(function(product){
//     return product.category == "shoes";
// });

// shoes.map(function(product) {
//     return console.log(product.name);
// });

// let totalShoesQuantity = shoes.reduce(function(sum, product) {
//     return sum + product.quantity;
// },0);

// console.log(totalShoesQuantity);


//************************************************************************************************************** */

// let products2=[
//     {
//         name:"t-shirt",
//         price:1000,
//         quantity:10,
//         category:"clothes"
//     },{
//         name:"jeans",
//         price:900,
//         quantity:20,
//         category:"clothes"
//     },{
//         name:"tablet",
//         price:10000,
//         quantity:3,
//         category:"electronics"
//     },{
//         name:"boots",
//         price:870,
//         quantity:5,
//         category:"shoes"
//     },{
//         name:"shoes",
//         price:1000,
//         quantity:10,
//         category:"shoes"
//     },{
//         name:"blouse",
//         price:500,
//         quantity:10,
//         category:"clothes"
//     },{
//         name:"mobile",
//         price:17000,
//         quantity:3,
//         category:"electronics"
//     }
// ]

// let descending = products2.sort((a, b) => {
//   if (a.price > b.price) return -1; 
//   if (a.price > b.price) return 1;  
//   return 0; 
// });

// console.log(descending);


//************************************************************************************* */

//* task 

// let total = 0;
// let count = Number(prompt("How many items did you buy?"));

// for (let i = 1; i <= count; i++) {
//   total += Number(prompt(`Enter price of item ${i}:`));
// }

// console.log(`Total = ${total}`);












































