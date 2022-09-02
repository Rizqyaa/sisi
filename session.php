<?php
    session_start();
    
    $_SESSION["username"] = $_POST ['username'];
    $_SESSION["password"] = $_POST ['password'];


    echo "Username :";
    echo $_SESSION["username"];
    echo "<br ?>";
    echo "Password :";
    echo $_SESSION["password"];

    header("Location:beranda.php");
    ?>