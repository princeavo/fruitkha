document.addEventListener("DOMContentLoaded",function(){
    const caroussels = document.querySelectorAll(".caroussel");
    caroussels.forEach(function(caroussel) {
        const carousselItems = caroussel.querySelector(".caroussel-items");
        const items = Array.from(carousselItems.querySelectorAll(".caroussel-item"));
        items.slice().reverse().forEach(function(item){
            carousselItems.insertAdjacentHTML("afterbegin",item.outerHTML);
        });
        items.slice().forEach(function(item){
            carousselItems.insertAdjacentHTML("beforeend",item.outerHTML);
        });
        const carousselScrollInterval = setInterval(function(){
            carousselItems.scrollLeft += items[0].offsetWidth;
            if(carousselItems.scrollLeft == carousselItems.scrollWidth-carousselItems.offsetWidth){
                carousselItems.classList.add("scrolling");
                carousselItems.scrollLeft = (items.length - 1) * items[0].offsetWidth;
                carousselItems.classList.remove("scrolling");
                carousselItems.scrollLeft += items[0].offsetWidth;
            }
        },2000);
    });
});

// let isDragging = false;

// const dragStart = () => {
//     isDragging = true;
//     caroussel.classList.add("dragging");
// };

// const dragging = (e) => {
//     if(!isDragging) return;
//     caroussel.scrollLeft = e.pageX;
// };
// const dragStop = () => {
//     isDragging = false;
//     caroussel.classList.remove("dragging");
// };

// caroussel.addEventListener("mousedown",dragStart);
// caroussel.addEventListener("mousemove",dragging);
// document.addEventListener("mouseup",dragStop);
