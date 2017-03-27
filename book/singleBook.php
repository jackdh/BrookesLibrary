<?php function getSingleBook($id) {

    $jsonurl = "../database.json";
    $json = file_get_contents($jsonurl,0,null,null);
    $json_output = json_decode($json);
    $bookObject = $json_output[$id];

    ?>
    <section class="book">
        <div class="row">
            <figure class="col-xs-3">
                <img src="<?php echo $bookObject->{"coverSrc"}; ?>" class="img-responsive img-thumbnail" alt="<?php echo $bookObject->{"coverAlt"}; ?>">
            </figure>
            <div class="col-xs-9 info">
                <h2><?php echo $bookObject->{"title"}; ?></h2>
                <p><a href="#" rel="author"><?php echo $bookObject->{"author"}; ?></a></p>
                <p>Published: <?php echo $bookObject->{"publicationDate"}; ?></p>
                <?php if ($bookObject->{"copiesAvailable"} != 0) {?>
                    <p>Copies available: <?php echo $bookObject->{"copiesAvailable"}; ?></p>
                <?php } else if ($bookObject->{"copiesAvailable"} == 0) { ?>
                    <p class="outOfStock">Next back: <?php echo $bookObject->{"dueback"}; ?></p>
                <?php } else { ?>
                    <p class="outOfStock">Due back: <?php echo $bookObject->{"dueback"}; ?></p>
                <?php }?>
                <p>Location: Wheatly</p>
                <div class="rating-wrapper">
                    <p>Rating: </p>
                    <div id="star-rating">
                        <input type="radio" name="example" class="rating" value="1"/>
                        <input type="radio" name="example" class="rating" value="2"/>
                        <input type="radio" name="example" class="rating" value="3"/>
                        <input type="radio" name="example" class="rating" value="4"/>
                        <input type="radio" name="example" class="rating" value="5"/>
                    </div>

                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3>Description</h3>
                <p><p><?php echo $bookObject->{"description"}; ?></p></p></div>

        </div>
        <div class="row action-buttons">

            <div class="col-md-6">
                <button type="button" class="delete-book btn btn-danger">Delete</button>
            </div>
            <div class="col-md-6 ">
                <div class="pull-right">
                    <button type="button" class="download-book btn btn-primary">Download</button>
                    <button type="button" class="reserve-book btn btn-primary">Reserve</button>
                </div>
            </div>
        </div>

    </section>

<?php } ?>