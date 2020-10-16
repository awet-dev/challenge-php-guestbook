<?php

class Post {
    private string $title;
    private $date;
    private string $content;
    private string $name;

    function __construct ($title, $content, $name) {
        $this->title = $title;
        $this->content = $content;
        $this->name = $name;
    }

    function getTitle () {
        return $this->title;
    }
    function getDate ($time) {
        $this->date = $time;
    }
    function returnDate () {
        return $this->date;
    }
    function getContent () {
        return $this->content;
    }
    function getName () {
        return $this->name;
    }


}