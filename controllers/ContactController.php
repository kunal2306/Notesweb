<?php
class ContactController {
    public function index() {
        $data = [
            'title' => 'Welcome to the Contact Page',
            'content' => 'You can contact us now'
        ];
        require_once 'views/contact.php';
    }
}
?>
