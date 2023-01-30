<?php

class loadimg extends DB {

    public function load() {
        $sql = 'SELECT * FROM `images` order by id_image';
        return @$this->select($sql);
    }

    public function row($id) {
        $sql = 'SELECT * FROM images where id_image = ' . $id . ';';
        return @$this->select($sql)[0];
    }

}

$load = new loadimg();
$tb = $load->load();

$quanly = $_GET['quanly'];
$ac = $_GET['ac'];
if (@$_GET['H']) {
    $H = $_GET['H'];
} else {
    $H = "";
}
?>

<div id="images" class="container-fluid">
    <br><h5><strong>Kho ảnh của tôi :)</strong></h5>
    <?php 
    if(isset($_GET['tt'])){
        echo $_GET['tt'];
    }
    ?>
    <!--    <div class="close">
            <span onclick="document.getElementById('images').style.display = 'none'" style="font-size: 2em;" title="Đóng"> &times; </span>
        </div>-->
    <hr>
    <div class="row-fluid">
        <div class="col-md-4 col-sm-4 col-xs-12">
            <form class="form-horizontal" action="<?php echo 'spimages.php?quanly=' . $quanly . '&ac=' . $ac . '&H=' . $H; ?>" method="post" enctype="multipart/form-data">
                <h5><strong>Thêm từ thư viện:</strong></h5>
                <div class="control-group">
                    <label class="control-label">Tên ảnh: </label>
                    <div class="controls">
                        <input type="text" name="name" required="true"/> *
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Chọn file </label>
                    <div class="controls">
                        <input type="file" name="image" title="Thêm hình vào kho" required="true"/> *
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <input type="submit" name="themhinh" value="Lưu lại" class="btn btn-default">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">
            <form class="form-horizontal row-fluid" action="<?php echo 'spimages.php?quanly=' . $quanly . '&ac=' . $ac . '&H=' . $H; ?>" method="post">
                <h5>Đang chọn:</h5>
                <input type="submit" name="chontatca" value="Hoàn tất" class="btn btn-default">
                <input type="submit" name="botatca" value="Bỏ tất cả" class="btn btn-default">
                <input type="submit" name="dong" value="Đóng" class="btn btn-default">
            </form>
            <hr>
            <div class="row-fluid">
                <?php
                $arr = explode("p", $H);
                foreach ($arr as $row):
                    if (!empty($row)):
                        ?>
                        <div class="col-md-2 col-sm-3 col-xs-4" title="Đang chọn hình <?php echo "[" . $load->row($row)['id_image'] . "] " . $load->row($row)['name_image']; ?>">
                            <img src="../public/images/<?php echo $load->row($row)['url_image']; ?>" class="img-responsive"  width="60" height="60">
                        </div>
                        <?php
                    endif;
                endforeach;
                ?>
            </div>
        </div>
    </div>
    <hr>
    <form class="form-horizontal row-fluid" action="<?php echo 'spimages.php?quanly=' . $quanly . '&ac=' . $ac . '&H=' . $H; ?>" method="post">
        <h5><strong>Hình có sẵn:</strong></h5>
        <?php
        if (isset($tb)):
            foreach ($tb as $r):
                ?>
                <div class="form-group col-md-2 col-ms-3 col-xs-4" title="<?php echo $r['name_image']; ?>"> 
                    <div class="col-sm-offset-2 col-sm-10">
                        <center>
                            <img src="../public/images/<?php echo $r['url_image']; ?>" class="img-responsive"  width="180" height="180">
                        </center>
                        <hr>
                        <center><input type="submit" name="IDH" class="btn btn-default" value="<?php echo $r['id_image']; ?>"></center>
                        <center><a href="spimages.php?quanly=<?php echo '' . $quanly . '&ac=' . $ac . '&xoaid=' . $r['id_image'] . '&xoaurl=' . $r['url_image'] . '&H=' . $H; ?>">Xóa hình ảnh này</a></center>
                        <hr>
                    </div>
                </div>
                <?php
            endforeach;
            ?>
        <?php endif; ?>
    </form>
</div>
<link href="../public/css/imgcss.css" rel="stylesheet" type="text/css"/>
<script src="../public/js/imgjs.js" type="text/javascript"></script>
<?php
if ($_GET['f'] == "show") {
    echo "<script>document.getElementById('images').style.display = 'block';</script>";
} else if ($_GET['f'] == "hide") {
    echo "<script>document.getElementById('images').style.display = 'none';</script>";
}
?>
