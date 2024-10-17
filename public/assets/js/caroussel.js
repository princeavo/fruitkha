const caroussel = document.querySelector(".caroussel");

let isDragging = false;

const dragStart = () => {
    isDragging = true;
    caroussel.classList.add("dragging");
};

const dragging = (e) => {
    if(!isDragging) return;
    caroussel.scrollLeft = e.pageX;
};
const dragStop = () => {
    isDragging = false;
    caroussel.classList.remove("dragging");
};

caroussel.addEventListener("mousedown",dragStart);
caroussel.addEventListener("mousemove",dragging);
document.addEventListener("mouseup",dragStop);
