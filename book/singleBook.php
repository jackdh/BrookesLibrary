<?php function getSingleBook($id) {

    $jsonurl = "../database.json";
    $json = file_get_contents($jsonurl,0,null,null);
    $json_output = json_decode($json);
    $bookObject = $json_output[$id];

    ?>
    <section class="book single-book">


    </section>

<?php } ?>