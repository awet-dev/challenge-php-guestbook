<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require "Postloader.php";
require "Post.php";

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
    if ($_POST['title'] && $_POST['message'] && $_POST['name']) {
        $guestbook = new Post($_POST['title'], $_POST['message'], $_POST['name']);
        $title = $guestbook->getTitle();
        $guestbook->getDate(date("F j, Y, g:i a"));
        $time = $guestbook->returnDate();
        $content = $guestbook->getContent();
        $name= $guestbook->getName();
        $loader = new Postloader($title, $time, $content, $name);
    }
}

function retrieveData() {
    if (!empty(file_get_contents("post.json"))) {
        $data = file_get_contents("post.json");
        $data = json_decode($data, true);
        return $data;
    } else {
        return 0;
    }
}

$display = array();
function displayPost () {
    $postData = retrieveData();
    if ($postData) {
        $postData = array_slice($postData, -20, 20);
        return array_reverse($postData);
    }
}
if (displayPost()) {
    $display = displayPost();
}
if (isset($_POST["Check"])) {
    if (isset($_POST['visitors']) && is_numeric($_POST['visitors']) && $display) {
        $display = array_slice($display, -$_POST['visitors'], $_POST['visitors']);
        $display = array_reverse($display);
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="container">

<nav class="navbar navbar-light bg-light mb-3 justify-content-*-between">
    <a class="navbar-brand" href="#">Guest Book</a>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="form-inline my-2 my-lg-0">
        <input name="visitors" class="form-control mr-sm-2" type="tel" placeholder="Number Of Visitor" aria-label="Search">
        <input name="Check" class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Check Visitors">
    </form>
</nav>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <div class="form-group col">
        <input name="name" type="text" class="form-control mb-2" id="inputEmail4" placeholder="Guest Name">
        <input name="title" type="text" class="form-control mb-2" id="inputZip" placeholder="Title">
        <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write your message here please!"></textarea>
    </div>
    <input name="send" type="submit" class="btn btn-primary" value="Submit">
</form>
    <div class="row">
        <?php foreach ($display as $post)  :?>
            <div class='card col-4'>
                <div class='card-body'>
                    <h4 class='card-title'><?php echo "Title: ".$post["title"]?></h4>
                    <h6 class='card-subtitle mb-2 text-muted'><?php echo "Name: ".$post["name"] ."  visit at: " .$post["time"]?></h6>
                    <p class='card-text'><?php echo "Comments: ".$post["content"]?></p>
                </div>
            </div>
        <?php endforeach;?>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>

