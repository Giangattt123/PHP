<!-- # File xử lí => Xóa một sản phẩm khỏi giỏ hàng -->
Xóa sản phẩm nào sẽ phụ thuộc vào id sản phẩm
<?php 
    $id = (int)$_GET['id'];
    delete_cart($id);
    redirect("?mod=cart&act=show");
?>