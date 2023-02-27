<?php
declare(strict_types=1);

namespace src;

use Exception;
use mysqli;

class mysql extends app implements database
{
    public $mysql;
    public function __construct($method = 'getData', $param = 0)
    {
        if ($this->checkDB()) {
            $this->response['db'] = 'DB wurde erstellt';
        } else {
            $this->response['db'] = 'DB existiert';
        }
        // DB open
        $this->mysql = new mysqli('127.0.0.1', 'root', '', 'test');
        $this->response['implements'] = 'database';
        parent::__construct($method, $param);
        // DB close
        $this->mysql->close();
        $this->mysql = null;
    }
    private function checkDB()
    {
        try {
            $mysql = new mysqli('127.0.0.1', 'root', '');
            $sqlstr = "SHOW DATABASES LIKE 'test'";
            $result = $mysql->query($sqlstr);
            if ($result->num_rows == 0) {
                //echo "DB does Not exist";
                $sqlstr = "CREATE DATABASE IF NOT EXISTS M295 DEFAULT CHARACTER SET utf8";
                $mysql->query($sqlstr);
                $mysql->select_db('test') or die('Datenbankverbindung nicht möglich');
                $sqlfile = file_get_contents("./../data/mysql.sql");
                $source = explode(';', $sqlfile);
                foreach ($source as $sql) {
                    if ($sql != ''){
                        $mysql->query($sql);
                    }
                }
                return true;
            }
            $mysql->close();
            $mysql = null;
            return false;
        } catch (Exception $e) {
            $this->response['error'] = $e->getMessage();
            return false;
        }
    }
    public function getData($id = 0)
    {
        try {
            $this->response['success'] = 'getData';
            // MYSQL select
            if ($id > '' && $id > 0) {
                $sql = "SELECT * FROM personen WHERE id = " . $id;
            } else {
                $sql = "SELECT * FROM personen";
            }
            $result = $this->mysql->query($sql);
            $data = array();
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $data[] = $row;
            }
            $this->response['data'] = $data;
            return $data;
        } catch (Exception $e) {
            $this->response['error'] = $e->getMessage();
            return false;
        }
    }
    public function update($id = 0)
    {
        try {

            $this->response['success'] = 'update';
            // MYSQL update
            $sql = 'UPDATE myTable SET name = ?, age = ? WHERE id = ?';
            $this->response['sql'] = $sql;
            $stmt = $this->mysql->prepare($sql);
            $stmt->bind_param('sii', $_POST['name'], $_POST['age'], $id);
            $stmt->execute();
            $stmt->close();
            return true;
        } catch (Exception $e) {
            $this->response['error'] = $e->getMessage();
            return false;
        }
    }
    public function delete($id = 0)
    {
        // Delete nur wenn eingeloggt
        if(login::isLogin()){
            try {
                $this->response['success'] = 'delete';
                // MYSQL delete
                $sql = 'DELETE FROM myTable WHERE id = ?';
                $stmt = $this->mysql->prepare($sql);
                $stmt->bind_param('i', $id);
                $stmt->execute();
                $stmt->close();
                return true;
            } catch (Exception $e) {
                $this->response['error'] = $e->getMessage();
                return false;
            }
        }else{
            // Delete verweigert
            $this->response['error'] = 'Kein Login';
            return false;
        }

    }
    public function insert()
    {
        try {
            $this->response['success'] = 'insert';
            // MYSQL insert
            $sql = 'INSERT INTO myTable (name, age) values (?, ?)';
            $this->response['sql'] = $sql;
            $stmt = $this->mysql->prepare($sql);
            $stmt->bind_param('si', $_POST['name'], $_POST['age']);
            $stmt->execute();
            $stmt->close();
            return true;
        } catch (Exception $e) {
            $this->response['error'] = $e->getMessage();
            return false;
        }
    }
}