<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bienvenue</title>
</head>
<body>
    <h2>Bienvenue, <?php echo($_SESSION["username"]); ?> !</h2>
    <p><a href="Déconnexion_ex4.php">Se déconnecter</a></p>
</body>
</html>
