<?php 
    function get_info_cat($cat_id){
        global $list_product_cat;
        if(array_key_exists($cat_id , $list_product_cat)){
            return $list_product_cat[$cat_id];
        }
        return false;
    }
    function get_list_product_by_cat_id($cat_id){
        global $list_product;
        // Mảng chứa ds sp theo cat_id
        $result = array();
        foreach($list_product as $item){
            if($item['cat_id'] == $cat_id){
                $item['url'] = "?mod=product&act=detail&id={$item['id']}";
                $result[] = $item;
            }
        }
        return $result;
    }
?>