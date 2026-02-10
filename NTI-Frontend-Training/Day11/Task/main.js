// let recipesSection = document.querySelector(".recipes");

// function getData(url) {

//     recipes.innerHTML = "";
//     let r = new XMLHttpRequest();
//     r.open("GET", url, true);
//     r.onload = () => {
//         if (r.readyState == 4 && r.status == 200) {
//             let data = JSON.parse(r.response);
//             console.log(data)

//             let allRecipes = data.recipes;

//             allRecipes .map((p) => {
//                 recipesSection.innerHTML += `
//             <div class="recipe">
//             <img src="${p.thumbnail}">

//             <h2>
//             ${p.title}
//             </h2>

//             <p class="description">${p.description}</p>

//             <h4 class="price">price: <span>${p.price}</span> $</h4>

//             // <button> <i class="fa-solid fa-cart-shopping"></i> add to cart </button>
//             </div>
//             `
//             })

//         }
//     }
//     r.send();
// }


// getData("https://dummyjson.com/recipes");


// //*'https://dummyjson.com/recipes/1'
// //*'https://dummyjson.com/recipes/search?q=Margherita'

// let recipeLink = 'https://dummyjson.com/recipes/1';
// let recipeSection = document.querySelector(".recipe");

// function getRecipe() {
//     let re = new XMLHttpRequest();
//     re.open("GET", searchLink, true)
//     re.onload = () => {
//         if (re.readyState == 4 && re.status == 200) {
//             let data = JSON.parse(re.responseText);
//             console.log(data)

//             data.map((c)=>{
//                 recipeSection.innerHTML+=`
//                 <span class="recipee" onclick="getData('${c.url}')"> ${c.name} </span>
//                 `
//             })
//         } else {
//             console.log("error")
//         }
//      }
//       re.send()
// }

// getRecipe();


// let searchInput = document.querySelector("form input");

// searchInput.addEventListener("input", () => {
//     let newLink=`https://dummyjson.com/recipes/search?q=${searchInput.value}`;
//     getData(newLink);
// })


//************************************************************************************************* */

let recipesSection = document.querySelector(".recipes");


function getData(url) {
  recipesSection.innerHTML = "";

  let r = new XMLHttpRequest();
  r.open("GET", url, true);

  r.onload = () => {
    if (r.readyState == 4 && r.status == 200) {
      let data = JSON.parse(r.response);

      let allRecipes = data.recipes || [data];

      allRecipes.map((recipe) => {
        recipesSection.innerHTML += `
          <div class="recipe">
            <img src="${recipe.image}" alt="${recipe.name}">

            <h2>${recipe.name}</h2>

            <h4>Ingredients:</h4>
            <ul>
              ${recipe.ingredients.map(i => `<li>${i}</li>`).join("")}
            </ul>

            <h4>Steps:</h4>
            <ol>
              ${recipe.instructions.map(step => `<li>${step}</li>`).join("")}
            </ol>

            <div class="time">Time: ${recipe.prepTimeMinutes + recipe.cookTimeMinutes} mins total</div>
          </div>
        `;
      });
    }
  };

  r.send();
}
getData("https://dummyjson.com/recipes");

let searchInput = document.querySelector("form input");
searchInput.addEventListener("input", () => {
  let newLink = `https://dummyjson.com/recipes/search?q=${searchInput.value}`;
  getData(newLink);
});
