/**
 * Uses Mustache to render the HTML
 */
function makeTemplater(database) {
    $.get('../inc/booktemplate.html', function (template) {
        var rendered = Mustache.render(template, database);
        $('.reservations-book-case').html(rendered);
    });
}

/**
 * Retrieves the database from the localstorage.
 * I will then check for each book in the database if it has been reserved.
 * If it has not it will be removed.
 * The remaining books will then be passed to the template engine.
 */
function setupReservationBooks() {
    var database = JSON.parse(localStorage.getItem("database"));
    for (var i = database.books.length - 1; i >= 0; i--) {
        var inArray = $.inArray(database.books[i].ISBN, database.reserved);
        if (inArray === -1) {
            database.books.splice(i, 1);
        }
    }
    makeTemplater(database);
}

setupReservationBooks();