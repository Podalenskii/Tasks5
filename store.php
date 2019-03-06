<?php
require 'database/QueryBuilder.php';
$db = new QueryBuilder;
$data = [
    "title" => $_POST['title'],
    "comment" => $_POST['comment'],
        "date" => $_POST['date']
];
$tasks = $db->store("posts", $data);
header('Location: http:./'); exit;