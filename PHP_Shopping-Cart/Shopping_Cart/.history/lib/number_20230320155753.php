<?php 
// Viết hàm chuyển đổi giá tiền của một sản phẩm về đúng định dạng
// Tự xây dựng hàm và sử dụng hàm có sẵn
// Ví dụ 10450000 => 10.450.000
function currency_format($number){
    return number_format($number).' '."VND";
}
?>