<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Program Penjumlahan</title>
</head>
<body>
    <h1>Program Penjumlahan</h1>
    <form action="tugas1.php" method="post">
        <p>Nilai A adalah : <input type="text" name="nilaiA" size="30"></p>
        <p>Nilai B adalah : <input type="text" name="nilaiB" size="30"></p>
        <p><input type="submit" value="Kirim" name="submit"></p>
    </form>
    <?php
        error_reporting(E_ALL ^ E_NOTICE);
        $nilaiA = $_POST['nilaiA'];
        $nilaiB = $_POST['nilaiB'];
        $submit = $_POST['submit'];
        if ($submit) {
            # code...
            if ($nilaiA == "" and $nilaiB == "") {
                # code...
                echo ("Tidak Boleh kosong!");
            } else {
                # code...
                $sum = $nilaiA + $nilaiB;
                echo ("Nilai A adalah : $nilaiA<br>");
                echo ("Nilai B adalah : $nilaiB<br>");
                echo ("Jadi Nilai A ditambah Nilai B adalah $sum");
            }
        }
    ?>
</body>
</html>