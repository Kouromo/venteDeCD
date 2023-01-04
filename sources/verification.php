<?php
    session_start();

    // Récupérer la valeur du champ de formulaire
    $numeric_field = $_POST['numeric_field'];

    // Vérifier si le premier et le dernier chiffre sont identiques
    if ($numeric_field[0] == $numeric_field[strlen($numeric_field) - 1]) {
        // Si le test est réussi, effacer la variable de session panier
        unset($_SESSION['panier']);
        // Rediriger vers la page d'accueil
        header('Location: accueil.php');
        exit;
    }
    else {
        // Si le test échoue, afficher un message d'erreur
        echo "Votre carte n'est pas valide";
    }
?>
