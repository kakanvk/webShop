<!DOCTYPE html>
<html>
    <head>
        <title>Mobile Admin</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="css/style_slide.css" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon" type="image/x-icon" href="../public/logo/Prepaidgamecards-Gaming-Gadgets-Nintendo-3DS.ico" />
        <link rel="stylesheet" href="public/css/bootstrap.min.css" />
        <link rel="stylesheet" href="public/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="public/css/uniform.css" />
        <link rel="stylesheet" href="public/css/select2.css" />
        <link rel="stylesheet" href="public/css/matrix-style.css" />
        <link rel="stylesheet" href="public/css/matrix-media.css" />
        <link href="public/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href="css/style_1.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        if (empty($_COOKIE['admin']) || $_COOKIE['admin'] == "") {
            header('location: login.php');
        }
        require('./DB.php');
        require './image.php';
        require('modules/header.php');
        require('modules/menu.php');
        require('modules/content.php');
        require('modules/footer.php');
        ?>
        <!--end-Footer-part-->
        <script src="public/js/jquery.min.js"></script>
        <script src="public/js/jquery.ui.custom.js"></script>
        <script src="public/js/bootstrap.min.js"></script>
        <script src="public/js/jquery.uniform.js"></script>
        <script src="public/js/select2.min.js"></script>
        <script src="public/js/jquery.dataTables.min.js"></script>
        <script src="public/js/matrix.js"></script>
        <script src="public/js/matrix.tables.js"></script>
        <script src="js/js.js" type="text/javascript"></script>
    </body>
</html>