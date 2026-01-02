<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Order Confirmation - Nan_P Elegance Palace</title>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/order.css" />
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

    <!-- Order Confirmation Section -->
    <section id="order-confirmation" class="order-confirmation">
      <div class="order-container">
        <!-- Success Message -->
        <div class="success-card reveal">
          <div class="success-icon">
            <div class="checkmark-circle">
              <div class="checkmark">✓</div>
            </div>
          </div>
          <h1>Order Confirmed!</h1>
          <p class="success-message">
            Thank you for your purchase. Your order has been received and is
            being processed.
          </p>
          <div class="order-number">
            <span>Order Number:</span>
            <strong id="orderNumberDisplay">#ORD12345678</strong>
          </div>
        </div>

        <!-- Order Details Grid -->
        <div class="order-details-grid">
          <!-- Order Summary -->
          <div class="order-card reveal">
            <h2>📦 Order Summary</h2>
            <div class="order-items">
              <div class="order-item">
                <div class="item-image">
                  <div class="placeholder-image">IMG</div>
                </div>
                <div class="item-info">
                  <h4>Ankara Maxi Dress</h4>
                  <p>Size: L | Color: Blue</p>
                  <div class="item-meta">
                    <span class="quantity">Qty: 1</span>
                    <span class="price">₦85,000</span>
                  </div>
                </div>
              </div>

              <div class="order-item">
                <div class="item-image">
                  <div class="placeholder-image">IMG</div>
                </div>
                <div class="item-info">
                  <h4>Designer Gele Set</h4>
                  <p>Color: Gold</p>
                  <div class="item-meta">
                    <span class="quantity">Qty: 2</span>
                    <span class="price">₦70,000</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="order-totals">
              <div class="total-line">
                <span>Subtotal</span>
                <span>₦155,000</span>
              </div>
              <div class="total-line">
                <span>Shipping</span>
                <span>₦5,000</span>
              </div>
              <div class="total-line">
                <span>Discount</span>
                <span class="discount">-₦0</span>
              </div>
              <div class="total-line grand-total">
                <span>Total Paid</span>
                <span>₦160,000</span>
              </div>
            </div>
          </div>

          <!-- Shipping Information -->
          <div class="order-card reveal">
            <h2>🚚 Shipping Information</h2>
            <div class="info-group">
              <div class="info-item">
                <span class="label">Full Name:</span>
                <span class="value">John Doe</span>
              </div>
              <div class="info-item">
                <span class="label">Email:</span>
                <span class="value">john@example.com</span>
              </div>
              <div class="info-item">
                <span class="label">Phone:</span>
                <span class="value">+234 810 XXX XXXX</span>
              </div>
              <div class="info-item">
                <span class="label">Address:</span>
                <span class="value">123 Main Street, Lagos, Nigeria</span>
              </div>
              <div class="info-item">
                <span class="label">Delivery Method:</span>
                <span class="value">Standard Delivery (3-5 days)</span>
              </div>
            </div>
          </div>

          <!-- Payment Information -->
          <div class="order-card reveal">
            <h2>💳 Payment Information</h2>
            <div class="info-group">
              <div class="info-item">
                <span class="label">Payment Method:</span>
                <span class="value">Credit Card</span>
              </div>
              <div class="info-item">
                <span class="label">Card Ending:</span>
                <span class="value">**** **** **** 3456</span>
              </div>
              <div class="info-item">
                <span class="label">Transaction ID:</span>
                <span class="value">TXN987654321</span>
              </div>
              <div class="info-item">
                <span class="label">Payment Status:</span>
                <span class="value status-paid">Paid</span>
              </div>
            </div>
          </div>

          <!-- Order Timeline -->
          <div class="order-card timeline-card reveal">
            <h2>📍 Order Timeline</h2>
            <div class="timeline">
              <div class="timeline-item completed">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                  <h4>Order Placed</h4>
                  <p>Your order has been received</p>
                  <span class="timestamp">Today, 10:30 AM</span>
                </div>
              </div>

              <div class="timeline-item active">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                  <h4>Processing</h4>
                  <p>We're preparing your items</p>
                  <span class="timestamp">Estimated: Today, 2:00 PM</span>
                </div>
              </div>

              <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                  <h4>Shipped</h4>
                  <p>Your order is on the way</p>
                  <span class="timestamp">Estimated: Tomorrow</span>
                </div>
              </div>

              <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                  <h4>Delivered</h4>
                  <p>Package delivered to you</p>
                  <span class="timestamp">Estimated: 3-5 days</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Action Buttons -->
        <div class="order-actions reveal">
          <a href="shop.html" class="btn btn-primary">Continue Shopping</a>
          <button class="btn btn-secondary" onclick="window.print()">
            Print Receipt
          </button>
          <a href="track-order.html" class="btn btn-secondary">Track Order</a>
        </div>

        <!-- Additional Information -->
        <div class="info-cards-grid reveal">
          <div class="info-card">
            <div class="info-icon">📧</div>
            <h3>Email Confirmation</h3>
            <p>
              A confirmation email has been sent to your email address with
              order details and tracking information.
            </p>
          </div>

          <div class="info-card">
            <div class="info-icon">💬</div>
            <h3>Need Help?</h3>
            <p>
              Contact our customer service team if you have any questions about
              your order.
            </p>
            <a href="../index.html#contact" class="info-link">Contact Us →</a>
          </div>

          <div class="info-card">
            <div class="info-icon">↩️</div>
            <h3>Easy Returns</h3>
            <p>
              Not satisfied? We offer hassle-free returns within 30 days of
              delivery.
            </p>
            <a href="#" class="info-link">Return Policy →</a>
          </div>
        </div>

        <!-- Customer Support -->
        <div class="support-banner reveal">
          <div class="support-content">
            <h3>Need Assistance?</h3>
            <p>
              Our customer support team is available 24/7 to help you with your
              order.
            </p>
          </div>
          <div class="support-buttons">
            <a
              href="https://wa.me/234XXXXXXXXXX"
              class="btn btn-whatsapp"
              target="_blank"
            >
              💬 Chat on WhatsApp
            </a>
            <a href="tel:+234XXXXXXXXXX" class="btn btn-call">📞 Call Us</a>
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
    <script src="js/order.js"></script>
  </body>
</html>
