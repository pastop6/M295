<?php
declare(strict_types=1);
use src\Route;






include('route_www.php');
include('route_admin.php');
include('route_default.php');


Route::pathNotFound(function ($path) {
    src\error::show(404);
});