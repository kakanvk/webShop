<div class="container-fluid ">
    <h3>Danh sách loại sản phẩm [ <?php echo $loai->count(); ?> Loại ]</h3>
</div>
<div class="widget-box">
    <div class="widget-title"> 
        <a href="index.php?quanly=loaisp&ac=them" class="btn btn-default">
            <i class="icon-plus"></i> Thêm nhà loại sản phẩm mới 
        </a>
    </div>
    <div class="widget-content nopadding">
        <ul class="pagination ">
            <?php
            if (@$_GET['trang']) {
                $loai->perpage($_GET['trang']);
            } else {
                $loai->perpage(1);
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
                <td><strong>Tên loại sản phẩm</strong></td>
                <td colspan="2"><strong>Quản lý</strong></td>
            </tr>
            <?php
            $tbLoai = $loai->table_loai($SP_BD);
            foreach ($tbLoai as $row):
                ?>
                <tr>
                    <td><?php echo $row['id_type']; ?></td>
                    <td><?php echo $row['name_type'] ?></td>
                    <td>
                        <a href="index.php?quanly=loaisp&ac=sua&id=<?php echo $row['id_type'] ?>" class="btn btn-default">
                            <center>
                                <span class="icon icon-pencil"></span> Sửa
                            </center>
                        </a>
                    </td>
                    <td>
                        <a href="modules/quanlyloaisp/xuly.php?id=<?php echo $row['id_type'] ?>" class="btn btn-default">
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