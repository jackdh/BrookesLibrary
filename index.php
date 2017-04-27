<?php
include 'inc/header.php';
getHeader("<li  class=\"active\"><a href=\"/\">Home</a></li>");
?>


<div class="container" id="homepage">
    <div class="row">
        <div class="col-md-9 col-md-push-3 central">
            <h1>Welcome to the Oxford Brookes Library</h1>
            <p>Welcome to the Oxford Brookes library management system. This system provides the ability for users to
                reserve, block reserve, request, remove and add books to the electronic library management system. To
                get started feel free to search for a book on the left sidebar. In order to reserve a book the user will
                need to log in. </p>

            <p>There are currently 4 different accounts available to a user. “Student”, “Lecturer”, “Postgrad” & “Admin”
                the passwords for each are “123”. For the purpose of testing the site it is recommended to login as the
                “SuperAdmin” with the password “123”, this will allow the user to access all features of the
                website.</p>

            <p>Should the user wish to “reset” the website at this stage they will need to remove all cookies and local
                storage from their chosen browser, on refresh this will cause the website to return to its base state.

            </p>
        </div>
    <div class="col-md-3 col-md-pull-9">
        <?php include 'inc/sidebar.php' ?>
    </div>

    </div>
</div>





<?php include 'inc/footer.php';?>