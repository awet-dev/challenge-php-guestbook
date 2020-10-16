<?php
declare(strict_types=1);

class Postloader {
    private array $post;

    function __construct ($title, $time, $content, $name) {
        $this->post = array('title' => $title, 'time' => $time, 'content' => $content, 'name' => $name);
    }

    function getData() {
        if (!empty(file_get_contents("post.json"))) {
            $data = file_get_contents("post.json");
            $data = json_decode($data);
            return $data;
        } else {
            return 0;
        }

    }

    function saveData() {
        $myData = [];
        $data = $this->getData();
        if ($data) {
            foreach ($data as $post) {
                array_push($myData, $post);
            }
        }
        array_push($myData, $this->post);
        file_put_contents("post.json", json_encode($myData, JSON_PRETTY_PRINT));
        return $myData;
    }

}
