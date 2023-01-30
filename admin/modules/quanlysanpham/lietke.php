<div class="container-fluid ">
    <h3>Danh sách sản phẩm [ <?php echo $sp->count(); ?> Sản phẩm ]</h3>
</div>
<div class="widget-box">
    <div class="widget-title"> 
        <a href="index.php?quanly=sanpham&ac=them" class="btn btn-default">
            <i class="icon-plus"></i> Thêm sản phẩm mới 
        </a> 
    </div>
</div>
<div class="widget-content nopadding">
    <ul class="pagination ">
        <?php
        if (@$_GET['trang']) {
            $sp->perpage($_GET['trang']);
        } else {
            $sp->perpage(1);
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
            <td><strong>ID</strong></td>
            <td><strong>Tên sản phẩm</strong></td>
            <td><strong>Hình ảnh</strong></td>
            <td><strong>Mô tả</strong></td>
            <td><strong>Giá đề xuất</strong></td>
            <td><strong>Giá giảm</strong></td>
            <td><strong>Số lượng</strong></td>
            <td><strong>Loại hàng</strong></td>
            <td><strong>Nhà sản xuất</strong></td>
            <td colspan="2"><strong>Quản lý</strong></td>
        </tr>
        <?php
        $tbSP = $sp->table_SanPham($SP_BD);
        foreach ($tbSP as $row):
            ?>
            <tr>
                <td><?php echo $row['id_product']; ?></td>
                <td><?php echo $row['name_product']; ?></td>
                <td>
                    <?php
                    $arr = explode("p", $row['image_product']);
                    foreach ($arr as $r):
                        if (!empty($r)):
                            ?>
                            <img src="../public/images/<?php echo $load->row($r)['url_image']; ?>" class="img-responsive"  width="60" height="60"><br>
                            <?php
                        endif;
                    endforeach;
                    ?>
                </td>
                <td><?php echo $row['info_product']; ?></td>
                <td><?php echo $row['price_product']; ?></td>
                <td><?php echo $row['sale_product']; ?></td>
                <td><?php echo $row['sl_product']; ?></td>
                <td><?php echo $sp->row_loai($row['id_type'])['name_type']; ?></td>
                <td><?php echo $sp->row_nsx($row['id_brand'])['name_brand']; ?></td>
                <td>
                    <a href="index.php?quanly=sanpham&ac=sua&id=<?php echo $row['id_product'] ?>&H=<?php echo $row['image_product'] ?>" class="btn btn-default">
                        <center>
                            <span class="icon icon-pencil"></span> Sửa
                        </center>
                    </a>
                </td>
                <td>
                    <a href="modules/quanlysanpham/xuly.php?id=<?php echo $row['id_product'] ?>" class="btn btn-default">
                        <center>
                            <span class="icon icon-cut"></span>Xóa
                        </center>
                    </a>
                </td>
            </tr>
            <?php
        endforeach;
        ?>
    </table>
</div>
</div>

