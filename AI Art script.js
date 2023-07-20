const scrollContainer = document.querySelector("main");

scrollContainer.addEventListener("wheel", (evt) => {
    evt.preventDefault();
    scrollContainer.scrollLeft += evt.deltaY;
});


const button1 = document.getElementById("right-arrow");

button1.onclick = () => {
    scrollContainer.scrollLeft += 350;
};

const button2 = document.getElementById("left-arrow");

button2.onclick = () => {
    scrollContainer.scrollLeft -= 350;
};