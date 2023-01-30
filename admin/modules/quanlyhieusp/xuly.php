<?php

require '../../DB.php';

class spXulyHSP extends DB {

    public function themHSP() {
        if (@$_POST) {
            $tenhieusp = '"' . $_POST['tenhieusp'] . '"';
            $sql = 'insert into brands (id_brand,name_brand) value(null,' . $tenhieusp . ')';
            if (@$this->querry($sql)) {
                header('location:../../index.php?quanly=hieusp&ac=lietke&tt=<div class="alert alert-success"><strong>Thêm!</strong> Đã thêm nhà sản xuất mới thành công.</div>');
            } else {
                header('location:../../index.php?quanly=hieusp&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
            }
        } else {
            header('location:../../index.php?quanly=hieusp&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
        }
    }

    public function suaHSP() {
        if (isset($_GET['id'])) {
            $tenhieusp = '"' . $_POST['tenhieusp'] . '"';
            $id = "'" . $_GET['id'] . "'";
            if (@$_POST) {
                $sql = 'update brands set name_brand = ' . $tenhieusp . ' where id_brand like ' . $id . '';
                if (@$this->querry($sql)) {
                    $this->querry($sql);
                    header('location:../../index.php?quanly=hieusp&ac=lietke&tt=<div class="alert alert-success"><strong>Sửa!</strong> Đã lưu nhà sản xuất ' . $id . ' mới thành công.</div>');
                } else {
                    header('location:../../index.php?quanly=hieusp&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
                }
            } else {
                header('location:../../index.php?quanly=hieusp&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
            }
        } else {
            header('location:../../index.php?quanly=hieusp&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
        }
    }

    public function xoaHSP() {
        if (isset($_GET['id'])) {
            $id = "'" . $_GET['id'] . "'";
            $sql = 'delete from brands where id_brand like ' . $id . ';';
            if (@$this->querry($sql)) {
                $this->querry($sql);
                header('location:../../index.php?quanly=hieusp&ac=lietke&tt=<div class="alert alert-success"><strong>Xóa!</strong> Đã xóa nhà sản xuất ' . $id . ' mới thành công.</div>');
            } else {
                header('location:../../index.php?quanly=hieusp&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
            }
        } else {
            header('location:../../index.php?quanly=hieusp&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
        }
    }

}

$xulyHSP = new spXulyHSP();

if (isset($_POST['them'])) {
    $xulyHSP->themHSP();
} elseif (isset($_POST['sua'])) {
    $xulyHSP->suaHSP();
} else {
    $xulyHSP->xoaHSP();
}
