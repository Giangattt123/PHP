<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ĐỨC GIANG STORE</title>
    <link rel="stylesheet" href="public/css/reset.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="public/js/main.js"></script>
</head>

<body>
    <div class="wrapper">
        <div class="wrapper-content">
            <div class="header">
                <div class="header-content">
                    <div class="item-left">
                        <a href="?mod=home" class="logo">ĐỨC GIANG STORE</a>
                    </div>
                    <div class="item-right">
                        <div class="cart">
                            <a href="?mod=cart&act=show" class="cart-icon">
                                <img src="public/images/icon-cart.png" alt="Icon_Cart" class="icon-image">
                            </a>
                            <?php 
                                $num_order = get_num_order_cart();
                                if($num_order > 0){
                                    ?>
                            <span class="cart-number"><?php echo $num_order;?></span>

                            <?php
                            }
                             ?>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end header -->