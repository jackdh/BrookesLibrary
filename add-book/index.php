<?php
include '../inc/header.php';
getHeader("<li><a href=\"/\">Home</a></li><li class=\"active\">Add Book</li>");
?>

    <div class="container" id="add-book">
        <div class="row">
            <div class="col-md-9 col-md-push-3 central">
                <h1>Add Book</h1>
                <form id="add-book-form" data-toggle="validator" role="form">

                    <div class="form-group has-feedback">
                        <label for="title" class="control-label">Title of book</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="" required>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group has-feedback">
                        <label for="Author" class="control-label">Author</label>
                        <input type="text" class="form-control" name="author" id="author" placeholder="" required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="ISBN" class="control-label">ISBN</label>
                        <input type="text" class="form-control" name="ISBN" id="isbn" placeholder="" required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="pubDate" class="control-label">Publication Date</label>
                        <input type="text" class="form-control" name="publicationDate" id="pubDate" placeholder="" required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="copiesAvailable" class="control-label">Number of Copies</label>
                        <input type="text" class="form-control" name="copiesAvailable" id="copiesAvailable"
                               placeholder="" required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="copiesAvailable" class="control-label">Location</label>
                        <input type="text" class="form-control" name="location" id="location" placeholder="" required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="description" class="control-label">Description</label>
                        <textarea name="description" id="description" class="form-control" rows="3"></textarea>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group has-feedback">
                        <label for="upload" class="control-label">Upload Or Image URL</label>
                        <div class="input-group">
                            <label class="input-group-btn">
                                <span class="btn btn-primary">
                                    Browse&hellip; <input type="file" id="upload" style="display: none;">
                                </span>
                            </label>
                            <input type="text" id="upload" name="coverSrc" class="form-control" required>

                        </div>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group has-feedback">
                        <label for="coverAlt">Alt text for Cover Image</label>
                        <input type="text" class="form-control" name="coverAlt" id="coverAlt" placeholder="" required>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group has-feedback">
                        <button type="submit"  class="btn btn-primary">Submit</button>
                    </div>
                </form>
                <button  onclick="saveBook()" class="btn btn-primary pull-right">Add Book</button>


            </div>
            <div class="col-md-3 col-md-pull-9">
                <?php include '../inc/sidebar.php' ?>
            </div>

        </div>
    </div>


<?php include '../inc/footer.php'; ?>