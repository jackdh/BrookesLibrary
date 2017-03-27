<?php
    include '../inc/header.php';
    getHeader("<li><a href=\"/\">Home</a></li><li class=\"active\">Reservations</li>");
    include '../search/book.php';
?>

    <div class="container" id="search-page">
        <div class="row">
            <div class="col-md-9 col-md-push-3 central">

                <h1>Your Reservations</h1>
                <div class="border book-case">
                    <?php
                    $jsonurl = "../reservations.json";
                    $json = file_get_contents($jsonurl,0,null,null);
                    $json_output = json_decode($json);
                    for ($i = 0; $i < sizeof($json_output); $i++) {
                    getBook($json_output[$i], $i, true);
                    }
                    ?>
                </div>


            </div>
            <div class="col-md-3 col-md-pull-9">
                <?php include '../inc/sidebar.php' ?>
            </div>

        </div>
    </div>





<?php include '../inc/footer.php';?>