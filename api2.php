<?php
header("Content-Type: application/json");

// Database connection
$conn = mysqli_connect('localhost', 'root', '', 'litem_fee') or die('Unable to connect to the database.');


$sql = "SELECT * FROM contact_detalis";
if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    $sql .= " WHERE id = $id";
}

$result = $conn->query($sql);

$data = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
} else {
    echo json_encode(["message" => "No records found"]);
    $conn->close();
    exit;
}

echo json_encode($data);
$conn->close();
?>
