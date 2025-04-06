//header scroll
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $("header").outerHeight();
$(window).scroll(function(event){
    didScroll = true;
});
setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);
function hasScrolled() {
    var st = $(this).scrollTop();
    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $("header").removeClass('nav-down').addClass('nav-up');
        searchDropdown.classList.remove("showDropdown");
      } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
          $("header").removeClass('nav-up').addClass('nav-down');
        }
    }
    lastScrollTop = st;
}

// sidebar
const body = document.querySelector("body"),
sidebar = document.querySelector(".sidebar"),
menuBtns = document.querySelectorAll(".hamburger"),
overlay = document.querySelector(".overlay"),
closeButton = body.querySelector(".close"),
header = document.querySelector("#navbar");

menuBtns.forEach((menuBtn) => {
  menuBtn.addEventListener("click", (e) => {
    e.stopPropagation();
    sidebar.classList.toggle("open");
    overlay.classList.toggle("dark");
    if(!didScroll){
      $(window).scroll(function(event){
        didScroll = false;
      });
    }
  });
});

body.addEventListener("click", () => {
  if (sidebar.attributes.class.value.includes("open")) {
    sidebar.classList.remove("open");
    overlay.classList.remove("dark");
    $(window).scroll(function(event){
      didScroll = true;
    });
  }
});


// search dropdown
const searchButton = document.querySelector(".searchButton");
const searchDropdown = document.querySelector(".search-dropdown");

searchButton.addEventListener("click", (e) => {
  e.stopPropagation();
  searchDropdown.classList.toggle("showDropdown");
});

// dorp to top button
const toTopbtn = document.querySelector('#topButton');
// Get the button
// let mybutton = document.getElementById("#topButton");

const scrollToTop = () => {
  toTopbtn.addEventListener("click", () => {
    window.scroll({
      top: 0,
      left: 0,
      behavior: 'smooth'
    }); 
  });
};

scrollToTop();




// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
    toTopbtn.style.display = "block";
  } else {
    toTopbtn.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
// function topFunction() {
//   document.body.scrollTop = 0;
//   document.documentElement.scrollTop = 0;
// }