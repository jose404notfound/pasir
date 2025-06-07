<?php
// This file is used to establish and manage database connections using MySQLi

$host = getenv('MYSQL_HOST') ?: 'mysql_db';  // Default to mysql_db if MYSQL_HOST is not defined in the environment

// Configuration for auth_db (Authentication Database)
$auth_db_config = [
    'host' => $host,
    'dbname' => 'auth_db',  
    'username' => 'root',   
    'password' => 'rootpassword', 
];

// Configuration for blog_db (Blog Database)
$blog_db_config = [
    'host' => $host,
    'dbname' => 'blog_db', 
    'username' => 'root', 
    'password' => 'rootpassword',
];

return [
    'auth' => $auth_db_config,  // Configuration for auth_db
    'blog' => $blog_db_config,  // Configuration for blog_db
];
?>
