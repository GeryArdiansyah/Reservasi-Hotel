const Menu = document.querySelector('.menu-toggle input');
const nav = document.querySelector('nav ul');

Menu.addEventListener("click", function () {
    nav.classList.toggle('slide');
});