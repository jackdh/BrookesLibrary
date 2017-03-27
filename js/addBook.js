function saveBook() {
    var bookObject = $('#add-book-form').serializeArray();
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
}