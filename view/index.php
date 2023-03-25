<?php
session_start();//Khởi động session
require_once './vendor/autoload.php';
require_once './config/database.php';

use App\Libraries\Route;
Route::route_site();