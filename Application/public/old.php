<?php

declare(strict_types=1);

require(__DIR__ . '/../vendor/autoload.php');

$aa = new src\aa();

echo '<hr>';
// über POSTMAN
// $post = $_POST;

// fix
$post = array();
$post['name'] = 'Chester <br> Tester';


$v = new Valitron\Validator($post);
$v->rule('required', 'name');
$v->rule('lengthMin', 'name', 1);
$v->rule('lengthMax', 'name', 256);
$v->rule('regex', 'name', '/^[\w\s]+$/')->message('name contains special characters');


// länge 256 Zeichen
// mindestens 1 Zeichen
// keine HTML-Tags


if ($v->validate()) {
    echo "Yay! We're all good!";
} else {
    // Errors
    print_r($v->errors());
}