<?php
$title = "Registration";
$active['registration'] = " active";
?>
    <div class="container">
        <form class="form" action="/registration" method="post">
            <div class="row">
                <div class="col-12"><h2 class="underline"><?=$title?></h2></div>
            </div>
            <div class="row mt-4">
                <div class="col-md-4 col-sm-12">
                    <label for="username" class="form-label">Enter a username</label>
                    <input class="form-control" type="text" id="username" name="username" value="" placeholder="Username">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4 col-sm-12">
                    <label for="password" class="form-label">Enter a password</label>
                    <input class="form-control" type="password" id="password" name="password" value="" placeholder="Password">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4 col-sm-12">
                    <label for="cpassword" class="form-label">Confirm password</label>
                    <input class="form-control" type="password" id="cpassword" name="cpassword" value="" placeholder="Password">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4 col-sm-12">
                    <label for="email" class="form-label">Enter Email</label>
                    <input class="form-control" type="email" id="email" name="email" value="" placeholder="Email">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <button type="submit" name="submit" class="btn btn-orng">Register</button>
                </div>
            </div>
        </form>
    </div>

