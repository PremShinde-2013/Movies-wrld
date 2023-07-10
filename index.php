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

        </article>

    </main>

</body>

</html>