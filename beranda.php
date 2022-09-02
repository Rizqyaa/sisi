<?php

session_start();
if(!isset($_SESSION["username"])) { // jika ada session username
   header("Location:form.php");
}
 echo "<h2> Beranda </h2>";

 ?>

 <form action="user.php">
 <button>Halaman User</button>
</form>
 <form action="delete.php">
 <button onclick="alert('anda telah logout')">Logout</button>
</form>

