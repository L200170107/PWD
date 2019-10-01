<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fungsi Tanggal dan Waktu</title>
</head>
<body>
    <?php
    date_default_timezone_set('Asia/Jakarta');
    $jam = date('H:i:s A');
    $waktu = date('d-m-Y');
    $hari = date('1');
    $tanggal = date('d');
    $bulan = date('F');
    $tahun = date('Y');
    echo "Sekarang jam $jam <br>";
    echo "Sekarang tanggal $waktu <br>";
    echo "Lebih detailnya hari $hari Tanggal $tanggal Bulan $bulan tahun $tahun";
    ?>
</body>
</html>