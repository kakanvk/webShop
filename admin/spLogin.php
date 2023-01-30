<?php

require './DB.php';

class spLogin extends DB {

    public function login() {
        $user_admin = $_POST['username'];
        $pass_admin = $_POST['password'];
        $sql = "select * from admins where user_admin like '".$user_admin."' and pass_admin like '".$pass_admin."';";
        if (@$this->select($sql)) {
            return $this->select($sql);
        }
    }

}

$sp = new spLogin();
if (isset($_POST['login'])) {
    if (@$sp->login()) {
        $admin = $sp->login()[0]['user_admin'];
        setcookie('admin', $admin);
        header('location: index.php');
    }
}