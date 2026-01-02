/* ========================================
   CHECKOUT.JS - Checkout page specific JavaScript
   ======================================== */

// ========================================
// PAYMENT METHOD TOGGLE
// Show/hide card details based on selected payment
// ========================================
const paymentOptions = document.querySelectorAll('input[name="payment"]');
const cardDetails = document.getElementById("cardDetails");

paymentOptions.forEach((option) => {
  option.addEventListener("change", function () {
    if (this.value === "card") {
      cardDetails.style.display = "block";
      cardDetails.style.animation = "fadeInUp 0.5s ease";
    } else {
      cardDetails.style.display = "none";
    }
  });
});

// ========================================
// QUANTITY BUTTONS
// Increase/decrease item quantities
// ========================================
document.querySelectorAll(".qty-btn").forEach((btn) => {
  btn.addEventListener("click", function () {
    const qtyElement = this.parentElement.querySelector(".qty");
    let currentQty = parseInt(qtyElement.textContent);

    if (this.classList.contains("plus")) {
      currentQty++;
    } else if (this.classList.contains("minus") && currentQty > 1) {
      currentQty--;
    }

    qtyElement.textContent = currentQty;
    updateTotals();
  });
});

// ========================================
// REMOVE ITEM BUTTON
// Remove items from cart
// ========================================
document.querySelectorAll(".remove-btn").forEach((btn) => {
  btn.addEventListener("click", function () {
    const cartItem = this.closest(".cart-item");
    cartItem.style.animation = "fadeOut 0.3s ease";

    setTimeout(() => {
      cartItem.remove();
      updateTotals();

      // Check if cart is empty
      const remainingItems = document.querySelectorAll(".cart-item").length;
      if (remainingItems === 0) {
        alert("Your cart is now empty!");
      }
    }, 300);
  });
});

// ========================================
// UPDATE TOTALS
// Recalculate order totals
// ========================================
function updateTotals() {
  // This is a placeholder - implement actual calculation
  console.log("Totals updated");
}

// ========================================
// COUPON CODE APPLICATION
// Apply discount coupon
// ========================================
document.querySelector(".btn-coupon").addEventListener("click", function () {
  const couponInput = document.querySelector(".coupon-input");
  const couponCode = couponInput.value.trim().toUpperCase();

  if (couponCode === "") {
    alert("Please enter a coupon code");
    return;
  }

  // Placeholder coupon codes
  const validCoupons = {
    WELCOME10: 10,
    SAVE20: 20,
    VIP30: 30,
  };

  if (validCoupons[couponCode]) {
    const discount = validCoupons[couponCode];
    alert(`Coupon applied! You saved ${discount}%`);

    // Update discount display
    const discountRow = document.querySelector(".total-row.discount span:last-child");
    // Calculate discount amount (placeholder)
    discountRow.textContent = `-₦${(155000 * discount) / 100}`;
    discountRow.style.color = "#28a745";

    couponInput.value = "";
    updateTotals();
  } else {
    alert("Invalid coupon code");
  }
});

// ========================================
// PLACE ORDER BUTTON
// Handle checkout submission
// ========================================
document.querySelector(".btn-checkout").addEventListener("click", function (e) {
  e.preventDefault();

  // Validate shipping form
  const shippingForm = document.getElementById("shippingForm");
  if (!shippingForm.checkValidity()) {
    shippingForm.reportValidity();
    return;
  }

  // Get selected payment method
  const selectedPayment = document.querySelector('input[name="payment"]:checked');

  // Validate card details if card payment is selected
  if (selectedPayment.value === "card") {
    const cardInputs = cardDetails.querySelectorAll("input");
    let allFilled = true;

    cardInputs.forEach((input) => {
      if (!input.value) {
        allFilled = false;
      }
    });

    if (!allFilled) {
      alert("Please fill in all card details");
      return;
    }
  }

  // Show processing state
  this.textContent = "Processing...";
  this.disabled = true;

  // Simulate order processing
  setTimeout(() => {
    // Redirect to order confirmation page
    window.location.href = "order.html?orderId=" + generateOrderId();
  }, 2000);
});

// ========================================
// GENERATE ORDER ID
// Create unique order identifier
// ========================================
function generateOrderId() {
  return "ORD" + Date.now().toString().slice(-8);
}

// ========================================
// CARD NUMBER FORMATTING
// Auto-format card number with spaces
// ========================================
const cardNumberInput = document.querySelector('input[placeholder="1234 5678 9012 3456"]');
if (cardNumberInput) {
  cardNumberInput.addEventListener("input", function (e) {
    let value = e.target.value.replace(/\s/g, "");
    let formattedValue = value.match(/.{1,4}/g)?.join(" ") || value;
    e.target.value = formattedValue;
  });
}

// ========================================
// EXPIRY DATE FORMATTING
// Auto-format MM/YY
// ========================================
const expiryInput = document.querySelector('input[placeholder="MM/YY"]');
if (expiryInput) {
  expiryInput.addEventListener("input", function (e) {
    let value = e.target.value.replace(/\D/g, "");
    if (value.length >= 2) {
      value = value.slice(0, 2) + "/" + value.slice(2, 4);
    }
    e.target.value = value;
  });
}

// ========================================
// CVV INPUT - Numbers only
// ========================================
const cvvInput = document.querySelector('input[placeholder="123"]');
if (cvvInput) {
  cvvInput.addEventListener("input", function (e) {
    e.target.value = e.target.value.replace(/\D/g, "");
  });
}

console.log("Checkout page JavaScript loaded successfully!");