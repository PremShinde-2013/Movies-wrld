<?php
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    include 'assets/partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];

    // AND password='$password'
    $sql = "Select * from users where username='$username' AND password='$password' ";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1 && !empty($username))
    {
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: index.php");

    } else
    {
        $showError = "Invalid Credentials";
    }


    // if ($num == 1)
    // {
    //     $row = mysqli_fetch_assoc($result);

    //     if (password_verify($password, $row['password']))
    //     {
    //         $login = true;
    //         session_start();
    //         $_SESSION['loggedin'] = true;
    //         $_SESSION['username'] = $username;
    //         header("location: index.php");
    //     }

    // } else
    // {
    //     $showError = "Invalid Credentials";
    // }


}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <link rel="stylesheet" href="assets/css/login.css">

    <!-- 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->

    <title>Login</title>
</head>

<body>

    <?php
    if ($login)
    {
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
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
        <h1 class="text-center">Login </h1>
        <form action="/movies/login.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">

            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>


            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div> -->



    <header class="showcase">


        <div class="logo">
            <img src="assets/images/logo2.png">
        </div>

        <div class="showcase-content">
            <div class="formm">
                <form action="/movies/login.php" method="post" name="loginform">
                    <h1>Login In</h1>
                    <div class="info">
                        <input class="email" type="text" name="username" id="username" placeholder="Username"> <br>
                        <input class="email" type="password" id="password" name="password" placeholder="Password">
                    </div>
                    <div class="btn">
                        <button class="btn-primary" type="submit">Log-In</button>
                    </div>
                    <div class="help">
                        <div>
                            <input value="true" type="checkbox"><label>Remember me</label>
                        </div>


                    </div>

                </form>

            </div>


            <div class="signup">
                <p>New to Movies ?</p>
                <a href="/movies/signup.php">Sign up now</a>
            </div>



        </div>




    </header>


    <script>
        function validateForm() {
            var x = document.forms["loginform"]["username"].value;
            if (x == "") {
                alert("Name must be filled out");
                return false;
            }
        }
    </script>




</body>

</html>