<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 10/11</title>
</head>

<body>
    <?php
    include 'koneksi.php';
    $conn = mysqli_connect($server, $user, $password, $nama_database);
    if (!$conn) {
        die('Koneksi Gagal: ' . mysqli_connect_error());
    }
    $db = 'SELECT * FROM calon_siswa';
    $result = mysqli_query($conn, $db);

    // var_dump($result);

    foreach ($result as $item) {
        echo '<hr> <span>Nama: ' . $item['nama'] . '</span>' . '<br>' .
            '<span>Alamat: ' . $item['alamat'] . '</span>' . '<br>' .
            '<span>Jenis Kelamin: ' . $item['jenis_kelamin'] . '</span>' . '<br>' .
            '<span>Agama: ' . $item['agama'] . '</span>' . '<br>' .
            '<span>Sekolah Asal: ' . $item['sekolah_asal'] . '</span>' . '<br>' . '<hr>';
    }

    ?>
</body>

</html>