<?php

use TechOne\Support\Str;

if (!function_exists('starts_with')) {
    function starts_with($haystack, $needles)
    {
        return Str::startsWith($haystack, $needles);
    }
}

if (!function_exists('ends_with')) {
    function ends_with($haystack, $needles)
    {
        return Str::endsWith($haystack, $needles);
    }
}

if (!function_exists('studly_case')) {
    function studly_case($str)
    {
        return Str::studlyCase($str);
    }
}

if (!function_exists('str_limit')) {
    function str_limit($value, $limit = 100, $end = '...')
    {
        return Str::limit($value, $limit, $end);
    }
}

if (!function_exists('rm_tags')) {
    function rm_tags($str)
    {
        return Str::rmTags($str);
    }
}
