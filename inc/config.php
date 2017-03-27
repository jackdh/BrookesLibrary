<?php

function hasPermission($user) {
    return loggedin() && ($_COOKIE["user"] == $user || $_COOKIE["user"] == "superAdmin");
}

function loggedin() {
    if (isset($_COOKIE["loggedin"])) {
        return $_COOKIE["loggedin"] == "true";
    }
    return false;
}