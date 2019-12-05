<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style_slider.css">
</head>
<body>

<div class="slideshow-container">

	<div class="mySlides fade">
	  <div class="numbertext"></div>
	  <a href="#"><img src="dummy/slide_1.jpg" style="width:100%"></a>
	  <div class="text"></div>
	</div>

	<div class="mySlides fade">
	  <div class="numbertext"></div>
	  <a href="#"><img src="dummy/slide_2.jpg" style="width:100%"></a>
	  <div class="text"></div>
	</div>

	<div class="mySlides fade">
	  <div class="numbertext"></div>
	  <a href="#"><img src="dummy/slide_3.jpg" style="width:100%"></a>
	  <div class="text"></div>
	</div>
	<div class="mySlides fade">
	  <div class="numbertext"></div>
	  <a href="#"><img src="dummy/slide_4.jpg" style="width:100%"></a>
	  <div class="text"></div>
	</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span> 
</div>

<script>
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
</script>

</body>
</html> 
