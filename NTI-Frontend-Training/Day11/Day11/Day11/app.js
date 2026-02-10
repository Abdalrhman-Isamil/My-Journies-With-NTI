// sync vs async
// console.log("first")
// console.log("second")

// setTimeout(()=>{
//     console.log("third")
// },0)

// console.log("fourth")

// setTimeout(()=>{
//     console.log("fifth")
// },0)

// setInterval(()=>{
//     console.log("fifth")
// },2000)

//---------------------------------------
// AJAX -> Asynchronous JavaScript And XML
// 1- define request
// 2- open -> (method, url, async?)
// 3- onload function
// 4- send

//-------------------------------
// readyState
// 0- just defined
// 1- open -> connection established
// 2- request/header received
// 3- processing 
// 4- response received

// status: 200->ok
//         404->not found


let productsSection = document.querySelector(".products");

function getData(url) {

    productsSection.innerHTML = "";
    let r = new XMLHttpRequest();
    r.open("GET", url, true);
    r.onload = () => {
        if (r.readyState == 4 && r.status == 200) {
            let data = JSON.parse(r.response);
            // console.log(data)

            let allProducts = data.products;

            allProducts.map((p) => {
                productsSection.innerHTML += `
            <div class="product">
            <img src="${p.thumbnail}">

            <h2>
            ${p.title}
            </h2>

            <p class="description">${p.description}</p>

            <h4 class="price">price: <span>${p.price}</span> $</h4>

            <button> <i class="fa-solid fa-cart-shopping"></i> add to cart </button>
            </div>
            `
            })

        }
    }
    r.send();
}


getData("https://dummyjson.com/products/");




let categoriesLink = 'https://dummyjson.com/products/categories';
let categoriesSection = document.querySelector(".categories");

function getCategories() {
    let cr = new XMLHttpRequest();
    cr.open("GET", categoriesLink, true)
    cr.onload = () => {
        if (cr.readyState == 4 && cr.status == 200) {
            let data = JSON.parse(cr.responseText);
            console.log(data)

            data.map((c)=>{
                categoriesSection.innerHTML+=`
                <span class="category" onclick="getData('${c.url}')"> ${c.name} </span>
                `
            })
        } else {
            console.log("error")
        }
     }
      cr.send()
}

getCategories();


let searchInput = document.querySelector("form input");

searchInput.addEventListener("input", () => {
    let newLink=`https://dummyjson.com/products/search?q=${searchInput.value}`;
    getData(newLink);
})