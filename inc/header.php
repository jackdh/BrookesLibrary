<?php
require_once('config.php');
function getHeader($breadcrumbs) { ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Worlds Best library site!</title>

    <!-- Bootstrap -->
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../node_modules/font-awesome/css/font-awesome.min.css">
    <link href="../css/styles.css" rel="stylesheet">

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
                <span class="sr-only">You are here:</span>
                <?php echo $breadcrumbs; ?>
            </ol>
            <!-- TemplateEndEditable -->
        </div>
    </div>
</header>


<?php } ?>