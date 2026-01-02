/* ========================================
   SHOP.JS - Shop page specific JavaScript
   ======================================== */

// ========================================
// WISHLIST FUNCTIONALITY
// Toggle heart icon and color
// ========================================
document.querySelectorAll(".wishlist-btn").forEach((btn) => {
  btn.addEventListener("click", function (e) {
    e.stopPropagation();
    if (this.textContent === "♡") {
      this.textContent = "❤️";
      this.style.color = "#e76f51";
    } else {
      this.textContent = "♡";
      this.style.color = "inherit";
    }
  });
});

// ========================================
// ADD TO CART FUNCTIONALITY
// Shows success feedback
// ========================================
document.querySelectorAll(".btn-add-cart").forEach((btn) => {
  btn.addEventListener("click", function () {
    const productCard = this.closest(".product-card");
    const productTitle =
      productCard.querySelector(".product-title").textContent;

    // Visual feedback
    this.textContent = "Added! ✓";
    this.style.background = "#28a745";

    // Reset after 2 seconds
    setTimeout(() => {
      this.textContent = "Add to Cart";
      this.style.background = "";
    }, 2000);

    // Log to console (replace with actual cart logic)
    console.log(`Added ${productTitle} to cart`);
  });
});

// ========================================
// PRODUCT QUICK VIEW
// Shows product details (placeholder)
// ========================================
document.querySelectorAll(".btn-view").forEach((btn) => {
  btn.addEventListener("click", function () {
    const productCard = this.closest(".product-card");
    const productTitle =
      productCard.querySelector(".product-title").textContent;
    alert(
      `Quick view for: ${productTitle}\n\nThis would open a modal with product details, size options, and more images.`
    );
  });
});

console.log("Shop page JavaScript loaded successfully!");