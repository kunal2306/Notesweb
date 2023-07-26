<?php
class NoteModel {
    private $db;

    public function __construct() {
        require_once 'classes/Database.php';
        $database = new Database();
        $this->db = $database->getConnection();
    }

    public function getAllNotes() {
        $query = "SELECT * FROM notes";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $notes = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $notes;
    }

    public function createNote($title, $content) {
        $query = "INSERT INTO notes (title, content) VALUES (:title, :content)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);
        $stmt->execute();
    }
}
?>
