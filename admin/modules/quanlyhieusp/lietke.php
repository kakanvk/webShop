<div class="container-fluid ">
    <h3>Danh sách nhà sản xuất [ <?php echo $hsp->count(); ?> Nhà sản xuất ]</h3>
</div>
<div class="widget-box">
    <div class="widget-title">
        <a href="index.php?quanly=hieusp&ac=them" class="btn btn-default">
            <i class="icon-plus"></i> Thêm nhà sản xuất mới
        </a>
    </div>
    <div class="widget-content nopadding">
        <ul class="pagination ">
            <?php
            if (@$_GET['trang']) {
                $hsp->perpage($_GET['trang']);
            } else {
                $hsp->perpage(1);
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
                <td><strong>Tên nhà sản xuất</strong></td>
                <td colspan="2"><strong>Quản lý</strong></td>
            </tr>
            <?php
            $tabhsp = $hsp->table_hieusp($SP_BD);
            foreach ($tabhsp as $row):
                ?>
                <tr>
                    <td><?php echo $row['id_brand'] ?></td>
                    <td><?php echo $row['name_brand'] ?></td>
                    <td>
                        <a href="index.php?quanly=hieusp&ac=sua&id=<?php echo $row['id_brand'] ?>" class="btn btn-default">
                            <center>
                                <span class="icon icon-pencil"></span> Sửa
                            </center>
                        </a>
                    </td>
                    <td>
                        <a href="modules/quanlyhieusp/xuly.php?id=<?php echo $row['id_brand'] ?>" class="btn btn-default">
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