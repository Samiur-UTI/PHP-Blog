<?php 
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    include_once '../config/Database.php';
    include_once '../models/Post.php';

    $db = new Database();
    $db = $db->connect();

    $post = new Post($db);

    $post->read();

?>
