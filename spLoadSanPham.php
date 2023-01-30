<?php

class phantrangSP extends DB {

    public function count() {
        $sql = 'select * from gallerys';
        $table = $this->select($sql);
        return count($table);
    }

    public function perpage() {
        $sql = 'select * from gallerys';
        $table = $this->select($sql);
        $count_page = count($table);
        $total_page = ceil($count_page / 3);
        $pg = 1;
        if (isset($_GET['trang'])) {
            $pg = $_GET['trang'];
        }
        for ($i = 1; $i <= $total_page; $i++) {
            if ($i == $pg) {
                echo '<a href="index.php?quanly=gallery&ac=lietke&trang=' . $i . '" class="btn btn-success">' . $i . ' </a>';
            } else {
                echo '<a href="index.php?quanly=gallery&ac=lietke&trang=' . $i . '" class="btn ">' . $i . ' </a>';
            }
        }
    }

}

class sanpham extends DB {

    public function row_img($ID_img) {
        $sql = 'select * from images where id_image like '.$ID_img;
        return @$this->select($sql)[0];
    }

    public function danhsachsanphamphantrang($SP_BD, $per) {
        $key = "'%%'";
        if (isset($_GET['key']) && $_GET['key'] != '') {
            $key = "'%" . $_GET['key'] . "%'";
        }
        $type = "'%%'";
        if (isset($_GET['loai']) && $_GET['loai'] != '') {
            $type = "'" . $_GET['loai'] . "'";
        }
        $brand = "'%%'";
        if (isset($_GET['hang']) && $_GET['hang'] != '') {
            $brand = "'" . $_GET['hang'] . "'";
        }
        $sx = "";
        if (isset($_GET['sx'])) {
            if ($_GET['sx'] == 'GiaGiam') {
                $sx = " order by price_product desc ";
            } else if ($_GET['sx'] == 'GiaTang') {
                $sx = " order by price_product asc ";
            } else if ($_GET['sx'] == 'TenGiam') {
                $sx = " order by name_product asc ";
            } else if ($_GET['sx'] == 'TenTang') {
                $sx = " order by name_product desc ";
            }
        }
        $sql = 'select * from products where name_product like ' . $key . ' and id_type like ' . $type . ' and id_brand like ' . $brand . $sx . ' limit ' . $SP_BD . ',' . $per . ';';
        if (@$this->select($sql)) {
            return $this->select($sql);
        }
    }

    public function danhsachsanpham() {
        $key = "'%%'";
        if (isset($_GET['key']) && $_GET['key'] != '') {
            $key = "'%" . $_GET['key'] . "%'";
        }
        $type = "'%%'";
        if (isset($_GET['loai']) && $_GET['loai'] != '') {
            $type = "'" . $_GET['loai'] . "'";
        }
        $brand = "'%%'";
        if (isset($_GET['hang']) && $_GET['hang'] != '') {
            $brand = "'" . $_GET['hang'] . "'";
        }
        $sx = "";
        if (isset($_GET['sx'])) {
            if ($_GET['sx'] == 'GiaGiam') {
                $sx = " order by price_product desc ";
            } else if ($_GET['sx'] == 'GiaTang') {
                $sx = " order by price_product asc ";
            } else if ($_GET['sx'] == 'TenGiam') {
                $sx = " order by name_product asc ";
            } else if ($_GET['sx'] == 'TenTang') {
                $sx = " order by name_product desc ";
            }
        }
        $sql = 'select * from products where  name_product like ' . $key . ' and id_type like ' . $type . ' and id_brand like ' . $brand . $sx . ';';
        if (@$this->select($sql)) {
            return $this->select($sql);
        }
    }

    public function gallary() {
        $sql = 'select * from gallerys';
        if (@$this->select($sql)) {
            return $this->select($sql);
        }
    }

    public function rowSanPham($id) {
        $sql = 'select * from products where id_product = ' . $id;
        if (@$this->select($sql)[0]) {
            return $this->select($sql)[0];
        }
    }

    public function rowLoaiSP($id) {
        $sql = 'select * from types where id_type = ' . $id;
        if (@$this->select($sql)[0]) {
            return $this->select($sql)[0];
        }
    }

    public function rowNSX($id) {
        $sql = 'select * from brands where id_brand = ' . $id;
        if (@$this->select($sql)[0]) {
            return $this->select($sql)[0];
        }
    }

    public function perpage($per, $loai, $hang, $sx, $page, $key) {
        $numPage = 0;
        if (!empty($page)) {
            $numPage = $page;
        } else {
            $numPage = 1;
        }
        if ($numPage == '' || $numPage == 1) {
            $SP_BD = 0;
        } else {
            $SP_BD = ($numPage * $per) - $per;
        }

        $table = $this->danhsachsanpham();
        $count_page = count($table);
        $total_page = ceil($count_page / $per);
        if ($numPage > 1) {
            echo '<li><a href="' . $this->hrefdanhsachsanpham('dsSP', $loai, $hang, $sx, 1, $key) . '">1</a></li>';
            echo '<li><a href="' . $this->hrefdanhsachsanpham('dsSP', $loai, $hang, $sx, ($numPage - 1), $key) . '">&laquo;</a></li>';
        }
        for ($i = $numPage - 2; $i <= $numPage + 2; $i++) {
            if ($i == $numPage) {
                echo '<li><a href="' . $this->hrefdanhsachsanpham('dsSP', $loai, $hang, $sx, $i, $key) . '" style="background-color: blue; color:#fff;"> ' . $i . '</a></li>';
            } else if ($i > 0 && $i <= $total_page) {
                echo '<li><a href="' . $this->hrefdanhsachsanpham('dsSP', $loai, $hang, $sx, $i, $key) . '">' . $i . ' </a></li>';
            }
        }
        if ($numPage < $total_page) {
            echo '<li><a href="' . $this->hrefdanhsachsanpham('dsSP', $loai, $hang, $sx, ($numPage + 1), $key) . '">&raquo;</a></li>';
            echo '<li><a href="' . $this->hrefdanhsachsanpham('dsSP', $loai, $hang, $sx, $total_page, $key) . '">' . $total_page . '</a></li>';
        }
        return $SP_BD;
    }

    public function hrefdanhsachsanpham($ac, $loai, $hang, $sx, $page, $key) {
        if (empty($loai)) {
            $loai = '';
        }
        if (empty($hang)) {
            $hang = '';
        }
        if (empty($sx)) {
            $sx = '';
        }
        if (empty($page)) {
            $page = '';
        }
        if (empty($key)) {
            $key = '';
        }
        return "?ac=$ac&loai=$loai&hang=$hang&sx=$sx&page=$page&key=$key";
    }

    public function hangsanxuat() {
        $sql = 'select * from brands';
        if (@$this->select($sql)) {
            return $this->select($sql);
        }
    }

    public function loaisanpham() {
        $sql = 'select * from types';
        if (@$this->select($sql)) {
            return $this->select($sql);
        }
    }

}
