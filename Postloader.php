<?php
declare(strict_types=1);

class Postloader {
    private array $post;
    private array $myData = [];

    function __construct ($title, $time, $content, $name) {
        $this->post = array('title' => $title, 'time' => $time, 'content' => $content, 'name' => $name);
    }

    function setData() {
        return $this->post;
    }
    function getData($data) {
        $this->myData = $data;
    }

    function savePost() {
        file_put_contents("post.json", json_encode($this->myData, JSON_PRETTY_PRINT));
    }
}
