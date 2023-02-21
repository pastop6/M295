<?php

declare(strict_types=1);

namespace src;

class sqlite3 extends app{
    public function __construct($method = "getData", $param = 0){
        $this->checkDB();
        $this->response['implemented'] = true;
        parent::__construct($method, $param);
    }

    private function checkDB(){
        if (!file_exists(DBSQLITE3)){
            $sqlstring = file_get_contents('./../data/db.sql');
            $db = new \SQLite3(DBSQLITE3);
            $db->query($sqlstring);
            return true;  

        }
    }

    public function getData($id = 0){
        $arr = array('a', 'b', 'c');
        $this->response['data'] = $arr;
        $this->response['success'] = true;
    }
}


?>