<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
        <h2>Hasil Pendaftaran</h2>
        <div class="result-box">
            <?php
            $paket = $_POST['paket'] ?? "Belum memilih paket";
            $modul = $_POST['modul'] ?? [];

            echo "<p><strong>Paket:</strong> " . htmlspecialchars($paket) . "</p><br>";

            if (count($modul) == 0) {
                echo "<p><em>Tanpa modul tambahan</em></p>";
            } else {
                echo "<p><strong>Modul Tambahan:</strong></p><ul class='result-list'>";
                foreach ($modul as $m) {
                    echo "<li>" . htmlspecialchars($m) . "</li>";
                }
                echo "</ul><p><strong>Jumlah modul:</strong> " . count($modul) . "</p>";
            }

            if (count($modul) == 3) {
                echo "<div class='badge-lengkap'>Paket Lengkap!</div>";
            }
            ?>
        </div>
        <a href="index.php" class="btn-back">&laquo; Kembali ke Form</a>
    </div>
</body>
</html>