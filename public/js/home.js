/* ========================================
   HOME.JS - Homepage specific JavaScript
   ======================================== */

// ========================================
// HERO SLIDER - Auto-rotating background
// ========================================
const slides = document.querySelectorAll(".hero-slide");
let currentSlide = 0;

function nextSlide() {
  if (slides.length > 0) {
    slides[currentSlide].classList.remove("active");
    currentSlide = (currentSlide + 1) % slides.length;
    slides[currentSlide].classList.add("active");
  }
}

// Auto-advance slides every 5 seconds
setInterval(nextSlide, 5000);

// ========================================
// PARALLAX EFFECT for hero content
// Subtle movement on scroll for depth
// ========================================
window.addEventListener("scroll", () => {
  const scrolled = window.pageYOffset;
  const heroContent = document.querySelector(".hero-content");
  
  if (heroContent && scrolled < window.innerHeight) {
    heroContent.style.transform = `translateY(${scrolled * 0.5}px)`;
    heroContent.style.opacity = 1 - scrolled / 700;
  }
});

// ========================================
// COLLECTION CARD CLICK HANDLER
// Navigate to shop page with collection filter
// ========================================
document.querySelectorAll(".collection-card").forEach((card) => {
  card.addEventListener("click", function () {
    const title = this.querySelector(".collection-overlay h3");
    if (title) {
      window.location.href = `public/shop.html?collection=${encodeURIComponent(title.textContent)}`;
    }
  });
});

// ========================================
// STATS COUNTER ANIMATION
// Counts up to target number when visible
// ========================================
function animateCounter(element, target, duration) {
  let start = 0;
  const increment = target / (duration / 16);

  const timer = setInterval(() => {
    start += increment;
    if (start >= target) {
      element.textContent = target + "+";
      clearInterval(timer);
    } else {
      element.textContent = Math.floor(start) + "+";
    }
  }, 16);
}

// Trigger counter animation when stats section is visible
const statsObserver = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      const statBoxes = entry.target.querySelectorAll(".stat-box h3");
      statBoxes.forEach((box) => {
        const target = parseInt(box.textContent);
        if (!isNaN(target)) {
          animateCounter(box, target, 2000);
        }
      });
      statsObserver.unobserve(entry.target);
    }
  });
});

const statsSection = document.querySelector(".stats");
if (statsSection) {
  statsObserver.observe(statsSection);
}

// ========================================
// NEWSLETTER SUBSCRIPTION
// ========================================
const newsletterForm = document.querySelector(".footer-column form");
if (newsletterForm) {
  newsletterForm.addEventListener("submit", function (e) {
    e.preventDefault();
    const emailInput = this.querySelector('input[type="email"]');
    const email = emailInput.value;

    alert(
      `Thank you for subscribing with ${email}! You'll receive exclusive updates and offers.`
    );
    emailInput.value = "";
  });
}

console.log("Homepage JavaScript loaded successfully!");