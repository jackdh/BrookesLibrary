<?php
    include '../inc/header.php';
    getHeader("<li><a href=\"/\">Home</a></li><li class=\"active\">Reservations</li>");

?>

    <div class="container" id="search-page">
        <div class="row">
            <div class="col-md-9 col-md-push-3 central">

                <h1>Your Reservations</h1>
                <?php if (loggedin()) { ?>
                    <div class="border reservations-book-case">

                    </div>
                    <button type="button" class="pagination-btn previous-page btn btn-primary">Previous</button>
                    <button type="button" class="pagination-btn next-page btn btn-primary pull-right">Next</button>
                <?php } else { ?>
                    <p>Please login to see you reservations</p>
                <?php } ?>


            </div>
            <div class="col-md-3 col-md-pull-9">
                <?php include '../inc/sidebar.php' ?>
            </div>

        </div>
    </div>





<?php include '../inc/footer.php';?>