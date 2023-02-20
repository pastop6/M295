<?php

$arr = array();
$arr['sucess'] = true;

$arr["POST"] = $_POST;
$arr["GET"] = $_GET;

// $arr["test"] = $_GET["id"];
// $arr["test2"] = $_POST["name"];

http_response_code(200);
header('Content-Type: application/json; charset=utf-8');

echo json_encode($arr);

?>