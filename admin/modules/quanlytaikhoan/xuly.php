<?php

require '../../DB.php';

class spXulyTaiKhoan extends DB {

    public function themTaiKhoan() {
        if (@$_POST) {
            $tenkhachhang = "'" . $_POST['tenkhachhang'] . "'";
            $email = "'" . $_POST['email'] . "'";
            $matkhau = "'" . $_POST['matkhau'] . "'";
            $dienthoai = "'" . $_POST['dienthoai'] . "'";
            $diachinhan = "'" . $_POST['diachinhan'] . "'";
            $sodu = "'" . $_POST['sodu'] . "'";
            $sql = 'insert into accounts (user_account,email_account,pass_account,phone_account,address_account,balance_account) value(' . $tenkhachhang . ',' . $email . ',' . $matkhau . ',' . $dienthoai . ',' . $diachinhan . ',' . $sodu . ')';
            if (@$this->querry($sql)) {
                header('location:../../index.php?quanly=taikhoan&ac=lietke&tt=<div class="alert alert-success"><strong>Thêm!</strong> Đã thêm tài khoản mới thành công.</div>');
            } else {
                header('location:../../index.php?quanly=taikhoan&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
            }
        }
    }

    public function suaTaiKhoan() {
        if (isset($_GET['id'])) {
            $tenkhachhang = "'" . $_POST['tenkhachhang'] . "'";
            $email = "'" . $_POST['email'] . "'";
            $matkhau = "'" . $_POST['matkhau'] . "'";
            $dienthoai = "'" . $_POST['dienthoai'] . "'";
            $diachinhan = "'" . $_POST['diachinhan'] . "'";
            $sodu = "'" . $_POST['sodu'] . "'";
            $id = "'" . $_GET['id'] . "'";
            $sql = 'update accounts set email_account = ' . $email . ',pass_account = ' . $matkhau . ',phone_account = ' . $dienthoai . ',address_account = ' . $diachinhan . ',balance_account = ' . $sodu . ' where user_account like ' . $id . '';
            if (@$this->querry($sql)) {
                header('location:../../index.php?quanly=taikhoan&ac=lietke&tt=<div class="alert alert-success"><strong>Sửa!</strong> Đã sửa tài khoản ' . $tenkhachhang . ' thành công.</div>');
            } else {
                header('location:../../index.php?quanly=taikhoan&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
            }
        } else {
            header('location:../../index.php?quanly=taikhoan&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
        }
    }

    public function xoaTaiKhoan() {
        if (isset($_GET['id'])) {
            $sql = "delete from accounts where user_account like '" . $_GET['id'] . "';";
            if (@$this->querry($sql)) {
                header('location:../../index.php?quanly=taikhoan&ac=lietke&tt=<div class="alert alert-success"><strong>Xóa!</strong> Đã xóa tài khoản thành công.</div>');
            } else {
                header('location:../../index.php?quanly=taikhoan&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
            }
        } else {
            header('location:../../index.php?quanly=taikhoan&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
        }
    }

}

$xulyTaiKhoan = new spXulyTaiKhoan();

if (isset($_POST['them'])) {
    $xulyTaiKhoan->themTaiKhoan();
} else if (isset($_POST['sua'])) {
    $xulyTaiKhoan->suaTaiKhoan();
} else {
    $xulyTaiKhoan->xoaTaiKhoan();
}
