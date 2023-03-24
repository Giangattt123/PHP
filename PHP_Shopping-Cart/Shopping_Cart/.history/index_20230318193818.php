<?php 
    require 'data/page.php';
    require 'data/product.php';
    require 'lib/template.php';
    get_header();
?>
<?php 
    $mod = !empty($_GET['mod']) ? $_GET['mod'] : 'home';
    $act = !empty($_GET['act']) ? $_GET['act'] : 'main';
    $path = "modules/{$mod}/{$act}.php";
    echo $path;
    if(file_exists($path)){
        require $path;
    }else{
        
    }
?>
<?php 

?>