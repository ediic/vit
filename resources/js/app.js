require('./bootstrap');

require('alpinejs');

// burger menu
const element =  document.getElementById("show-hide");

['click','focus'].forEach( evt => element.addEventListener(evt, showHide));      

function showHide() {
    const x = document.getElementById("mobile-menu");
    const y = document.getElementById("cross-icon");
    const z = document.getElementById("burger-icon");
    if (x.style.display === "none") {
        x.style.display = "block";
        y.style.display = "block";
        z.style.display = "none";
    } else {
        x.style.display = "none";
        y.style.display = "none";
        z.style.display = "block";
    }
}


//contacts items
document.querySelectorAll("#box-menu").forEach(element => {element.addEventListener("click", boxMenu)});
document.querySelector("main").addEventListener('click', boxHideMenu);

function boxMenu() {
    const x = document.querySelector("#items-menu");
    const y = document.querySelector("#items-menu2");

    x.classList.toggle("opacity-0");
    y.classList.toggle("hidden");
}      

function boxHideMenu() {  
    const x = document.querySelector("#items-menu");
    const y = document.querySelector("#items-menu2");

    x.classList.add("opacity-0");
    y.classList.add("hidden");                  
}  


//modal show-hide
const modal = document.querySelectorAll('.modal-item');
const modalOpen = document.querySelector('.modal-open');

document.querySelectorAll('.show-modal').forEach(element => {element.addEventListener('click', open)});
document.querySelectorAll('.modal-close').forEach(element => {element.addEventListener('click', close)});
  
function open(event) {
    let command = event.target.parentElement.parentElement.id;
    command = JSON.parse(command);
    
    modal[0].innerHTML = command.username;
    modal[1].innerHTML = command.location;
    modal[2].innerHTML = command.destination;
    modal[3].innerHTML = command.phone;
    modal[4].innerHTML = command.email;
    modal[5].innerHTML = command.message;

    modalOpen.classList.remove('hidden');
};

function close() {
    modalOpen.classList.add('hidden');
};

