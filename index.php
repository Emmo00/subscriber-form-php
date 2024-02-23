<?php


include(__DIR__ . "/components/header.php");


$REQUEST_METHOD = strtoupper($_SERVER['REQUEST_METHOD']);

if ($REQUEST_METHOD === "GET") {
    include(__DIR__ . "/inc/get.php");
} else if ($REQUEST_METHOD === "POST") {
    include(__DIR__ . "/inc/post.php");
}


include(__DIR__ . "/components/footer.php");