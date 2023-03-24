<?php 
// Viết hàm chuyển đổi giá tiền của một sản phẩm về đúng định dạng
// Tự xây dựng hàm và sử dụng hàm có sẵn
// Ví dụ 10450000 => 10.450.000
// Build-in function : number_format(number)
//   return number_format($number).' '."VND";
// Build
function currency_format_1($number){
    $number = (int)$number;
    $stringFormated = "";
    $count = 0;
    while($number > 0){
        if($count == 3){
            $stringFormated = ',' + $stringFormated;
            $count = 0;
        }
        $stringFormated = (string)($number % 10) + $stringFormated;
        $number = $number / 10;
        $count++;
    }
    return $stringFormated;
}
function currency_format($number){
    return number_format($number).' '."VND";
}
?>