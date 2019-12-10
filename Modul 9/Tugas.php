<?php
    session_start();
    error_reporting(E_ALL^E_NOTICE^E_DEPRECATED);
    $koneksi = mysqli_connect('localhost','root','','informatika');
    $username=$_POST['username'];
    $password=$_POST['password'];
    $submit=$_POST['submit'];
    if($submit){
        $sql="select * from user where Username='$username' and Password='$password'";
        $query=mysqli_query($koneksi,$sql);
        $cek=mysqli_num_rows($query);
        if($cek>0){
            $row = mysqli_fetch_assoc($query);
            if($row['status']=='Administrator'){
                $_SESSION['username']=$row['username'];
                $_SESSION['status']='Administrator';
                header("location:admin.php");
            }elseif($row['status']=='Member'){
                $_SESSION['username']=$row['username'];
                $_SESSION['status']='Member';
                header("location:member.php");
            }
        }else{
            echo "<script>
                    alert('Login Gagal, silahkan coba lagi');
                    document.location='Tugas.php';
                  </script>";
        }
    }
?>

<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="styleku.css" type="text/css">
    <style type="text/css">
            body 
                {
                    background-image: url('gambar1.jpg');
                    background-repeat: no-repeat;
                    background-position: center center;
                    background-attachment: fixed;
                }
        </style>
</head>
<body>
    <center>
    <br>
    <div class="kotak_login">
        <p class="tulisan_login"><b>SILAKAN LOGIN</b></p>
        <form action="tugas.php" method="POST">
            <label>USERNAME</label>
            <input type="text" name="username" id="username" class="form_login" ><br><br>
            <label>PASSWORD</label>
            <input type="password" name="password" id="password" class="form_login" ><br><br>
            <input type="submit" value="Log-In" name="submit" id="submit" class="tombol_login"><br><br>
            <br><br>
        </form>
    </div>
    </center>
</body>
</html>