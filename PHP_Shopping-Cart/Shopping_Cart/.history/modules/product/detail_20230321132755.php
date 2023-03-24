<?php 
    // get_header();
    $id = (int) $_GET['id'];
    // echo $id;
    //Lấy sản phẩm theo id
    $item = get_product_by_id($id);
    // show_array($item);
?>
<div class="content">
    <div class="content-container">
        <?php get_sidebar(); ?>
        <div class="menu-content">
            <div class="detail_product_head">
                <div class="detail_left">
                    <img src="<?php echo $item['product_thumb'] ?>" alt="">
                </div>
                <div class="detail_right">
                    <h3 class="section-title"><?php echo $item['product_title'];?></h3>
                    <p class="price"><?php echo currency_format($item['price']);?></p>
                    <p class="code"><?php echo $item['code'];?></p>
                    <strong>
                        <p class="desc_product">Mô tả sản phẩm:</p>
                        <p class=""><?php echo $item['product_desc'];?></p>
                    </strong>
                    <p></p>
                    <p class="count_product">Số lượng : 1</p>
                    <a href="<?php echo $item['url_add_cart']?>" class="button">Thêm vào giỏ hàng</a>
                </div>
            </div>
            <div class="detail_product_footer">
                <p></p>
                <img src="" alt="">
            </div>
        </div>
    </div>

</div>