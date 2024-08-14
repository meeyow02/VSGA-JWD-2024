<?php
include '../utils/config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM reservasi WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        header("Location: ../pesanan.php?delete=true");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
