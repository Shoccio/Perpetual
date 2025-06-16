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


// ===== Modal Logic =====
const modal = document.getElementById("imageModal");
const modalImg = document.getElementById("modalImage");
const closeBtn = document.querySelector(".image-modal .close");

// Add click event to each card image
Array.from(document.querySelectorAll(".card img")).forEach(img => {
  img.addEventListener("click", function (e) {
    e.preventDefault(); // Prevent anchor link
    modal.style.display = "flex";
    modalImg.src = this.src;
    clearInterval(autoSlideInterval); // Pause slider while modal is open
  });
});

// Close modal on close button
closeBtn.onclick = () => {
  modal.style.display = "none";
  startAutoSlide(); // Resume slider
};

// Close modal when clicking outside the image
modal.onclick = (e) => {
  if (e.target === modal) {
    modal.style.display = "none";
    startAutoSlide(); // Resume slider
  }
};
  
