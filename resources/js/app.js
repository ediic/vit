require('./bootstrap');

require('alpinejs');

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

document.getElementById("box-menu").addEventListener ("click", boxMenu);
function boxMenu() {
    const x = document.getElementById("items-menu");
    x.classList.toggle("opacity-0");
}
