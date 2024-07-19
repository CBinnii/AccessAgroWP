// MENU
function menuMobile() {
    var menu = document.getElementById("menu-button");
    var navbar = document.getElementById("navbarSupportedContent");

    if (menu.classList.contains("cross")) {
        menu.classList.remove("cross");
    } else {
        menu.classList.add("cross");
    }

    if (navbar.classList.contains("show")) {
        navbar.classList.remove("show");
    } else {
        navbar.classList.add("show");
    }
}
