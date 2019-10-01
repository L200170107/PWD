<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload File</title>
</head>
<body>
    <?php
        error_reporting(E_ALL^E_NOTICE);
        $direktori='images/';
        $nama_foto = $_FILES['foto']['name'];
        $size_foto = $_FILES['foto']['size'];
        $tipe_foto = $_FILES['foto']['type'];
        $upload = $direktori.$nama_foto;
        $submit = $_POST['submit'];

        if($submit){
            move_uploaded_file($_FILES['foto'] ['tmp_name'], $upload);
            echo "<h3>File Berhasil di Upload</h3>
            <br><br>
            <img border='0' src='$upload'><br><br>
            <b>Informasi File : </b><br>
            Nama File : $nama_foto <br>
            Ukuran File : $size_foto byte <br>
            Tipe File : $tipe_foto <br>";
        }else{
            ?>
            <form action="upload.php" method="post" enctype='multipart/form-data'>
            Upload file : <input type="file" name='foto' size='20'><br>
            <input type="submit" value="UPLOAD" name='submit'>
           </form>
            <?php
        }
        ?>
</body>
</html>