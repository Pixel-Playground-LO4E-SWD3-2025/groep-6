<?php 
session_start();
include("../PHP/connect.php")
?>


<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../STYLE/style.css">
    <link rel="stylesheet" href="../STYLE/stylefooter.css">
    <link rel="stylesheet" href="../STYLE/styleheader.css">
    <title>Document</title>
</head>
<body>
   
    <?php include '../PARTICLE/header.php' ?>

    <section>
        <h2> Welkom! </h2>
        <h4> Dit is mijn game website. Maak je account, speel games en maak vrienden!</h4>
    </section>



 <section class="container" >
    <article class="slider-wrapper">
        <article class="slider">
            <img id="slide-1" src="../img/tic_tac_toe_game_background-wallpaper-2560x1440.jpg" alt="rs6">
            <img id="slide-2" src="../img/wallpapersden.com_flappy-bird-game-popular_1920x1080.jpg" alt="rs6">
            <img id="slide-3" src="../img/images.jpg" alt="rs6">

        </article>
        <article class="slider-nav" >
            <a href="#slide-1"></a>
            <a href="#slide-2"></a>
            <a href="#slide-3"></a>        
        </article>
    </article>
 </section>  

 <script>
  const slides = document.querySelectorAll('.slider img');
  const navLinks = document.querySelectorAll('.slider-nav a');
  const sliderWrapper = document.querySelector('.slider-wrapper');

  let currentSlide = 0;
  const totalSlides = slides.length;
  const intervalTime = 4000;
  let slideInterval;

  function goToSlide(index) {
    navLinks[index].click();
  }

  function nextSlide() {
    currentSlide = (currentSlide + 1) % totalSlides;
    goToSlide(currentSlide);
  }

  function startSlideShow() {
    slideInterval = setInterval(nextSlide, intervalTime);
  }

  function stopSlideShow() {
    clearInterval(slideInterval);
  }

  // Start de slideshow
  startSlideShow();

  // Pauzeer bij hover
  sliderWrapper.addEventListener('mouseenter', stopSlideShow);
  sliderWrapper.addEventListener('mouseleave', startSlideShow);
</script>
 
    <?php include '../PARTICLE/footer.php' ?>

</body>
</html>