document.addEventListener("DOMContentLoaded",()=>{
    const responsiveMenuBar = document.querySelector("body > header #responsive-menu");
    const navHeader = document.querySelector("body > header > nav");
    responsiveMenuBar.addEventListener("click",function(){
        this.classList.toggle("open");
        navHeader.classList.toggle("open");
    })
});