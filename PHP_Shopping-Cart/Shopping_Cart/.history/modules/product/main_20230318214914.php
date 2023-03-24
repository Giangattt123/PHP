<!-- // File main => Chứa giao diện mua hàng, sản phẩm hiện có -->
<?php 
   $cat_id = $_GET['cat_id'];
   # Lấy thông tin danh mục
    $info_cat = get_info_cat($cat_id);
   # Lấy danh sách bài viết
?>
<div class="content">
    <div class="content-container">
        <?php get_sidebar(); ?>
        <div class="menu-content">

        </div>
    </div>
</div>