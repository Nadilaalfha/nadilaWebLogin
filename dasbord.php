<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Nadila Alfha Riza (2211010103)</h2>
        <a href="logout.php">Logout</a>
        <p>UAS PEMROGRAMAN LANJUT</p>
        <p>Kelas 5TI-2</p>
    </div>
</body>
</html>