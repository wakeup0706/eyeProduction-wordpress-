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

//  show vision test result
let siryoku_l_result = localStorage.getItem('siryoku_l_result');
let siryoku_r_result = localStorage.getItem('siryoku_r_result');
let siryoku_l_ran = localStorage.getItem('siryoku_l_ran');
let siryoku_r_ran = localStorage.getItem('siryoku_r_ran');
let siryoku_l_rg = localStorage.getItem('siryoku_l_rg');
let siryoku_r_rg = localStorage.getItem('siryoku_r_rg');

if (siryoku_l_result !== null && document.getElementById("view_r_result")) {
  document.getElementById("view_r_result").innerHTML = siryoku_l_result;
}
if (siryoku_r_result !== null && document.getElementById("view_l_result")) {
  document.getElementById("view_l_result").innerHTML = siryoku_r_result;
}
if (siryoku_l_ran !== null && document.getElementById("view_r_kinshi")) {
  document.getElementById("view_r_kinshi").innerHTML = siryoku_l_ran;
}
if (siryoku_r_ran !== null && document.getElementById("view_l_kinshi")) {
  document.getElementById("view_l_kinshi").innerHTML = siryoku_r_ran;
}
if (siryoku_l_rg !== null && document.getElementById("view_r_ranshi")) {
  document.getElementById("view_r_ranshi").innerHTML = siryoku_l_rg;
}
if (siryoku_r_rg !== null && document.getElementById("view_l_ranshi")) {
  document.getElementById("view_l_ranshi").innerHTML = siryoku_r_rg;
}


$('.hot_word').on('click', function() {
  const text = $(this).text().trim();
  $("#hot_search").val(text);
});

/////////////////////// search item ///////////
$('.btn_hot_search').on('click',function(){
  let hot_word = $('#hot_search').val();
  gotoSearchPage(hot_word);
});
$('.btn_hot_search_detail').on('click',function(){
  let hot_word = $('#hot_search_detail').val();
  gotoSearchPage(hot_word);
});
$('.btn_hot_search_term').on('click',function(){
  let hot_word = $('#hot_search_term').val();
  gotoSearchPage(hot_word);
});
$('.categoryTag div a').on('click',function(){
  let hot_word = $(this).text();
  gotoSearchPage(hot_word.slice(1));
})
$('.categoryLists .row .row-list div').on('click',function(e){
  e.stopPropagation();
  let hot_word = $(this).text();
  gotoSearchPage(hot_word);
})
$('.categoryLists >div').on('click',function(){
  let hot_word = $(this).text();
  gotoSearchPage(hot_word);
})

function gotoSearchPage(hot_word){
  let url = './searchResult?search_key=' + hot_word;
  console.log(hot_word);
  if(hot_word.trim()){
    document.location.href=url;
  }
}