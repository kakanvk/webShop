<div class="container-fluid ">
    <h3>Thêm Tài khoản mới</h3>
</div>
<div class="widget-box">
    <div class="widget-title">
        <a href="index.php?quanly=taikhoan&ac=lietke" class="btn btn-default">
            <i class="icon-table"></i> Hiển thị danh sách tài khoản 
        </a>
    </div>
    <div class="widget-content nopadding">
        <form class="form-horizontal" action="modules/quanlytaikhoan/xuly.php" method="post" enctype="multipart/form-data">
            <h5>&nbsp;</h5>
            <div class="control-group">
                <label class="control-label">Tên tài khoản : </label>
                <div class="controls">
                    <input type="text" name="tenkhachhang">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Email : </label>
                <div class="controls">
                    <input type="email" name="email">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Mật khẩu : </label>
                <div class="controls">
                    <input type="text" name="matkhau">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Số điện thoại : </label>
                <div class="controls">
                    <input type="text" name="dienthoai">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Địa chỉ nhận : </label>
                <div class="controls">
                    <input type="text" name="diachinhan">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Số dư : </label>
                <div class="controls">
                    <input type="tel" name="sodu">
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <input type="submit" name="them" value="Thêm mới" class="btn btn-default">
                    <a href="index.php?quanly=taikhoan&ac=lietke" class="btn btn-default">Hủy bỏ</a>
                </div>
            </div>
            <h5>&nbsp;</h5>
        </form>
    </div>
</div>
