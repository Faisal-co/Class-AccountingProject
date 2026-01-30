<?php
// Can include this functions.php file in Composer with
function get_header(){
    require_once __DIR__ . '/templates/header.php';
}
function get_aside(){
    require_once __DIR__ . '/templates/aside.php';
}
function get_footer(){
    require_once __DIR__ . '/templates/footer.php';
}
function is_auth_page(){
    $pages = [
        '/login.php',
        '/register.php',
        '/forgot-password.php'
    ];

    return in_array($_SERVER['SCRIPT_NAME'], $pages);
}