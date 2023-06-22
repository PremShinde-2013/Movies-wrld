<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true)
{
    header("location: login.php");
    exit;
}


?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.svg" type="image/svg+xml">
    <!-- css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- js -->
    <script src="assets/js/global.js" defer></script>
    <script src="assets/js/index.js" type="module"></script>
    <!-- <script src="assets/js/index.js" type="module" defer></script> -->
    <!-- <script src="assets/js/sidebar.js"></script> -->
    <!-- links -->




    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">

    <!-- font ausom -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <!-- Header -->
    <?php require 'assets/partials/_nav.php' ?>

    <main>

        <!-- SideBar -->
        <nav class="sidebar  " sidebar>


        </nav>

        <div class="overlay " overlay menu-toggler> </div>



        <article class="container" page-content>

            <!-- banner -->

            <!-- <section class="banner" aria-label="popular movies">

            <div class="banner-slider">
                <div class="slider-item " slider-item>
                    <img src="assets/images/slider-banner.jpg" class="img-cover" loading="eager" alt="Puss in Boots">

                    <div class="banner-content">
                        <h2 class="heading">
                            puss in Boots
                        </h2>
                        <div class="meta-list">
                            <div class="meta-item">
                                2023
                            </div>
                            <div class="meta-item card-badge"> 7.5</div>
                            <p class="genre">Anima, Acti,Adven</p>
                            <p class="banner-text">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni ullam commodi
                                repudiandae harum obcaecati, doloribus, non facilis architecto illo dolorem vero
                                perspiciatis id tenetur sunt dicta, vitae eveniet officiis expedita?
                            </p>
                            <a href="detail.php" class="btn">
                                <img src="assets//images/play_circle.png" width="24" height="24" aria-hidden="true"
                                    alt="play Circle">
                                <span class="span">Watch Now</span>
                            </a>

                        </div>
                    </div>
                </div>

            </div>

            <div class="slider-control">
                <div class="control-inner">
                    <button class="poster-box slider-item ">
                        <img src="assets/images/slider-control.jpg" alt="slider to boots" loading="lazy"
                            draggable="false" class="img-cover">
                    </button>



                </div>
            </div>

        </section>
 -->

            <!-- movies list -->



        </article>


    </main>

</body>

</html>