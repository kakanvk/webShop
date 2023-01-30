<?php

require '../../DB.php';

class spXulyGallery extends DB {

    public function themGallery() {
        if (@$_POST) {
            if (isset($_POST['chonmasp'])) {
                $chonmasp = "'" . $_POST['chonmasp'] . "'";
            } else {
                header('location:../../index.php?quanly=gallery&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
            }
            $sql = 'insert into gallerys (id_product) value(' . $chonmasp . ')';
            if (@$this->querry($sql)) {
                header('location:../../index.php?quanly=gallery&ac=lietke&tt=<div class="alert alert-success"><strong>Thêm!</strong> Đã thêm Gallery mới thành công.</div>');
            } else {
                header('location:../../index.php?quanly=gallery&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
            }
        } else {
            header('location:../../index.php?quanly=gallery&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
        }
    }

    public function suaGallery() {
        if (isset($_GET['id'])) {
            $id = "'" . $_GET[id] . "'";
            if (isset($_POST['chonmasp'])) {
                $chonmasp = "'" . $_POST['chonmasp'] . "'";
            } else {
                header('location:../../index.php?quanly=gallery&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
            }
            $sql = 'update gallerys set id_product = ' . $chonmasp . ' where id_gallery = ' . $id . '';
            if (@$this->querry($sql)) {
                header('location:../../index.php?quanly=gallery&ac=lietke&tt=<div class="alert alert-success"><strong>Sửa!</strong> Đã sửa Gallery ' . $id . ' thành công.</div>');
            } else {
                header('location:../../index.php?quanly=gallery&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
            }
        } else {
            header('location:../../index.php?quanly=gallery&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
        }
    }

    public function xoaGallery() {
        if (isset($_GET['id'])) {
            $id = "'" . $_GET[id] . "'";
            $sql = 'delete from gallerys where id_gallery = ' . $id . ';';
            if (@$this->querry($sql)) {
                header('location:../../index.php?quanly=gallery&ac=lietke&tt=<div class="alert alert-success"><strong>Xóa!</strong> Đã xóa Gallery ' . $id . ' thành công.</div>');
            } else {
                header('location:../../index.php?quanly=gallery&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
            }
        } else {
            header('location:../../index.php?quanly=gallery&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
        }
    }

}

$xulyGallery = new spXulyGallery();

if (isset($_POST['them'])) {
    $xulyGallery->themGallery();
} else if (isset($_POST['suasp'])) {
    $xulyGallery->suaGallery();
} else {
    $xulyGallery->xoaGallery();
}
