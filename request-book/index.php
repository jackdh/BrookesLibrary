<?php
include '../inc/header.php';
getHeader("<li><a href=\"/\">Home</a></li><li class=\"active\">Request Book</li>");
?>

    <div class="container" id="add-book">
        <div class="row">
            <div class="col-md-9 col-md-push-3 central">
                <h1>Request Book</h1>
                <form>
                    <div class="form-group">
                        <label for="title">Title of book</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="Author">Author</label>
                        <input type="text" class="form-control" name="Author" id="Author" placeholder="">
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Add Book</button>
                </form>


            </div>
            <div class="col-md-3 col-md-pull-9">
                <?php include '../inc/sidebar.php' ?>
            </div>

        </div>
    </div>





<?php include '../inc/footer.php';?>