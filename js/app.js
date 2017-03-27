
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

// initiate rating's
$(document).ready(function() {
    if ($('.single-book-title')) {
        $(function(){                   // Start when document ready
            $('#star-rating').rating(); // Call the rating plugin
        });
    }

});


// Set Pagination for single book

if ($('.single-book-title')) {

}
