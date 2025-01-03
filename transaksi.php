<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

$menu_dipilih = [];
$total_harga = 0;

if (isset($_GET['menu'])) {
    foreach ($_GET['menu'] as $item) {
        list($nama, $harga) = explode('|', $item); // Pisahkan nama dan harga
        $menu_dipilih[] = ['nama' => $nama, 'harga' => (int)$harga];
        $total_harga += (int)$harga;
    }
} else {
    $menu_dipilih = 'Tidak ada menu yang dipilih';
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi Menu</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 20px;
            background: #f4f4f4;
            color: #333;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .menu-table {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            border-collapse: collapse;
        }
        .menu-table th, .menu-table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        .menu-table th {
            background: #00c4cc;
            color: white;
        }
        .total {
            text-align: right;
            font-weight: bold;
        }
        .buttons {
            text-align: center;
            margin-top: 20px;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            margin: 5px;
            background: #00c4cc;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }
        .button:hover {
            background: #00a5a9;
        }
        .clear-btn {
            background: #ff4d4d;
        }
        .clear-btn:hover {
            background: #e63c3c;
        }
    </style>
</head>
<body>
    <h1>Transaksi Menu</h1>
    <?php if (is_array($menu_dipilih) && count($menu_dipilih) > 0): ?>
        <table class="menu-table">
            <tr>
                <th>Nama Menu</th>
                <th>Harga</th>
            </tr>
            <?php foreach ($menu_dipilih as $menu): ?>
                <tr>
                    <td><?php echo htmlspecialchars($menu['nama']); ?></td>
                    <td><?php echo 'Rp ' . number_format($menu['harga'], 0, ',', '.'); ?></td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td class="total">Total Harga</td>
                <td class="total"><?php echo 'Rp ' . number_format($total_harga, 0, ',', '.'); ?></td>
            </tr>
        </table>
    <?php else: ?>
        <p>Tidak ada menu yang dipilih.</p>
    <?php endif; ?>

    <div class="buttons">
        <a href="menu.php" class="button">Kembali ke Menu</a>
        <a href="dashboard.php" class="button">Kembali ke Dashboard</a>
        <a href="transaksi.php" class="button clear-btn">Clear Transaksi</a>
    </div>
</body>
</html>
