<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Checkout - Nan_P Elegance Palace</title>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/checkout.css" />
  </head>
  <body>
    <!-- Navigation -->
    <nav class="navbar" id="navbar">
      <div class="nav-container">
        <div class="logo">NAN</div>
        <ul class="nav-menu" id="navMenu">
          <li><a href="../index.html#home">Home</a></li>
          <li><a href="registration.html">Register</a></li>
          <li><a href="login.html">Login</a></li>
          <li><a href="../index.html#collections">Collections</a></li>
          <li><a href="checkout.html">Cart</a></li>
          <li><a href="orders.html">Orders</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="academy.html">Academy</a></li>
          <li><a href="../index.html#contact">Contact</a></li>
          <li><a href="shop.html" class="cta-nav">Shop Now</a></li>
        </ul>
        <div class="mobile-toggle" id="mobileToggle">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </nav>

    <!-- Checkout Section -->
    <section id="checkout" class="checkout">
      <div class="checkout-container">
        <!-- Progress Steps -->
        <div class="checkout-progress reveal">
          <div class="progress-step active">
            <div class="step-number">1</div>
            <div class="step-label">Cart</div>
          </div>
          <div class="progress-line active"></div>
          <div class="progress-step active">
            <div class="step-number">2</div>
            <div class="step-label">Details</div>
          </div>
          <div class="progress-line"></div>
          <div class="progress-step">
            <div class="step-number">3</div>
            <div class="step-label">Payment</div>
          </div>
          <div class="progress-line"></div>
          <div class="progress-step">
            <div class="step-number">4</div>
            <div class="step-label">Complete</div>
          </div>
        </div>

        <div class="checkout-grid">
          <!-- Left Column - Forms -->
          <div class="checkout-forms">
            <!-- Shipping Information -->
            <div class="checkout-card reveal">
              <h2>Shipping Information</h2>
              <form id="shippingForm">
                <div class="form-row">
                  <div class="form-group">
                    <label>First Name *</label>
                    <input type="text" placeholder="John" required />
                  </div>
                  <div class="form-group">
                    <label>Last Name *</label>
                    <input type="text" placeholder="Doe" required />
                  </div>
                </div>

                <div class="form-group">
                  <label>Email Address *</label>
                  <input type="email" placeholder="john@example.com" required />
                </div>

                <div class="form-group">
                  <label>Phone Number *</label>
                  <input type="tel" placeholder="+234 XXX XXX XXXX" required />
                </div>

                <div class="form-group">
                  <label>Street Address *</label>
                  <input type="text" placeholder="123 Main Street" required />
                </div>

                <div class="form-row">
                  <div class="form-group">
                    <label>City *</label>
                    <input type="text" placeholder="Lagos" required />
                  </div>
                  <div class="form-group">
                    <label>State *</label>
                    <select required>
                      <option value="">Select State</option>
                      <option>Lagos</option>
                      <option>Abuja</option>
                      <option>Rivers</option>
                      <option>Kano</option>
                      <option>Oyo</option>
                      <option>Delta</option>
                      <option>Edo</option>
                      <option>Other</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label>Postal Code</label>
                  <input type="text" placeholder="100001" />
                </div>

                <div class="form-group">
                  <label>Delivery Notes (Optional)</label>
                  <textarea
                    rows="3"
                    placeholder="Any special delivery instructions..."
                  ></textarea>
                </div>
              </form>
            </div>

            <!-- Payment Method -->
            <div class="checkout-card reveal">
              <h2>Payment Method</h2>
              <div class="payment-methods">
                <label class="payment-option">
                  <input type="radio" name="payment" value="card" checked />
                  <div class="payment-card">
                    <div class="payment-icon">💳</div>
                    <div class="payment-info">
                      <h4>Credit/Debit Card</h4>
                      <p>Pay securely with your card</p>
                    </div>
                  </div>
                </label>

                <label class="payment-option">
                  <input type="radio" name="payment" value="transfer" />
                  <div class="payment-card">
                    <div class="payment-icon">🏦</div>
                    <div class="payment-info">
                      <h4>Bank Transfer</h4>
                      <p>Direct bank transfer</p>
                    </div>
                  </div>
                </label>

                <label class="payment-option">
                  <input type="radio" name="payment" value="paypal" />
                  <div class="payment-card">
                    <div class="payment-icon">💰</div>
                    <div class="payment-info">
                      <h4>Paystack</h4>
                      <p>Pay with Paystack</p>
                    </div>
                  </div>
                </label>

                <label class="payment-option">
                  <input type="radio" name="payment" value="cod" />
                  <div class="payment-card">
                    <div class="payment-icon">📦</div>
                    <div class="payment-info">
                      <h4>Cash on Delivery</h4>
                      <p>Pay when you receive</p>
                    </div>
                  </div>
                </label>
              </div>

              <!-- Card Details (shown when card is selected) -->
              <div id="cardDetails" class="card-details">
                <div class="form-group">
                  <label>Card Number *</label>
                  <input
                    type="text"
                    placeholder="1234 5678 9012 3456"
                    maxlength="19"
                  />
                </div>

                <div class="form-row">
                  <div class="form-group">
                    <label>Expiry Date *</label>
                    <input type="text" placeholder="MM/YY" maxlength="5" />
                  </div>
                  <div class="form-group">
                    <label>CVV *</label>
                    <input type="text" placeholder="123" maxlength="3" />
                  </div>
                </div>

                <div class="form-group">
                  <label>Cardholder Name *</label>
                  <input type="text" placeholder="John Doe" />
                </div>
              </div>
            </div>
          </div>

          <!-- Right Column - Order Summary -->
          <div class="checkout-summary">
            <div class="checkout-card summary-card reveal">
              <h2>Order Summary</h2>

              <!-- Cart Items -->
              <div class="cart-items">
                <div class="cart-item">
                  <div class="item-image">
                    <div class="placeholder-image">IMG</div>
                  </div>
                  <div class="item-details">
                    <h4>Ankara Maxi Dress</h4>
                    <p>Size: L | Color: Blue</p>
                    <div class="item-quantity">
                      <button class="qty-btn minus">-</button>
                      <span class="qty">1</span>
                      <button class="qty-btn plus">+</button>
                    </div>
                  </div>
                  <div class="item-price">
                    <span class="price">₦85,000</span>
                    <button class="remove-btn">✕</button>
                  </div>
                </div>

                <div class="cart-item">
                  <div class="item-image">
                    <div class="placeholder-image">IMG</div>
                  </div>
                  <div class="item-details">
                    <h4>Designer Gele Set</h4>
                    <p>Color: Gold</p>
                    <div class="item-quantity">
                      <button class="qty-btn minus">-</button>
                      <span class="qty">2</span>
                      <button class="qty-btn plus">+</button>
                    </div>
                  </div>
                  <div class="item-price">
                    <span class="price">₦70,000</span>
                    <button class="remove-btn">✕</button>
                  </div>
                </div>
              </div>

              <!-- Coupon Code -->
              <div class="coupon-section">
                <input
                  type="text"
                  placeholder="Enter coupon code"
                  class="coupon-input"
                />
                <button class="btn-coupon">Apply</button>
              </div>

              <!-- Summary Totals -->
              <div class="summary-totals">
                <div class="total-row">
                  <span>Subtotal</span>
                  <span>₦155,000</span>
                </div>
                <div class="total-row">
                  <span>Shipping</span>
                  <span>₦5,000</span>
                </div>
                <div class="total-row discount">
                  <span>Discount</span>
                  <span>-₦0</span>
                </div>
                <div class="total-row total">
                  <span>Total</span>
                  <span>₦160,000</span>
                </div>
              </div>

              <!-- Place Order Button -->
              <button class="btn btn-primary btn-checkout">Place Order</button>

              <!-- Security Badge -->
              <div class="security-badge">
                <span>🔒</span>
                <p>Secure checkout - Your information is protected</p>
              </div>
            </div>

            <!-- Additional Info -->
            <div class="checkout-card info-card reveal">
              <h3>📦 Delivery Information</h3>
              <ul>
                <li>Free delivery for orders above ₦200,000</li>
                <li>Standard delivery: 3-5 business days</li>
                <li>Express delivery available</li>
                <li>Track your order in real-time</li>
              </ul>
            </div>

            <div class="checkout-card info-card reveal">
              <h3>↩️ Return Policy</h3>
              <ul>
                <li>30-day return policy</li>
                <li>Free returns on defective items</li>
                <li>Exchange available within 14 days</li>
                <li>Full refund on cancellations</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
      <div class="footer-container">
        <div class="footer-grid">
          <div class="footer-about">
            <h3>ADIRE COUTURE</h3>
            <p>
              We create exceptional African fashion that celebrates heritage
              while embracing contemporary style. Every piece is crafted with
              passion, precision, and a deep respect for our cultural roots.
            </p>
            <div class="social-links">
              <a href="#" class="social-btn">📘</a>
              <a href="#" class="social-btn">📷</a>
              <a href="#" class="social-btn">🐦</a>
              <a href="#" class="social-btn">💼</a>
            </div>
          </div>
          <div class="footer-column">
            <h4>Quick Links</h4>
            <ul class="footer-links">
              <li><a href="../index.html#collections">Collections</a></li>
              <li><a href="shop.html">Shop</a></li>
              <li><a href="about.html">About Us</a></li>
              <li><a href="academy.html">Fashion Academy</a></li>
            </ul>
          </div>
          <div class="footer-column">
            <h4>Customer Care</h4>
            <ul class="footer-links">
              <li><a href="#">Size Guide</a></li>
              <li><a href="#">Shipping Info</a></li>
              <li><a href="#">Returns Policy</a></li>
              <li><a href="#">FAQs</a></li>
              <li><a href="../index.html#contact">Contact Us</a></li>
            </ul>
          </div>
          <div class="footer-column">
            <h4>Newsletter</h4>
            <p style="opacity: 0.8; margin-bottom: 1rem">
              Subscribe for exclusive offers and updates
            </p>
            <form style="display: flex; gap: 0.5rem; flex-wrap: wrap">
              <input
                type="email"
                placeholder="Your email"
                style="
                  flex: 1;
                  min-width: 200px;
                  padding: 10px;
                  border-radius: 8px;
                  border: none;
                  color: #333;
                "
              />
              <button
                type="submit"
                class="btn btn-primary"
                style="padding: 10px 20px"
              >
                Subscribe
              </button>
            </form>
          </div>
        </div>
        <div class="footer-bottom">
          <p>
            &copy; 2025 Adire Couture. All Rights Reserved. | Designed with ❤️
            in Nigeria
          </p>
        </div>
      </div>
    </footer>

    <!-- WhatsApp Float Button -->
    <a
      href="https://wa.me/234XXXXXXXXXX"
      class="whatsapp-float"
      target="_blank"
      title="Chat on WhatsApp"
    >
      💬
    </a>
    <script src="js/general.js"></script>
    <script src="js/checkout.js"></script>
  </body>
</html>
