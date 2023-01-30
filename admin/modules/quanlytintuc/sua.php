<div class="container-fluid ">
    <h3>Sửa các tin tức</h3>
</div>
<div class="widget-box">
    <div class="widget-title">
        <a href="index.php?quanly=tintuc&ac=lietke" class="btn btn-default">
            <i class="icon-table"></i> Liệt kê các tin đã đăng 
        </a>
    </div>
    <div class="widget-content nopadding">
        <form class="form-horizontal" action="modules/quanlytintuc/xuly.php?id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data">
            <h5>&nbsp;</h5>
            <?php
            $rowTT = $tt->row_Tintuc($_GET['id']);
            ?>
            <div class="control-group">
                <label class="control-label">Tên tin tức : </label>
                <div class="controls">
                    <input name="tentintuc" type="text"  value="<?php echo $rowTT['name_new'] ?>"/> *
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Hình ảnh : </label>
                <div class="controls">
                    <!--<input type="button" onclick="document.getElementById('images').style.display = 'block'" value="Kho ảnh của tôi" class="btn btn-default">-->
                    <input type="hidden" name="file" value="<?php echo @$_GET['H'];?>">
                    <h5>&nbsp;</h5>
                    <div class="row-fluid">
                        <?php
                        $arr = explode("p", @$_GET['H']);
                        foreach ($arr as $r):
                            if (!empty($r)):
                                ?>
                                <div class="col-md-2 col-sm-3 col-xs-4" title="Đang chọn hình <?php echo "[" . $load->row($r)['id_image'] . "] " . $load->row($r)['name_image']; ?>">
                                    <img src="../public/images/<?php echo $load->row($r)['url_image']; ?>" class="img-responsive"  width="60" height="60">
                                </div>
                                <?php
                            endif;
                        endforeach;
                        ?>
                    </div>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Mã tin : </label>
                <div class="controls">
                    <textarea name="matin" type="text" style="width: 90%; height: 25%;"><?php echo $rowTT['hagtag_new'] ?></textarea>*
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Nội dung : </label>
                <div class="controls">
                    <textarea name="noidung" type="text" style="width: 90%; height: 55%;"><?php echo $rowTT['info_new'] ?></textarea> *
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <input type="submit" name="sua" value="Lưu tin tức" class="btn btn-default">
                    <a href="index.php?quanly=tintuc&ac=lietke" class="btn btn-default">Hủy bỏ</a>
                </div>
            </div>
            <h5>&nbsp;</h5>
        </form>
    </div>
</div>
