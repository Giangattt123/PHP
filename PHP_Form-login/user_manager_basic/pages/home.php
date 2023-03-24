<?php 
    get_header();
?>
<div id="content">
    Trang chủ
    <?php 
        show_array($_SESSION);
    ?>
</div>
<?php 
    get_footer();
?>