<?php
include '../inc/header.php';
getHeader("<li><a href=\"/\">Home</a></li><li class=\"active\">Login</li>");
?>

    <div class="container" id="add-book">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h1>Login</h1>
                <form id="login-form">
                    <div class="form-group">
                        <label for="title">Username</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="Author">Password</label>
                        <input type="text" class="form-control" name="password" id="password" placeholder="">
                    </div>
                    <div class="failure-alert alert alert-danger hidden" role="alert"> <strong>Incorrect Password or Username</strong> Please try again. </div>
                </form>
                <button onclick="doLogin()" class="btn btn-primary pull-right">Login</button>


            </div>

        </div>
    </div>





<?php include '../inc/footer.php';?>