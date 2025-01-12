<?php
session_start();
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alien Species Generator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Alien Species Random Generator</h1>
    <form action="generate_species.php" method="POST">
        <button type="submit">Generate Random Species</button>
    </form>
    <a href="logout.php">Logout</a>
</body>
</html>
