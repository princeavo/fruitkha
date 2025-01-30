document.addEventListener("DOMContentLoaded",()=>{
    const responsiveMenuBar = document.querySelector("body > header #responsive-menu");
    const navHeader = document.querySelector("body > header > nav");
    const nav_list = navHeader.querySelector("ul");
    let is_open = false;
    const height = nav_list.clientHeight;
    nav_list.style.height ="0px";
    nav_list.style.opacity ="1";
    responsiveMenuBar.addEventListener("click",async function(){
        this.classList.toggle("open");
        // navHeader.classList.toggle("open");
        if(is_open){
            // nav_list.style.overflow = "hidden";
            for(let i = 0; i < height; i++){
                nav_list.style.height = (height - i) + "px";
                await delay(0.1)
            }
            nav_list.style.height ="0px";
        }else{
            // nav_list.style.height = "";
            // navHeader.style.overflow = "";
            for(let i = 0; i < height; i++){
                nav_list.style.height = (i) + "px";
                await delay(1)
            }
            nav_list.style.height ="";
        }
        is_open = !is_open;
    })
    const delay = (delayInMs) => {
        return new Promise((resolve,reject) => {
            setTimeout(() => {
                resolve(2)
            }, delayInMs);
        });
    }
    async function sleep (delayInMs){
        await delay(delayInMs);
    }
});