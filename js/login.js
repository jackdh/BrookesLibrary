function doLogin() {
    var loginObject = $('#login-form').serializeArray();
    // console.log(loginObject);

    var username = loginObject[0].value;
    var password = loginObject[1].value;
    switch (username) {
        case "Student":
            if (password === "123") {
                setLoggedin("student");
            } else {
                $('.failure-alert').removeClass("hidden");
            }
            break;
        case "Postgrad":
            if (password === "123") {
                setLoggedin("postgrad");
            } else {
                $('.failure-alert').removeClass("hidden");
            }
            break;
        case "Admin":
            if (password === "123") {
                setLoggedin("admin");
            } else {
                $('.failure-alert').removeClass("hidden");
            }
            break;
        case "Lecturer":
            if (password === "123") {
                setLoggedin("lecturer");
            } else {
                $('.failure-alert').removeClass("hidden");
            }
            break;
        case "SuperAdmin":
            if (password === "123") {
                setLoggedin("superAdmin");
            } else {
                $('.failure-alert').removeClass("hidden");
            }
            break;
        default:
            $('.failure-alert').removeClass("hidden");
    }
}

function setLoggedin(user) {
    document.cookie = 'loggedin=true; path=/';
    document.cookie = 'user='+user+'; path=/';
    window.location.replace("/");
}
