<?php
declare(strict_types=1);

namespace APP\WWW;

use src\app;

class Kontakt extends app
{

    public function __construct($method = 'get', $param = 0)
    {
        parent::__construct($method, $param);
    }
    public function get($id = 0)
    {
        $this->response['html'] = 'Test - APP\WWW\Kontakt';
        $this->response['success'] = 'get';
    }

}