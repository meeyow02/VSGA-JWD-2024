<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Aplikasi Pembayaran</title>
</head>
<body>
    <div class="main-container">
        <header>
            <a href="logout.php"class="logout-button">logout</a>
        </header>
        <section class="panel-form">
            <h1>Hitung Pembayaran</h1>
            <form action="index.php" method="POST">
                <div class="form-group">
                    <label for="">Total belanja </label>
                    <input type="text" name="total_belanja" id="total_belanja">

                </div>
                <input type="submit" value="hitung" class="submit-button">
            </form>
        </section>
        <?php

            function hitung_diskon($total_belanja)
            {
                $diskon = 0;
                if ($total_belanja >= 100000) {
                    $diskon = $total_belanja * 0.1;
                } else if ($total_belanja >= 50000) {
                    $diskon = $total_belanja * 0.05;
                }

                return $diskon;

            }

            if($_POST) {

                $total_belanja = $_POST['total_belanja'];
                $nilai_diskon = hitung_diskon
                ($total_belanja);

                $bayar = $total_belanja - $nilai_diskon;

                echo "<section class='panel-info'>";
                    echo "<div class='info-belanja'>";
                        echo "<p>Total Belanja </p>";
                        echo "<p> $total_belanja </p>";
                    echo "</div>";

                    echo "<div class='info-diskon'>";
                        echo "<p>Diskon</p>";
                        echo "<p>$nilai_diskon</p>";
                    echo "</div>";

                    echo "<div class='info-bayar'>";
                        echo "<p>Total Bayar </p>";
                        echo "<p>$bayar</p>";
                    echo "</div>";

                echo "</section>";
            }


            ?>
    </div>
</body>
</html>