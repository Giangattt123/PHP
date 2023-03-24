<?php 
    session_start();
    ob_start();
    // Data
    require 'data/users.php';
    // function from lib
    require 'lib/data.php';    
    require 'lib/url.php';    

    require 'lib/users.php';
    require 'lib/template.php';

?>
<?php
// $page = $_GET['page'];

$page = !empty($_GET['page']) ? $_GET['page'] : 'home';
// echo $page;
$path = "pages/{$page}.php";
//echo $path;
if(!is_login() && $page != 'login')
    redirect_to("?page=login");

if(file_exists($path)){
    require $path;
}else{
    
}
?>

<!-- end content -->
<?php 
    
?>