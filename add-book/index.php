<?php
include '../inc/header.php';
getHeader("<li><a href=\"/\">Home</a></li><li class=\"active\">Add Book</li>");
?>

    <div class="container" id="add-book">
        <div class="row">
            <div class="col-md-9 col-md-push-3 central">
                <h1>Add Book</h1>
                <form id="add-book-form">
                    <div class="form-group">
                        <label for="title">Title of book</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="Author">Author</label>
                        <input type="text" class="form-control" name="author" id="author" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="ISBN">ISBN</label>
                        <input type="text" class="form-control" name="ISBN" id="isbn" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="pubDate">Publication Date</label>
                        <input type="text" class="form-control" name="publicationDate" id="pubDate" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="copiesAvailable">Number of Copies</label>
                        <input type="text" class="form-control" name="copiesAvailable" id="copiesAvailable" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="copiesAvailable">Location</label>
                        <input type="text" class="form-control" name="location" id="location" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="upload">Upload Or Image URL</label>
                        <div class="input-group">

                            <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Browse&hellip; <input type="file" id="upload" style="display: none;">
                    </span>
                            </label>
                            <input type="text" id="upload" name="coverSrc" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="coverAlt">Alt text for Cover Image</label>
                        <input type="text" class="form-control" name="coverAlt" id="coverAlt" placeholder="">
                    </div>


                </form>
                <button onclick="saveBook()" class="btn btn-primary pull-right">Add Book</button>


            </div>
            <div class="col-md-3 col-md-pull-9">
                <?php include '../inc/sidebar.php' ?>
            </div>

        </div>
    </div>





<?php include '../inc/footer.php';?>