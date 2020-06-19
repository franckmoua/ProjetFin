<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $pageTitle; ?></title>
</head>
<body>
<?php require ('partials/header.php'); ?>

<section class="section-carousel">
<div class="slideshow-container">
    <div class="mySlides fade">
        <div class="numbertext"></div>
        <img src="assets/images/slideshow/Nouveau-produit-pink.jpg" style="width:100%">
    </div>
    <div class="mySlides fade">
        <img src="assets/images/slideshow/car2.jpg" style="width:100%">
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div class="bottom-slide">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
</div>
</section>

<section>

</section>

<script>
var slideIndex = 1;
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
var i;
var slides = document.getElementsByClassName("mySlides");
var dots = document.getElementsByClassName("dot");
if (n > slides.length) {slideIndex = 1}
if (n < 1) {slideIndex = slides.length}
for (i = 0; i < slides.length; i++) {
slides[i].style.display = "none";
}
for (i = 0; i < dots.length; i++) {
dots[i].className = dots[i].className.replace(" active", "");
}
slides[slideIndex-1].style.display = "block";
dots[slideIndex-1].className += " active";
}
</script>


<?php if(isset($_SESSION['messages'])): ?>
<div>
    <?php foreach($_SESSION['messages'] as $message): ?>
        <h3><?= $message ?></h3>
    <?php endforeach; ?>
</div>
<?php endif; ?>
<?php require ('partials/footer.php'); ?>
</body>
</html>


