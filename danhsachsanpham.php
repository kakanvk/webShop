<?php require './top_menu.php'; ?>
<div class="">
    <ol class="breadcrumb">
        <li><a href="<?php echo $sp->hrefdanhsachsanpham('dsSP', $_GET['loai'], $_GET['hang'], $_GET['sx'], $_GET['page'], $_GET['key']); ?>">Trang chủ</a></li>
        <li class="active">Danh sách sản phẩm</li>
        <?php
        if (!empty($_GET['loai'])) {
            echo '<li class="active">' . $sp->rowLoaiSP($_GET['loai'])['name_type'] . '</li>';
        }
        if (!empty($_GET['hang'])) {
            echo '<li class="active">' . $sp->rowNSX($_GET['hang'])['name_brand'] . '</li>';
        }
        if (!empty($_GET['sx'])) {
            echo '<li class="active">' . $_GET['sx'] . '</li>';
        }
        if (!empty($_GET['key'])) {
            echo '<li class="active">' . $_GET['key'] . '</li>';
        }
        ?>
    </ol>
    <div class="row">
        <?php
        if (@$sp->danhsachsanphamphantrang($SP_BD, $per)):
            foreach ($sp->danhsachsanphamphantrang($SP_BD, $per) as $rowSP):
                ?>
                <div class="col-md-2 text-center col-sm-4 col-xs-6"  style="height: 300px; width: 250px;">
                    <div class="thumbnail product-box"  style="height: 290px; width: 240px;">
                        <a style="height: 240px; width: 230px;" href="<?php echo $sp->hrefdanhsachsanpham('ctSP', $_GET['loai'], $_GET['hang'], $_GET['sx'], $_GET['page'], $_GET['key']) . '&idSP=' . $rowSP['id_product']; ?>" 
                           class="btn btn-default" role="button" title="<?php echo $rowSP['info_product']; ?>">
                               <?php if ($rowSP['sale_product'] >= $rowSP['price_product']): ?>
                                <span class="offer-text fa fa-bitcoin" style="padding: 5px 10px; border-radius: 3px;"> <?php echo $rowSP['price_product']; ?> K</span>
                            <?php else: ?>
                                <span  class="offer-text2 fa fa-tags" style="padding: 5px 10px; border-radius: 3px;"> <?php echo $rowSP['sale_product']; ?> K</span>
                            <?php endif; ?>
                            <img src="public/images/<?php echo $sp->row_img($rowSP['image_product'])['url_image']; ?>" alt="<?php echo $rowSP['name_product']; ?>" class="img-responsive"/>
                        </a>
                        <a href="<?php echo $sp->hrefdanhsachsanpham('ctSP', $_GET['loai'], $_GET['hang'], $_GET['sx'], $_GET['page'], $_GET['key']) . '&idSP=' . $rowSP['id_product']; ?>"
                           role="button" class="btn btn-default" style="width: 70%;" title="Xem chi tiết . . .">
                               <?php
                               if (strlen($rowSP['name_product']) > 18) {
                                   echo substr($rowSP['name_product'], 0, 18) . '...';
                               } else {
                                   echo $rowSP['name_product'];
                               }
                               ?>
                        </a> 
                        <a href="addCart.php?sl=1&idSP=<?php echo $rowSP['id_product']; ?>" class="btn btn-default" title="Thêm vào giỏ hàng">+</a> 
                    </div>
                </div>
                <?php
            endforeach;
            ?>
            <?php
        else:
            echo '<center>Không có kết quả . . . </center>';
            ?>
        <?php
        endif;
        ?>
    </div>
    <div class="alg-right-pad">
        <ul class="pagination">
            <?php
            $SP_BD = $sp->perpage($per, $_GET['loai'], $_GET['hang'], $_GET['sx'], $_GET['page'], $_GET['key']);
            ?>
        </ul>
    </div>
</div>