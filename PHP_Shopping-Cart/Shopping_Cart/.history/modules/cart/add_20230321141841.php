<!-- # File xử lí => Thêm một sản phầm vào giỏ hàng -->
<?php 
    # Lấy được thông tin sản phẩm cần thêm vào giỏ hàng
    $id  = (int)$_GET['id'];
    $item = get_product_by_id($id);
    show_array($item);
?>