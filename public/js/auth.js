/* ========================================
   AUTH.JS - Login & Registration functionality
   ======================================== */

// ========================================
// PASSWORD VISIBILITY TOGGLE
// Show/hide password on click
// ========================================
const togglePasswordButtons = document.querySelectorAll(".toggle-password");

togglePasswordButtons.forEach((button) => {
  button.addEventListener("click", function () {
    const passwordInput = this.previousElementSibling;

    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      this.textContent = "🙈";
    } else {
      passwordInput.type = "password";
      this.textContent = "👁️";
    }
  });
});

// ========================================
// PASSWORD STRENGTH CHECKER
// Visual indicator for password strength
// ========================================
const passwordInput = document.getElementById("password");
const passwordStrength = document.getElementById("passwordStrength");

if (passwordInput && passwordStrength) {
  const strengthProgress = passwordStrength.querySelector(".strength-progress");
  const strengthText = passwordStrength.querySelector(".strength-text");

  passwordInput.addEventListener("input", function () {
    const password = this.value;
    const strength = calculatePasswordStrength(password);

    // Update progress bar
    strengthProgress.className = "strength-progress";
    
    if (strength.score === 0) {
      strengthProgress.style.width = "0%";
      strengthText.textContent = "Password strength";
    } else if (strength.score === 1) {
      strengthProgress.classList.add("weak");
      strengthText.textContent = "Weak password";
    } else if (strength.score === 2) {
      strengthProgress.classList.add("medium");
      strengthText.textContent = "Medium password";
    } else {
      strengthProgress.classList.add("strong");
      strengthText.textContent = "Strong password";
    }
  });
}

function calculatePasswordStrength(password) {
  let score = 0;

  if (password.length === 0) return { score: 0 };
  
  // Length check
  if (password.length >= 8) score++;
  if (password.length >= 12) score++;
  
  // Contains lowercase
  if (/[a-z]/.test(password)) score++;
  
  // Contains uppercase
  if (/[A-Z]/.test(password)) score++;
  
  // Contains numbers
  if (/\d/.test(password)) score++;
  
  // Contains special characters
  if (/[^A-Za-z0-9]/.test(password)) score++;

  // Normalize score to 0-3
  if (score <= 2) return { score: 1 }; // Weak
  if (score <= 4) return { score: 2 }; // Medium
  return { score: 3 }; // Strong
}

// ========================================
// LOGIN FORM SUBMISSION
// Handle login form
// ========================================
const loginForm = document.getElementById("loginForm");

if (loginForm) {
  loginForm.addEventListener("submit", function (e) {
    e.preventDefault();

    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    const rememberMe = document.getElementById("rememberMe").checked;

    const submitBtn = this.querySelector('button[type="submit"]');
    const originalText = submitBtn.textContent;

    // Show loading state
    submitBtn.textContent = "Logging in...";
    submitBtn.disabled = true;

    // Simulate API call
    setTimeout(() => {
      // Placeholder - Replace with actual authentication
      console.log("Login attempt:", { email, rememberMe });

      // Success - redirect to shop or dashboard
      alert("Login successful! Redirecting...");
      window.location.href = "shop.html";

      // Reset button (in case of error)
      submitBtn.textContent = originalText;
      submitBtn.disabled = false;
    }, 2000);
  });
}

// ========================================
// REGISTRATION FORM SUBMISSION
// Handle registration form
// ========================================
const registerForm = document.getElementById("registerForm");

if (registerForm) {
  registerForm.addEventListener("submit", function (e) {
    e.preventDefault();

    // Get form values
    const firstName = document.getElementById("firstName").value;
    const lastName = document.getElementById("lastName").value;
    const email = document.getElementById("email").value;
    const phone = document.getElementById("phone").value;
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirmPassword").value;
    const agreeTerms = document.getElementById("agreeTerms").checked;
    const newsletter = document.getElementById("newsletter").checked;

    // Validate passwords match
    if (password !== confirmPassword) {
      alert("Passwords do not match!");
      return;
    }

    // Validate password strength
    const strength = calculatePasswordStrength(password);
    if (strength.score < 2) {
      alert("Please use a stronger password (at least 8 characters with uppercase, lowercase, and numbers)");
      return;
    }

    // Validate terms agreement
    if (!agreeTerms) {
      alert("Please agree to the Terms & Conditions");
      return;
    }

    const submitBtn = this.querySelector('button[type="submit"]');
    const originalText = submitBtn.textContent;

    // Show loading state
    submitBtn.textContent = "Creating Account...";
    submitBtn.disabled = true;

    // Simulate API call
    setTimeout(() => {
      // Placeholder - Replace with actual registration
      console.log("Registration attempt:", {
        firstName,
        lastName,
        email,
        phone,
        newsletter,
      });

      // Success - redirect to login or automatically log in
      alert("Account created successfully! Redirecting to login...");
      window.location.href = "login.html";

      // Reset button (in case of error)
      submitBtn.textContent = originalText;
      submitBtn.disabled = false;
    }, 2000);
  });
}

// ========================================
// SOCIAL LOGIN HANDLERS
// Google and Facebook login
// ========================================
const googleBtn = document.querySelector(".btn-google");
const facebookBtn = document.querySelector(".btn-facebook");

if (googleBtn) {
  googleBtn.addEventListener("click", function () {
    alert("Google login would be integrated here using OAuth 2.0");
    // Implement Google OAuth here
  });
}

if (facebookBtn) {
  facebookBtn.addEventListener("click", function () {
    alert("Facebook login would be integrated here using Facebook SDK");
    // Implement Facebook login here
  });
}

// ========================================
// EMAIL VALIDATION
// Real-time email validation
// ========================================
const emailInput = document.getElementById("email");

if (emailInput) {
  emailInput.addEventListener("blur", function () {
    const email = this.value;
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (email && !emailRegex.test(email)) {
      this.style.borderColor = "#e76f51";
      // You could show an error message here
    } else {
      this.style.borderColor = "";
    }
  });
}

// ========================================
// PHONE NUMBER FORMATTING
// Format phone number as user types
// ========================================
const phoneInput = document.getElementById("phone");

if (phoneInput) {
  phoneInput.addEventListener("input", function (e) {
    let value = e.target.value.replace(/\D/g, "");

    // Nigeria phone number format: +234 XXX XXX XXXX
    if (value.startsWith("234")) {
      value = value.substring(3);
    } else if (value.startsWith("0")) {
      value = value.substring(1);
    }

    if (value.length > 0) {
      if (value.length <= 3) {
        value = `+234 ${value}`;
      } else if (value.length <= 6) {
        value = `+234 ${value.slice(0, 3)} ${value.slice(3)}`;
      } else {
        value = `+234 ${value.slice(0, 3)} ${value.slice(3, 6)} ${value.slice(6, 10)}`;
      }
    }

    e.target.value = value;
  });
}

// ========================================
// PASSWORD MATCH INDICATOR
// Show if confirm password matches
// ========================================
const confirmPasswordInput = document.getElementById("confirmPassword");

if (confirmPasswordInput && passwordInput) {
  confirmPasswordInput.addEventListener("input", function () {
    const password = passwordInput.value;
    const confirmPassword = this.value;

    if (confirmPassword.length > 0) {
      if (password === confirmPassword) {
        this.style.borderColor = "#28a745";
      } else {
        this.style.borderColor = "#e76f51";
      }
    } else {
      this.style.borderColor = "";
    }
  });
}

// ========================================
// FORGOT PASSWORD HANDLER
// Handle forgot password link
// ========================================
const forgotLink = document.querySelector(".forgot-link");

if (forgotLink) {
  forgotLink.addEventListener("click", function (e) {
    e.preventDefault();
    const email = prompt("Enter your email address to reset password:");

    if (email) {
      alert(`Password reset link has been sent to ${email}`);
      // Implement actual password reset here
    }
  });
}

// ========================================
// AUTO-FILL DETECTION
// Detect browser autofill
// ========================================
window.addEventListener("load", () => {
  setTimeout(() => {
    const inputs = document.querySelectorAll("input");
    inputs.forEach((input) => {
      if (input.matches(":-webkit-autofill")) {
        input.parentElement.classList.add("has-autofill");
      }
    });
  }, 500);
});

console.log("Authentication JavaScript loaded successfully!");