<?php if (isset($_GET['status'])): ?>
    <p>
        <?php
        if ($_GET['status'] == 'sukses') {
            echo "Pendaftaran berhasil!";
        } else {
            echo "Pendaftaran gagal!";
        }
        ?>
    </p>
<?php endif; ?>