<?php
declare(strict_types=1);

namespace src;


class sqlite3 extends app
{
    private $db = null;
    public function __construct($method = 'getData', $param = 0)
    {
        if ($this->checkDB()) {
            $this->response['db'] = 'DB wurde erstellt';
        } else {
            $this->response['db'] = 'DB existiert';
        }
        // connect to DB
        $this->db = new \SQLite3(DBSQLITE3);
        $this->response['implements'] = 'database';
        parent::__construct($method, $param);
        // DB connect close
        $this->db->close();
        $this->db = null;
    }
    private function checkDB()
    {
        if (!file_exists(DBSQLITE3)) {
            $sqlstring = file_get_contents('./../data/db.sql');
            $db = new \SQLite3(DBSQLITE3);
            $db->query($sqlstring);
            $db->close();
            $db = null;
            return true;
        }
        return false;
    }
    public function getData($id = 0)
    {
        //$db = new \SQLite3(DBSQLITE3);
        $sql = 'SELECT * FROM myTable';
        $result = $this->db->query($sql);
        $arr = array();
        while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            $arr[] = $row;
        }
        $this->response['data'] = $arr;
        $this->response['success'] = 'Daten erfolgreich geladen';
    }


    public function insert()
    {
        $this->response['postdata'] = $_POST;

        // INSERT INTO myTable (name, age) VALUES ('name', 22)
        /* $sql = '';
        $sql .= 'INSERT INTO myTable (name, age) VALUES (';
        $sql .= "'" . $_POST['name'] . "', ";
        $sql .= $_POST['age'] . ')';
        $this->response['sql'] = $sql;
        $this->db->query($sql);
        $this->response['success'] = 'insert'; */

        // sqlite3 Prepare...... sqlinjection
        // INSERT INTO myTable (name, age) VALUES (:name, :age)
        /* $sql = 'INSERT INTO myTable (name, age) VALUES (:name, :age)';
        $smtp = $this->db->prepare($sql);
        $smtp->bindValue(':name', $_POST['name'], SQLITE3_TEXT);
        $smtp->bindValue(':age', $_POST['age'], SQLITE3_INTEGER);
        $smtp->execute();
        $this->response['success'] = 'insert'; */

        try {
            $sql = 'INSERT INTO myTable (name, age) VALUES (:name, :age)';
            $smtp = $this->db->prepare($sql);
            $smtp->bindValue(':name', $_POST['name'], SQLITE3_TEXT);
            $smtp->bindValue(':age', $_POST['age'], SQLITE3_INTEGER);
            $smtp->execute();
            $this->response['success'] = 'insert';
        } catch (\Exception $e) {
            $this->response['error'] = $e->getMessage();
        }




    }




    public function update($id = 0)
    {
        $this->response['postdata'] = $_POST;
        try {
            $sql = 'UPDATE myTable SET name = :name, age = :age WHERE id = :id';
            $smtp = $this->db->prepare($sql);
            $smtp->bindValue(':name', $_POST['name'], SQLITE3_TEXT);
            $smtp->bindValue(':age', $_POST['age'], SQLITE3_INTEGER);
            $smtp->bindValue(':id', $id, SQLITE3_INTEGER);
            $smtp->execute();
            $this->response['success'] = 'update';
        } catch (\Exception $e) {
            $this->response['error'] = $e->getMessage();
        }
    }
    public function delete($id = 0)
    {
        try {
            $sql = 'DELETE FROM myTable WHERE id = :id';
            $smtp = $this->db->prepare($sql);
            $smtp->bindValue(':id', $id, SQLITE3_INTEGER);
            $smtp->execute();
            $this->response['success'] = 'delete';
        } catch (\Exception $e) {
            $this->response['error'] = $e->getMessage();
        }
    }
}