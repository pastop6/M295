<?php
declare(strict_types=1);

namespace src;

class db{
    public function __construct($method, $param){
        echo "src\DB->__construct() <br>";
        $this->{$method}($param);
    }

    public function getData($param){
        echo "<pre>";
        echo "src\DB->getData() <br>";
        //print_r($param);
        echo "</pre>";
    }
}
?>