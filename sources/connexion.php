<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin" && $password == "admin") { // Pas sécurisé, utiliser si le temps une database
        header("Location: backoffice.php");
        exit; //  arrêter l'exécution du script PHP courant
      } else {
        echo "<p>Les identifiants saisis sont incorrects</p>";
      }
?>