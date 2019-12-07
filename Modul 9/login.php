<?php
     session_start();
     error_reporting(E_ALL^E_NOTICE^E_DEPRECATED);
     mysql_connect('localhost', 'root','');
     mysql_select_db('informatika');

     $username = $_POST['username'];
     $password = $_POST['password'];
     $submit = $_POST['submit'];

     if($submit){
         $sql = "select * from user where username='$username' and password='$password'";
         $query = mysql_query($sql);
         $row = mysql_fetch_array($query);
         if($row['username'] != ""){
             //berhasil login
             $_SESSION['username'] = $row['username'];
             $_SESSION['status'] = $row['status'];
             if ($row['status'] == "Administrator") {
                echo "<script>document.location= 'hasillogin.php';</script>";
             }elseif ($row['status'] == "Member") {
                echo "<script>document.location= 'hasillogin.php';</script>";
             }
?>
<script language script = "JavaScript">
    alert("Anda login sebagai <?php
            echo $row['username']; ?>");
</script>
<?php
         }else{
             //gagal login
?>
            <script language script='JavaScript'>
                alert('Gagal Login');
                document.location = 'login.php';
            </script>
            <?php
         }
     }
            ?>

<form action="login.php" method="post">
    <p align = 'center'>
     username : <input type="text" name="username"><br>
     password : <input type="password" name="password"><br>
     <input type="submit" name='submit'>
    </p>
</form>