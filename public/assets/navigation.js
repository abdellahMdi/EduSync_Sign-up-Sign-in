// ============================================
// NAVIGATION
// ============================================

let page1 = document.getElementById("signin-page")
let page2 = document.getElementById("signup-page")
let sibtn = document.getElementById("first")
let subtn = document.getElementById("second")

function switchPag(page) {
    const isHome = page === "signin-page";

    page1.classList.toggle("hidden", !isHome);
    page2.classList.toggle("hidden", isHome);
}


sibtn.addEventListener("click", () => {switchPag("signup-page")});
subtn.addEventListener("click", () =>{ switchPag("signin-page")});
