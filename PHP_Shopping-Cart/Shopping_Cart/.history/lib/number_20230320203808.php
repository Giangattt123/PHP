<?php 
// Viết hàm chuyển đổi giá tiền của một sản phẩm về đúng định dạng
// Tự xây dựng hàm và sử dụng hàm có sẵn
// Ví dụ 10450000 => 10.450.000
// Build-in function : number_format(number)
// return number_format($number).' '."VND";
// Build
    function currency_format_1(){
        $amount = 1500000;
        $formattedAmount = "";
        $count = 0;
        while($amount > 0) {
            if($count == 3) {
                $formattedAmount = "," . $formattedAmount;
                $count = 0;
            }
            $formattedAmount = chr($amount % 10 + ord('0')) . $formattedAmount;
            $amount =  floor($amount / 10);
            $count++;
        }
        return $formattedAmount;
    }
    //echo currency_format_1();
    // $x = 1500000;
    // echo var_dump($x);
    $x = 1234;
    echo var_dump($x);
    $y = $x / 10;
    echo $y;
    echo var_dump($y);
    function currency_format($number){
        return number_format($number).' '."VND";
    }
    
?>