<?php

if (isset($_GET['trang'])) {
    $numPage = $_GET['trang'];
} else {
    $numPage = '';
}
if ($numPage == '' || $numPage == '1') {
    $SP_BD = 0;
} else {
    $SP_BD = ($numPage * 5) - 5;
}

class spLietke extends DB {

    public function table_hoadon($SP_BD) {
        $sql = 'SELECT * FROM carts order by id_cart desc limit ' . $SP_BD . ',5';
        if (@$this->select($sql))
            return $this->select($sql);
    }

    public function count() {
        $sql = 'select * from carts';
        if (@$this->select($sql)) {
            $table = $this->select($sql);
            return count($table);
        }
    }

    public function perpage($numPage) {
        $sql = 'select * from carts';
        $table = $this->select($sql);
        $count_page = count($table);
        $total_page = ceil($count_page / 5);
        $pg = 1;
        if (isset($_GET['trang'])) {
            $pg = $_GET['trang'];
        }
        if ($numPage > 1) {
            echo '<li><a href="index.php?quanly=hoadon&ac=lietke&trang=1">1</a></li>';
            echo '<li><a href="index.php?quanly=hoadon&ac=lietke&trang=' . ($numPage - 1) . '"><<</a></li>';
        }
        for ($i = $numPage - 2; $i <= $numPage + 2; $i++) {
            if ($i == $numPage) {
                echo '<li><a href="index.php?quanly=hoadon&ac=lietke&trang=' . $i . '" style="background-color: blue; color:#fff;"> ' . $i . '</a></li>';
            } else if ($i > 0 && $i <= $total_page) {
                echo '<li><a href="index.php?quanly=hoadon&ac=lietke&trang=' . $i . '"> ' . $i . ' </a></li>';
            }
        }
        if ($numPage < $total_page) {
            echo '<li><a href="index.php?quanly=hoadon&ac=lietke&trang=' . ($numPage + 1) . '">>></a></li>';
            echo '<li><a href="index.php?quanly=hoadon&ac=lietke&trang=' . $total_page . '">'.$total_page.'</a></li>';
        }
    }

    public function tt_hoadon($id) {
        $sql = 'SELECT * FROM carts where id_cart = ' . $id;
        if (@$this->select($sql))
            return $this->select($sql)[0];
    }

    public function table_chitiethoadon() {
        if (@$_GET['id_cart']) {
            $sql = 'SELECT * FROM cart_info where id_cart like ' . $_GET['id_cart'];
            if (@$this->select($sql))
                return $this->select($sql);
        }
    }

    public function xoa_CTHD($id) {
        $sql = 'delete FROM cart_info where id_cart like ' . $id;
        if (@$this->select($sql))
            $this->querry($sql);
    }

    public function xoa_HD($id) {
        $sql = 'delete FROM carts where id_cart like ' . $id;
        if (@$this->select($sql))
            $this->querry($sql);
    }

}
