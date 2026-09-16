<?php

header('Content-Type: application/json');

$user = [
    "id" => 1,
    "name" => "Daniel",
    "email" => "daniel@example.com",
    "status" => "active"
];

echo json_encode($user);

?>
