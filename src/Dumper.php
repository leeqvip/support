<?php

namespace TechOne\Support;

class Dumper
{
    public static function dump(...$vars)
    {
        ob_start();

        call_user_func_array('var_dump', $vars);

        $output = ob_get_clean();
        $output = preg_replace('/\]\=\>\n(\s+)/m', '] => ', $output);

        if (PHP_SAPI == 'cli') {
            $output = PHP_EOL.$output.PHP_EOL;
        } else {
            $output = '<pre>'.$output.'</pre>';
        }
        exit($output);
    }
}
