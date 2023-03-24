<?php 
    session_start();
    ob_start();
    require 'data/page.php';
    require 'data/product.php';
    require 'lib/template.php';
    require 'lib/product.php';
    require 'lib/number.php';
    require 'lib/reuse.php';
    require 'lib/pages.php';
    require 'lib/cart.php';
    
    get_header();
?>
<?php 
    $mod = !empty($_GET['mod']) ? $_GET['mod'] : 'home';
    $act = !empty($_GET['act']) ? $_GET['act'] : 'main';
    $path = "modules/{$mod}/{$act}.php";
    if(file_exists($path)){
        require $path;
    }else{
        
    }
?>
<?php 

?>