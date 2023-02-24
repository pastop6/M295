<?php
declare(strict_types=1);

namespace src;

class mysql extends app implements database
{
    public function __construct($method = 'getData', $param = 0)
    {
        $this->response['implements'] = 'database';
        parent::__construct($method, $param);
    }
    public function getData($id = 0)
    {
        $arr = array('a', 'b', 'c');
        $this->response['data'] = $arr;
        $this->response['success'] = 'Daten erfolgreich geladen';
    }
    public function update($id = 0)
    {
        $this->response['success'] = 'update';
    }
    public function delete($id = 0)
    {
        $this->response['success'] = 'delete';
    }
    public function insert()
    {
        $this->response['success'] = 'insert';
    }
}