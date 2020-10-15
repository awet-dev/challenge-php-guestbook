<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//image this code could be a complex query
$users = ['John Doe', 'Joe Doe', 'John Smith', 'An Onymous'];
$articles = ['Terror over london', 'Football: a useless hobby?', 'Economic crisis ahead, says expert', 'Fortis is Fortwas'];
//end controller
//start view

require "Postloader.php";
require "Post.php";

if(!isset($_POST['']))


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
    <form action="index.php" method="post" class="form-inline my-2 my-lg-0">
        <input name="number of visitors" class="form-control mr-sm-2" type="tel" placeholder="Number Of Visitor" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Check Visitors</button>
    </form>
</nav>

<form action="index.php" method="post">
    <div class="form-row">
        <div class="form-group col-md-6">
            <input name="name" type="email" class="form-control" id="inputEmail4" placeholder="Guest Name">
        </div>
        <div class="form-group col-md-6">
            <input name="time" type="date" class="form-control" id="inputPassword4" placeholder="Time">
        </div>
    </div>
    <div class="form-group">
        <input name="title" type="text" class="form-control mb-2" id="inputZip" placeholder="Title">
        <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write your message here please!"></textarea>
    </div>
    <input name="send" type="submit" class="btn btn-primary" value="Send"/>
</form>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>