/* ========================================
   ABOUT.JS - About page specific JavaScript
   ======================================== */

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

console.log("About page JavaScript loaded successfully!");