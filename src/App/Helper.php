<?php
namespace StarterPack;

class Helper
{
    public static function now($format = 'Y/m/d H:i:s')
    {
        return date($format);
    }

    public static function debug($value, $dump = false)
    {
        echo "<pre>";
        if ($dump) {var_dump($dump);}
        else {print_r($value);}
        echo "</pre>";
    }
}