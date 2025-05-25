<?php
$filename = 'messages.txt';

// Enregistrement du message
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = htmlspecialchars($_POST['nom']);
    $message = htmlspecialchars($_POST['message']);
    $date = date('Y-m-d H:i:s');
    
    $entry = "$date | $nom : $message" . PHP_EOL;
    file_put_contents($filename, $entry, FILE_APPEND);
}

// Lecture et affichage des messages
if (file_exists($filename)) {
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    sort($lines); // Trie chronologiquement
    foreach ($lines as $line) {
        echo "<p>" . nl2br(htmlspecialchars($line)) . "</p>";
    }
}
?>