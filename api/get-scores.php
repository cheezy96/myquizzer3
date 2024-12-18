<?php

$dsn = "mysql:
        host=localhost;
        dbname=quizzer3;
        user=root;
        password=;
";

$conn = new PDO($dsn);

$results = $conn->query("SELECT * FROM `scores`")
                ->fetchAll();
                
header('Content-type: json');
echo json_encode($results);