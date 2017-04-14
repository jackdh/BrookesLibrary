/**
 * It will first check to see if the form is valid according to the rules set in the HTML.
 * If it is then it will save the form and pass it to the local storage.
 * If not then the user will be directed to the error.
 */
function saveBook() {
    var $add = $('#add-book-form');
    $add.validator("validate");


    if ($('.has-error ').length) {

    } else {
        var bookObject = $add.serializeArray();
    var jsonString = "{";
        bookObject.forEach(function (entry) {
            jsonString += "\"" + entry.name + "\":\"" + entry.value + "\",";
        });
        jsonString = jsonString.substring(0, jsonString.length - 1);
        jsonString += "}";
        var newBookObject = JSON.parse(jsonString);
        var database = JSON.parse(localStorage.getItem("database"));
        database.books.push(newBookObject);
        localStorage.setItem("database", JSON.stringify(database));
        window.location.replace("/");
    }
}
