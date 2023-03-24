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
                    <h3 class="section-title"><?php echo $infor_cat['cat_title'];?></h3>
                </div>
            </div>
        </div>
    </div>
</div>