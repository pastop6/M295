<?php
declare(strict_types=1);

namespace src;

class app
{
    public $response = array();
    public function __construct($method = 'getData', $param = 0)
    {
        $this->response['class'] = get_class($this);
        $this->response['extends'] = __CLASS__;
        
        $this->response['methode'] = $method;
        $this->response['param'] = $param;
        if (method_exists($this, $method)) {

            $this->{$method}($param);
        } else {
            $this->response['error'] = 'Method not found';
        }
    }
    public function __destruct()
    {
        header('Access-Control-Allow-Origin: *');
        header("Content-type: application/json; charset=utf-8");
        echo json_encode($this->response);
    }
}