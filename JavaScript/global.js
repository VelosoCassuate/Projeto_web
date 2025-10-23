const navButton = document.getElementById("nav-button");
const menu = document.getElementById("menu");

var menuIsVisible = false;

if (window.innerWidth <= 540) {
  menu.style = "display: none";
}

navButton.onclick = () => {
  if (window.innerWidth <= 540) {
    menuIsVisible = !menuIsVisible;
    menu.style = menuIsVisible ? "display: flex" : "display: none";
  }
};

window.onresize = () => {
  if (window.innerWidth >= 541) {
    menu.style = "display: flex";
    menuIsVisible = false;
  }
  if (window.innerWidth <= 540 && !menuIsVisible) menu.style = "display: none";
};
