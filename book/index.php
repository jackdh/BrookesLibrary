<?php
include '../inc/header.php';
include 'singleBook.php';
getHeader("<li><a href=\"/\">Home</a></li><li><a href=\"/search \">Search</a></li><li class=\"active\">Book Title</li>");

?>

    <div class="container" id="singleBook">
        <div class="row">
            <div class="col-md-9 col-md-push-3 central">

                <?php getSingleBook(true); ?>



            </div>
            <div class="col-md-3 col-md-pull-9">
                <?php include '../inc/sidebar.php' ?>
            </div>

        </div>
    </div>





<?php include '../inc/footer.php';?>