require('./bootstrap');

require('alpinejs');

// burger menu
document.getElementById("show-hide").addEventListener ("click", showHide);
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
document.querySelector("#box-menu").addEventListener ("click", boxMenu);
function boxMenu() {
    const x = document.getElementById("items-menu");
    x.classList.toggle("opacity-0");
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

