<div class="container-fluid ">
    <h3>Danh sách Gallery [ <?php echo $gallery->count(); ?> Gallery ]</h3>
</div>
<div class="widget-box">
    <div class="widget-title">
        <a href="index.php?quanly=gallery&ac=them" class="btn btn-default">
            <i class="icon-plus"></i> Thêm Gallery mới
        </a>
    </div>
    <ul class="pagination">
        <?php
        if (@$_GET['trang']) {
            $gallery->perpage($_GET['trang']);
        } else {
            $gallery->perpage(1);
        }
        ?>
    </ul>
    <?php
    if (@$_GET['tt']) {
        echo $_GET['tt'];
    }
    ?>
    <hr>
    <div class="widget-content nopadding">
        <table class="table table-bordered table-striped">
            <tr>
                <td><strong>ID Gallery</strong></td>
                <td><strong>ID Sản phẩm</strong></td>
                <td><strong>Hình ảnh sản phẩm</strong></td>
                <td colspan="2"><strong>Quản lý</strong></td>
            </tr>
            <?php
            $table_gallery = $gallery->table_Gallery($SP_BD);
            foreach ($table_gallery as $row):
                ?>
                <tr>
                    <td><?php echo $row['id_gallery']; ?></td>
                    <td><?php echo $gallery->spGallery($row['id_product'])['name_product']; ?></td>
                    <td><img src="../public/images/<?php echo $gallery->row_gal($gallery->spGallery($row['id_product'])['image_product'])['url_image']; ?>"  width="80" height="80"/></td>
                    <td>
                        <a href="index.php?quanly=gallery&ac=sua&id=<?php echo $row['id_gallery']; ?>" class="btn btn-default">
                            <center>
                                <span class="icon icon-pencil"></span> Sửa
                            </center>
                        </a>
                    </td>
                    <td>
                        <a href="modules/gallery/xuly.php?id=<?php echo $row['id_gallery']; ?>" class="btn btn-default">
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
</div>