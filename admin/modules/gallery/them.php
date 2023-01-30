<div class="container-fluid ">
    <h3>Thêm Gallery</h3>
</div>
<div class="widget-box">
    <div class="widget-title"> 
        <a href="index.php?quanly=gallery&ac=lietke" class="btn btn-default">
            <i class="icon-table"></i> Hiển thị gallery 
        </a>
    </div>
    <div class="widget-content nopadding">
        <form class="form-horizontal" action="modules/gallery/xuly.php" method="post" enctype="multipart/form-data">
            <h5>&nbsp;</h5>
            <div class="control-group">
                <label class="control-label">Chọn sản phẩm : </label>
                <div class="controls">
                    <select name="chonmasp" required="true">
                        <?php
                        $table_sp = $gallery->table_SP();
                        foreach ($table_sp as $r):
                            ?>
                            <option value="<?php echo $r['id_product']; ?>"><?php echo $r['name_product']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <input type="submit" name="them" value="Thêm mới" class="btn btn-default">
                    <a href="index.php?quanly=gallery&ac=lietke" class="btn btn-default">Hủy bỏ</a>
                </div>
            </div>
            <h5>&nbsp;</h5>
        </form>
    </div>
</div>
