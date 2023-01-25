const ham = document.querySelector(".hamburgerMenu");
const menu = document.querySelector(".barItems");
const page = document.querySelectorAll(".pageLink");

page.forEach(n => n.addEventListener("click", close));
ham.addEventListener("click", mobile);

function mobile () {
    ham.classList.toggle("active");
    menu.classList.toggle("active");
}

function close () {
    ham.classList.remove("active");
    menu.classList.remove("active");
}
