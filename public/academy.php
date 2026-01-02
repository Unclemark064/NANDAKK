<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fashion Academy - Nan_P Elegance Palace</title>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/academy.css" />
  </head>
  <body>
    <!-- Navigation -->
    <nav class="navbar" id="navbar">
      <div class="nav-container">
        <div class="logo">NAN</div>
        <ul class="nav-menu" id="navMenu">
          <li><a href="../index.html#home">Home</a></li>
          <li><a href="registration.php">Register</a></li>
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

    <!-- Fashion Academy/Training -->
    <section id="academy" class="academy">
      <div class="academy-container">
        <div class="section-header reveal">
          <h2>Fashion Academy</h2>
          <p>
            Learn from industry professionals and start your fashion journey
          </p>
        </div>
        <div class="courses-grid">
          <div class="course-card reveal">
            <div class="course-image">
              Upload fashion sketching class image here
            </div>
            <div class="course-info">
              <div class="course-header">
                <h3 class="course-title">Fashion Design Basics</h3>
                <span class="course-duration">3 Months</span>
              </div>
              <p class="course-description">
                Learn the fundamentals of fashion design including sketching,
                pattern making, and garment construction.
              </p>
              <div class="course-details">
                <div class="course-detail-item">📚 12 Modules</div>
                <div class="course-detail-item">👥 Max 10 Students</div>
              </div>
              <div class="course-price">₦180,000</div>
              <button class="btn btn-primary enroll-btn" style="width: 100%">
                Enroll Now
              </button>
            </div>
          </div>

          <div class="course-card reveal">
            <div class="course-image">
              Upload sewing machine training image here
            </div>
            <div class="course-info">
              <div class="course-header">
                <h3 class="course-title">Professional Tailoring</h3>
                <span class="course-duration">4 Months</span>
              </div>
              <p class="course-description">
                Master advanced sewing techniques and become a professional
                tailor with hands-on training.
              </p>
              <div class="course-details">
                <div class="course-detail-item">📚 16 Modules</div>
                <div class="course-detail-item">👥 Max 8 Students</div>
              </div>
              <div class="course-price">₦250,000</div>
              <button class="btn btn-primary enroll-btn" style="width: 100%">
                Enroll Now
              </button>
            </div>
          </div>

          <div class="course-card reveal">
            <div class="course-image">
              Upload Ankara fashion design image here
            </div>
            <div class="course-info">
              <div class="course-header">
                <h3 class="course-title">Ankara Styling Masterclass</h3>
                <span class="course-duration">6 Weeks</span>
              </div>
              <p class="course-description">
                Specialize in creating stunning Ankara designs and learn the art
                of African fashion styling.
              </p>
              <div class="course-details">
                <div class="course-detail-item">📚 8 Modules</div>
                <div class="course-detail-item">👥 Max 12 Students</div>
              </div>
              <div class="course-price">₦120,000</div>
              <button class="btn btn-primary enroll-btn" style="width: 100%">
                Enroll Now
              </button>
            </div>
          </div>
        </div>

        <!-- Student Registration Form -->
        <div class="registration-form-container reveal">
          <div class="bespoke-form">
            <h3>Student Registration Form</h3>
            <form>
              <div class="form-group">
                <label style="color: var(--dark)">Full Name *</label>
                <input
                  type="text"
                  placeholder="Enter your full name"
                  required
                  style="color: #333; background: white; border-color: #ddd"
                />
              </div>
              <div class="form-group">
                <label style="color: var(--dark)">Email Address *</label>
                <input
                  type="email"
                  placeholder="your@email.com"
                  required
                  style="color: #333; background: white; border-color: #ddd"
                />
              </div>
              <div class="form-group">
                <label style="color: var(--dark)">Phone Number *</label>
                <input
                  type="tel"
                  placeholder="+234 XXX XXX XXXX"
                  required
                  style="color: #333; background: white; border-color: #ddd"
                />
              </div>
              <div class="form-group">
                <label style="color: var(--dark)">Course Selection *</label>
                <select
                  id="courseSelect"
                  required
                  style="color: #333; background: white; border-color: #ddd"
                >
                  <option value="">Choose your course</option>
                  <option>Fashion Design Basics</option>
                  <option>Professional Tailoring</option>
                  <option>Ankara Styling Masterclass</option>
                </select>
              </div>
              <div class="form-group">
                <label style="color: var(--dark)">Experience Level *</label>
                <select
                  required
                  style="color: #333; background: white; border-color: #ddd"
                >
                  <option value="">Select your level</option>
                  <option>Beginner</option>
                  <option>Intermediate</option>
                  <option>Advanced</option>
                </select>
              </div>
              <div class="form-group">
                <label style="color: var(--dark)"
                  >Why do you want to learn fashion design?</label
                >
                <textarea
                  rows="4"
                  placeholder="Tell us about your goals..."
                  style="color: #333; background: white; border-color: #ddd"
                ></textarea>
              </div>
              <div class="form-group">
                <label style="color: var(--dark)"
                  >Upload Portfolio/Previous Work (Optional)</label
                >
                <input
                  type="file"
                  accept="image/*,.pdf"
                  style="
                    color: #333;
                    background: white;
                    border-color: #ddd;
                    padding: 10px;
                  "
                />
              </div>
              <button type="submit" class="btn btn-primary" style="width: 100%">
                Submit Application
              </button>
            </form>
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
    <script src="js/academy.js"></script>
  </body>
</html>
