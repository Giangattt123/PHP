<!-- <?php 
 get_sidebar();
?> -->
<!-- <div class="content">
    <div class="content-container">
        <div class="menu-select">
            <ul class="menu">
                <li class="menu-item">
                    <a href="" class="cards" onclick="toggleActive(this)">Trang chủ</a>
                </li>
                <li class="menu-item">
                    <a href="?mod=page&act=detail&id=1" class="cards" onclick="toggleActive(this)">Giới thiệu</a>
                </li>
                <li class="menu-item">
                    <a href="" class="cards" onclick="toggleActive(this)">Laptop</a>
                </li>
                <li class="menu-item">
                    <a href="" class="cards" onclick="toggleActive(this)">Điện thoại</a>
                </li>
                <li class="menu-item">
                    <a href="?mod=page&act=detail&id=2" class="cards" onclick="toggleActive(this)">Liên hệ</a>
                </li>
            </ul>
        </div>

        <div class="menu-content">

        </div>
    </div>
</div>
end content -->
<!-- // File main => Chứa giao diện mua hàng, sản phẩm hiện có -->
<!-- <?php 
   $cat_id = $_GET['cat_id'];
   # Lấy thông tin danh mục
    $info_cat = get_info_cat($cat_id);
    // show_array($info_cat);
    # Lấy danh sách bài viết
    $list_item = get_list_product_by_cat_id($cat_id);
    // show_array($list_item);
?>
<div class="content">
    <div class="content-container">
        <?php get_sidebar(); ?>
        <!-- dữ liệu về sản phẩm -->
<div class="menu-content">
    <div class="section list-cat">
        <div class="section-head">
            <h3 class="section-title"><?php echo $info_cat['cat_title'];?></h3>
            <p class="section-desc">Có <?php echo count($list_item);?> sản phẩm trong gian hàng điện thoại</p>
        </div>
        <div class="section-detail">
            <?php 
                        if(!empty($list_item)){
                        ?>
            <ul class="list-item clearfix">
                <?php foreach($list_item as $item){
                                ?>
                <li class="fix">
                    <a href="<?php echo $item['url'];?>" title="" class="thumb">
                        <img src="<?php echo $item['product_thumb'] ?>" alt="">
                    </a>
                    <a href="<?php echo $item['url'];?>" title=""
                        class="title_product"><?php echo $item['product_title'];?></a>
                    <p class="price"><?php echo currency_format($item['price']);?></p>
                </li>
                <?php }
                            ?>

                <?php }
                        ?>


            </ul>
        </div>
    </div>
</div>
</div>
</div> -->