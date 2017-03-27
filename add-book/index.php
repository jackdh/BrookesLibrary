<?php
include '../inc/header.php';
getHeader("<li><a href=\"/\">Home</a></li><li class=\"active\">Add Book</li>");
?>

    <div class="container" id="add-book">
        <div class="row">
            <div class="col-md-9 col-md-push-3 central">
                <h1>Add Book</h1>
                <form>
                    <div class="form-group">
                        <label for="title">Title of book</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="Author">Author</label>
                        <input type="text" class="form-control" name="Author" id="Author" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="copies">Number of Copies</label>
                        <input type="text" class="form-control" name="copies" id="copies" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea id="description" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="upload">Upload</label>
                        <div class="input-group">

                            <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Browse&hellip; <input type="file" id="upload" style="display: none;">
                    </span>
                            </label>
                            <input type="text" class="form-control">
                        </div>
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