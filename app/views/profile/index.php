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
                        <div class="avatar"><img class="img-fluid" src="../../../images/avatar.png"></div>
                        <a href="#">Change</a>
                    </div>
                </div>
                <div class="col-9 offset-1">
                    <form>
                        <div class="row">
                            <div class="col-4 mt-3">
                                <label for="username" class="form-label">Change Username</label>
                                <input type="text" class="form-control" name="username" id="username" value="Someusername">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 mt-3">
                                <label for="username" class="form-label">Change password</label>
                                <input type="password" class="form-control" name="password" id="password" value="Somepassword">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 mt-3">
                                <label for="email" class="form-label">Change email</label>
                                <input type="email" class="form-control" name="email" id="email" value="Some@ema.il">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 mt-3">
                                <button type="submit" class="btn btn-orng mt-3">Save changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>