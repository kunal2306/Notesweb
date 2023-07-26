<?php
require_once 'config.php';
require_once 'controllers/HomeController.php';
require_once 'controllers/AboutController.php';
require_once 'controllers/ContactController.php';
require_once 'controllers/NotesController.php';

$pages = ['home', 'about', 'contact', 'notes'];
$page = $_GET['page'] ?? 'home';

if (!in_array($page, $pages)) {
    die("Invalid page: $page");
}

$controllerClassName = ucfirst($page) . 'Controller';
$controllerFileName = "controllers/$controllerClassName.php";

if (file_exists($controllerFileName)) {
    require_once $controllerFileName;

    $controllerInstance = new $controllerClassName();

    if ($page === 'notes' && $_SERVER['REQUEST_METHOD'] === 'POST') {
        $controllerInstance->saveNote();
    } else {
        $controllerInstance->index();
    }
} else {
    die("Controller not found for page: $page");
}
?>
