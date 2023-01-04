<?php
    session_start();

    // Récupérer la valeur du champ de formulaire
    $numeric_field = $_POST['numeric_field'];
    
    $expiration_date = $_POST['dateExpiration'];
    $today = new DateTime();
    $expiration = new DateTime($expiration_date);

    // Vérifier si le premier et le dernier chiffre sont identiques
    if (($numeric_field[0] == $numeric_field[strlen($numeric_field) - 1]) && !($expiration < $today->modify('+3 months'))) {
        // Si le test est réussi, effacer la variable de session panier
        unset($_SESSION['panier']);
        // Rediriger vers la page d'accueil
        header('Location: achatTermine.php');
        exit;
    }
    else {
        // Si le test échoue, afficher un message d'erreur
        header('Location: panier.php');
        exit;
    }
?>