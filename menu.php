<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Kasir</title>
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
        .menu-list {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
        }
        .menu-item {
            width: 200px;
            padding: 15px;
            background: #00c4cc;
            color: #fff;
            border-radius: 8px;
            text-align: center;
            cursor: pointer;
        }
        .menu-item:hover {
            background: #00a5a9;
        }
        form {
            text-align: center;
            margin-top: 20px;
        }
        button {
            padding: 10px 20px;
            background: #00c4cc;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #00a5a9;
        }
    </style>
</head>
<body>
    <h1>Daftar Menu</h1>
    <form action="transaksi.php" method="GET">
        <div class="menu-list">
            <label class="menu-item">
                <input type="checkbox" name="menu[]" value="Nasi Goreng|20000" style="display: none;">
                Nasi Goreng - 20K
            </label>
            <label class="menu-item">
                <input type="checkbox" name="menu[]" value="Ayam Geprek|20000" style="display: none;">
                Ayam Geprek - 20K
            </label>
            <label class="menu-item">
                <input type="checkbox" name="menu[]" value="Soto Ayam|30000" style="display: none;">
                Soto Ayam - 30K
            </label>
            <label class="menu-item">
                <input type="checkbox" name="menu[]" value="Soto Daging|35000" style="display: none;">
                Soto Daging - 35K
            </label>
        </div>
        <button type="submit">Lanjutkan ke Transaksi</button>
    </form>
</body>
</html>
