<?php
$data = [
    "id"    => $_GET['id'],
    "title" => $_POST['title'],
    "comment"  => $_POST['content'],
        "date" => $_POST['date']
        ];
require 'database/QueryBuilder.php';
$db = new QueryBuilder;
$tasks = $db->update("posts", $data);




header("Location: http:./"); exit;
