<?php

declare(strict_types=1);

namespace src;

class mysql{
    public $response = array();
    public function __construct($method = 'getData', $param = 0){
        echo "mysql __construct() <br>";
        
        $this->response['class'] = __CLASS__;
        $this->response['methode'] = $method;
        $this->response['param'] = $param;


        if(method_exists($this, $method)){
            $this->{$method}($param);
        }else{
            echo "Method $method not found <br>";
        }
    }

    public function getData($id = 0){
        echo "mysql getData: $id <br>";

        $arr = array('id' => $id, 'name' => 'mysql');
        //echo json_encode($arr);
        $this->response['data'] = $arr;
        $this->response['success'] = true;  

    }
    public function __destruct(){
        echo json_encode($this->response);
    }
}




?>