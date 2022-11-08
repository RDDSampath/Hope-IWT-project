
//slide show 2
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}


//slide show 3 manual

var slideIndex1 = 1;
showDivs(slideIndex1);

function plusDivs(z) {
  showDivs(slideIndex1 += z);
}

function showDivs(z) {
  var a;
  var b = document.getElementsByClassName("mySlides1");
  if (z > b.length) {slideIndex1 = 1}
  if (z < 1) {slideIndex1 = b.length}
  for (a = 0; a < b.length; a++) {
    b[a].style.display = "none";  
  }
  b[slideIndex1-1].style.display = "block";  
}
