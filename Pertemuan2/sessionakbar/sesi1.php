<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesi 1</title>
</head>
<body>
    <?php
    $_SESSION['nama'] = "Akbar Rizky";
    $_SESSION['absen'] = 02;
    echo "Nama saya ". $_SESSION['nama']. "<br>". "Nomor absen ". $_SESSION['absen'];

    ?>
</body>
</html>