document.addEventListener("DOMContentLoaded",function(){
    const accordeonsSections = document.querySelectorAll(".accordeon-container");
    accordeonsSections.forEach(function(accordeonSection){
        const accordeons = accordeonSection.querySelectorAll(".accordeon");
        accordeons.forEach(function(accordeon){
            accordeon.classList.remove("active");
            accordeon.querySelector(".accordeon-title")?.addEventListener("click",function(){
                accordeons.forEach(function(accordeonParam){
                    if(accordeonParam != accordeon)
                        accordeonParam.classList.remove("active");
                });
                accordeon.classList.toggle("active");
            });
        });
    });
});