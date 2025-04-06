new Swiper('.card-wrapper', {  
  loop: true,  
  speed: 700,  
  spaceBetween: 30,  
  autoplay : {
    reverseDirection: true,
  } ,
  // If we need pagination  
  pagination: {  
    el: '.card-wrapper .swiper-pagination',  
    clickable: true,  
    dynamicBullets: true,  
  },  

  // Navigation arrows  
  navigation: {  
    nextEl: '.visionDictionaryTitle .toRight',  
    prevEl: '.visionDictionaryTitle .toLeft',  
  },  
  
  breakpoints: { 
    0: {  
      slidesPerView: 1  
    },  
    500: {  
      slidesPerView: 2  
    },  
    768: {  
      slidesPerView: 3 
    },  
    1024: {  
      slidesPerView: 4
    },  
    1670: {  
      slidesPerView: 5
    },  
  }  
});

new Swiper('.eyeGlossaryCard-wrapper', {  
  loop: true,  
  speed: 700,  
  spaceBetween: 30,  
  autoplay : true,
  // If we need pagination  
  pagination: {  
    el: '.eyeGlossaryCard-wrapper .swiper-pagination',  
    clickable: true,  
    dynamicBullets: true,  
  },  

  // Navigation arrows  
  navigation: {  
    nextEl: '.eyeGlossaryTitle .toRight',  
    prevEl: '.eyeGlossaryTitle .toLeft',  
  },  
  
  breakpoints: { 
    0: {  
      slidesPerView: 1  
    },  
    500: {  
      slidesPerView: 2  
    },  
    768: {  
      slidesPerView: 3 
    },  
    1024: {  
      slidesPerView: 4
    },  
    1670: {  
      slidesPerView: 5
    },  
  }  
});

new Swiper('.recipesCard-wrapper', {  
  loop: true,  
  speed: 700,  
  spaceBetween: 30,  
  autoplay : {
    reverseDirection: true,
  } ,
  // If we need pagination  
  pagination: {  
    el: '.recipesCard-wrapper .swiper-pagination',  
    clickable: true,  
    dynamicBullets: true,  
  },  

  // Navigation arrows  
  navigation: {  
    nextEl: '.visionDictionaryTitle .toRight',  
    prevEl: '.visionDictionaryTitle .toLeft',  
  },  
  
  breakpoints: { 
    0: {  
      slidesPerView: 1  
    },  
    500: {  
      slidesPerView: 2  
    },  
    768: {  
      slidesPerView: 3 
    },  
    1024: {  
      slidesPerView: 4
    },  
    1670: {  
      slidesPerView: 5
    },  
  }  
});