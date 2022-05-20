<?php
$title = "Posts";
$active['posts'] = " active";
?>
    <div class="container">
        <div class="row">
            <div class="col-12"><h2 class="underline"><?=$title?></h2></div>
        </div>
        <div class="row mt-4 justify-content-center">
            <? foreach($posts as $post):
                extract($post);?>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="post">
                        <div id="public-date"><?=$date?></div>
                        <div class="post-content">
                            <img src="images/<?=$picture?>" alt="Post pic">
                            <h4 class="mt-2"><?=$header?></h4>
                            <p><?=$p_content?></p>
                        </div>
                        <div class="open-post"><a href="#">Перейти>>></a></div>
                    </div>
                </div>
            <? endforeach;?>
        </div>
    </div>