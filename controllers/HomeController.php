<?php
class HomeController {
    public function index() {
        $data = [
            'title' => 'Welcome to the Home Page',
            'content' => 'Create and manage your notes with ease'
        ];
        require_once 'views/home.php';
    }
}
?>
