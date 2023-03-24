<!-- # File xử lí => Thêm một sản phầm vào giỏ hàng -->
<?php 
    # Lấy được thông tin sản phẩm cần thêm vào giỏ hàng
    $id  = (int)$_GET['id'];
    // $item = get_product_by_id($id);
    add_cart($id);
    show_array($_SESSION['cart']);
    # Đưa thông tin sản phầm vào giỏ hàng => session lưu trữ sản phẩm
    
//    session_destroy();
    redirect("?mod=cart&act=show");
?>