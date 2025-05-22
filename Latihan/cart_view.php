<?php
// filepath: c:\Users\ACER\OneDrive\Documents\coding\web dev\kampus\Pertemuan9\Latihan\cart_view.php
session_start();
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Keranjang Belanja</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 30px auto;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: center;
        }

        th {
            background: #eee;
        }
    </style>
</head>

<body>
    <h2 style="text-align:center;">Keranjang Belanja</h2>
    <?php if (empty($cart)): ?>
        <p style="text-align:center;">Keranjang kosong.</p>
    <?php else: ?>
        <table>
            <tr>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
            <?php foreach ($cart as $index => $item): ?>
                <tr>
                    <td><?= htmlspecialchars($item['name']) ?></td>
                    <td>Rp<?= number_format($item['price'], 0, ',', '.') ?></td>
                    <td>
                        <form method="post" action="cart.php" style="display:inline;">
                            <input type="hidden" name="action" value="update">
                            <input type="hidden" name="index" value="<?= $index ?>">
                            <input type="number" name="qty" value="<?= $item['qty'] ?>" min="1" style="width:50px;">
                            <button type="submit">Update</button>
                        </form>
                    </td>
                    <td>
                        <form method="post" action="cart.php" style="display:inline;">
                            <input type="hidden" name="action" value="delete">
                            <input type="hidden" name="index" value="<?= $index ?>">
                            <button type="submit" onclick="return confirm('Hapus produk ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            <?php
            $total = 0;
            foreach ($cart as $item) {
                $total += $item['price'] * $item['qty'];
            }
            ?>
            <tr>
                <td colspan="3" style="text-align:right; font-weight:bold;">Total</td>
                <td style="font-weight:bold;">Rp<?= number_format($total, 0, ',', '.') ?></td>
            </tr>
        </table>
    <?php endif; ?>
    <?php if (!empty($cart)): ?>
        <div style="text-align:center; margin-top:20px;">
            <a href="checkout_success.php" style="padding:10px 20px; background:green; color:white; border-radius:5px; text-decoration:none;">Checkout</a>
        </div>
    <?php endif; ?>
    <p></p>
    <div style="text-align:center;">
        <a href="shop1.php">Kembali ke Toko</a>
    </div>
    <?php
    $total = 0;
    foreach ($cart as $item) {
        $total += $item['price'] * $item['qty'];
    }
    ?>
</body>

</html>