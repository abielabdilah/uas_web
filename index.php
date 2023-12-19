<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Jika sudah login, tampilkan halaman dashboard
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
<style>
    /* Reset CSS */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    color: #333;
    line-height: 1.6;
    margin: 0;
    padding: 0;
}

/* Header styling */
h2 {
    color: #333;
}

/* Navigation styling */
ul {
    list-style-type: none;
    background-color: #333;
    overflow: hidden;
}

li {
    float: left;
}

/* Navigation link styling */
a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

a:hover {
    background-color: #ddd;
    color: black;
}

/* Container styling */
.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

/* Additional styling for the welcome message */
#welcome-message {
    font-size: 1.2em;
    margin-bottom: 20px;
}

</style>
</head>
<body>

<h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
<p> dashboard .</p>

    <ul>
        <li><a href="read.php">daftar buku </a></li>
        <li><a href="anggota.php">anggota </a></li>
        <li><a href="create_peminjaman.php">peminjaman </a></li>
        <li><a href="logout.php">Logout</a></li> <!-- Tambahkan tautan logout -->

    </ul>

</body>
</html>
