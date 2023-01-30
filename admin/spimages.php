<?php

require './DB.php';

class spImage extends DB {

    public function addImg() {
        if (isset($_POST['themhinh'])) {
            $name = "'" . $_POST['name'] . "'";
            $hinhanh = "'" . $_FILES['image']['name'] . "'";
            $hinhanh_tmp = $_FILES['image']['tmp_name'];
            if (file_exists("../public/images/" . $_FILES['image']['name'])) {
                return '<div class="alert alert-danger"><strong>ERR!</strong> Hình tồn tại.</div>';
            } else {
                @move_uploaded_file($hinhanh_tmp, '../public/images/' . $_FILES['image']['name']);
                $sql = 'INSERT INTO images (`id_image`, `name_image`, `url_image`) VALUES (NULL, ' . $name . ', ' . $hinhanh . ');';
                @$this->select($sql);
                return '<div class="alert alert-success"><strong>OK!</strong> Đã thêm.</div>';
            }
        }
    }

    public function delImg() {
        if (isset($_GET['xoaid'])) {
            $hinhanh = "../public/images/" . $_GET['xoaurl'];
            @unlink($hinhanh);
            $sql = "delete from images where id_image like '" . $_GET['xoaid'] . "';";
            $this->querry($sql);
            return '<div class="alert alert-success"><strong>OK!</strong> Đã xóa.</div>';
        }
    }

    public function checkisset() {
        $a = explode("p", $_GET['H']);
        foreach ($a as $r) {
            if (!empty($r)) {
                if ($r == $_POST['IDH']) {
                    return FALSE;
                }
            }
        }
        return TRUE;
    }

}

$spimg = new spImage();

$quanly = $_GET['quanly'];
$ac = $_GET['ac'];


//Them mot hinh len server
if (isset($_POST['themhinh'])) {
    header('location: index.php?quanly=' . $quanly . '&ac=' . $ac . '&f=show&tt=' . $spimg->addImg());
}

//xoa hinh khoi server
if (isset($_GET['xoaid'])) {
    header('location: index.php?quanly=' . $quanly . '&ac=' . $ac . '&f=show&tt=' . $spimg->delImg());
}

//chon them hinh co san
if (isset($_POST['IDH'])) {
    if (empty($_GET['H'])) {
        $arr = $_POST['IDH'];
    } else {
        if ($spimg->checkisset()) {
            $arr = $_POST['IDH'] . "p" . $_GET['H'];
        }else {
            $arr = $_GET['H'];
        }
    }
    header('location: index.php?quanly=' . $quanly . '&ac=' . $ac . '&f=show&H=' . $arr);
}

//bo chon tat ca cac hinh
if (isset($_POST['botatca'])) {
    header('location: index.php?quanly=' . $quanly . '&f=show&ac=' . $ac . '');
}

//ok
if (isset($_POST['chontatca'])) {

    header('location: index.php?quanly=' . $quanly . '&ac=' . $ac . '&f=hide&H=' . $_GET['H']);
}

//thoat
if (isset($_POST['dong'])) {
    header('location: index.php?quanly=' . $quanly . '&ac=' . $ac . '&f=hide&H=' . $_GET['H']);
}