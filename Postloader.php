<?php
declare(strict_types=1);

class Postloader {
    private array $post = [];

    function __construct ($data) {
        array_push($this->post, $data);
    }

    function savePost() {
        file_put_contents("post.json", json_encode($this->post, JSON_PRETTY_PRINT), );
    }
}

