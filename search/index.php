<?php
    include '../inc/header.php';
    getHeader("<li><a href=\"/\">Home</a></li><li class=\"active\">Search</li>");
    include 'book.php';
?>

    <div class="container" id="search-page">
        <div class="row">
            <div class="col-md-9 col-md-push-3 central">

                <h1>Search Result: <?php echo isset($_GET["query"]) ? $_GET["query"] : ""; ?></h1>
                <div class="border book-case">
                    <?php getBook(true);?>
                    <?php getBook(false);?>
                </div>


            </div>
            <div class="col-md-3 col-md-pull-9">
                <?php include '../inc/sidebar.php' ?>
            </div>

        </div>
    </div>





<?php include '../inc/footer.php';?>