<?php

if(!function_exists("redirect")) {

    /**
     * Redirect to path
     *
     * @param string $path Redirection Path
     * @param array $query Optional GET Query
     * @return void
     */
    function redirect(string $path, array $query = null) {

        if($query == null) {
            header("Location:$path");
        }else {
            $query = http_build_query($query);
            header("Location:$path?$query");
        }
    }
 
}