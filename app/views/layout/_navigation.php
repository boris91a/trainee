<nav class="navbar navbar-dark bg-dark navbar-expand-lg bg-light">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link<?=$active['mainpage']?>" href="/">Main</a>
                </li>
                <?php if(!isset($_SESSION['user']['id'])): ?>
                <li class="nav-item">
                    <a class="nav-link<?=$active['login']?>" href="/login">Log In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?=$active['registration']?>" href="/registration">Registration</a>
                </li>
                <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link<?=$active['profile']?>" href="/profile">Profile</a>
                </li>
                <?php endif; ?>
                <li class="nav-item">
                    <a class="nav-link<?=$active['posts']?>" href="/posts">Posts</a>
                </li>
            </ul>
        </div>
    </div>
</nav>