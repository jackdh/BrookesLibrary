<?php function getBook($bookObject, $index, $reservation = false) {
    ?>
<section class="row book">
    <figure class="col-xs-3">
        <a href="/book?id=<?php echo $index; ?>"><img src="<?php echo $bookObject->{"coverSrc"}; ?>" class="img-responsive img-thumbnail" alt="<?php echo $bookObject->{"coverAlt"}; ?>"></a>
    </figure>
    <div class="col-xs-9 info">
        <h2><a href="/book?id=<?php echo $index; ?>"><?php echo $bookObject->{"title"}; ?></a></h2>
        <p><a href="#" rel="author"><?php echo $bookObject->{"author"}; ?></a></p>
        <p>Published: <?php echo $bookObject->{"publicationDate"}; ?></p>

        <?php if ($bookObject->{"copiesAvailable"} != 0) {?>
        <p>Copies available: <?php echo $bookObject->{"copiesAvailable"}; ?></p>
        <?php } else if ($reservation) { ?>
            <p class="outOfStock">Due back: <?php echo $bookObject->{"dueback"}; ?></p>
        <?php } else if ($bookObject->{"copiesAvailable"} == 0) { ?>
            <p class="outOfStock">Next back: <?php echo $bookObject->{"dueback"}; ?></p>
        <?php }?>

        <p><?php echo $bookObject->{"description"}; ?></p>
    </div>


</section>

<?php }?>