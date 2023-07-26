<?php
class AboutController {
    public function index() {
        $data = [
            'title' => 'Welcome to the About Page',
            'content' => 'You can read about us now'
        ];
        require_once 'views/about.php';
    }
}
?>

