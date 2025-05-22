<?php
// filepath: c:\Users\ACER\OneDrive\Documents\coding\web dev\kampus\Pertemuan9\Latihan\cart.php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Jika update jumlah
    if (isset($_POST['action']) && $_POST['action'] === 'update') {
        $index = (int)$_POST['index'];
        $qty = max(1, (int)$_POST['qty']);
        if (isset($_SESSION['cart'][$index])) {
            $_SESSION['cart'][$index]['qty'] = $qty;
        }
        header('Location: cart_view.php');
        exit;
    }

    // Jika hapus barang
    if (isset($_POST['action']) && $_POST['action'] === 'delete') {
        $index = (int)$_POST['index'];
        if (isset($_SESSION['cart'][$index])) {
            array_splice($_SESSION['cart'], $index, 1);
        }
        header('Location: cart_view.php');
        exit;
    }

    // Tambah barang ke keranjang (default)
    if (isset($_POST['product_name']) && isset($_POST['product_price'])) {
        $product = [
            'name' => $_POST['product_name'],
            'price' => $_POST['product_price'],
            'qty' => 1
        ];

        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        $found = false;
        foreach ($_SESSION['cart'] as &$item) {
            if ($item['name'] === $product['name']) {
                $item['qty'] += 1;
                $found = true;
                break;
            }
        }
        unset($item);

        if (!$found) {
            $_SESSION['cart'][] = $product;
        }
    }
    // Redirect kembali ke shop
    header('Location: shop1.php');
    exit;
}
