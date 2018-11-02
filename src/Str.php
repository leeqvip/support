<?php

namespace TechOne\Support;

class Str
{
    public function startsWith($haystack, $needles)
    {
        foreach ((array) $needles as $needle) {
            if ('' !== $needle && substr($haystack, 0, strlen($needle)) === (string) $needle) {
                return true;
            }
        }

        return false;
    }

    public static function endsWith($haystack, $needles)
    {
        foreach ((array) $needles as $needle) {
            if (substr($haystack, -strlen($needle)) === (string) $needle) {
                return true;
            }
        }

        return false;
    }

    public static function studlyCase($str)
    {
        $value = ucwords(str_replace(['-', '_'], ' ', $str));

        return str_replace(' ', '', $value);
    }

    public static function rmTags($str)
    {
        $str = strip_tags($str);

        return preg_replace('/\s/', '', $str);
    }

    public static function limit($value, $limit = 100, $end = '...')
    {
        $value = self::rmTags($value);
        if (mb_strwidth($value, 'UTF-8') <= $limit) {
            return $value;
        }

        return rtrim(mb_strimwidth($value, 0, $limit, '', 'UTF-8')).$end;
    }
}
