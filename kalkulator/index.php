<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan Makanan</title>
</head>
<body>
    <h2>Form Pemesanan Makanan</h2>
    <table>
        <tr>
            <th>Nama Makanan</th>
            <th>Harga</th>
            <th>Jumlah</th>
        </tr>
        <tr class="item">
            <td>Nasi Goreng</td>
            <td class="harga">Rp. 10.000</td>
            <td><input type="number" class="jumlah" value="0" title="Jumlah nasi Goreng"></td>
        </tr>

        <tr class="item">
            <td>Ayam Goreng</td>
            <td class="harga">Rp. 12.000</td>
            <td><input type="number" class="jumlah" value="0" title="Jumlah Ayam Goreng"></td>
        </tr>

        <tr class="item">
            <td>Es Teh</td>
            <td class="harga">Rp. 2.000</td>
            <td><input type="number" class="jumlah" value="0" title="Jumlah Es Teh"></td>
        </tr>

        <tr class="item">
            <td>Kopi</td>
            <td class="harga">Rp. 3.000</td>
            <td><input type="number" class="jumlah" value="0" title="Jumlah Kopi"></td>
        </tr>
    </table>
    <!-- Tombol Hitung Total Pesanan -->
     <button id="hitungTotal">Hitung Total</button>
     <div id="totalPesanan"></div>
     <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
     <script>
        $(document).ready(function() {
            $('#hitungTotal').click(function() {
                var total = 0;
                $('.item').each(function() {
                    var harga = parseInt($(this).find(".harga").text().replace("Rp", "").replace(/\./g, ""));
                    var jumlah = parseInt($(this).find(".jumlah").val());
                    total += harga * jumlah;
                });
                var totalFormatted = "Rp." + total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                $("#totalPesanan").text("Total Pesanan : " + totalFormatted);
            });
        });
     </script>



</body>
</html>