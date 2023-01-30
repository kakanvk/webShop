<div class="container-fluid">
    <h3>Danh sách Hóa đơn [ <?php echo $hd->count(); ?> Đơn đặt hàng ]</h3>
</div>
<div class="widget-box">
    <div class="widget-content nopadding">
        <ul class="pagination ">
            <?php
            if (@$_GET['trang']) {
                $hd->perpage($_GET['trang']);
            } else {
                $hd->perpage(1);
            }
            ?>
        </ul>
        <?php
        if (@$_GET['tt']) {
            echo $_GET['tt'];
        }
        ?>
        <hr>
        <table class="table table-bordered table-striped">
            <tr>
                <td><strong>ID hóa đơn</strong></td>
                <td><strong>Tên khách hàng</strong></td>
                <td><strong>Ngày đặt hàng</strong></td>
            </tr>
            <?php
            if (empty($_GET['id_cart'])) {
                $_GET['id_cart'] = 0;
            }
            if (@$hd->table_hoadon($SP_BD)):
                foreach ($hd->table_hoadon($SP_BD) as $row):
                    ?>
                    <tr>
                        <td>
                            <a href="index.php?quanly=hoadon&ac=lietke&trang=<?php echo $_GET['trang']; ?>&id_cart=<?php echo $row[0]; ?>" class="btn btn-info">
                                <center>
                                    <?php
                                    if ($_GET['id_cart'] == $row[0]):
                                        ?>
                                        <span class="icon icon-check"></span> <?php echo $row[0]; ?>
                                    <?php else: ?>
                                        <span class="icon icon-check-empty"></span> <?php echo $row[0]; ?>
                                    <?php endif; ?>
                                </center>
                            </a>
                        </td>
                        <td><?php echo $row[1]; ?></td>
                        <td><?php echo $row[2]; ?></td>
                    </tr>
                    <?php
                endforeach;
            endif;
            ?>
        </table>
    </div>
</div>
<div class="container-fluid ">
    <h5>
        <span>
            <span class="icon icon-info-sign"></span>
            <?php echo $hd->tt_hoadon($_GET['id_cart'])[0]; ?>,
            <span class="icon icon-inbox"></span>
            <?php echo $hd->tt_hoadon($_GET['id_cart'])[1]; ?>,
            <span class="icon icon-time"></span>
            <?php echo $hd->tt_hoadon($_GET['id_cart'])[2]; ?>
        </span>
        <br>
        <a href="index.php?quanly=hoadon&ac=lietke&xoaHD=<?php echo $hd->tt_hoadon($_GET['id_cart'])[0]; ?>" class="btn btn-default">
            <center>
                <span class="icon icon-cut"></span> Xóa hóa đơn #<?php echo $hd->tt_hoadon($_GET['id_cart'])[0]; ?>
            </center>
        </a>
    </h5>
</div>
<div class="widget-box container">
    <div class="widget-content nopadding">
        <table class="table table-bordered table-striped">
            <tr>
                <td><strong>Mã SP đặt</strong></td>
                <td><strong>Sản phẩm</strong></td>
                <td><strong>Số lượng</strong></td>
                <td><strong>Giá</strong></td>
                <td><strong>Tùy chọn</strong></td>
            </tr>
            <?php
            if (@$hd->table_chitiethoadon())
                foreach ($hd->table_chitiethoadon() as $r):
                    ?>
                    <tr>
                        <td><?php echo $r[0]; ?></td>
                        <td><?php echo $r[2]; ?></td>
                        <td><?php echo $r[3]; ?></td>
                        <td><?php echo $r[4]; ?></td>
                        <td>
                            <a href="index.php?quanly=hoadon&ac=lietke&xoaCTHD=<?php echo $r[0]; ?>" class="btn btn-default">
                                <center>
                                    <span class="icon icon-cut"></span> Chỉ xóa SP này
                                </center>
                            </a>
                        </td>
                    </tr>
                    <?php
                endforeach;
            ?>
            <?php
            if (isset($_GET['xoaCTHD'])) {
                $hd->xoa_CTHD($_GET['xoaCTHD']);
            }
            if (isset($_GET['xoaHD'])) {
                $hd->xoa_HD($_GET['xoaHD']);
            }
            ?>
        </table>
    </div>
</div>