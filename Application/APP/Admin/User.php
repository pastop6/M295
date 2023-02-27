<?php
declare(strict_types=1);

namespace APP\Admin;

use src\app;

class User extends app
{

    public function __construct($method = 'get', $param = 0)
    {
        parent::__construct($method, $param);
    }
    public function get($id = 0)
    {
        $this->response['html'] = 'Test - APP\Admin\user';
        $this->response['success'] = 'get';
    }

}