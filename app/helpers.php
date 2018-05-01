<?php
/**
 * Created by PhpStorm.
 * User: oumarucho
 * Date: 01/05/2018
 * Time: 18:19
 */

if(!function_exists('page_title')){
    function page_title($title){
        $base_title = "Travaux facile";

        if ($title === '') {
            return $base_title;
        } else {
            return $title .' - '. $base_title;
        }
    }
}

if(!function_exists('set_active_route')){
    function set_active_route($route){
        return Route::is($route) ? 'active' : '';
    }
}