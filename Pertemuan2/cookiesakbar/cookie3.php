<?php
setcookie("user", "", time() - 3600, "/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie 3</title>
</head>
<body>
    <?php
    echo "Cookie berhasil dihapus";
    ?>
</body>
</html>