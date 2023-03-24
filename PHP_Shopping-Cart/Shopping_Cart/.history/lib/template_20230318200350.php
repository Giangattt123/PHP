<?php 
function get_header($version = ''){
    if(!empty($version)){
        $path_header = "inc/header-{$version}.php";
    }else{
        $path_header = "inc/header.php";
    }
    if(file_exists($path_header)){
        require $path_header;
    }else{
        echo "Không tồn tại đường dẫn {$path_header}";
    }
}
function get_footer($version = ''){
    if(!empty($version)){
        $path_footer = "inc/footer-{$version}.php";
    }else{
        $path_footer = "inc/footer.php";
    }
    if(file_exists($path_footer)){
        require $path_footer;
    }else{
        echo "Không tồn tại đường dẫn {$path_footer}";
    }
    
}
function get_sidebar(){
    require 'inc/sidebar.php';
}
?>