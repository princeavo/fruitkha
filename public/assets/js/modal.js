document.addEventListener("DOMContentLoaded",function() {
    const modalsOpeners = document.querySelectorAll("[data-role='modal']");
    modalsOpeners.forEach(function(modalOpener) {
        const targetModalSelector = modalOpener.getAttribute("data-target");
        if(targetModalSelector !== null){
            const targetModal = document.querySelector(targetModalSelector);
            if(targetModal !== null){
                modalOpener.addEventListener("click",function(){
                    targetModal.classList.toggle("open");
                });
                const closeModalButton = targetModal.querySelector(".close-button");
                if(closeModalButton){
                    closeModalButton.addEventListener("click",function(){
                        targetModal.classList.remove("open");
                    });
                }
            }
        }
    });
});