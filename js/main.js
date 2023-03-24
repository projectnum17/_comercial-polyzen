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
  })
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
new Swiper('.image-slider', {
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  },
  grabCursor: true,
  slidesPerView: 3,
  spaceBetween: 42,
  autoHeigh: true,
  slidesPerGroup: 1,
  centerSlides: true,
  loop: true,
});

//form popUp 
$(document).ready(function () {
  $('#form').submit(function () { // проверка на пустоту заполненных полей.
    if (document.form.name.value == '' || document.form.phone.value == '') {
      valid = false;
      return valid;
    }
    $.ajax({
      //type: "POST",
      //url: "mail/mail.php",
      data: $(this).serialize()
    }).done(function () {
      $('.js-overlay-thank-you').fadeIn();
      $("body").css("overflow", "hidden");
      $(this).find('input').val('');
      $('#form').trigger('reset');
    });
    return false;
  });
});

//close
$(document).mouseup(function (e) { // по клику вне попапа
  var popup = $('.popup');
  if (e.target != popup[0] && popup.has(e.target).length === 0) {
    $('.js-overlay-thank-you').fadeOut();
    $("body").css("overflow", "auto");
  }
});




