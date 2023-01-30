<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>PHP Shop IC</title>
        <link rel="shortcut icon" type="image/x-icon" href="public/logo/Prepaidgamecards-Gaming-Gadgets-Nintendo-3DS.ico" />
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
        <link href="public/css/style_search.css" rel="stylesheet" type="text/css"/>
        <!--GOOGLE FONT -->
        <link href="assets/ItemSlider/css/main-style.css" rel="stylesheet" />
        <link href="assets/css/style.css" rel="stylesheet"/>
        <link href="public/css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <?php
    require 'admin/DB.php';
    require './spIndex.php';
    require './spLoadSanPham.php';
    $sp = new sanpham();
    require './login.php';
    require './register.php';
    ?>
    <body>
        <?php
        require './header.php';
        require './slideshow.php';
        require './content.php';
        require './footer.php';
        ?>
        <script src="assets/js/jquery-1.10.2.js"></script>
        <script src="assets/js/bootstrap.js"></script>
        <script src="assets/ItemSlider/js/modernizr.custom.63321.js"></script>
        <script src="assets/ItemSlider/js/jquery.catslider.js"></script>
        <script src="public/js/js.js" type="text/javascript"></script>
        <script src="public/js/js_slide.js" type="text/javascript"></script>
    </body>
</html>
