<?php

if (isset($_GET['trang'])) {
    $numPage = $_GET['trang'];
} else {
    $numPage = '';
}
if ($numPage == '' || $numPage == '1') {
    $SP_BD = 0;
} else {
    $SP_BD = ($numPage * 3) - 3;
}

class spLietke extends DB {
    
    public function row_gal($ID) {
        $sql = 'select * from images where id_image like '.$ID;
        return $this->select($sql)[0];
    }

    public function table_Gallery($SP_BD) {
        $sql = 'select * from gallerys order by id_gallery desc limit ' . $SP_BD . ',3';
        return $this->select($sql);
    }

    public function count() {
        $sql = 'select * from gallerys';
        $table = $this->select($sql);
        return count($table);
    }

    public function perpage($numPage) {
        $sql = 'select * from gallerys';
        $table = $this->select($sql);
        $count_page = count($table);
        $total_page = ceil($count_page / 3);
        $pg = 1;
        if (isset($_GET['trang'])) {
            $pg = $_GET['trang'];
        }
        if ($numPage > 1) {
            echo '<li><a href="index.php?quanly=gallery&ac=lietke&trang=1">1</a></li>';
            echo '<li><a href="index.php?quanly=gallery&ac=lietke&trang=' . ($numPage - 1) . '"><<</a></li>';
        }
        for ($i = $numPage - 2; $i <= $numPage + 2; $i++) {
            if ($i == $numPage) {
                echo '<li><a href="index.php?quanly=gallery&ac=lietke&trang=' . $i . '" style="background-color: blue; color:#fff;"> ' . $i . '</a></li>';
            } else if ($i > 0 && $i <= $total_page) {
                echo '<li><a href="index.php?quanly=gallery&ac=lietke&trang=' . $i . '"> ' . $i . ' </a></li>';
            }
        }
        if ($numPage < $total_page) {
            echo '<li><a href="index.php?quanly=gallery&ac=lietke&trang=' . ($numPage + 1) . '">>></a></li>';
            echo '<li><a href="index.php?quanly=gallery&ac=lietke&trang=' . $total_page . '">'.$total_page.'</a></li>';
        }
    }

    function spGallery($id) {
        $sql_sp = 'select * from products where id_product = ' . $id;
        $sp = $this->select($sql_sp);
        return $sp[0];
    }

}
