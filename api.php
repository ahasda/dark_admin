<?php
header("Content-Type: application/json");

// Dummy data
$data = [
    ["id" => 1, "name" => "Alice", "email" => "alice@example.com"],
    ["id" => 2, "name" => "Bob", "email" => "bob@example.com"],
    ["id" => 3, "name" => "Charlie", "email" => "charlie@example.com"],
];

// Check if there's an ID parameter in the URL
if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    foreach ($data as $item) {
        if ($item['id'] === $id) {
            echo json_encode($item);
            exit;
        }
    }
    // If no item found with the given ID
    echo json_encode(["message" => "Item not found"]);
} else {
    // Return all data if no ID is specified
    echo json_encode($data);
}
?>
