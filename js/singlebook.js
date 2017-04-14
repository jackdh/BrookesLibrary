/** This keeps track if a reservation has been made. **/
var reservationMade = false;

/**
 * If the ISBN is set in the URL and the book exists it will render it's content using
 * a predefined template in the includes folder.
 */
function renderSingleBook() {
    if (getUrlParameter("isbn") !== undefined) {
        var isbn = getUrlParameter("isbn");
        var bookObject = getBookByISBN(isbn);
        $.get('../inc/singleBookTemplate.php', function(template) {
            var rendered = Mustache.render(template, bookObject);
            $('.single-book').html(rendered);
            $('.book-name').html(bookObject.book.title);

            setupMultipleReservations(bookObject.book.copiesAvailable);

            templateLoaded();
        });
    }
}
renderSingleBook();

/**
 * Renders the required number of options for reserving multiple books.
 * @param copiesAvailable
 */
function setupMultipleReservations(copiesAvailable) {
    var base = "";
    for (var i = 0; i < copiesAvailable; i++) {
        base += "<option>"+(i+1)+"</option>"
    }
    $('.number-of-books-available-to-reserve').html(base);

    $('.multi-reservation-successful').hide();
}

/**
 * Returns a book object after being given a ISBN number from the local storage.
 * @param isbn
 */
function getBookByISBN(isbn) {
    var database = database = JSON.parse(localStorage.getItem("database"));
    var book = {};
    database.books.forEach(function (entry) {
        if (entry.ISBN === isbn) {
            book = entry;
        }
    });
    var stringJson = JSON.stringify(book);
    stringJson = "{\"book\" : " +stringJson+ "}";
    return JSON.parse(stringJson);
}

/**
 * Get's the URL value of parameter
 * @param sParam Parameter to search for
 * @returns {boolean}Value of parameter
 */
function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
}

/**
 * Starts the star rating for individual book rating page.
 */
function setUpStars() {
    if ($('.single-book-title')) {
        $(function(){                   // Start when document ready
            $('#star-rating').rating(); // Call the rating plugin
        });
    }
}

/**
 * Checks if the book has been reserved by the user.
 * If it has it will disable the button so it cannot be reserved again.
 */
function checkIfReserved() {
    var database= JSON.parse(localStorage.getItem("database"));
    var isbn = $('.isbn').html();

    // Check if out of stock but we don't have a copy.
    var book = getBookByISBN(isbn).book;
    if (!(book.copiesAvailable > 0)) {
        $('.reserve-book').prop('disabled', true).html("Out of Stock");
        $('.reserve-book-multiple').prop('disabled', true).html("No Copies Available");
    }

    // Check if out of stock but we have a copy.
    database.reserved.forEach(function (entry) {
        if (entry === isbn) {
            $('.reserve-book').prop('disabled', true).html("Reserved");
            var bookObject = getBookByISBN(isbn);
            if (!(bookObject.book.copiesAvailable > 0)) {
                $('.reserve-book-multiple').prop('disabled', true).html("No Copies Available");
            }
        }
    });
}

/**
 * Returns True if the book has available copies to reserve
 * @returns {boolean}
 */
function checkIfReservable() {
    var isbn = $('.isbn').html();
    // get local storage
    var database = JSON.parse(localStorage.getItem("database"));
    // check if it is already reserved
    var inArray = $.inArray(isbn, database.reserved);
    if (inArray != -1) {
        return false;
    } else {
        return true;
    }
}

/**
 * Updates the return date for the book as well as the number of copies available.
 * @param numberToReserve
 */
function reserveBooks(numberToReserve) {
    var database = JSON.parse(localStorage.getItem("database"));
    var isbn = $('.isbn').html();
    database.reserved.push(isbn);

    // Update dueback date.
    for( var i = database.books.length-1; i>=0; i--) {
        if( database.books[i].ISBN === isbn) {
            database.books[i].dueback = getReturnDate();
            database.books[i].copiesAvailable = database.books[i].copiesAvailable - numberToReserve;
        }
    }

    localStorage.setItem("database", JSON.stringify(database));
    reservationMade=  true;
}

/**
 * Add's a book to the reserved database
 */
function reserveBook() {
    $('#reserveSuccessful').modal('show');

    if (checkIfReservable()) {
        reserveBooks(1);
    }
}

/**
 * This handles when a lecturer wants to reserve multiple books.
 */
function reserveMultipleBooks() {
    var isbn = $('.isbn').html();
    // get local storage
    var bookObject = getBookByISBN(isbn);

    if (bookObject.book.copiesAvailable > 0) {
        var total = $('#number-to-reserve').val();
        $('#reserveMultiple').find(".modal-title").html("Book reserved!")
        $('.copies-of').html(total);
        $('.multi-reservation-successful').show();
        $('.multi-reservation').hide();
        reserveBooks(total);
    } else {
        console.log("No books available");
    }

}

/**
 * On click of reserve multiple this will show the modal which allows the user to reserve multiple books.
 */
function showReserveMultipleBooks() {
    $('#reserveMultiple').modal('show');
}


/**
 * This is fired when the popup modal showing a book has been reserved is dismissed.
 */
$('#reserveSuccessful').on('hidden.bs.modal', function (e) {
    location.reload();
});
$('#reserveMultiple').on('hidden.bs.modal', function (e) {
    if (reservationMade) {
        location.reload();
    }
});

/**
 * Gets the current date
 * @returns {string} dd/mm/yyyy
 */
function getReturnDate() {
    var today = new Date();
    today = addDays(today, 14);
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();

    if(dd<10) {
        dd='0'+dd
    }

    if(mm<10) {
        mm='0'+mm
    }

    return dd + '/' + mm + '/' + yyyy;
}

/**
 *  Adds the library loan days to date
 * @param date
 * @param days
 * @returns {Date}
 */
function addDays(date, days) {
    var result = new Date(date);
    result.setDate(result.getDate() + days);
    return result;
}

/**
 * Deletes the current book
 */
function deleteBook() {
    var r = confirm("Do you really want to delete this book?");
    if (r == true) {
        var isbn = $('.isbn').html();
        var database = JSON.parse(localStorage.getItem("database"));
        for( i=database.books.length-1; i>=0; i--) {
            if( database.books[i].ISBN == isbn) database.books.splice(i,1);
        }
        localStorage.setItem("database", JSON.stringify(database));
        window.location.replace("/");
    } else {

    }

}

/**
 * Runs once the template has been generated.
 */
function templateLoaded() {
    setUpStars();
    checkIfReserved();
    $('.breadcrumb-end').html($('.info h2').html());
}