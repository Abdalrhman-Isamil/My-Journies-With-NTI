// function greeting(u){
//     console.log(`welcome ${u}`)
// }

// let name="mohammed"
// greeting("fatma")
// greeting(name)

// function sum(a=0,b=0){
//     console.log(a+b)
// }

// let a=9;
// let b=10;
// sum(b,b)


// function display(x=0,y=1,z=2){
//     console.log(x)
//     console.log(z)
// }

// let x=9;
// let y=10;
// let z=11;
// display(0,8,7)


function mul(a,b){
   return a*b
}

//console.log(mul(3,4))
// let result= mul(3,4)
// console.log(result)


// let gender= prompt("enter your gender: male| female")
// function validate(g){
//     if(g=="male" || g=="female"){
//         console.log("valid")
//     }else{
//         console.log("invalid gender")
//     }
// }

// validate(gender)

// let number= Number(prompt("enter a number"))
// function oddOrEven(n){
//     if(n%2==0){
//         console.log("even")
//     }else{
//         console.log("odd")
//     }
// }
// oddOrEven(number)


//---------------------------
// let nums=[20,89,78,40,33]
// for(let i=0; i<nums.length; i++){
//     console.log(nums[i])
//     oddOrEven(nums[i])
// }

// ----------------------------------
// function types:-------------------

// function sayHello(){
//     console.log("hello")
// }
// sayHello()

//arrow function

// no keyword -> function
// no {} if there is only one line
// no name
// no return if there is -> one line , no { }
// function sum(a,b){
//     return a+b;
// }
// console.log(sum(1,2))


// let arrow=(a,b)=> a+b
// console.log(arrow(9,0))


//callback function:
// no name

// let cb=function (){
//     console.log("welcome from cb")
// }
// cb()

//----------------------------------
//==================================
// HOF: high order function
// function that takes a function as a parameter or return function

// function test(a,b){
//     console.log(a)
//     b();
// }
// test(5,()=>{
//     console.log("any for test")
// })
// function sm(){
//     console.log("welcome from small")
// }
// test("new function", sm)


//----------------------------------------
// json : javascript object notation
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


// let prices= books.filter((b)=>{
//     return b.price>=100;
// })

// console.log(prices)

// prices.map((item)=>{
//     console.log(item.title)
// })

//--------------------------------
// ex:
let after2005= books.filter((book)=>{
    return book.year>2005

})

console.log(after2005)
after2005.map((ele)=>{
    console.log(ele.author)
})

let summ=after2005.reduce((total,book)=>{
    return total+book.quantity
},0)

console.log(summ)


//----------------------------------------
// for(let i=0; i<books.length; i++){
//     console.log(books[i].title)
//     console.log(books[i].price)
// }

// let book={
//     title: "book 1",
//     author: "author 1",
//     price: 10,
//     quantity:30,
//     category:"comedy"
// }

// console.log(books.title)



//----------------------------------------
// array methods:----
// map, forEach, filter, reduce

// let products= [
//     {
//         title: "product 1",
//         price: 11200,
//         quantity:30,
//         category:"electronics"
//     },
//     {
//         title: "product 2",
//         price: 170,
//         quantity:40,
//         category:"food"
//     },
//     {
//         title: "product 3",
//         price: 10000,
//         quantity:70,
//         category:"electronics"
//     }
// ]

// let sum= products.reduce((total,p)=>{
//         return total+p.price
// },0)
// console.log(sum)
// for(let i=0; i<products.length; i++){
//     console.log(products[i].title)
//     console.log(products[i].price)
// }

// products.map((p, i)=>{
//     // console.log(p)
//     // console.log(i)

//     console.log(p.title)
//     console.log(p.price)
    
// })
// let mapOutput= books.map((book)=>{
//     console.log(book.title)
//     // return book.price*2


//     if(book.quantity>50){
//         return book;
//     }
// })

// console.log(mapOutput)



// let forEachOutput= books.forEach((book,i)=>{
//     console.log(book.title)
//     // return book.price*2

//     if(book.quantity>50){
//         return book;
//     }
// })

// console.log(forEachOutput)

//----------------------------------------
// filter:

// let filterOutput= products.filter((p)=>{
//         return p.category=="electronics"
// })
// console.log(filterOutput)

//-----------------------------------
//reduce:----------------------------

// let numbers= [10,40,3,8,7]
// let reduceOutput= numbers.reduce((total, number)=>{
//     return total*number
// },1)

// console.log(reduceOutput)


//-------------------------------------------------
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



//---------------------------------------
//---------------------------------------
//sort:


//---------------------------------------
let users= [
    {
        name:"mohammed",
        age:20,
        gender:"male"
    },{
        name:"fatma",
        age:19,
        gender:"female"
    },{
        name:"ahmed",
        age:22,
        gender:"male"
    },{
        name:"fatma",
        age:21,
        gender:"female"
    }
]


let user= users.find((ele)=>{
        return ele.name=="fatma"
})
console.log(user)
