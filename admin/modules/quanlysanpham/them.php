<div class="container-fluid ">
    <h3>Thêm sản phẩm</h3>
</div>
<div class="widget-box" >
    <div class="widget-title">
        <a href="index.php?quanly=sanpham&ac=lietke" class="btn btn-default">
            <i class="icon-table"></i>
            Liệt kê sản phẩm 
        </a>
    </div>
    <div class="widget-content nopadding">
        <form class="form-horizontal" action="modules/quanlysanpham/xuly.php" method="post" enctype="multipart/form-data">
            <h5>&nbsp;</h5>
            <div class="control-group">
                <label class="control-label">Tên sản phẩm : </label>
                <div class="controls">
                    <input name="tensp" type="text"> *
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Hình ảnh : </label>
                <div class="controls">
                    <input type="button" onclick="document.getElementById('images').style.display = 'block'" value="Kho ảnh của tôi" class="btn btn-default">
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
                <label class="control-label">Nội dung : </label>
                <div class="controls">
                    <textarea name="noidung" style="width: 90%; height: 15%;" ></textarea> *
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Số lượng : </label>
                <div class="controls">
                    <input type="text" name="soluong" placeholder="Số lượng nhập"> *
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Giá đề xuất : </label>
                <div class="controls">
                    <input type="text" name="giadexuat" placeholder="Đơn giá ban đầu"/> *
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Giá giảm : </label>
                <div class="controls">
                    <input type="text" name="giagiam" placeholder="Giá sau khi giảm"/> *
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Loại sản phẩm : </label>
                <div class="controls">
                    <select name="loaisp">
                        <?php
                        $tb_loai = $sp->table_Loai();
                        foreach ($tb_loai as $r):
                            ?>
                            <option value="<?php echo $r['id_type'] ?>"><?php echo $r['name_type'] ?></option>
                            <?php
                        endforeach;
                        ?>
                    </select> *
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Tên nhà sản xuất : </label>
                <div class="controls">
                    <select name="nhasx">
                        <?php
                        $tb_nsx = $sp->table_NSX();
                        foreach ($tb_nsx as $r):
                            ?>
                            <option value="<?php echo $r['id_brand'] ?>"><?php echo $r['name_brand'] ?></option>
                            <?php
                        endforeach;
                        ?>
                    </select> *
                </div>
            </div>
            <div class="control-group align-center">
                <div class="controls">
                    <input type="submit" name="them" value="Thêm mới" class="btn btn-default">
                    <a href="index.php?quanly=sanpham&ac=lietke" class="btn btn-default">Hủy bỏ</a>
                </div>
            </div>
            <h5>&nbsp;</h5>
        </form>
    </div>
</div>