<?php
session_start();
include '../utils/config.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            $_SESSION['user'] = $row;
            echo "<script>
                    alert('Selamat Datang, ". ucfirst($username) ." !');
                    window.location.href = '../index.php';
                </script>";
            exit;
        } else {
            echo "<script>
                    alert('Username / Password Anda salah!');
                    window.location.href = '../login.php';
                </script>";
        }
    }
    $result->close();
}

$conn->close();
