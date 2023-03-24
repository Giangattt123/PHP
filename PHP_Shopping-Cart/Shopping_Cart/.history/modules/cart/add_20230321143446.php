<!-- # File xử lí => Thêm một sản phầm vào giỏ hàng -->
<?php 
    # Lấy được thông tin sản phẩm cần thêm vào giỏ hàng
    $id  = (int)$_GET['id'];
    $item = get_product_by_id($id);
    // show_array($item);
    # Đưa thông tin sản phầm vào giỏ hàng => session lưu trữ sản phẩm
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
        'sub_total' => $item['price'] * $qty
    );
    show_array($_SESSION['cart']);
?>