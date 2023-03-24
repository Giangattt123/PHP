<?php 
    function get_info_cat($cat_id){
        global $list_product_cat;
        if(array_key_exists($cat_id , $list_product_cat)){
            return $list_product_cat[$cat_id];
        }
        return false;
    }
?>