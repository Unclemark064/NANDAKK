/* ========================================
   GENERAL.JS - Global JavaScript for all pages
   ======================================== */

// ========================================
// MOBILE MENU TOGGLE
// ========================================
const mobileToggle = document.getElementById("mobileToggle");
const navMenu = document.getElementById("navMenu");

if (mobileToggle && navMenu) {
  mobileToggle.addEventListener("click", () => {
    navMenu.classList.toggle("active");
    mobileToggle.classList.toggle("active");
  });

  // Close mobile menu when clicking on a link
  document.querySelectorAll(".nav-menu a").forEach((link) => {
    link.addEventListener("click", () => {
      navMenu.classList.remove("active");
      mobileToggle.classList.remove("active");
    });
  });
}

// ========================================
// NAVBAR SCROLL EFFECT - Add shadow on scroll
// ========================================
const navbar = document.getElementById("navbar");
window.addEventListener("scroll", () => {
  if (window.scrollY > 100) {
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
  }
});

// ========================================
// SMOOTH SCROLLING for anchor links
// ========================================
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    const href = this.getAttribute("href");
    
    // Only prevent default for hash links on same page
    if (href !== "#" && document.querySelector(href)) {
      e.preventDefault();
      const target = document.querySelector(href);
      
      if (target) {
        // For scroll-snap containers, scroll the container
        const scrollContainer = document.querySelector(".scroll-container");
        if (scrollContainer) {
          const targetPosition = target.offsetTop;
          scrollContainer.scrollTo({
            top: targetPosition,
            behavior: "smooth",
          });
        } else {
          // Fallback for pages without scroll container
          target.scrollIntoView({
            behavior: "smooth",
            block: "start",
          });
        }
      }
    }
  });
});

// ========================================
// SCROLL REVEAL ANIMATION
// Reveals elements as they come into viewport
// ========================================
const reveals = document.querySelectorAll(".reveal");

function revealOnScroll() {
  reveals.forEach((element) => {
    const elementTop = element.getBoundingClientRect().top;
    const elementVisible = 150;

    if (elementTop < window.innerHeight - elementVisible) {
      element.classList.add("active");
    }
  });
}

// Check on scroll and on page load
window.addEventListener("scroll", revealOnScroll);
document.addEventListener("DOMContentLoaded", revealOnScroll);

// For scroll-snap containers, also check on container scroll
const scrollContainer = document.querySelector(".scroll-container");
if (scrollContainer) {
  scrollContainer.addEventListener("scroll", revealOnScroll);
}

// ========================================
// FORM SUBMISSIONS - Handle all forms
// ========================================
document.querySelectorAll("form").forEach((form) => {
  form.addEventListener("submit", function (e) {
    e.preventDefault();

    const submitBtn = this.querySelector('button[type="submit"]');
    const originalText = submitBtn.textContent;

    submitBtn.textContent = "Sending...";
    submitBtn.disabled = true;

    // Simulate form submission (replace with actual backend call)
    setTimeout(() => {
      alert("Thank you! We will get back to you shortly.");
      this.reset();
      submitBtn.textContent = originalText;
      submitBtn.disabled = false;
    }, 2000);
  });
});

// ========================================
// WHATSAPP BUTTON PULSE ANIMATION
// ========================================
const whatsappBtn = document.querySelector(".whatsapp-float");
if (whatsappBtn) {
  setInterval(() => {
    whatsappBtn.style.transform = "scale(1.1)";
    setTimeout(() => {
      whatsappBtn.style.transform = "scale(1)";
    }, 200);
  }, 3000);
}

// ========================================
// PRICE FORMATTING (Nigerian Naira)
// ========================================
document.querySelectorAll(".price, .course-price").forEach((priceElement) => {
  const price = priceElement.textContent;
  if (price.includes("₦")) {
    const number = price.replace(/[^\d]/g, "");
    if (number) {
      priceElement.textContent = "₦" + parseInt(number).toLocaleString("en-NG");
    }
  }
});

// ========================================
// AUTO-SET MINIMUM DATE for booking forms
// ========================================
document.querySelectorAll('input[type="date"]').forEach((dateInput) => {
  const today = new Date().toISOString().split("T")[0];
  dateInput.setAttribute("min", today);
});

// ========================================
// IMAGE HOVER EFFECTS
// ========================================
document
  .querySelectorAll(".product-image, .collection-image, .course-image")
  .forEach((img) => {
    img.addEventListener("mouseenter", function () {
      this.style.transform = "scale(1.05)";
    });
    img.addEventListener("mouseleave", function () {
      this.style.transform = "scale(1)";
    });
  });

// ========================================
// INITIALIZE ON PAGE LOAD
// ========================================
console.log("Adire Couture Website Loaded Successfully! 🎉");