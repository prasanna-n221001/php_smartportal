<?php
require_once '../models/User.php';

$userModel = new User($db);

$data = json_decode(file_get_contents("php://input"), true);

$response = $userModel->createUser($data);

echo json_encode($response);
?>