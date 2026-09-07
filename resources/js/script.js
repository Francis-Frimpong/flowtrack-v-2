const hamburger = document.querySelector("#hamburger");

hamburger.addEventListener("click", () => {
    document.querySelector("#mobile-menu").classList.toggle("hidden");
});
