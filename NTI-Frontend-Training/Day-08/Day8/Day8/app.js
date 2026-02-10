
// loops:
// for loop:
// let c=1
// for( ;c<=7; c++){
//     console.log(c)
//     c++
// }


// for(let i=10;i>=0;i--){
//     console.log(i)
// }

// let days=["sat","sun","mon","tue","wed","thu","fri"]
// for(let i=0; i<days.length; i++){
//     console.log(days[i])
// }


// let name=window.prompt("enter your name")
// console.log(name)

// let age=parseInt( window.prompt("enter your age"))
// console.log(age+10)

// // console.log("welcome "+ name+ " your age is "+ age)
// console.log(`welcome ${name} your age is ${age}`)

//------------------------------

// let number= parseInt(prompt("enter number of weekend days"))
// let weekend=[]

// for(let i=0; i<number; i++){
//     let day=prompt(`enter day ${i+1}`)
//     weekend.push(day)
// }

// console.log(weekend)

//------------------------------
// let c=0;
// while(c<10){
//      console.log(c)
//      c++
// }
// console.log("-----------------------")
// do{
//     console.log(c)
// }while(c<10)


// let menue=`
// 1- choose item1
// 2- choose item2
// 3- choose item3
// 4- exit
// `
// let n=4;
// do{
//     n=prompt(menue)
//     console.log(n)
// }while(n!=4)

//-----------------------------
// control flow:
//-----------------------------
// if

// let userNum=Number(prompt("enter number"))

// if(userNum>50 && userNum<100){
//     console.log("greater than 50")
// }else if(userNum<50 && userNum>0){
//     console.log("less than 50")
// }else if( userNum== 50){
//     console.log("equal to 50")
// }else{
//     console.log("invalid number")
// }

// get a r number
// if r >5  -> tell the user and try again
// if r <5  -> tell the user and try again
// if r ==5 -> tell the user and exit

// let char="z";

// switch(char){
//     case "a":
//         console.log(1);
//         break;
     
//     case "b":
//         console.log(2)
//         break;
    
//     case "c":
//         console.log(3)
//         break;

//     default:
//         console.log("not valid")
// }

//-------------------------
//switch-------------------

// let day= "tue"

// switch(day){
//     case "sat":
//     case "fri":
//         console.log("weekend")
//         break;
    
//     case "sun":
//     case "mon":
//     case "tue":
//     case "wed":
//     case "thu":
//         console.log("workday")
//         break;

//     default:
//         console.log("not valid day")
// }

//-------------------------------
//break & continue
// for(let i=1; i<=10; i++){
//    if(i%2==0){
//     continue;
//    }
//    console.log(i)
    
// }

//--------------------------------
// let attempts=3;
// let password="123"

// do{
//     let userPass= prompt("enter password")
//     attempts--;

//     if(userPass==password){
//         console.log("true password...")
//         break;
//     }else{
//         if(attempts>0){
//             console.log(`wrong password, you have ${attempts} attempts left`)

//         }else{
//             console.log(`wrong password, access denied`)
//             break;
//         }
//     }
// }while(true)

//-------------------------------------
// let now =new Date()
// console.log(now)

// let months=["jan","feb","mar","apr","may","jun","jul","aug","sep","oct","nov","dec"]
// let month= now.getMonth()
// console.log(months[month])


// let year= now.getFullYear()
// console.log(year)

// let date= now.getDate()
// console.log(date)


// let days=["sun","mon","tue","wed","thu","fri","sat"]
// let day= now.getDay()
// console.log(day)
// console.log(days[day])


// let dateString= now.toDateString()
// console.log(dateString)