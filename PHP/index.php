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



 <section class="container" >
    <article class="slider-wrapper">
        <article class="slider">
            <img id="slide-1" src="../img/audi-rs6-1.png" alt="rs6">
            <img id="slide-2" src="../img/audi-rs6-2.png" alt="rs6">
            <img id="slide-3" src="../img/2021-Audi-RS6-Avant-93.jpg" alt="rs6">

        </article>
        <article class="slider-nav" >
            <a href="#slide-1"></a>
            <a href="#slide-2"></a>
            <a href="#slide-3"></a>        
        </article>
    </article>
 </section>  
 
    <?php include '../PARTICLE/footer.php' ?>

</body>
</html>