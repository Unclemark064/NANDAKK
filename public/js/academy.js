/* ========================================
   ACADEMY.JS - Academy page specific JavaScript
   ======================================== */

// ========================================
// COURSE ENROLLMENT
// Pre-selects course when clicking enroll button
// ========================================
document.querySelectorAll(".enroll-btn").forEach((btn) => {
  btn.addEventListener("click", function () {
    const courseTitle =
      this.closest(".course-card").querySelector(".course-title").textContent;
    const registrationForm = document.querySelector(".bespoke-form");

    // Scroll to registration form smoothly
    registrationForm.scrollIntoView({ 
      behavior: "smooth",
      block: "start"
    });

    // Pre-select the course in the dropdown
    setTimeout(() => {
      const courseSelect = document.getElementById("courseSelect");
      if (courseSelect) {
        for (let i = 0; i < courseSelect.options.length; i++) {
          if (courseSelect.options[i].text === courseTitle) {
            courseSelect.selectedIndex = i;
            // Add visual feedback
            courseSelect.style.borderColor = "var(--gold)";
            setTimeout(() => {
              courseSelect.style.borderColor = "";
            }, 1000);
            break;
          }
        }
      }
    }, 800);
  });
});

console.log("Academy page JavaScript loaded successfully!");