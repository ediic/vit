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
