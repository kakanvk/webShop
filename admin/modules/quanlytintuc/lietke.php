<div class="container-fluid ">
    <h3>Danh sách tin tức [ <?php echo $tt->count(); ?> Tin mới ]</h3>
</div>
<div class="widget-box">
    <div class="widget-title" > 
        <a href="index.php?quanly=tintuc&ac=them" class="btn btn-default">
            <i class="icon-plus"></i> Thêm tin tức mới 
        </a>
    </div>
</div>
<div class="widget-content nopadding">
    <ul class="pagination ">
        <?php
        if (@$_GET['trang']) {
            $tt->perpage($_GET['trang']);
        } else {
            $tt->perpage(1);
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
            <td><strong>Mã sản phẩm</strong></td>
            <td><strong>Nội dung</strong></td>
            <td><strong>Hình ảnh</strong></td>
            <td colspan="2"><strong>Quản lý</strong></td>
        </tr>
        <?php
        $tbTT = $tt->table_Tintuc($SP_BD);
        foreach ($tbTT as $row):
            ?>
            <tr>
                <td><?php echo $row['id_new']; ?></td>
                <td><?php echo $row['name_new'] ?></td>
                <td><?php echo $row['hagtag_new'] ?></td>
                <td><?php echo $row['info_new'] ?></td>
                <td><img src="../public/images/<?php echo $tt->row_img($row['image_new'])['url_image']; ?>" width="80" height="80" /></td>
                <td>
                    <a  href="index.php?quanly=tintuc&ac=sua&id=<?php echo $row['id_new'] ?>&H=<?php echo $row['image_new'] ?>" class="btn btn-default">
                        <center>
                            <span class="icon icon-pencil"></span> Sửa
                        </center>
                    </a>
                </td>
                <td>
                    <a href="modules/quanlytintuc/xuly.php?id=<?php echo $row['id_new'] ?>" class="btn btn-default">
                        <center>
                            <span class="icon icon-cut"></span> Xóa
                        </center>
                    </a>
                </td>
            </tr>
            <?php
        endforeach;
        ?>
    </table>
</div>