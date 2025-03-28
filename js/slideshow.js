let SlideIndex = 1;
showSlides(SlideIndex);

// slide buttons for next / prev
function plusSlides(n) {
  showSlides(SlideIndex += n);
}

function currentSlide(n) {
  showSlides(SlideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("slide");
  let bars = document.getElementsByClassName("slideBar");
  if (n > slides.length) { SlideIndex = 1 }
  if (n < 1) { SlideIndex = slides.length }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < bars.length; i++) {
    bars[i].className = bars[i].className.replace(" bg-cyan-600", "");
  }
  slides[SlideIndex - 1].style.display = "flex";
  bars[SlideIndex - 1].className += " bg-cyan-600"
}