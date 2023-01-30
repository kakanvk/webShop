<?php
if (isset($_COOKIE['admin'])) {
    if ($_COOKIE['admin'] != "") {
        header('location: index.php');
    }
}
?>
<html>
    <head>
        <title>Đăng nhập Admin</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="css/style_slide.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="public/css/bootstrap.min.css" />
        <link rel="stylesheet" href="public/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="public/css/uniform.css" />
        <link rel="stylesheet" href="public/css/select2.css" />
        <link rel="stylesheet" href="public/css/matrix-style.css" />
        <link rel="stylesheet" href="public/css/matrix-media.css" />
        <link href="public/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href="public/css/stylepage.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="container">
        <h1>&nbsp;</h1>
        <h1>&nbsp;</h1>
        <div class="widget-box">
            <div class="widget-title"> 
                <span class="icon">
                    <i class="icon-key">
                    </i> Đăng nhập trang quản trị hệ thống 
                </span> 
            </div>
            <div class="widget-content nopadding ">
                <form method="post" action="spLogin.php" class="form-horizontal container-fluid">
                    <h5>&nbsp;</h5>
                    <div class="control-group">
                        <label class="control-label">Tài khoản: </label>
                        <div class="controls">
                            <input type="text" name="username" required="true"> *
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Mật khẩu: </label>
                        <div class="controls">
                            <input type="password" name="password" required="true"> *
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" name="login" class="btn btn-default">Đăng nhập</button>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <a href="https://m.me/250313555528730" >Quên mật khẩu?</a>
                        </div>
                    </div>
                    <h5>&nbsp;</h5>
                </form>
            </div>
        </div>
        <?php 
        require '../quangcao1.php';
        ?>
        <?php
        include('modules/footer.php');
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
    </body>
</html>

