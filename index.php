<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pendaftaran Kursus</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
        <h2>Form Pendaftaran Kursus</h2>
        <form action="proses.php" method="POST">
            <div class="form-group">
                <label class="form-label">Paket:</label>
                <label class="option-item"><input type="radio" name="paket" value="Reguler" required> Reguler</label>
                <label class="option-item"><input type="radio" name="paket" value="Intensif"> Intensif</label>
            </div>
            <div class="form-group">
                <label class="form-label">Modul Tambahan:</label>
                <label class="option-item"><input type="checkbox" name="modul[]" value="Git"> Git</label>
                <label class="option-item"><input type="checkbox" name="modul[]" value="Debugging"> Debugging</label>
                <label class="option-item"><input type="checkbox" name="modul[]" value="Deployment"> Deployment</label>
            </div>
            <button type="submit" class="btn-submit">Daftar Sekarang</button>
        </form>
    </div>
</body>
</html>