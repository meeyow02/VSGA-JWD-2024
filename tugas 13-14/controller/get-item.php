<?php
include '../utils/config.php';

$id = $_GET['id'];
$query = 'SELECT * FROM reservasi WHERE id = ?';
$stmt = $conn->prepare($query);
$stmt->bind_param('i', $id);

$stmt->execute();
$result = $stmt->get_result();
$item = $result->fetch_assoc();

echo json_encode($item);
