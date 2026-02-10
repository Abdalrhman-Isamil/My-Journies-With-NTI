
window.onload = function () { 

    
    let idInput = document.querySelector("form input:nth-child(1)");   
    let nameInput = document.querySelector("form input:nth-child(2)"); 
    let courseInput = document.querySelector("form input:nth-child(3)");
    let paymentInput = document.querySelector("form input:nth-child(4)");
    let addBtn = document.querySelector("form button");                
    let tbody = document.querySelector("tbody");                       

    
    idInput.focus(); 

    
    idInput.addEventListener("keydown", function(e){
        if(e.key === "Enter"){
            e.preventDefault();
            nameInput.focus();
        }
    });

    nameInput.addEventListener("keydown", function(e){
        if(e.key === "Enter"){
            e.preventDefault();
            courseInput.focus();
        }
    });

    courseInput.addEventListener("keydown", function(e){
        if(e.key === "Enter"){
            e.preventDefault();
            paymentInput.focus();
        }
    });

    paymentInput.addEventListener("keydown", function(e){
        if(e.key === "Enter"){
            e.preventDefault();
            addBtn.focus();
        }
    });

    
    function checkInputs(id, name, course, payment){
        
        if(id === "" || name === "" || course === "" || payment === ""){
            return false;
        }

        
        if(isNaN(id) || isNaN(payment)){
            return false;
        }

        return true;
    }

    addBtn.addEventListener("click", function(e){
        e.preventDefault();

        let id = idInput.value;
        let name = nameInput.value;
        let course = courseInput.value;
        let payment = paymentInput.value;

        if(!checkInputs(id, name, course, payment)){
            return;
        }

        
        let tr = document.createElement("tr");
        tr.innerHTML = `
            <td>${id}</td>
            <td>${name}</td>
            <td>${course}</td>
            <td>${payment}</td>
            <td>
            <button class="del-btn">delete</button>
            <button class="check-btn">check</button>
            </td>
        `;

        tbody.appendChild(tr);

        
        idInput.value = "";
        nameInput.value = "";
        courseInput.value = "";
        paymentInput.value = "";
        idInput.focus();

        
        let delBtn = tr.querySelector(".del-btn");
        delBtn.addEventListener("click", function(){
            tr.remove();
        });

        
        let checkBtn = tr.querySelector(".check-btn");
        checkBtn.addEventListener("click", function(){
            tr.classList.add("check");
        });
    });
}
