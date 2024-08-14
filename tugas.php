<!-- Tugas 6-8 -->

<?php
function histungDiskon($totalBelanja)
{
    if ($totalBelanja >= 100000) {
        $diskon = 0.1 * $totalBelanja;
    } elseif ($totalBelanja >= 50000 && $totalBelanja < 100000) {
        $diskon = 0.005 * $totalBelanja;
    } else {
        $diskon = 0;
    }
    return $diskon;
}

$totalBelanja = 0;
$diskon = 0;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (!empty($_POST['totalBelanja'])) {
        $totalBelanja = $_POST['totalBelanja'];
        $diskon = histungDiskon($totalBelanja);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 6-8</title>
</head>

<body style="padding: 1rem; margin-left: 5rem; border: .1rem solid; width: fit-content;">
    <h1>Menghitung Diskon</h1>
    <form method="post">
        <label for="totalBelanja">Total Belanja:</label>
        <input type="number" name="totalBelanja" id="totalBelanja" required>
        <br>
        <br>
        <button type="submit">Input</button>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($totalBelanja)) : ?>
        <br>
        <br>
        <div style="border: .1rem solid; width: fit-content;  padding: .5rem;">
            <p>Total Belanja: <span style="font-weight: bold;">Rp. <?= number_format($totalBelanja) ?></span></p>
            <p>Diskon: <span style="font-weight: bold;">Rp. <?= number_format($diskon) ?></span></p>
            <hr>
            <p style="font-weight: bold;">Total yang harus dibayar: Rp. <?= number_format($totalBelanja - $diskon) ?></p>
        </div>
    <?php endif; ?>
</body>

</html>