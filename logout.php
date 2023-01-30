<?php

if (isset($_COOKIE['account'])) {
    if ($_COOKIE['account'] != "") {
        setcookie('account', "");
        header('location: index.php');
    }
}