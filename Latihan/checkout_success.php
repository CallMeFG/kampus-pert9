<?php
// filepath: c:\Users\ACER\OneDrive\Documents\coding\web dev\kampus\Pertemuan9\Latihan\checkout_success.php
session_start();
// Kosongkan keranjang setelah checkout
unset($_SESSION['cart']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pembelian Berhasil</title>
    <style>
        body {
            text-align: center;
            margin-top: 60px;
            font-family: sans-serif;
        }

        a {
            padding: 10px 20px;
            background: royalblue;
            color: white;
            border-radius: 5px;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <h2>Pembelian Berhasil!</h2>
    <p>Terima kasih telah berbelanja.</p>
    <a href="shop1.php">Kembali ke Halaman Produk</a>
</body>

</html>