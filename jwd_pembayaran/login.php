<?php
session_start();
include('koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Menyiapkan pernyataan SQL
    $stmt = $koneksi->prepare("SELECT id_user, username, password FROM tabel_user WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    // Periksa apakah username ditemukan
    if ($stmt->num_rows == 1) {
        $stmt->bind_result($id, $db_username, $db_password);
        $stmt->fetch();

        // Verifikasi password
        if (sha1($password) === $db_password) {
            $_SESSION['user_id'] = $id;
            $_SESSION['username'] = $username;
            header("Location: index.php");
            exit;
        } else {
            $error = "Password salah.";
        }
    } else {
        $error = "Username tidak ditemukan.";
    }

    $stmt->close();
}

$koneksi->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="login-container">
        <form method="post" action="">
            <h2>Login</h2>
            <?php if (isset($error)): ?>
                <p class="error"><?php echo $error; ?></p>
            <?php endif; ?>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
