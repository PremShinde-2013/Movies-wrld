<?php
$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    include 'assets/partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $fullname = $_POST["fullname"];
    $exists = false;
    if (($password == $cpassword) && $exists == false && !empty($password) && !empty($username) && !empty($cpassword) && !empty($fullname))
    {
        $sql = "  INSERT INTO `users` ( `username`, `password`, `fullname`, `timestamp`) VALUES ( '$username', '$password', '$fullname', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if ($result)
        {
            $showAlert = true;
            header("location: login.php");
        }
    } else
    {
        $showError = "Passwords do not match";
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="assets/css/login.css">

    <title>SignUp</title>
</head>

<body>

    <?php
    if ($showAlert)
    {
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if ($showError)
    {
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> ' . $showError . '
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>



    <header class="showcase">


        <div class="logo">
            <img src="assets/images/logo2.png">
        </div>

        <div class="showcase-content">
            <div class="formm">
                <form action="/movies/signup.php" method="post">
                    <h1>Sign-up Here </h1>
                    <div class="info">
                        <input class="email" type="text" name="username" placeholder="Username" "> <br>
                        <input class=" email" type="text" id="fullname" name="fullname" placeholder="Full Name">
                        <input class="email" type="password" id="password" name="password" placeholder="Password">
                        <input class="email" type="password" id="cpassword" name="cpassword"
                            placeholder=" Confirm Password">
                    </div>
                    <div class="btn">
                        <button class="btn-primary" type="submit">Signup</button>
                    </div>


                </form>

            </div>


            <div class="signup">
                <p>Already have an account ?</p>
                <a href="/movies/login.php">Login now</a>
            </div>



        </div>




    </header>



</body>

</html>