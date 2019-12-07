<?php
    session_start();
    echo "Anda Berhasil Login sebagai ".$_SESSION['username']." Dan Anda Terdaftar Sebagai ".$_SESSION['status'];
?>
<br>
Silakan Logout denagn klik link
<a href="logout.php">Disini</a>