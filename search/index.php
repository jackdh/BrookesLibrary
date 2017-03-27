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
                    <?php
                    $jsonurl = "../database.json";
                    $json = file_get_contents($jsonurl,0,null,null);
                    $json_output = json_decode($json);
                    for ($i = 0; $i < sizeof($json_output); $i++) {
                        getBook($json_output[$i], $i);
                    }

                    ?>
                </div>
                <div>
                    <a href="#" type="button" class="pagination-btn previous-page btn btn-primary">Previous</a>
                    <a href="#" type="button" class="pagination-btn next-page btn btn-primary pull-right">Next</a>
                </div>


            </div>
            <div class="col-md-3 col-md-pull-9">
                <?php include '../inc/sidebar.php' ?>
            </div>

        </div>
    </div>





<?php include '../inc/footer.php';?>