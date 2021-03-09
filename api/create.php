<?php 
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: POST');
    
    include_once '../config/Database.php';
    include_once '../models/Post.php';

    //Connect to DB
    $db = new Database();
    $db = $db->connect();
    //Instantiate the post
    $post = new Post($db);

    //Get the data
    $title = $_POST['title'];
    $body = $_POST['body'];
    $post->create($title,$body);
?>