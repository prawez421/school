const slider = document.getElementById("slider");
const dots = document.querySelectorAll(".dot");

let index = 0;

function updateSlider() {
  // Image slide
  slider.style.transform = `translatex(-${index * 25}%)`;

  // Sab dots white
  dots.forEach(dot => {
    dot.classList.remove("bg-red-500");
    dot.classList.add("bg-white");
  });

  // Active dot red
  dots[index].classList.remove("bg-white");
  dots[index].classList.add("bg-red-500");
}

// First dot active
updateSlider();

setInterval(() => {
  index++;

  if (index > 3) {
    index = 0;
  }

  updateSlider();

}, 3000);

// Dot click event
dots.forEach((dot, i) => {
  dot.addEventListener("click", () => {
    index = i;
    updateSlider();
  });
});