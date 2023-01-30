<?php

require '../../DB.php';

class xulyLoaiSP extends DB {

    public function themLoaiSP() {
        if (@$_POST) {
            $tenloaisp = '"' . $_POST['loaisp'] . '"';
            $sql = 'insert into types (name_type) value(' . $tenloaisp . ')';
            if (@$this->querry($sql)) {
                header('location:../../index.php?quanly=loaisp&ac=lietke&tt=<div class="alert alert-success"><strong>Thêm!</strong> Đã thêm loại sản phẩm mới thành công.</div>');
            } else {
                header('location:../../index.php?quanly=loaisp&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
            }
        } else {
            header('location:../../index.php?quanly=loaisp&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
        }
    }

    public function suaLoaiSP() {
        if (isset($_GET['id'])) {
            $id = "'" . $_GET['id'] . "'";
            if (@$_POST) {
                $tenloaisp = '"' . $_POST['loaisp'] . '"';
                $sql = 'update types set name_type =' . $tenloaisp . ' where id_type = ' . $id . '';
                if (@$this->querry($sql)) {
                    header('location:../../index.php?quanly=loaisp&ac=lietke&tt=<div class="alert alert-success"><strong>Sửa!</strong> Đã lưu loại sản phẩm ' . $tenloaisp . ' thành công.</div>');
                } else {
                    header('location:../../index.php?quanly=loaisp&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
                }
            } else {
                header('location:../../index.php?quanly=loaisp&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
            }
        } else {
            header('location:../../index.php?quanly=loaisp&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
        }
    }

    public function xoaLoaiSP() {
        if (isset($_GET['id'])) {
            $id = "'" . $_GET['id'] . "'";
            $sql = 'delete from types where id_type = ' . $id . ';';
            if (@$this->querry($sql)) {
                header('location:../../index.php?quanly=loaisp&ac=lietke&tt=<div class="alert alert-success"><strong>Xóa!</strong> Đã xóa loại sản phẩm ' . $id . ' thành công.</div>');
            } else {
                header('location:../../index.php?quanly=loaisp&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
            }
        } else {
            header('location:../../index.php?quanly=loaisp&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
        }
    }

}

$xlLoaiSP = new xulyLoaiSP();

if (isset($_POST['them'])) {
    $xlLoaiSP->themLoaiSP();
} elseif (isset($_POST['sua'])) {
    $xlLoaiSP->suaLoaiSP();
} else {
    $xlLoaiSP->xoaLoaiSP();
}
