<form action="beranda.php">
 <button>Beranda</button>
</form>
<form action="delete.php">
 <button onclick="alert('anda telah logout')">Logout</button>
</form>
<?php
session_start();
 if(isset($_SESSION['username'])){ // jika session username ada
    echo "<h1> Halaman User </h1>";
    echo "Welcome, ";
    echo $_SESSION["username"];
    
 }
 ?>
