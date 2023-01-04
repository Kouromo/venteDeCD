<?php
    session_start();

    // Récupère l'identifiant de l'article à supprimer dans la variable $id
    $id = $_GET['id'];

    // Pour chaque article du panier
    foreach ($_SESSION['panier'] as $key => $article) {
        // Si l'identifiant de l'article du panier correspond à l'identifiant de l'article à supprimer
        if ($article['id'] == $id) {
            // Supprime l'article du panier
            unset($_SESSION['panier'][$key]);
        }
    }
?>