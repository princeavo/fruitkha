document.addEventListener("DOMContentLoaded",function(){
    const header = document.querySelector("body > header");
    if(header !== null){
        document.addEventListener("scroll",function(e){
            if(window.scrollY == 0){
                header.classList.remove("scroll");
            }else{
                header.classList.add("scroll");
            }
        });
    }
});
