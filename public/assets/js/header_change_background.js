document.addEventListener("DOMContentLoaded",function(){
    const header = document.querySelector("body > header");
    if(header !== null){
        document.addEventListener("scroll",function(e){
            change_background();
        });
        change_background();
    }
    function change_background(){
        if(window.scrollY == 0){
            header.classList.remove("scroll");
        }else{
            header.classList.add("scroll");
        }
    }
});
