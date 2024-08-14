<?php 
include '../utils/config.php';

if (isset($_POST['register'])) {
    $username = strtolower(stripslashes($_POST['username']));
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirmPassword = mysqli_real_escape_string($conn, $_POST['confirmPassword']);

    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Username sudah terdaftar');
                window.location.href = '../registrasi.php';
            </script>";
        return false;
    }
    
    if ($password !== $confirmPassword) {
        echo "<script>
                alert('Konfirmasi password tidak sesuai!');
                window.location.href = '../registrasi.php';
            </script>";
        
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $hashedPassword);
        if ($stmt->execute()) {
            echo "<script>
                    alert('User baru berhasil ditambahkan');
                    window.location.href = '../login.php';
                </script>";
            exit;
        } else {
            echo "<script>
                    alert('Registrasi gagal: " . htmlspecialchars($stmt->error) . "');
                </script>";
        }

        $stmt->close();
    }
}
$conn->close();
?>