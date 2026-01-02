<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Nan_P Elegance Palace</title>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/auth.css" />
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

    <!-- Login Section -->
    <section class="auth-section">
      <div class="auth-container">
        <div class="auth-grid">
          <!-- Left Side - Branding -->
          <div class="auth-branding reveal">
            <div class="branding-content">
              <h1>Welcome Back!</h1>
              <p>
                Login to access your account and continue shopping for premium
                African fashion.
              </p>
              <div class="branding-features">
                <div class="feature-item">
                  <span class="feature-icon">🛍️</span>
                  <p>Shop exclusive collections</p>
                </div>
                <div class="feature-item">
                  <span class="feature-icon">📦</span>
                  <p>Track your orders</p>
                </div>
                <div class="feature-item">
                  <span class="feature-icon">❤️</span>
                  <p>Save your favorites</p>
                </div>
                <div class="feature-item">
                  <span class="feature-icon">🎁</span>
                  <p>Get exclusive offers</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Right Side - Login Form -->
          <div class="auth-form-container reveal">
            <div class="auth-card">
              <div class="auth-header">
                <h2>Login</h2>
                <p>Enter your credentials to access your account</p>
              </div>

              <form id="loginForm" class="auth-form">
                <div class="form-group">
                  <label for="email">Email Address *</label>
                  <input
                    type="email"
                    id="email"
                    placeholder="your@email.com"
                    required
                  />
                </div>

                <div class="form-group">
                  <label for="password">Password *</label>
                  <div class="password-input">
                    <input
                      type="password"
                      id="password"
                      placeholder="Enter your password"
                      required
                    />
                    <button
                      type="button"
                      class="toggle-password"
                      id="togglePassword"
                    >
                      👁️
                    </button>
                  </div>
                </div>

                <div class="form-options">
                  <label class="checkbox-label">
                    <input type="checkbox" id="rememberMe" />
                    <span>Remember me</span>
                  </label>
                  <a href="#" class="forgot-link">Forgot Password?</a>
                </div>

                <button type="submit" class="btn btn-primary btn-auth">
                  Login
                </button>

                <!-- Social Login -->
                <div class="divider">
                  <span>Or continue with</span>
                </div>

                <div class="social-login">
                  <button type="button" class="btn-social btn-google">
                    <span class="social-icon">G</span>
                    Google
                  </button>
                  <button type="button" class="btn-social btn-facebook">
                    <span class="social-icon">f</span>
                    Facebook
                  </button>
                </div>

                <div class="auth-footer">
                  <p>
                    Don't have an account?
                    <a href="register.html" class="auth-link">Sign up here</a>
                  </p>
                </div>
              </form>
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
    <script src="js/auth.js"></script>
  </body>
</html>
