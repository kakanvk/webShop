<nav class="navbar navbar-default" role="navigation" style="margin: 0;">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo $sp->hrefdanhsachsanpham('dsSP', '', $_GET['hang'], $_GET['sx'], $_GET['page'], $_GET['key']); ?>"><strong>PHP</strong> Shop</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <?php
                if (empty($_COOKIE['account']) || $_COOKIE['account'] == ""):
                    ?>
                    <li><a onclick="document.getElementById('id01').style.display = 'block'"><strong>Đăng nhập</strong></a></li>
                    <li><a onclick="document.getElementById('id02').style.display = 'block'"><strong>Đăng ký</strong></a></li>
                    <?php
                else :
                    ?>
                    <li><a href="#"><strong>Cài đặt <?php
                                if (isset($_COOKIE['account'])) {
                                    echo $_COOKIE['account'];
                                }
                                ?></strong></a></li>
                    <li><a href="#"><strong>Giỏ hàng</strong></a></li>
                    <li><a class="" href="logout.php"><strong>Đăng xuất</strong></a></li>
                <?php
                endif;
                ?>
                <li class="divider"></li>
                <li><a href="https://m.me/250313555528730"><strong>Facebook: </strong> Lap Trinh Web 1</a></li>
                <li class="divider"></li>
                <li><a href="#"><strong>ĐT : </strong>01629886884</a></li>
                <li class="divider"></li>
                <li class="divider"></li>
            </ul>
        </div>
    </div>
</nav>