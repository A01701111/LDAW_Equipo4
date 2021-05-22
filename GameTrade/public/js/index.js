// grab everything we need
const btn = document.querySelector("button.mobile-menu-button");
const menu = document.querySelector(".mobile-menu");

// add event listeners
btn.addEventListener("click", () => {
  menu.classList.toggle("hidden");
});
$(window).scroll(function() {
  if ($(window).scrollTop() > 10) {
      $('#navbar').addClass('shadow-xl');
  } else {
      $('#navbar').removeClass('shadow-xl');
  }
});