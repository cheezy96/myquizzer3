<?php

$dsn = "mysql:
        host=localhost;
        dbname=quizzer3;
        user=root;
        password=;
";

$conn = new PDO($dsn);

$name = $_GET['name'];
$points = $_GET['points'];
$time = $_GET['time'];

$conn->query("INSERT INTO `scores` (`id`, `name`, `points`, `date`, `time`) VALUES (NULL, '$name', '$points', current_timestamp(), '$time');");