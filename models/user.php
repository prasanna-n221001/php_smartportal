<?php
require_once __DIR__ . '/../config/database.php';

class User {

    private $collection;

    public function __construct($db) {
        $this->collection = $db->users;
    }

    // CREATE (Signup)
    public function createUser($data) {

        if (empty($data['email']) || empty($data['password'])) {
            return ["error" => "Fields cannot be empty"];
        }

        if (strlen($data['password']) < 6) {
            return ["error" => "Password must be at least 6 characters"];
        }

        // Check duplicate
        $existing = $this->collection->findOne([
            '$or' => [
                ['email' => $data['email']],
                ['username' => $data['username']]
            ]
        ]);

        if ($existing) {
            return ["error" => "Email or Username already exists"];
        }

        $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);

        $this->collection->insertOne($data);

        return ["success" => "User created successfully"];
    }

    // READ (Login)
    public function login($email, $password) {

        $user = $this->collection->findOne(['email' => $email]);

        if (!$user) {
            return ["error" => "Invalid email"];
        }

        if (!password_verify($password, $user['password'])) {
            return ["error" => "Invalid password"];
        }

        return ["success" => "Login successful", "user" => $user];
    }

    // READ (List Users)
    public function getAllUsers() {
        return $this->collection->find()->toArray();
    }

    // UPDATE
    public function updateUser($email, $newData) {

        if (isset($newData['password'])) {
            $newData['password'] = password_hash($newData['password'], PASSWORD_BCRYPT);
        }

        $result = $this->collection->updateOne(
            ['email' => $email],
            ['$set' => $newData]
        );

        if ($result->getModifiedCount() == 0) {
            return ["error" => "No user updated"];
        }

        return ["success" => "User updated"];
    }

    // DELETE
    public function deleteUser($email) {

        $result = $this->collection->deleteOne(['email' => $email]);

        if ($result->getDeletedCount() == 0) {
            return ["error" => "User not found"];
        }

        return ["success" => "User deleted"];
    }
}
?>