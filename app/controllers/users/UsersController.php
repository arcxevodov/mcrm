<?php
require_once 'app/models/User.php';
class UsersController {
    public function index(): void
    {
        $userModel = new User();
        $users = $userModel->readAll();

        include 'app/views/users/index.php';
    }
}