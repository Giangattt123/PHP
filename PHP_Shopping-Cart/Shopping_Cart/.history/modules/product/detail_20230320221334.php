<?php 
    $id = (int) $_GET['id'];
    // echo $id;
    //Lấy sản phẩm theo id
    $item = get_product_by_id($id);
    show_array($item);
?>
<div class="content">
    <div class="content-container">
        <?php get_sidebar(); ?>
    </div>
    <div class="menu-content">
        <div class="detail_product_head">
            <div class="detail_left">
                <img src="" alt="">
            </div>
            <div class="detail_right">
                <h3 class="title"><?php echo $item['product_title'];?></h3>
                <p class="price"></p>
                <p class="code"></p>
                <strong>
                    <p class="desc_product"></p>
                </strong>
                <p></p>
                <p class="count_product">1</p>
                <button>Thêm vào giỏ hàng</button>
            </div>
        </div>
        <div class="detail_product_footer">
            <p></p>
            <img src="" alt="">
        </div>
    </div>
</div>