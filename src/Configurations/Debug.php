<?php

namespace App\Configurations;

class Debug
{
    public static function debug($data)
    {
        echo '<pre>';
            print_r($data);
        echo '</pre>';
    }
}