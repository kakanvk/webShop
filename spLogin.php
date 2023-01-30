<?php

require 'admin/DB.php';

class spLogin extends DB {

    public function login() {
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $sql = "select * from accounts where user_account like '" . $user . "' and pass_account like '" . $pass . "';";
        if (@$this->select($sql)) {
            return $this->select($sql)[0];
        }
    }

}

$sp = new spLogin();
if (isset($_POST['login'])) {
    if (@$sp->login()) {
        $account = $sp->login()['user_account'];
        var_dump($admin);
        setcookie('account', $account);
        header('location: index.php');
    }else {
        header('location: index.php');
    }
}else {
    header('location: index.php');
}