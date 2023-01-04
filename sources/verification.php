<?php
    session_start();

    // Récupérer la valeur du champ de formulaire
    $numeric_field = $_POST['numeric_field'];

    // Vérifier si le premier et le dernier chiffre sont identiques
    if ($numeric_field[0] == $numeric_field[strlen($numeric_field) - 1]) {
        // Si le test est réussi, effacer la variable de session panier
        echo "Le paiement a été accepté";
        unset($_SESSION['panier']);
    }
    else {
        echo "Votre carte n'est pas bonne";
    }
?>