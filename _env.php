
<?php 
require __DIR__ . '/vendor/autoload.php';
$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);
if(file_exists(".env")) {
    $dotenv->load();
}
$DB_USER = $_ENV['DATABASE_USER'];
$DB_NAME = $_ENV['DATABASE_NAME'];
$DB_HOST = $_ENV['DATABASE_HOST'];
$DB_PASS = $_ENV['DATABASE_PASSWORD'];
?>