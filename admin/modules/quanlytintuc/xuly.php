<?php

require '../../DB.php';

class spXulyTinTuc extends DB {

    public function themTinTuc() {
        if (@$_POST) {
            $tentintuc = "'" . $_POST['tentintuc'] . "'";
            $matin = "'" . $_POST['matin'] . "'";
            $hinhanh = "'" . $_POST['file'] . "'";
            $noidung = "'" . $_POST['noidung'] . "'";
            $sql = 'insert into news (name_new,hagtag_new,image_new,info_new) value(' . $tentintuc . ',' . $matin . ',' . $hinhanh . ',' . $noidung . ');';
            if (@$this->querry($sql)) {
                header('location:../../index.php?quanly=tintuc&ac=lietke&tt=<div class="alert alert-success"><strong>Thêm!</strong> Đã thêm tin tức mới thành công.</div>');
            } else {
                header('location:../../index.php?quanly=taikhoan&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
            }
        }
    }

    public function suaTinTuc() {
        if (isset($_GET['id'])) {
            if (@$_POST) {
                $tentintuc = "'" . $_POST['tentintuc'] . "'";
                $matin = "'" . $_POST['matin'] . "'";
                $noidung = "'" . $_POST['noidung'] . "'";
            }
            $id = "'" . $_GET['id'] . "'";
            if ($hinhanh != "''") {
                $sql = 'update news set name_new=' . $tentintuc . ',hagtag_new=' . $matin . ',info_new=' . $noidung . ' where id_new=' . $id . ';';
            } else {
                $sql = 'update news set name_new=' . $tentintuc . ',hagtag_new=' . $matin . ',info_new=' . $noidung . ' where id_new=' . $id . ';';
            }
            if (@$this->querry($sql)) {
                header('location:../../index.php?quanly=tintuc&ac=lietke&tt=<div class="alert alert-success"><strong>Sửa!</strong> Đã lưu chỉnh sửa tin tức ' . $tentintuc . ' thành công.</div>');
            } else {
                header('location:../../index.php?quanly=taikhoan&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
            }
        } else {
            header('location:../../index.php?quanly=taikhoan&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
        }
    }

    public function xoaTinTuc() {
        if (isset($_GET['id'])) {
            $sql = "delete from news where id_new like '" . $_GET['id'] . "';";
            if (@$this->querry($sql)) {
                header('location:../../index.php?quanly=tintuc&ac=lietke&tt=<div class="alert alert-success"><strong>Xóa!</strong> Đã xóa tin tức ' . $tentintuc . ' thành công.</div>');
            }
        } else {
            header('location:../../index.php?quanly=taikhoan&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
        }
    }

}

$xulyTinTuc = new spXulyTinTuc();

if (isset($_POST['them'])) {
    $xulyTinTuc->themTinTuc();
} else if (isset($_POST['sua'])) {
    $xulyTinTuc->suaTinTuc();
} else {
    $xulyTinTuc->xoaTinTuc();
}

