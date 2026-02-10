//* dom => document object model 

// عندي 3 طرق امسك بيها الاليمنت :  امسك بالتاج ,  نيم وبالكلاس نيم  , بال اي دي 
// let tags=document.getElementsByTagName("h1");

// console.log(tags) //collection

// let ps=document.getElementsByTagName("p")
// console.log(ps);//collection

// console.log(ps[0].textContent)
// console.log(ps[1].textContent)



// let classes=document.getElementsByClassName("second")
// console.log(classes)

// let id=document.getElementById("p2")
// console.log(id)//element

// let q=document.querySelector("p") // لازم اهرفها الحاجه اللي خدتها اي دي ولا كلاس ولا ايه عشان مترجعليش نال
// console.log(q) // بترجع اول اليمنت 

// let q=document.querySelector("p2") // ترجع نال 
// console.log(q)

// let q=document.querySelectorAll("p") 
// console.log(q) // بترجع كل الاليمنت

// change content 
// let username=window.prompt("enter name ")
// let ele=document.querySelector("#p1")
// ele.textContent+=username // دي الطريقة الاولى 
// ele.innerHTML+="abood"
// console.log(ele.textContent)

// let user=prompt("enter name")
// let age =prompt("enter age ")

// let box=document.querySelector(`.box`);
// box.innerHTML=` welcome , name is : ${user} <br> age is : ${age}`



//******************************* */

// function change(){
//     let a=document.querySelector("a")
// a.textContent="facebook"
// a.href="https://www.facebook.com"
// }


//******************************* */

// function showHappy() {
//   document.getElementById("emoji").src = "happy.jpg";
// }

// function showSad() {
//   document.getElementById("emoji").src = "sad.jpg";
// }

//* بنمسح الاليمنت ب 2 طريقة اما بيه او بالبيرانت 

//* ازاي هنعمل اتشانج للستايل بتاع الاليمنت عندي 2 طريقة اما عندي كلاس واطبقه ي اما اني اشتغل على الستايل نفسه اللي هو بالنسبة للاتش تي ام ال ستايل 

//* اي اتريبيوت برضو ممكن نمسك الاليمنت نفسه ونعمل . الاتريبوت نفسه زي التايتل 
//* عندي برضو السيت اتريبوت ونديله الستايل 
//* وبرضو الريموف اتريبيوت 
//* ازاي بقا يكون عندي كلاس ونضيفله لاليمنت معين هنقول h1.classList add or remove لان الاليمنت الواحد بياخد اكتر من كلاس 

//* .togel بع لو الكلاس موجود هنطبقه لو مش موجود هنحذفه

// let pElemenets = document.querySelectorAll( 'p' )

// pElemenets.forEach( p =>
// {
//     p.addEventListener( 'click', markP( p ) );
// } )

// function markP ( ele )
// {
//     const isMarked = ele.classList.contains( 'mark' );
//     console.log(isMarked)
//     ele.classList.toggle( 'mark' ,!isMarked)
// }




//* الايفينت 3 موجودين وبنستخدمهم ديما وهم الكليك معناها بتغط والانبوت خاص باني ادخل داتا السابميت خاصة بالفورم ونمنع الديفولت من الكول باك فانكشن وديما بنديها بريفنت ديفولت 

/** 2 تاسك مهمة نعمل سيرش على كل الايفينت اللي في الجافا سكربت التاسك التانيه معانا كودين اتش تي وسي اساس وواحنا نعملهم ملف الجافا سكربت  */