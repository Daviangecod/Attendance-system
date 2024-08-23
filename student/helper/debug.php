<?php 


if(!function_exists("debug")) {

    /**
     * Log values on page
     *
     * @param mixed $value
     * @return void
     */
    function debug(mixed $value) {

      echo "<pre><code>";
        print_r($value);
      echo "</code> </pre>";
    }
 
}