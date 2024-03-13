const buttonsWrapper = document.querySelector(".map");
const slides = document.querySelector(".inner");
buttonsWrapper.addEventListener("click", (e) => {
  if (e.target.nodeName === "BUTTON") {
    if (e.target.classList.contains("first")) {
      slides.style.transform = "translateX(-0%)";
    } else if (e.target.classList.contains("second")) {
      slides.style.transform = "translateX(-22.5%)";
    } else if (e.target.classList.contains("third")) {
      slides.style.transform = "translatex(-45%)";
    }
  }
});
