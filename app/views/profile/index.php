<?php
$title = "Profile";
$active['profile'] = " active";
?>
        <div class="container">
            <div class="row">
                <div class="col-12"><h2 class="underline"><?=$title?></h2></div>
            </div>
            <div class="row mt-5">
                <div class="col-2 text-center">
                    <div class="profile-info">
                        <img class="avatar img-fluid" src="/uploads/<?=$_SESSION['user']['avatar']?>">
                        <a class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Change</a>
                    </div>
                </div>
                <div class="col-9 offset-1">
                    <form action="/profile/change" method="post">
                        <div class="row">
                            <div class="col-4 mt-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" name="user[username]" id="username" value="<?=$_SESSION['user']['username']?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 mt-3">
                                <label for="username" class="form-label">Password</label>
                                <input type="password" class="form-control" name="user[password]" id="password" value="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 mt-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="user[email]" id="email" value="<?=$_SESSION['user']['email']?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 mt-3">
                                <input type="hidden" name="user[id]" value="<?=$_SESSION['user']['id']?>">
                                <input type="hidden" id="user_avatar" name="user[avatar]" value="<?=$_SESSION['user']['avatar']?>">
                                <button type="submit" name="submit" class="btn btn-orng mt-3">Save changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">New Avatar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="input-group mt-3">
                    <input type="file" class="form-control" id="new_avatar_path">
                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                </div>
                <input type="hidden" id="new_avatar_name" value="">
                <img class="avatar img-fluid d-block mt-4" id="new_avatar_img" src="/uploads/<?=$_SESSION['user']['avatar']?>">
                <p class="alert-warning mt-3" id="warning"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="change_avatar" data-bs-dismiss="modal">Change</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="/js/jQuery.js"></script>
<script type="text/javascript" src="/js/avatar.js"></script>