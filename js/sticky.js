// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var masthead = document.getElementById("masthead");

// Get the offset position of the navbar
var sticky = masthead.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    masthead.classList.add("sticky")
  } else {
    masthead.classList.remove("sticky");
  }
} 