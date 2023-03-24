<!-- # File xử lí => Cập nhật giỏ hàng
B1 : Lấy thông tin số lượng cập nhật idsp => số lượng hiện tại
B2 : -->
<?php 
    if(isset($_POST['btn_update_cart'])){
        update_cart($_POST['qty']);
        redirect("?mod=cart&act=show");
        // show_array($_POST);
    }
?>