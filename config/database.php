<?php
require_once __DIR__ . '/../vendor/autoload.php';

use MongoDB\Client;

$mongoUri = getenv('MONGO_URI') ?: "mongodb://localhost:27017";
$dbName = getenv('DB_NAME') ?: "user_system";

try {
    $client = new Client($mongoUri);
    $db = $client->$dbName;
} catch (Exception $e) {
    die("Database Connection Error: " . $e->getMessage());
}
?>