<?php

require_once('includes/class-autoload.inc.php');

$posts = new Posts();

if(isset($_POST['submit'])){
    $title = $_POST['post-title'];
    $body = $_POST['post-content'];
    $author = $_POST['post-author'];
    $posts->addPost($title, $body, $author);
    header("Location: {$_SERVER['HTTP_REFERER']}");

}else if(isset($_POST['update'])){
    $id = $_GET['id'];
    $title = $_POST['post-title'];
    $body = $_POST['post-content'];
    $author = $_POST['post-author'];
    $posts->updatePost($title, $body, $author, $id);
    header("Location: {$_SERVER['HTTP_ORIGIN']}");

}else if($_GET['send'] === 'delete'){
    $id = $_GET['id'];
    $posts->deletePost($id);
    header("Location: {$_SERVER['HTTP_REFERER']} ");
    }

?>

