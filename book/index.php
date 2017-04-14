<?php
include '../inc/header.php';
include 'singleBook.php';
getHeader("<li><a href=\"/\">Home</a></li><li><a href=\"/search \">Search</a></li><li class=\"active breadcrumb-end\"></li>");


?>
    <div class="container" id="singleBook">
        <div class="row">
            <div class="col-md-9 col-md-push-3 central">

                <section class="book single-book">


                </section>


            </div>
            <div class="col-md-3 col-md-pull-9">
                <?php include '../inc/sidebar.php' ?>
            </div>

        </div>
    </div>
    <div id="reserveSuccessful" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog"
         aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-sm" role="document">

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="reservedLabel">Book Reserved!</h4>
                </div>
                <div class="modal-body">
                    <p>You have successfully reserved
                    <p><span class="bold book-name">this book</span></p>
                    <p>for</p>
                    <p><span class="bold">14 days</span></p>
                    <p>Please click the following buttons to view your reservation or close this window.</p>

                </div>
                <div class="modal-footer">
                    <a href="/reservations" class="btn btn-default" role="button">Reservations</a>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close"> Close</button>
                </div>
            </div>
        </div>
    </div>

    <div id="reserveMultiple" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog"
         aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-sm" role="document">

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="multipleReservedLabel">How many copies would you like to reserve?</h4>
                </div>
                <div class="modal-body">
                    <div class="multi-reservation-successful">
                        <p>You have successfully reserved <span class="bold copies-of"></span></p>
                        <p><span class="bold book-name">this book</span></p>
                        <p>for</p>
                        <p><span class="bold">14 days</span></p>
                        <p>Please click the following buttons to view your reservation or close this window.</p>
                    </div>
                    <div class="multi-reservation">
                        <select id="number-to-reserve" class="form-control number-of-books-available-to-reserve">
                            <option>1</option>
                        </select>
                    </div>


                </div>
                <div class="modal-footer">
                    <a href="/reservations" class="btn btn-default multi-reservation-successful" role="button">Reservations</a>
                    <button onclick="reserveMultipleBooks()" type="button" class="btn btn-primary multi-reservation">Reserve</button>

                    <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close"> Close</button>
                </div>
            </div>
        </div>
    </div>


<?php include '../inc/footer.php'; ?>