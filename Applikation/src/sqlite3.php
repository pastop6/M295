<?php

declare(strict_types=1);

namespace src;

class sqlite3 extends app{
    public function __construct($method = "getData", $param = 0){
        parent::__construct($method, $param);
    }
    public function getData($id = 0){
        $arr = array('a', 'b', 'c');
        $this->response['data'] = $arr;
        $this->response['success'] = true;
    }
}


?>