window.onscroll = function() {opaqueHeader()};
function opaqueHeader() { // Header becomes opaque when scrolling down
    if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
        document.getElementById("header").style.backgroundColor = "rgba(112, 112, 112, 1)";
        document.getElementById("scroll-up").style.display = "block";
    } else {
        document.getElementById("header").style.backgroundColor = "rgba(112, 112, 112, 0.3)";
        document.getElementById("scroll-up").style.display = "none";
    }
}

function scrollToTop() {
    document.body.scrollTop = 0; // Safari
    document.documentElement.scrollTop = 0; // Chrome, Firefox, IE and Opera
}

var headerOverlay = document.getElementById("header-overlay");
var mobileMenu = document.getElementById("mobile-menu");
var hamburger = document.getElementById("hamburger");
var icon = document.getElementById("hamburger-icon");
var searchOverlay = document.getElementById("search-overlay");
var searchButton = document.getElementById("search-button");
var searchButtonIcon = document.getElementById("search-button-icon");
function toggleMenu() { // Toggles hamburger menu

    if (mobileMenu.style.display === "block") {
        headerOverlay.style.display = "none";
        mobileMenu.style.display = "none";

        icon.className = "fa fa-bars";
        icon.style.fontSize = "48px";
        hamburger.style.background = "none";
        hamburger.style.color = "var(--white)";
    } else {
        headerOverlay.style.display = "block";
        mobileMenu.style.display = "block";

        icon.className = "fas fa-times";
        icon.style.fontSize = "32px";
        hamburger.style.backgroundColor = "var(--white)";
        hamburger.style.color = "var(--black)";
    }
}

function toggleSearch() { // Toggles hamburger menu
    if (searchOverlay.style.display === "block") {
        headerOverlay.style.display = "none";
        searchOverlay.style.display = "none";

        searchButtonIcon.className = "fas fa-search";
        searchButtonIcon.style.color = "var(--white)";
        searchButton.style.background = "none";
    } else {
        headerOverlay.style.display = "block";
        searchOverlay.style.display = "block";
        mobileMenu.style.display = "none";

        icon.className = "fa fa-bars";
        hamburger.style.background = "none";
        hamburger.style.color = "var(--white)";

        searchButtonIcon.className = "fas fa-times";
        searchButtonIcon.style.color = "var(--black)";
        searchButton.style.backgroundColor = "var(--white)";
    }
}