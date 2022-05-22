<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$title?></title>
    <link rel="stylesheet" href="/style/bootstrap.min.css">
    <link rel="stylesheet" href="/style/style.css">
</head>
<body>
<header>
    <div class="shadow"></div>
    <div id="user_container">
        <?php if(!isset($_SESSION['user']['id'])): ?>
        <div class="login">
            <a href="/login" class="btn">Log in</a> /
            <a href="/registration" class="btn">Registration</a>
        </div>
        <?php else: ?>
        <img src="/uploads/<?=$_SESSION['user']['avatar']?>" class=" avatar img-fluid d-block">
        <a href="/profile" class="btn"><?=$_SESSION['user']['username']?></a>
        <br><a href="/logout" class="btn">Log Out</a>
        <?php endif; ?>
    </div>
</header>
<? require_once "_navigation.php"; ?>
<section class="breadcrumb">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item<?=$active['mainpage']?>" aria-current="page">Main</li>
            <? if(!$active['mainpage']):?>
            <li class="breadcrumb-item active" aria-current="page"><?=$title?></li>
            <? endif; ?>
        </ol>
    </nav>
</section>
<section class="content">
<?=$content?>
</section>
<footer></footer>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
