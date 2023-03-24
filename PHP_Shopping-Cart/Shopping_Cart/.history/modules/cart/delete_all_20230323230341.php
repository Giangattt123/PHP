# File xử lí => Xóa hết các sản phẩm trong giỏ hàng
<?php 
    delete_cart(' ');
    redirect("?mod=cart&act=show");


?>