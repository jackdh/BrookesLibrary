<?php
require_once('config.php');

$username = "admin";
$password = "BrookesHCI2017";
$nonsense = "supercalifragilisticexpialidocious";

if (isset($_GET['p']) && $_GET['p'] == "login") {
    if ($_POST['user'] != $username) {
        echo "Sorry, that username does not match.";
        exit;
    } else if ($_POST['keypass'] != $password) {
        echo "Sorry, that password does not match.";
        exit;
    } else if ($_POST['user'] == $username && $_POST['keypass'] == $password) {

        setcookie('PrivatePageLogin', md5($_POST['keypass'] . $nonsense), time() + 60 * 60 * 24 * 365, '/');
        header("Location: $_SERVER[PHP_SELF]");

    } else {
        echo "Sorry, you could not be logged in at this time.";
    }
}
//if (True) {
if (isset($_COOKIE['PrivatePageLogin'])) {
//    if ($_COOKIE['PrivatePageLogin'] == md5($password . $nonsense)) {
    if (True) {
        // Logged in Content
        function getHeader($breadcrumbs)
        { ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
                <title>Worlds Best library site!</title>

                <!-- Bootstrap -->


                <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
                <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                <![endif]-->
            </head>
            <body>
            <header id="header">

                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <img alt="Oxford Brookes University" src="../images/logo-print.png">
                            </div>
                            <div class="col-sm-6">
                                <div id="top-nav-row" class="row">

                                    <?php include "topnav.php"; ?>

                                </div>
                                <div id="title-nav-row" class="row">
                                    <h2>Library System</h2>
                                </div>
                                <div id="bottom-nav-row" class="row">
                                    <?php include "bottomnav.php"; ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row breadcrumb-wrap">
                    <div class="container">
                        <!-- TemplateBeginEditable name="breadcrumb_content" -->
                        <ol class="breadcrumb">
                            <?php echo $breadcrumbs; ?>
                        </ol>
                        <!-- TemplateEndEditable -->
                    </div>
                </div>
            </header>

        <?php }
    } else {
        // Not logged in
        echo "Bad Cookie";
    }
} else {
//    Login in field just to be used for when online.
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>?p=login" method="post">
        <label><input type="text" name="user" id="user"/> Name</label><br/>
        <label><input type="password" name="keypass" id="keypass"/> Password</label><br/>
        <input type="submit" id="submit" value="Login"/>
    </form>
    <?php
}




