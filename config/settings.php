<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'pos');
define('MYSQL_DSN', "mysql:host=" . DB_HOST . ";dbname=" . DB_DATABASE);
define('POSTGRESQL_DSN', "mysql:host=" . DB_HOST . ";dbname=" . DB_DATABASE);


/**
 * echo CURRENT_DATETIME;
 * echo DATE_TODAY;
 */

//  1. Local Area Network: Will work for both pc and other devices in same network, must get the dynamic (wifi) or static (cabled) ip address of server 
define('BASE_URL', 'http://'.$_SERVER['SERVER_ADDR'].'/php_router/'); 

/**
 * NOTE: Look for ip address of server/desktop, if wireless use ipconfig, if wired see the network plan 
 * In user client browsers, type ip address of server/desktop where the xampp is running for example 192.168.1.100 if server is connected to router via cable
 * the ip address will be static and if wireless it is dynamic so make sure to look for updated ip address of server/desktop
 */

//  2. DEVELOPMENT: Will work only on my pc where vs code and server are running
// define('BASE_URL', 'http://localhost/myproject/'); 

//  3. ONLINE HOSTING: 
//  define('BASE_URL', 'https://test.yourdomain.com/myproject/');    //  with project folder
//  define('BASE_URL', 'https://test.agricabuyao.com/public_html/'); // codebase is inside public_html directory of server, without project folder.
//  define('BASE_URL', 'https://test.agricabuyao.com/');             // codebase is on root directory of server, without project folder.

define('BASE_PATH', __DIR__ . '/../');

/**
 * __DIR__                                  = Gives the current directory of this file where the __DIR__ was coded "C:\xampp\htdocs\myproject\config"
 * '/../'                                   = get out of one folder
 * define('BASE_PATH', __DIR__ . '/../');   = "C:\xampp\htdocs\myproject\" 
 * 
 * NOTE: this gives automatically generated current directory
 * USAGE: require BASE_PATH . 'app/views/home.php'; 
 */

// Set time zone
date_default_timezone_set("Asia/Manila");

define("CURRENT_DATETIME", date("Y-m-d H:i:s"));
define("DATE_TODAY", date("Y-m-d"));
