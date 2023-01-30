<?php

if (isset($_COOKIE['admin'])){
    if($_COOKIE['admin']!=""){
        setcookie('admin',"");
        header('location: login.php');
    }
}