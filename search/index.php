<?php
    include '../inc/header.php';
    getHeader("<li><a href=\"/\">Home</a></li><li class=\"active\">Search</li>");
?>

    <div class="container" id="search-page">
        <div class="row">
            <div class="col-md-9 col-md-push-3 central">

                <h1>Search Result: <?php echo isset($_GET["query"]) ? $_GET["query"] : ""; ?></h1>
                <div class="border book-case">

                </div>
                <div>
                    <a href="#" type="button" class="pagination-btn previous-page btn btn-primary">Previous</a>
                    <button type="button" class="pagination-btn next-page btn btn-primary pull-right">Next</button>
                </div>



            </div>
            <div class="col-md-3 col-md-pull-9">
                <?php include '../inc/sidebar.php' ?>
            </div>

        </div>
    </div>





<?php include '../inc/footer.php';?>