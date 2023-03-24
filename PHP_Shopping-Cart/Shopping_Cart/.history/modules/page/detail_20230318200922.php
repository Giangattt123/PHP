<?php 

?>
<?php 
    // get id from url
    $id = (int)$_GET['id'];
    $item = get_page_by_id($id);
?>
<div class="content">
    <div class="content-container">
        <?php get_sidebar(); ?>
        <div class="menu-content">

        </div>
    </div>
</div>
<!-- end content -->