<?php
// Include settings to use defined constants such as BASE_URL and BASE_PATH
require_once __DIR__ . '/config/settings.php';

// Retrieve the requested URL
$requestURL = isset($_GET['url']) ? $_GET['url'] : '';

// Sanitize the URL
$requestURL = filter_var($requestURL, FILTER_SANITIZE_URL);


//////////////////////////////////////////////////////

// USING MYSQLI
// require_once BASE_PATH . '/database/Database.php';                             // Include Database class file
// $database = Database::getInstance(DB_HOST, DB_DATABASE, DB_USER, DB_PASSWORD); // Get the database connection instance
// $db = $database->getConnection();                                              // Get the actual database connection object

// USING PDO
require_once BASE_PATH . '/database/Database.php';                                // Include Database class file
$database = Database::getInstance(MYSQL_DSN, DB_USER, DB_PASSWORD);               // Get the database connection instance
$db = $database->getConnection();                                                 // Get the actual database connection object

//////////////////////////////////////////////////////






switch ($requestURL) {
    case '':
    case 'home':
        require BASE_PATH . 'app/views/home.php';
        break;

    case 'users':
        require BASE_PATH . 'app/views/users.php';
        break;

    case '/contact':
        require BASE_PATH . 'app/views/contact.php';
        break;

    default:
        http_response_code(404);
        require BASE_PATH . 'app/views/404.php';
}