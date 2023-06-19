<!-- <?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true)
{
    header("location: movies/login.php");
    exit;
}


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Welcome -
        <?php $_SESSION['username'] ?>
    </title>
</head>

<body>
    <?php require 'assets/partials/_nav.php' ?>
    Welcome -
    <?php echo $_SESSION['username'] ?>

</body>

</html> -->