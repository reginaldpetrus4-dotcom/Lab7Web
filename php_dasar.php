<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
    <?php
        echo "Hello Word";
    ?>
</body>
</html>

<h2>Menggunakan Variable</h2>
<?php
    $nim = "0411500400";
    $nama = 'Abdullah';
    echo "NIM : " . $nim . "<br>";
    echo "Nama : $nama";
?>

<h2>Predefine Variable</h2>
<?php
   echo "Selamat Datang " . ($_GET['nama'] ?? '');
?>
</body>
</html>