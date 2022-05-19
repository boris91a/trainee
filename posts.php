<?php
$title = "Posts";
$active['posts'] = " active";
$content = <<<HEREDOC
    <div class="container">
        <div class="row">
            <div class="col-12"><h2 class="underline">$title</h2></div>
        </div>
        <div class="row mt-4 justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="post">
                    <div id="public-date">19.05.2022 21:01</div>
                    <div class="post-content">
                        <img src="images/post1.jpg" alt="Post pic">
                        <h4 class="mt-2">Some post</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores commodi culpa, cumque dolorum expedita fugit libero molestiae odio quasi quia rem reprehenderit repudiandae sed suscipit? Error fugit impedit perspiciatis!</p>
                    </div>
                    <div class="open-post"><a href="#">Перейти>>></a></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="post">
                    <div id="public-date">19.05.2022 21:01</div>
                    <div class="post-content">
                        <img src="images/post2.jpg" alt="Post pic">
                        <h4 class="mt-2">Second post</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet consectetur deserunt eum explicabo fuga itaque, labore magnam molestias nostrum odit officia praesentium quaerat quia quo ratione sapiente sed soluta.</p>
                    </div>
                    <div class="open-post"><a href="#">Перейти>>></a></div>
                </div>
            </div>
        </div>
    </div>
HEREDOC;
require_once "layout/main.php";
?>