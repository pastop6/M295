<?php

declare(strict_types=1);

namespace src;

class sqlite3 extends app{

    private $db = null;

    public function __construct($method = "getData", $param = 0){
        $this->checkDB();

        // connect to DB
        $this->db = new \SQLite3(DBSQLITE3);
        $this->response['implemented'] = true;
        parent::__construct($method, $param);
        // $this->db = null;
        $this->db->close();
    }

    private function checkDB(){
        if (!file_exists(DBSQLITE3)){
            $sqlstring = file_get_contents('./../data/db.sql');
            $this->db = new \SQLite3(DBSQLITE3);
            $this->db->query($sqlstring);
            $this->db->close();
            $this->db = null;
            return true;  

        }
    }

    public function getData($id = 0){
        $arr = array('a', 'b', 'c');
        $this->response['data'] = $arr;
        $this->response['success'] = true;
    }

    
    public function update($id = 0){
        $this->response['success'] = 'update';
    }
    public function delete($id = 0){
        $this->response['success'] = 'delete';
    }
    public function insert(){

        $this->response['postdata'] = $_POST;

        // INSERT INTO MyTable (name, age) VALUES ('John', 25)

        // $sql = '';
        // $sql .= 'INSERT INTO MyTable (name, age) VALUES (';
        // $sql .= "'".$_POST['name']."', ";
        // $sql .= $_POST['age'].')';

        // $this->response['sql'] = $sql;

        // $this->db->query($sql);

        // $this->response['success'] = 'insert';

        // sqlite3 Perpare sqlincection

        try{
            $sql = 'INSERT INTO MyTable (name, age) VALUES (:name, :age)';
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(':name', $_POST['name'], SQLITE3_TEXT);
            $stmt->bindValue(':age', $_POST['age'], SQLITE3_INTEGER);
            $stmt->execute();
        }catch (\Exception $e){
            $this->response['error'] = $e->getMessage();
        }

    }
}


?>