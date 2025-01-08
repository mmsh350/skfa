// window.onload = function () {
//   document.getElementById("preloader").style.display = "none";
//   document.querySelector(".body-inner").style.display = "block";
// };

document.addEventListener("DOMContentLoaded", () => {
  // Load header
  const header = document.getElementById("header");
  if (header) {
    fetch("includes/header.html")
      .then((response) => {
        if (!response.ok) {
          throw new Error(`Failed to fetch navigation: ${response.statusText}`);
        }
        return response.text();
      })
      .then((html) => {
        header.innerHTML = html;
      })
      .catch((error) => {
        console.error("Error loading navigation:", error);
      });
  }

  // Load footer
  const footerTop = document.getElementById("footer");
  if (footerTop) {
    fetch("includes/footer-top.html")
      .then((response) => {
        if (!response.ok) {
          throw new Error(`Failed to fetch footer: ${response.statusText}`);
        }
        return response.text();
      })
      .then((html) => {
        footerTop.innerHTML = html;
      })
      .catch((error) => {
        console.error("Error loading footer:", error);
      });
  }

  // Load copyright
  const copyrightContainer = document.getElementById("site-copyright");
  if (copyrightContainer) {
    fetch("includes/footer-down.html")
      .then((response) => {
        if (!response.ok) {
          throw new Error(`Failed to fetch footer: ${response.statusText}`);
        }
        return response.text();
      })
      .then((html) => {
        copyrightContainer.innerHTML = html;
      })
      .catch((error) => {
        console.error("Error loading footer:", error);
      });
  }
});

// document
//   .getElementById("contact-form")
//   .addEventListener("submit", function (e) {
//     e.preventDefault();

//     const feedback = document.getElementById("form-feedback");
//     feedback.classList.add("d-none");
//     feedback.textContent = "";

//     const formData = new FormData(this);

//     // Client-side validation
//     for (const [key, value] of formData.entries()) {
//       if (!value.trim()) {
//         feedback.textContent = "All fields are required.";
//         feedback.classList.remove("d-none");
//         return;
//       }
//     }

//     fetch("submit.php", {
//       method: "POST",
//       body: formData,
//     })
//       .then((response) => response.json())
//       .then((data) => {
//         if (data.success) {
//           alert("Message sent successfully!");
//           this.reset();
//         } else {
//           feedback.textContent =
//             data.error || "An error occurred. Please try again.";
//           feedback.classList.remove("d-none");
//         }
//       })
//       .catch(() => {
//         feedback.textContent =
//           "Failed to send the message. Please check your connection.";
//         feedback.classList.remove("d-none");
//       });
//   });
