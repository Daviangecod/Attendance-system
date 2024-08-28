<?php

if(!function_exists("getConfig")){

    function getConfig($key){

        global $connection;

            $siteConfig = [
                'site_name' => "EAMS",
                'app_mode' => "production",
                'base_url' => "http://localhost/Attendance-system/",
                'base_path' => dirname(__DIR__, 1)
            ];

            return $siteConfig[$key] ?? null; // Null coalescing
    }
}
?>