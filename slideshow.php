<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner"  style="height: 150px;">
        <div class="item active">
            <center>
                <?php require './quangcao1.php'; ?>
            </center>
        </div>
        <?php
        if (@$gallary = $sp->gallary()):
            foreach ($gallary as $r):
                $product = $sp->rowSanPham($r['id_product']);
                ?>
                <div class="item">
                    <center>
                        <img style="width: auto; height: 130px;" src="public/images/<?php echo $sp->row_img($product['image_product'])['url_image']; ?>" alt="<?php echo $product['name_product']; ?>">
                        <br>
                        <a href="index.php?ac=ctSP&idSP=<?php echo $product['id_product']; ?>">
                            <?php echo $product['name_product']; ?>
                            <?php echo $product['sale_product']; ?> K
                        </a>
                    </center>
                </div>
                <?php
            endforeach;
        else :
            ?>
            <div class="item active">
                <center>
                    <?php require './quangcao1.php'; ?>
                </center>
            </div>
        <?php
        endif;
        ?>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Trước</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Tiếp</span>
    </a>
</div>
