<?php
require_once 'models/NoteModel.php';

class NotesController {
    private $noteModel;

    public function __construct() {
        $this->noteModel = new NoteModel();
    }

    public function index() {
        $notes = $this->noteModel->getAllNotes();
        require_once 'views/notes.php';
    }

    public function saveNote() {
        if (isset($_POST['submit'])) {
            $title = $_POST['title'];
            $content = $_POST['content'];

            $this->noteModel->createNote($title, $content);
        }

        // Redirect back to the notes page
        header('Location: index.php?page=notes');
        exit();
    }
}
?>
