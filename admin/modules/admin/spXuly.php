<?php

class spXuly extends DB {

    public function doimatkhau() {
        $username = "'" . $_POST['username'] . "'";
        $password = "'" . $_POST['password'] . "'";
        $newpassword = "'" . $_POST['newpassword'] . "'";
        $sql = 'update admins set pass_admin = ' . $newpassword . ' where user_admin = ' . $username . ' and pass_admin = ' . $password;
        if ($this->querry($sql)) {
            return '<div class="alert alert-success"><strong>Đổi MK!</strong> Đã thay đổi mật khẩu thành công.</div>';
        } else {
            return '<div class="alert alert-danger"><strong>Lỗi!</strong> Không thể thay đổi mật khẩu thành công.</div>';
        }
    }

}
