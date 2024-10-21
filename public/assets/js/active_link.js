document.addEventListener("DOMContentLoaded",function(){
    const current_url = this.location.href;
    document.querySelectorAll("a").forEach(function(link){
        if(link.href === current_url){
            if(!link.classList.contains("btn-link"))
            link.classList.add("active");
        }
    });
});