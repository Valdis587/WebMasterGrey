document.addEventListener('DOMContentLoaded', ()=>{ 
    var mobMenuOpen = document.querySelector('.header__burger');
    var mobMenuClose = document.querySelector('.header__menu-close');
    var mobPanel = document.querySelector('.header__menu-nav');
    mobMenuOpen.onclick=function() {
    mobPanel.classList.add('menu-nav-open');
    }
    mobMenuClose.onclick=function() {
       mobPanel.classList.remove('menu-nav-open');
    }
    if(window.innerWidth < 750) { 
        var subopen = document.querySelector('.icon-angle-down');
        var submenu = document.querySelector('.sub-menu');
        subopen.onclick=function() {
            submenu.classList.toggle('sub-menu-open');
            }
    }
  
    const e = document.querySelector(".cursor-inner");
  const t = document.querySelector(".cursor-outer");
let n,
    i = 0,
    o = !1;
(window.onmousemove = function (s) {
    o ||
        (t.style.transform =
            "translate(" + s.clientX + "px, " + s.clientY + "px)"),
        (e.style.transform =
            "translate(" + s.clientX + "px, " + s.clientY + "px)"),
        (n = s.clientY),
        (i = s.clientX);
});
const body = document.body;
const a = document.getElementsByTagName('a');
for (let i = 0; i < a.length; ++i) {
    const item =a[i];
item.addEventListener('mouseover', function() { 
    e.classList.add("cursor-hover"); t.classList.add("cursor-hover");   
});
item.addEventListener('mouseout', function() { 
    e.classList.remove("cursor-hover"); t.classList.remove("cursor-hover");   
});
}
(e.style.visibility = "visible"),
(t.style.visibility = "visible");
});