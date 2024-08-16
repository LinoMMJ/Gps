<?php
$array_example = array(
        "id" => 1,
        "name" => "John Doe",
        "email" => "john.doe@example.com"
);
header('Content-Type: application/json');
echo json_encode($array_example);