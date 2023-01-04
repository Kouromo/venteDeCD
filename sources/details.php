<?php
    session_start();

    // Vérifie si la variable de session "panier" existe
    if (!isset($_SESSION['panier'])) {
        // Si elle n'existe pas, on la crée et on lui affecte une valeur vide
        $_SESSION['panier'] = array();
    }

    // Vérifie si le formulaire a été soumis en utilisant la méthode POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Récupère l'identifiant de l'article dans la variable POST "id"
        $id = $_POST['id'];

        // Ajoute l'identifiant de l'article à la variable de session "panier"
        $_SESSION['panier'][] = array('id' => $id);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="details.css" />
        <script src="https://kit.fontawesome.com/7c2235d2ba.js" crossorigin="anonymous"></script>
        <title>CDSpeed</title>
    </head>
    <body>
    <header>
            <img class="logo"
                src="logo.png"
                alt="CDSpeed">

            <section class="bag-log">
                <a href="panier.php"><i class="fa-solid fa-bag-shopping"></i></a>

                <button class="favorite styled"
                    type="button">
                    Connexion
                    </button>
            </section>
        </header>

        <main>
            <!-- Contenu de la page -->
            <?php
                // Charge le fichier XML dans un objet SimpleXML
                $xml = simplexml_load_file('../BD/bd.xml');

                // Récupère l'identifiant de l'article dans la variable $id
                $id = $_GET['id'];

                // Utilise l'identifiant de l'article pour afficher les détails de l'article sur la page detail.php
                echo '<img class="image" src="../BD/Images/' . $xml->cd[$id-1]->image . '" alt="Texte alternatif"></a>';
                echo '<h2>' . $xml->cd[$id-1]->titre . '</h2>';
                echo '<p>' . $xml->cd[$id-1]->auteur . '</p>';
                echo '<p>' . $xml->cd[$id-1]->prix . '</p>';

                // Bouton "Ajouter au panier"
                echo '<form action="panier.php" method="post">';
                echo '<input type="hidden" name="id" value="' . $id . '">';
                echo '<input type="submit" value="Ajouter au panier">';
                echo '</form>';
            ?>
        </main>
    </body>
</html>
