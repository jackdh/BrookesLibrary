
// Add to dropdown
$('#navbar').on('show.bs.collapse', function () {
    $('#navbar').prepend($('#topnav').html());
});

// When it opens remove from dropdown
$('#navbar').on('hidden.bs.collapse', function () {
    $('#navbar .top-nav-content').remove();
});
$(window).on('resize', function () {
    if (window.innerWidth > 768) {$('#navbar').collapse('hide');}
});





/**
 * Generates the HTML for the books on the search / reservations page.
 */
function setupSearchBooks() {
    var database;
    if (localStorage.length == 0) {
        //...
        $.get('../database.json', function(mydata) {
            localStorage.setItem("database", JSON.stringify(mydata));
            database = JSON.parse(localStorage.getItem("database"));
            makeTemplate(database);
        });
    } else {
        database = JSON.parse(localStorage.getItem("database"));
        makeTemplate(database);
    }
}
setupSearchBooks();


/**
 * Uses Mustache to render the HTML
 */
function makeTemplate(database) {
    $.get('../inc/booktemplate.html', function(template) {
        var rendered = Mustache.render(template, database);
        $('.book-case').html(rendered);
    });
}

