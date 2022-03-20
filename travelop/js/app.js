
let search = document.querySelector(".main-nav .search");
let searchIcon = document.querySelector(".main-nav .search i");

searchIcon.addEventListener("click",function(){
    search.classList.toggle("active")
})



let header = document.querySelector("header");
let home = document.querySelector("section.home");
let fixedImg = document.querySelector(".fixed-img");

let scroller = function() {
    if(document.documentElement.scrollTop > header.offsetHeight) {
        header.classList.add("scrolled")
    } else {
        header.classList.remove("scrolled")
    }
        
    let pixelcount = document.documentElement.scrollTop * 0.4;
    fixedImg.style.transform = `translateY(-${pixelcount}px)`;
};

window.addEventListener("scroll",function(){
    if(document.documentElement.scrollTop < home.offsetHeight) {

        scroller();
        
    }
    
})
scroller();











