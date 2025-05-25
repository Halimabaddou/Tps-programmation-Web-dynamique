

    <?php
    
    // Sécurisation des données
    $nom = isset($_POST['nom']) ? strip_tags($_POST['nom']) : '';
    $prenom = isset($_POST['prenom']) ? strip_tags($_POST['prenom']) : '';
    $filiere = isset($_POST['filiere']) ? strip_tags($_POST['filiere']) : '';
    $age = isset($_POST['age']) ? intval($_POST['age']) : 0;

    // Vérification que tous les champs sont remplis
    if ($nom && $prenom && $filiere && $age) {
        echo "<h3>Bonjour, $prenom $nom</h3>";
        echo "<p>Filière : <strong>$filiere</strong></p>";
        echo "<p>Âge : <strong>$age ans</strong></p>";

        // Condition selon l'âge
        if ($age < 18) {
            echo "<p style='color:red;'>Vous êtes mineur(e), certaines sections du site peuvent être limitées.</p>";
        } elseif ($age >= 18 && $age <= 25) {
            echo "<p style='color:green;'>Vous êtes un(e) jeune adulte. Bienvenue sur le site étudiant !</p>";
        } else {
            echo "<p>Bienvenue parmi nous ! L’apprentissage n’a pas d’âge.</p>";
        }

    } else {
        echo "<p style='color:red;'><strong>Erreur :</strong> tous les champs doivent être remplis.</p>";
        echo "<p><a href='index.html'>Retour au formulaire</a></p>";
    }
    ?>
