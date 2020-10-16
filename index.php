<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require "Postloader.php";
require "Post.php";
require "post.json";
require "index.html";

if(!isset($_POST['title'])) {
    $_POST['title'] = "";
}

if(!isset($_POST['name'])) {
    $_POST['name'] = "";
}

if(!isset($_POST['message'])) {
    $_POST['message'] = "";
}

if (isset($_POST['send'])) {
    $guestbook = new Post($_POST['title'], $_POST['message'], $_POST['name']);
    $title = $guestbook->getTitle();
    $guestbook->getDate(date("F j, Y, g:i a"));
    $time = $guestbook->returnDate();
    $content = $guestbook->getContent();
    $name= $guestbook->getName();
    $loader = new Postloader($title, $time, $content, $name);
}

