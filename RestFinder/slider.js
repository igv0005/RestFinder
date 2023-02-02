  var slideIndex = 0;
  var slides = document.querySelectorAll('.slider img');
  var interval = setInterval(showNextSlide, 1800);
  
  function showNextSlide() {
  slides[slideIndex].classList.remove('active');
  slideIndex = (slideIndex + 1) % slides.length;
  slides[slideIndex].classList.add('active');
  }
  
  
  
  