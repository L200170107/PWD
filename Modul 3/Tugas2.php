<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ganjil & Genap</title>
</head>
<body>
    <h1>Menentukan Ganjil & Genap </h1>
    <form action="tugas2.php" method="POST">
        <p>Insert whole numbers : <input type="text" name="wholeNumber" id="wholeNumber"></p>
        <p><input type="submit" value="Check" name="submit"></p>
    </form>
    <?php
        error_reporting(E_ALL ^ E_NOTICE);
        $wholeNumber = $_POST['wholeNumber'];
        $submit = $_POST['submit'];
        if ($submit) {
            
            if ($wholeNumber % 2 == 0) {
                
                echo ("$wholeNumber adalah bilangan Genap.");
            } else {
                echo ("$wholeNumber adalah bilangan Ganjil.");
            }
        }
    ?>
</body>
</html>