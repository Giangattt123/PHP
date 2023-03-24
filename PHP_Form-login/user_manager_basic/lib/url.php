<?php
function redirect_to($url = '?page=home'){
    if(!empty($url))
        header("Location: {$url}");
}
?>