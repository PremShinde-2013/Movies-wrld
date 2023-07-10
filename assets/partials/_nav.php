<header class="header">

    <a href="index.php" class="logo">
        <img src="assets/images/logo2.png" width="50" height="32" alt="MOvies">
    </a>




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