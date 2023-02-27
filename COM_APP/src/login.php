<?php

namespace src;

// Login klasse

// Login
// Logout
// checkLogin -> Passwort überprüfen
// isLogin -> ist eingeloggt

class login extends app{
    public function __construct($method = "login", $param = 0){
        parent::__construct($method, $param);
    }

    public function login(){
        if($_POST){
            if(isset($_POST['username']) && isset($_POST['password'])){
                $this->checkLogin();
            } else {
                $this->response['error'] = 'Fehlerhafte Anfrage';
            }
        }

    }

    public function logout(){
        $_SESSION = array();
        session_destroy();
        return true;
        
    }

    public function checkLogin(){
        $this->response['postdata'] = $_POST;
        if($_POST['username'] == 'admin' && $_POST['password'] == '1234'){
            $_SESSION['login'] = true;
            $this->response['success'] = 'Login erfolgreich';
        } else {
            $_SESSION['login'] = false;
            $this->response['error'] = 'Login fehlgeschlagen';
        }
        
    }

    public static function isLogin(){
        if(isset($_SESSION['login']) && $_SESSION['login'] == true){
            return true;
        } else {
            return false;
        }
        
    }
}