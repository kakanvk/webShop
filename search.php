<?php

if(isset($_POST['search'])){
    header('location: index.php?ac=dsSP&loai=&hang=&sx=TenGiam&page=1&key='.$_POST['search']);
}else {
    header('location: index.php?ac=dsSP&loai=&hang=&sx=TenGiam&page=1&key=');
}
