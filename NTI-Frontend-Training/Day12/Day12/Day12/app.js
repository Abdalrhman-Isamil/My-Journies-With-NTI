// promise:
// 1- pending
// 2- fulfilled
// 3- rejected

// let p= new Promise((res,rej)=>{
//     let country="alex";
//     if(country=="alex"){
//         res("accepted, you are in alex");
//     }else{
//         rej("not valid.....")
//     }
// })


// p.then((e)=>{
//     console.log(e)
// })
// .catch((err)=>{
//     console.warn(err)
// })
// .finally(()=>{
//     console.log("done")
// })


// let myPromise= new Promise((res,rej)=>{
//    let x=50;
//    if (x>=50){
//     res(x);
//    }else{
//     rej("too small");
//    }
// })


// myPromise.then((res)=>{
//     console.log("your number is : ",res)

//     return res;
// })
// .then((data)=>{
//     console.log("number after power: ",data**10)
// })
// .catch((err)=>{console.warn(err)})
// .finally(()=>{console.log("done")})

//-----------------------------
//=========FETCH===============

// fetch('https://dummyjson.com/todos')
// .then((r)=>{
//     console.log(r)
//     // if(r.ok){
//     //     console.log("true fetch....")
//     // }else{
//     //     console.log("false fetch")
//     // }

//     return r.json()
// })
// .then((data)=>{
//     console.log(data)
// })
// .catch((err)=>{
//     console.log(err,"--------------")
// })

//-----------------

// let x=9;
// x>5? console.log("true"):console.log("false")


// let todosSection=document.querySelector(".todos")
// fetch('https://dummyjson.com/todos')
// .then(res=> res.json())
// .then((data)=>{
//     let todos=data.todos;
//     todos.map((t)=>{
        
//         let icon= t.completed? `<i class="fa-solid fa-check-double p"></i>`:`<i class="fa-solid fa-square-xmark g"></i>`

//         todosSection.innerHTML+=`
//         <div class="todo">
//             <p> ${t.todo}</p>
//             ${icon}
//         </div>`
//     })
// })


// function getTodo(){
//     let r=Math.floor(Math.random()*150)
//     fetch(`https://dummyjson.com/todos/random`)
//         .then(res => res.json())
//         .then((todo)=>{
//             alert(todo.todo)

//         });
// }

//=========================================
// async .. await
// async function getData(){
//     let response= await fetch('https://dummyjson.com/todos')
//     console.log(response)

//     let data= await response.json()
//     console.log(data)
// }
// getData()


//============================================
//==REGEX=====================================

// regex -> regular expression
// /regex/
// i -> case insensitive
// ^ -> start with
// $ -> end with
// (123) -> anding
// [123] -> oring
// [A-Z] -> capital letters
// [a-z] -> small letters
// {1,5} -> between 1 , 5
// {4,} -> more than 4
// {3} -> only 3
// " " or \s -> white space
// [0-9] or \d -> digits
// [a-zA-Z0-9] or \w -> letters and digits
// \/ -> /


// let word= "car";
// let carRegex= /^car$/i
// console.log(carRegex.test(word))

// name regex:====
// start with capital letter
// only letters
// more than 2 letters

// let fullName="Fatma Akram"
let nameRegex= /^[A-Z][a-z]{2,11}\s[A-Z][a-z]{2,11}$/
// console.log(nameRegex.test(fullName))

// phone regex:=====
// start with 01
// only 11 digits

// let myPhone= "01004784403"
// let phoneRegex=/^(01)\d{9}$/

// console.log(phoneRegex.test(myPhone))


// email Regex :========
// end with @gmail.com
// start with small letter

// let email= "fatma$72w@gmail.com"
// let emailRegex=/^[a-z][a-zA-Z0-9%$]{2,20}(@gmail.com)$/
// console.log(emailRegex.test(email))


// date regex:===========
// dd/mm/yyyy
// let date="02/05/1999"
// let dateRegex=/^\d{2}\/\d{2}\/\d{4}$/
// console.log(dateRegex.test(date))



let nameInput= document.querySelector("form input")

let textBox= document.querySelector(".warning")

nameInput.addEventListener("input",()=>{
    if(nameRegex.test(nameInput.value)){
        textBox.innerHTML=`
        <p class="valid">valid name</p>
        `
    }else{
        console.log("must start with capital letter and more than 2 letters")
        textBox.innerHTML=`
        <p class="invalid">must start with capital letter and more than 2 letters</p>
        `
    }
})