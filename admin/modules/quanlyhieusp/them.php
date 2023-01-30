<div class="container-fluid ">
    <h3>Thêm nhà sản xuất</h3>
</div>
<div class="widget-box">
    <div class="widget-title">
        <a href="index.php?quanly=hieusp&ac=lietke" class="btn btn-default">
            <i class="icon-table"></i> Liệt kê nhà sản xuất 
        </a>
    </div>
    <div class="widget-content nopadding">
        <form class="form-horizontal" action="modules/quanlyhieusp/xuly.php" method="post" enctype="multipart/form-data">
            <h5>&nbsp;</h5>
            <div class="control-group">
                <label class="control-label">Tên nhà sản xuất : </label>
                <div class="controls">
                    <input name="tenhieusp" type="text" required="true"/> *
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <input type="submit" name="them" value="Thêm mới" class="btn btn-default">
                    <a href="index.php?quanly=hieusp&ac=lietke" class="btn btn-default">Hủy bỏ</a>
                </div>
            </div>
            <h5>&nbsp;</h5>
        </form>
    </div>
</div>
