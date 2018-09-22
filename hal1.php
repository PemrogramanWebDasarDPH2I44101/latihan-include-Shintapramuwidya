<?php

session_start();
$_SESSION['nama'] = isset($_POST["nama"])?$_POST["nama"]:$_SESSION["nama"];
$_SESSION['akses'] =  isset($_POST["akses"])?$_POST["akses"]:$_SESSION["akses"];

setcookie("username")
$_SESSION['iduser']= 1234;
print_r($_SESSION);

?>

<br>
<a href="http://localhost/hal2.php">Link ke halaman 2 </a>
<br>
<a href="http://localhost/hal3.php">Link ke halaman 3</a>
?>