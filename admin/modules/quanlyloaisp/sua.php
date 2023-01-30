<div class="container-fluid ">
    <h3>Sửa loại sản phẩm</h3>
</div>
<?php
$row = $loai->row_Loai($_GET['id']);
?>
<div class="widget-box">
    <div class="widget-title">
        <a href="index.php?quanly=loaisp&ac=lietke" class="btn btn-default">
            <i class="icon-table"></i> Liệt kê loại sản phẩm 
        </a>
    </div>
    <div class="widget-content nopadding">
        <form class="form-horizontal" action="modules/quanlyloaisp/xuly.php?id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data">
            <h5>&nbsp;</h5>
            <div class="control-group">
                <label class="control-label">Tên loại sản phẩm : </label>
                <div class="controls">
                    <input type="text" name="loaisp" value="<?php echo $row['name_type'] ?>"/> *
                </div>
            </div>
            <h5>&nbsp;</h5>
            <div class="control-group">
                <div class="controls">
                    <input type="submit" name="sua" value="Lưu lại" class="btn btn-default">
                    <a href="index.php?quanly=loaisp&ac=lietke" class="btn btn-default">Hủy bỏ</a>
                </div>
            </div>
            <h5>&nbsp;</h5>
        </form>
    </div>
</div>

