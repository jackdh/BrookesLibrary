function renderSingleBook() {
    if (getUrlParameter("isbn") != undefined) {
        var isbn = getUrlParameter("isbn");
        var bookObject = getBookByISBN(isbn);
        $.get('../inc/singleBookTemplate.php', function(template) {
            var rendered = Mustache.render(template, bookObject);
            $('.single-book').html(rendered);
            templateLoaded();
        });
    }
}
renderSingleBook();

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

function checkIfReserved() {
    var database= JSON.parse(localStorage.getItem("database"));
    var isbn = $('.isbn').html();
    database.reserved.forEach(function (entry) {
        if (entry === isbn) {
            $('.reserve-book').prop('disabled', true).html("Reserved");
        }
    });
}

/**
 * Add's a book to the reserved database
 */
function reserveBook() {
    var isbn = $('.isbn').html();
    // get local storage
    var database = JSON.parse(localStorage.getItem("database"));
    // check if it is allready reserved
    var inArray = $.inArray(isbn, database.reserved);

    if (inArray != -1) {
        // already reserved
    } else {
        // not reserved so add it.
        database.reserved.push(isbn);

        // Update dueback date.
        for( i=database.books.length-1; i>=0; i--) {
            if( database.books[i].ISBN == isbn) {
                database.books[i].dueback = getReturnDate();
            }
        }

        localStorage.setItem("database", JSON.stringify(database));
    }

    location.reload();
}

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