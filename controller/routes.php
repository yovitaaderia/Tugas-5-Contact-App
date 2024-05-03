<?php
include 'env.php';
include 'function/main.php';
include 'config/conn.php';

$url = $_SERVER['REQUEST_URI'];

$dirName = 'tugas5-pweb';
$url = implode("/",
            array_filter(
                explode("/",
                    str_replace($dirName, "",
                        parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
                        )
                ), 'strlen'
            )
        );
// Membuat router berdasarkan nilai $url
switch ($url) {
    case 'login':
        include 'auth_page/login.php';
        break;
    case 'register':
        include 'auth_page/register.php';
        break;
    case 'dashboard':
        include 'dash_page/dashboard.php';
        break;
    case 'crud':
        include 'crud_page/crud.php';
        break;
    case 'testpost':
        echo $_SERVER['REQUEST_METHOD'];
    default:
        echo "<h1>Homepage</h1>";
}