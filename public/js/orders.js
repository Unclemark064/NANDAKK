/* ========================================
   ORDER.JS - Order confirmation page JavaScript
   ======================================== */

// ========================================
// GET ORDER ID FROM URL
// Extract order ID from query parameters
// ========================================
function getOrderIdFromURL() {
  const urlParams = new URLSearchParams(window.location.search);
  return urlParams.get("orderId") || "ORD12345678";
}

// ========================================
// DISPLAY ORDER ID
// Show the order number to user
// ========================================
const orderNumberDisplay = document.getElementById("orderNumberDisplay");
if (orderNumberDisplay) {
  const orderId = getOrderIdFromURL();
  orderNumberDisplay.textContent = `#${orderId}`;
}

// ========================================
// CONFETTI ANIMATION (Optional enhancement)
// Celebrate successful order
// ========================================
function createConfetti() {
  const colors = ["#1a472a", "#f4a261", "#e76f51", "#d4af37"];
  const confettiCount = 50;

  for (let i = 0; i < confettiCount; i++) {
    setTimeout(() => {
      const confetti = document.createElement("div");
      confetti.style.cssText = `
        position: fixed;
        width: 10px;
        height: 10px;
        background: ${colors[Math.floor(Math.random() * colors.length)]};
        left: ${Math.random() * 100}%;
        top: -10px;
        opacity: 1;
        transform: rotate(${Math.random() * 360}deg);
        animation: fall ${2 + Math.random() * 2}s linear forwards;
        pointer-events: none;
        z-index: 9999;
      `;
      document.body.appendChild(confetti);

      setTimeout(() => confetti.remove(), 4000);
    }, i * 30);
  }
}

// Add confetti animation CSS
const style = document.createElement("style");
style.textContent = `
  @keyframes fall {
    to {
      transform: translateY(100vh) rotate(720deg);
      opacity: 0;
    }
  }
`;
document.head.appendChild(style);

// Trigger confetti on page load
window.addEventListener("load", () => {
  setTimeout(createConfetti, 500);
});

// ========================================
// SEND CONFIRMATION EMAIL (Placeholder)
// This would integrate with your backend
// ========================================
function sendConfirmationEmail() {
  const orderId = getOrderIdFromURL();
  console.log(`Sending confirmation email for order ${orderId}`);
  // Backend integration would go here
}

// ========================================
// TIMELINE ANIMATION
// Animate timeline items on scroll
// ========================================
const timelineObserver = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const timelineItems = entry.target.querySelectorAll(".timeline-item");
        timelineItems.forEach((item, index) => {
          setTimeout(() => {
            item.style.opacity = "1";
            item.style.transform = "translateX(0)";
          }, index * 200);
        });
        timelineObserver.unobserve(entry.target);
      }
    });
  },
  { threshold: 0.2 }
);

const timeline = document.querySelector(".timeline");
if (timeline) {
  // Set initial state for animation
  const timelineItems = document.querySelectorAll(".timeline-item");
  timelineItems.forEach((item) => {
    item.style.opacity = "0";
    item.style.transform = "translateX(-20px)";
    item.style.transition = "all 0.5s ease";
  });

  timelineObserver.observe(timeline);
}

// ========================================
// PRINT RECEIPT ENHANCEMENT
// Add print-specific styles
// ========================================
const printStyles = document.createElement("style");
printStyles.textContent = `
  @media print {
    .navbar, .footer, .whatsapp-float, .order-actions, .support-banner {
      display: none !important;
    }
    .success-card, .order-card {
      box-shadow: none;
      border: 1px solid #ddd;
      page-break-inside: avoid;
    }
    body {
      background: white;
    }
  }
`;
document.head.appendChild(printStyles);

// ========================================
// COPY ORDER NUMBER TO CLIPBOARD
// Click order number to copy
// ========================================
if (orderNumberDisplay) {
  orderNumberDisplay.style.cursor = "pointer";
  orderNumberDisplay.title = "Click to copy order number";

  orderNumberDisplay.addEventListener("click", function () {
    const orderId = this.textContent;
    navigator.clipboard
      .writeText(orderId)
      .then(() => {
        // Show visual feedback
        const originalText = this.textContent;
        this.textContent = "Copied! ✓";
        this.style.color = "#28a745";

        setTimeout(() => {
          this.textContent = originalText;
          this.style.color = "";
        }, 2000);
      })
      .catch((err) => {
        console.error("Failed to copy:", err);
      });
  });
}

// ========================================
// ESTIMATED DELIVERY DATE CALCULATION
// Update delivery estimates based on current date
// ========================================
function updateDeliveryEstimates() {
  const today = new Date();
  const timestamps = document.querySelectorAll(".timestamp");

  timestamps.forEach((timestamp) => {
    const text = timestamp.textContent.toLowerCase();

    if (text.includes("today")) {
      // Keep as is
    } else if (text.includes("tomorrow")) {
      const tomorrow = new Date(today);
      tomorrow.setDate(tomorrow.getDate() + 1);
      // Keep as is or format date
    } else if (text.includes("3-5 days")) {
      const deliveryDate = new Date(today);
      deliveryDate.setDate(deliveryDate.getDate() + 3);
      // You can update with actual dates if needed
    }
  });
}

updateDeliveryEstimates();

// ========================================
// AUTO-SCROLL TO SUCCESS MESSAGE
// Smooth scroll to confirmation on page load
// ========================================
window.addEventListener("load", () => {
  setTimeout(() => {
    const successCard = document.querySelector(".success-card");
    if (successCard) {
      successCard.scrollIntoView({ behavior: "smooth", block: "center" });
    }
  }, 100);
});

// ========================================
// TRACK ORDER LINK (If tracking page exists)
// Add tracking number to URL
// ========================================
const trackOrderLink = document.querySelector('a[href="track-order.html"]');
if (trackOrderLink) {
  const orderId = getOrderIdFromURL();
  trackOrderLink.href = `track-order.html?orderId=${orderId}`;
}

console.log("Order confirmation page JavaScript loaded successfully!");