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
