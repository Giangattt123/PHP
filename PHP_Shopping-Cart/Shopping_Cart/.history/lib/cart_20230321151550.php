<?php 
    function add_cart($id){
        $qty = 1;
    if(isset($_SESSION['cart']['buy']) && array_key_exists($id , $_SESSION['cart']['buy'])){
        $qty = $_SESSION['cart']['buy'][$id]['qty'] + 1;
    }
    $_SESSION['cart']['buy'][$id] = array(
        'id' => $item['id'],
        'product_title' => $item['product_title'],
        'price' => $item['price'],
        'product_thumb' => $item['product_thumb'],
        'code' => $item['code'],
        'qty' => $qty,
        'sub_total' => ($item['price'] * $qty)
    );
    show_array($_SESSION['cart']);
    # Thông tin tổng kết của đơn hàng
    $num_order = 0;
    $total = 0;
    foreach($_SESSION['cart']['buy'] as $item){
        $num_order += $item['qty'];
        $total += $item['sub_total'];
    }
    $_SESSION['cart']['info'] = array(
        'num_order' => $num_order,
        'total' => $total
    );
    }
?>