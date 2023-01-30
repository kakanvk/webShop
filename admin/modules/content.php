<div id="content">
    <div class="container-fluid">
        <?php
        if (isset($_GET['quanly']) && isset($_GET['ac'])) {
            $get1 = $_GET['quanly'];
            $get2 = $_GET['ac'];
        } else {
            $get1 = '';
            $get2 = '';
        }
        if (($get1 == 'loaisp') && ($get2 == 'them')) {
            require ('modules/quanlyloaisp/them.php');
        } else if (($get1 == 'loaisp') && ($get2 == 'lietke')) {
            require 'modules/quanlyloaisp/spLietke.php';
            $loai = new spLietke();
            require('modules/quanlyloaisp/lietke.php');
        } else if (($get1 == 'loaisp') && ($get2 == 'sua')) {
            require 'modules/quanlyloaisp/spSua.php';
            $loai = new spSua();
            require('modules/quanlyloaisp/sua.php');
        } else if (($get1 == 'hieusp') && ($get2 == 'them')) {
            require('modules/quanlyhieusp/them.php');
        } else if (($get1 == 'hieusp') && ($get2 == 'lietke')) {
            require 'modules/quanlyhieusp/spLietke.php';
            $hsp = new spLietke();
            require('modules/quanlyhieusp/lietke.php');
        } else if (($get1 == 'hieusp') && ($get2 == 'sua')) {
            require 'modules/quanlyhieusp/spSua.php';
            $hsp = new spSua();
            require('modules/quanlyhieusp/sua.php');
        } else if (($get1 == 'sanpham') && ($get2 == 'them')) {
            include 'modules/quanlysanpham/spThem.php';
            $sp = new spThem();
            require('modules/quanlysanpham/them.php');
        } else if (($get1 == 'sanpham') && ($get2 == 'lietke')) {
            require 'modules/quanlysanpham/spLietke.php';
            $sp = new spLietke();
            require('modules/quanlysanpham/lietke.php');
        } else if (($get1 == 'sanpham') && ($get2 == 'sua')) {
            require 'modules/quanlysanpham/spSua.php';
            $sp = new spSua();
            require('modules/quanlysanpham/sua.php');
        } else if (($get1 == 'tintuc') && ($get2 == 'them')) {
            require('modules/quanlytintuc/them.php');
        } else if (($get1 == 'tintuc') && ($get2 == 'lietke')) {
            require 'modules/quanlytintuc/spLietke.php';
            $tt = new spLietke();
            require('modules/quanlytintuc/lietke.php');
        } else if (($get1 == 'tintuc') && ($get2 == 'sua')) {
            require 'modules/quanlytintuc/spSua.php';
            $tt = new spSua();
            require('modules/quanlytintuc/sua.php');
        } else if (($get1 == 'gallery') && ($get2 == 'them')) {
            require 'modules/gallery/spThem.php';
            $gallery = new spThem();
            require('modules/gallery/them.php');
        } else if (($get1 == 'gallery') && ($get2 == 'lietke')) {
            require 'modules/gallery/spLetKe.php';
            $gallery = new spLietke();
            require('modules/gallery/lietke.php');
        } else if (($get1 == 'gallery') && ($get2 == 'sua')) {
            require 'modules/gallery/spSua.php';
            $gallery = new spSua();
            require('modules/gallery/sua.php');
        } else if (($get1 == 'taikhoan') && ($get2 == 'them')) {
            require('modules/quanlytaikhoan/them.php');
        } else if (($get1 == 'taikhoan') && ($get2 == 'lietke')) {
            require 'modules/quanlytaikhoan/spLietke.php';
            $lk = new spLietke();
            require('modules/quanlytaikhoan/lietke.php');
        } else if (($get1 == 'taikhoan') && ($get2 == 'sua')) {
            require 'modules/quanlytaikhoan/spSua.php';
            $tk = new spSua();
            require('modules/quanlytaikhoan/sua.php');
        } else if (($get1 == 'hoadon') && ($get2 == 'lietke')) {
            require 'modules/quanlyhoadon/spLietke.php';
            $hd = new spLietke();
            require('modules/quanlyhoadon/lietke.php');
        } else if (($get1 == 'admin') && ($get2 == 'xuly')) {
            require 'modules/admin/spXuly.php';
            $xuly = new spXuly();
            require('modules/admin/xuly.php');
        } else {
            require 'modules/dashboard/spDashboard.php';
            $sp = new spDashboard();
            require ('modules/dashboard/dashboard.php');
        }
        ?>
    </div>
</div>
<div class="clear"></div>