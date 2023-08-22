<?php
require_once 'PaintingModel.php';

$action = $_GET['action'] ?? '';

$model = new PaintingModel();

if ($action === 'add' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $finished = $_POST['finished'];
    $media = $_POST['media'];
    $artist = $_POST['artist'];
    $style = $_POST['style'];
    $image = $_POST['image'];
    $model->addPainting($title, $finished, $media, $artist, $style, $image);
    header('Location: index.php');
} else {
    $paintings = $model->getAllTasks();
    require 'view_paintings.php';
}
?>
