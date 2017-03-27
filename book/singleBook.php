<?php function getSingleBook($instock)
{ ?>
    <section class="book">
        <div class="row">
            <figure class="col-xs-3">
                <img src="../images/harry-potter-and-the-philosopherss-stone.jpg"
                                     class="img-responsive img-thumbnail"
                                     alt="Book cover of: Harry Potter and the philosopher's stone">
            </figure>
            <div class="col-xs-9 info">
                <h2 class="single-book-title">Harry Potter and the philosophers's stone</h2>
                <p><a href="#" rel="Pauthor">JK Rowling</a></p>
                <p>Published: 26/06/1997</p>
                <?php if ($instock) { ?>
                    <p>Copies available: 4</p>
                <?php } else { ?>
                    <p class="outOfStock">Next back: 25/04/2017</p>
                <?php } ?>
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
                <p>The most evil and powerful dark wizard in history, Lord Voldemort, murdered married couple James and
                    Lily Potter but mysteriously disappeared after failing to kill their infant son, Harry. While the
                    wizarding world celebrates Voldemort's apparent downfall, Professor Dumbledore, Professor McGonagall
                    and half-giant Rubeus Hagrid place the one-year-old orphan in the care of his surly and cold Muggle
                    uncle and aunt, Vernon and Petunia Dursley and their spoilt and bullying son, Dudley.</p></div>

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