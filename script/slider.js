const slider = document.getElementById('slider');
const cards = slider.children;
const cardCount = cards.length - 2;
let currentIndex = 0;
let autoSlideInterval; // store interval ID

function slide(direction) {
  currentIndex = (currentIndex + direction + cardCount) % cardCount;
  updateSlider();
  resetAutoSlide(); // reset timer on user interaction
}

function updateSlider() {
  const cardWidth = cards[0].offsetWidth;
  slider.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
}

// Start auto-slide
function startAutoSlide() {
  autoSlideInterval = setInterval(() => {
    slide(1);
  }, 3000);
}

// Reset auto-slide when user interacts
function resetAutoSlide() {
  clearInterval(autoSlideInterval);
  startAutoSlide();
}

// Start initially
startAutoSlide();

