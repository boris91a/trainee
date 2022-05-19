<?php
$title = "Mainpage";
$active['mainpage'] = " active";
$content = <<<HEREDOC
<div class="container">
    <div class="row">
        <div class="col-12"><h2 class="underline">Mainpage</h2></div>
    </div>
    <div class="row">
        <div class="col-6">Some content here ...</div>
        <div class="col-6">And may be Here ...</div>
    </div>
    <div class="row">
        <div class="col-12 text-center">Or here ...</div>
    </div>
</div>
HEREDOC;
require_once "layout/main.php";
?>