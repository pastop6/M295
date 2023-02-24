<?php

declare(strict_types=1);

namespace src;

class app{

    public $response = array();
    public function __construct($method = "getData", $param = 0){
        
        $this->response['class'] = __CLASS__;
        $this->response['methode'] = $method;
        $this->response['param'] = $param;

        if(method_exists($this, $method)){
            $this->{$method}($param);
        }else{
            $this->response['error'] = "Method $method not found";
        }
    }

    public function __destruct(){
        http_response_code(200);
        header("http/1.1 200 ok");
        header("access-control-allow-methods: GET, POST");
        header("Content-Type: application/json; charset=UTF-8");
        header("cache-control: no-cache, must-revalidate");
        header("Access-Control-Allow-Origin: *");
        header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        echo json_encode($this->response);
    }
}


?>