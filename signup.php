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
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO `users` ( `username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";
        $sql = "  INSERT INTO `users` ( `username`, `password`, `fullname`, `timestamp`) VALUES ( '$username', '$hash', '$fullname', current_timestamp())";
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

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->

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

    <!-- <div class="container my-4">
        <h1 class="text-center">Signup to our website</h1>
        <form action="/movies/signup.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">

            </div>
            <div class="form-group">
                <label for="username">fullname</label>
                <input type="text" class="form-control" id="fullname" name="fullname" aria-describedby="emailHelp">

            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="cpassword">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword">
                <small id="emailHelp" class="form-text text-muted">Make sure to type the same password</small>
            </div>

            <button type="submit" class="btn btn-primary">SignUp</button>
        </form>
    </div> -->


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