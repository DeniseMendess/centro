document.addEventListener("DOMContentLoaded", function () {

  const hamburger = document.querySelector(".toggle-btn");
  const toggler = document.querySelector("#icon");

  if (hamburger) {
    hamburger.addEventListener("click", function () {
      document.querySelector("#sidebar").classList.toggle("expand");
      toggler.classList.toggle("ri-arrow-right-double-fill");
      toggler.classList.toggle("ri-arrow-left-double-fill");
    });
  }

});

