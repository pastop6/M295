<?php

declare(strict_types=1);

namespace src;

abstract class error
{
    public static function show($code)
    {
        http_response_code($code);
        header('HTTP/1.1 ' . $code);
        header('Content-Type: text/html charset=UTF-8');
        header('Cache-Control: no-cache, must-revalidate');
        header('Access-Control-Allow-Origin: *');
        header('Expires: Sat, 26 Jul 2023 00:00:00 GMT');

        $error = "<span>Error: </span><b>The server does not support the functionality required to fulfill the request.</b>";
        include('./../error/' . $code . '.php');
    }
}