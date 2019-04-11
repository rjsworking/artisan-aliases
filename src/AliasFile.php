<?php

namespace Caneco\ArtisanAliases;

class AliasFile
{
    public static function local(): string
    {
        return base_path('.laravel_aliases');
    }

    public static function global(): string
    {
        $home = isset($_SERVER['HOME'])?$_SERVER['HOME']:$_SERVER['HOMEDRIVE'].$_SERVER['HOMEPATH'];
        
        return $home . '/.laravel_aliases';
    }
}
