<?php

class Post {
    private string $title;
    private $date;
    private string $content;
    private string $name;

    function __construct ($title, $date, $content, $name) {
        $this->title = $title;
        $this->date = $date;
        $this->content = $content;
        $this->name = $name;
    }

    function getTitle () {
        return $this->title;
    }
    function getDate () {
        return $this->date;
    }
    function getContent () {
        return $this->content;
    }
    function getName () {
        return $this->name;
    }

}
