<?php

require_once __DIR__ . "/../config/settings.php";

if(!function_exists("baseUrl")){
    function baseUrl(string $path = null, array $query = null){

        if($path !== null && $query !== null){
            $build = http_build_query($query);
            return getConfig(key: 'base_url') . "/" . $path . "?" . $build;
        }
        elseif($path !== null){
            return getConfig(key: 'base_url') . "/" . $path;
        }
        return getConfig(key: 'base_url');
    }
}

if(!function_exists("basePath")){
    function basePath(string $path = null){
        if($path !== null){
            return getConfig(key: 'base_path') . "/" . $path;
        }

        return getConfig(key: 'base_path');
    }
}

if(!function_exists("redirect")){
    function redirect(string $to, array $query = null){

        if($query !== null){
            $httpQuery = http_build_query($query);
            return header("Location: $to?httpQuery");
        }
        return header("Location: $to");
    }
}



?>