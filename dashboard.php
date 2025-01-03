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
    <title>Dashboard Kasir</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: url('images/background.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: rgba(0, 0, 0, 0.7);
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            width: 80%;
            max-width: 600px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        }
        h1 {
            font-size: 32px;
            margin-bottom: 20px;
        }
        p a {
            color: #00c4cc;
            text-decoration: none;
            font-weight: 600;
            margin: 0 10px;
        }
        p a:hover {
            text-decoration: underline;
        }
        .logout {
            margin-top: 20px;
            display: inline-block;
            background: #00c4cc;
            color: #000;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
        }
        .logout:hover {
            background: #00a5a9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat Datang di Dashboard Kasir</h1>
        <p>
            <a href="menu.php">Menu</a> | 
            <a href="transaksi.php">Transaksi</a> | 
            <a href="index.html">Daftar Menu Gambar</a>
        </p>
        <a class="logout" href="logout.php">Logout</a>
    </div>
</body>
</html>
