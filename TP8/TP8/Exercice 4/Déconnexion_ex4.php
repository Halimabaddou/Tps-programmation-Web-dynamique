<?php
session_start();
session_destroy();
header("Location: Connexion_ex4.php");
exit();
?>