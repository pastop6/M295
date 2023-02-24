<?php

declare(strict_types=1);

require(__DIR__.'/../vendor/autoload.php');

$aa = new src\aa();

// über Postman testen
// $post = $_POST;

// fix
$post = array();
$post['name'] = "Chester Tester";


$v = new Valitron\Validator($post);
$v->rule('lengthMax', 'name', 256)->rule('lengthMin', 'name', 1)->rule('noHTML', 'name');
if($v->validate()) {
    echo "Yay! We're all good!";
} else {
    // Errors
    print_r($v->errors());
}