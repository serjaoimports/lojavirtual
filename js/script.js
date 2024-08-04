const body = document.querySelector("body");
const sidebar = body.querySelector(".sidebar");
const toggle = body.querySelector(".toggle");
const searchBtn = body.querySelector(".search-box");
const modeSwtich = body.querySelector(".toggle-switch");
const modetext = body.querySelector(".mode-text");

toggle.addEventListener("click",() =>{
    sidebar.classList.toggle("close");

});

modeSwtich.addEventListener("click",() =>{
    body.classList.toggle("dark");

});




