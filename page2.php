
<?php

// Ambil data dari form
$username = isset($_GET['username']) ? trim($_GET['username']) : '';
$pass = isset($_GET['pass']) ? trim($_GET['pass']) : '';
$jurusan = isset($_GET['jurusan']) ? trim($_GET['jurusan']) : '';

$errors = [];

// 
if ($username === '') {
    $errors[] = "Username tidak boleh kosong.";
}

// Validasi password
if ($pass === '') {
    $errors[] = "Password tidak boleh kosong.";
} elseif (strlen($pass) < 6) {
    $errors[] = "Password minimal 6 karakter.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Validasi Data Mahasiswa</title>
</head>
<body>
    <h2>Hasil Validasi</h2>
    <?php 
        if (!empty($errors)):  //jika terdapat error
        ?>
        <ul style="color:red;">
            <?php 
                foreach ($errors as $error): 
            ?>
                <li><?= htmlspecialchars($error) ?></li>
            <?php 
                endforeach; 
            ?>
        </ul>
        <a href="page1.php">Kembali ke Form</a>
    <?php 
        else:  //jik
        ?>
        <p>Username: <?= htmlspecialchars($username) ?></p>
        <p>Jurusan: <?= htmlspecialchars($jurusan) ?></p>
        <p>Password valid!</p>
    <?php 
        endif; 
        ?>
</body>
</html>