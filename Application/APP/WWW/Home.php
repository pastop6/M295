<?php
declare(strict_types=1);

namespace APP\WWW;

use src\app;

class Home extends app
{

    Public function __construct($method = 'get', $param = 0)
    {
        parent::__construct($method, $param);
    }
    Public function get($id = 0)
    {
        $this->response['html'] = 'Test - APP\WWW\Home';
        $this->response['success'] = 'get';
    }

}