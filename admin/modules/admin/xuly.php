<div class="container-fluid ">
    <h3>Tài khoản cá nhân</h3>
</div>
<div class="widget-box">
    <div class="widget-content nopadding">
        <form class="form-horizontal" action="#" method="post" enctype="multipart/form-data">
            <div class="control-group">
                <label class="control-label"> Đổi mật khẩu </label>
            </div>
            <div class="control-group">
                <label class="control-label"> Nhập tên tài khoản : </label>
                <div class="controls">
                    <input type="text" name="username" required="true" value="<?php
                    if (isset($_COOKIE['admin'])) {
                        echo $_COOKIE['admin'];
                    }
                    ?>">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label"> Nhập mật khẩu cũ : </label>
                <div class="controls">
                    <input type="password" name="password" required="true">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label"> Đặt mật khẩu mới : </label>
                <div class="controls">
                    <input type="text" name="newpassword" required="true">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label"> Nhập lại mật khẩu : </label>
                <div class="controls">
                    <input type="password" name="repassword" required="true">
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <input type="submit" name="ok" value="Xác nhận" class="btn btn-default">
                    <a href="index.php" class="btn btn-default">Hủy bỏ</a>
                </div>
            </div>
        </form>
        <?php
        if (isset($_POST['ok'])) {
            echo $xuly->doimatkhau();
        }
        ?>
    </div>
</div>

