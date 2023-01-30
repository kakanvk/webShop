<div class="container-fluid">
    <?php if (isset($_GET['ac'])): ?>
        <?php
        if ($_GET['ac'] == 'dsSP') {
            require './danhsachsanpham.php';
        } else if ($_GET['ac'] == 'ctSP') {
            require './chitietsanpham.php';
        }
        ?>
    <?php else: ?>
        <?php
        require './danhsachsanpham.php';
        ?>
    <?php endif;
    ?>
</div>