<nav class="navbar navbar-dark bg-dark navbar-expand-lg bg-light">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link<?=$active['mainpage']?>" href="/">Main</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?=$active['login']?>" href="/login.php">Log In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?=$active['registration']?>" href="/registration.php">Registration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?=$active['posts']?>" href="/posts.php">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?=$active['profile']?>" href="/profile.php">Profile</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
