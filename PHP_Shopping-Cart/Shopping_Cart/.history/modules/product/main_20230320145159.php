<!-- // File main => Chứa giao diện mua hàng, sản phẩm hiện có -->
<?php 
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
                    <p class="section-desc">Có 20 sản phẩm trong giỏ hàng</p>
                </div>
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <li>
                            <a href="?mod=product&act=detail&id=1" title="" class="thumb">
                                <img src="" alt="">
                            </a>
                            <a href="?page=detail_product" title="" class="title">IP 14 Promax</a>
                            <p class="price">10.000.00</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>