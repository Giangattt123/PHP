<?php 

?>
<?php 
    $id = (int)$_GET['id'];
    $item = get_page_by_id($id);
    // echo show_array($item);
?>
<div class="content">
    <div class="content-container">
        <?php get_sidebar(); ?>
        <div class="menu-content">
            <div class="introduce">
                <div class="introduce-head">
                    <h3 class="section-title">
                        <?php echo $item['page-title'];?>
                    </h3>
                </div>
                <div class="introduce-detail">
                    <p class="create-date"> <?php echo $item['create_at']; ?></p>
                    <div class="contents-news">
                        <?php echo $item['page-content'];?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end content -->