<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/movies">Expt: 8</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/movies/welcome.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/movies/login.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/movies/signup.php">Signup</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/movies/logout.php">Logout</a>
            </li>


        </ul>

    </div>
</nav>
 -->



<header class="header">

    <a href="index.php" class="logo">
        <img src="assets/images/logo2.png" width="50" height="32" alt="MOvies">
    </a>
    <!-- <a class="sidebar-link" href="/movies/index.php">Home <span class="sr-only">(current)</span></a> -->
    <!-- <a class="nav-link" href="/movies/login.php">Login</a>
    <a class="nav-link" href="/movies/signup.php">Signup</a> -->




    <div class="search-box " search-box>
        <div class="search-wrapper " search-wrapper>
            <input type="text" name="search" aria-label="search movies" placeholder="Search Movies.."
                class="search-field" autocomplete="off" search-field>
            <i class="fa-solid fa-magnifying-glass  leading-icon  " style="color: #ffffff; width: 24; height: 24;"></i>
        </div>
        <button class="search-btn" search-toggler>
            <i class="fa-solid fa-xmark" style="color: #ffffff; width: 24; height: 24;"></i>
        </button>
    </div>

    <div class="search-btn" search-toggler menu-close>
        <i class="fa-solid fa-magnifying-glass  leading-icon  " style="color: #ffffff; width: 24; height: 24;"></i>
    </div>
    Welcome :
    <?php echo $_SESSION['username'] ?>

    <a class="nav-link" href="/movies/logout.php">Logout</a>

    <button class="menu-btn  " menu-btn menu-toggler>
        <i class="fa-solid fa-bars-staggered menu " style="color: #ffffff; width: 24; height: 24;"></i>
        <img src="assets/images/menu-close.png" width="24" height="24" alt="close menu" class="close">

    </button>


</header>