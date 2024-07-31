const slidesContainer = document.getElementById("slides-container");
const slide = document.querySelector(".slide");
const prevButton = document.getElementById("slide-arrow-prev");
const nextButton = document.getElementById("slide-arrow-next");
let currentLocation = 1;

nextButton.addEventListener("click", () => {
  const slideWidth = slide.clientWidth;
  slidesContainer.scrollLeft += slideWidth;
  if (currentLocation === 3) {
    return;
  }
  currentLocation++;
  moveBubble();
});

prevButton.addEventListener("click", () => {
  const slideWidth = slide.clientWidth;
  slidesContainer.scrollLeft -= slideWidth;
  if (currentLocation === 1) {
    return;
  }
  currentLocation--;
  moveBubble();
});

const moveBubble = () => {
  const bubbles = document.querySelectorAll(".bubbles-container>span");
  bubbles.forEach((bubble) => {
    bubble.classList.remove("current");
  });
  bubbles[currentLocation - 1].classList.add("current");
};
