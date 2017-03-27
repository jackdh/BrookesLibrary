<?php
include '../inc/header.php';
getHeader("<li><a href=\"/\">Home</a></li><li class=\"active\">Login</li>");
?>

    <div class="container" id="add-book">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h1>Login</h1>
                <form>
                    <div class="form-group">
                        <label for="title">Username</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="Author">Password</label>
                        <input type="text" class="form-control" name="Author" id="Author" placeholder="">
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Login</button>
                </form>


            </div>

        </div>
    </div>





<?php include '../inc/footer.php';?>