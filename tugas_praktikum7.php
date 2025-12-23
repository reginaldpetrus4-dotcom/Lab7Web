<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tugas Praktikum 7</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f6f8;
            padding: 40px;
        }

        .container {
            width: 450px;
            margin: auto;
            background: #ffffff;
            padding: 25px;
            border-radius: 6px;
            box-shadow: 0 0 12px rgba(0,0,0,0.1);
        }

        h2, h3 {
            text-align: center;
            color: #2c3e50;
        }

        label {
            font-weight: bold;
            color: #34495e;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-top: 6px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type=submit] {
            background-color: #3498db;
            color: #fff;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }

        input[type=submit]:hover {
            background-color: #2980b9;
        }

        hr {
            margin: 30px 0;
        }

        .hasil {
            background: #ecf0f1;
            padding: 15px;
            border-radius: 5px;
            line-height: 1.8;
        }
    </style>
</head>
<body>

<div class="container">

<h2>Form Data Diri</h2>

<form method="post">
    <label>Nama</label>
    <input type="text" name="nama" required>

    <label>Tanggal Lahir</label>
    <input type="date" name="tgl_lahir" required>

    <label>Pekerjaan</label>
    <select name="pekerjaan" required>
        <option value="">-- Pilih Pekerjaan --</option>
        <option value="Mahasiswa">Mahasiswa</option>
        <option value="Programmer">Programmer</option>
        <option value="Designer">Designer</option>
        <option value="Admin">Admin</option>
    </select>

    <input type="submit" value="Proses">
</form>

<hr>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $pekerjaan = $_POST['pekerjaan'];

    // Hitung umur
    $lahir = new DateTime($tgl_lahir);
    $hari_ini = new DateTime();
    $umur = $hari_ini->diff($lahir)->y;

    // Gaji berdasarkan pekerjaan
    switch ($pekerjaan) {
        case "Mahasiswa":
            $gaji = 1000000;
            break;
        case "Programmer":
            $gaji = 5000000;
            break;
        case "Designer":
            $gaji = 4000000;
            break;
        case "Admin":
            $gaji = 3000000;
            break;
        default:
            $gaji = 0;
    }

    echo "<h3>Hasil Output</h3>";
    echo "<div class='hasil'>";
    echo "Nama : $nama <br>";
    echo "Tanggal Lahir : $tgl_lahir <br>";
    echo "Umur : $umur tahun <br>";
    echo "Pekerjaan : $pekerjaan <br>";
    echo "Gaji : Rp " . number_format($gaji, 0, ',', '.');
    echo "</div>";
}
?>

</div>

</body>
</html>
