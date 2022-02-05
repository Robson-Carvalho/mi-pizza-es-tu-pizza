const mobileMenu = document.querySelector(".menuMobile");
const menu = document.querySelector(".menu");
const active = "active";
const itens = document.querySelectorAll(".link");

mobileMenu.addEventListener("click", () => {
  menu.classList.toggle(active);
  console.log("f")
});

itens.forEach((item) => {
  item.addEventListener("click", () => {
    menu.classList.remove(active);
  });
});