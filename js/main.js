//proud popUP
(function () {
  const openPopUp = document.getElementById('open_pop_up');
  const closePopUp = document.getElementById('pop_up_close');
  const popUp = document.getElementById('pop_up');
  const list = document.querySelector('html');

  openPopUp.addEventListener('click', function (e) {
    e.preventDefault();
    popUp.classList.add('active');
    list.classList.add('done');
  });

  closePopUp.addEventListener('click', () => {
    popUp.classList.remove('active');
    list.classList.remove('done');
  });

}());



//proud slider
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) { slideIndex = 1 }
  if (n < 1) { slideIndex = slides.length }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
}


//slider testimonials
var swiper = new Swiper('.image-slider', {
  effect: 'coverflow',
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: 'auto',
  loop: true,
  spaceBetween: 42,
  coverflowEffect: {
    rotate: 10,
    strech: 0,
    depth: 100,
    modifier: 2,
    slideShadows: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  },

  breakpoints: {
    320: {
      slidesPerView: 1,
    },

    1200: {
      slidesPerView: 3
    }
  },

});


//if mail sent
document.addEventListener('wpcf7mailsent', function (e) {
  $('.overlay').fadeIn(50);
  $("body").css("overflow-y", "hidden");
}, false);

//close popUp form
$('.overlay-close-btn').on('click', function(){
  $('.overlay').fadeOut(50);
  $("body").css("overflow-y", "auto");
})





//video play hover
/* var vid = document.getElementById('video');
vid.onmouseover = function () {
  vid.play()
} */

/* $(window).on('load', function() {
  $('video')[0].play();
}); */

//buttons popUp

var popUpButton = document.getElementById('popUpButton');

var noScroll = document.querySelector('html');

var tab = document.getElementById('popUpBody');

var close = document.getElementsByClassName("pop__up-button_close")[0];



Array.prototype.slice.call(document.querySelectorAll('.button')).forEach(function (element) {
  element.addEventListener('click', function (ev) {
    popUpButton.style.transform = 'translateY(0%)';
    popUpButton.style.transition = 'all 1.2s linear';

    noScroll.style.overflow = 'hidden';
  });
});

close.onclick = function () {
  popUpButton.style.transform = 'translateY(-500%)';
  popUpButton.style.transition = 'all 1.2s linear';
  noScroll.style.overflow = 'auto';
}




