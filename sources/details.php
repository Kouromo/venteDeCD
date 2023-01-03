<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="accueil.css" />
        <script src="https://kit.fontawesome.com/7c2235d2ba.js" crossorigin="anonymous"></script>
        <title>CDSpeed</title>
    </head>
    <body>
        <header>
            <img class="logo"
                src="logo.png"
                alt="CDSpeed">

            <section class="bag-log">
                <i class="fa-solid fa-bag-shopping"></i>

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

                // Récupère l'identifiant de l'image dans la variable $id
                $id = $_GET['id'];

                // Utilise l'identifiant de l'image pour afficher les détails de l'image sur la page detail.php
                echo '<img class="image" src="../BD/' . $xml->cd[$id-1]->image . '" alt="Texte alternatif"></a>';
                echo '<h2>' . $xml->cd[$id-1]->titre . '</h2>';
                echo '<p>' . $xml->cd[$id-1]->auteur . '</p>';
                echo '<p>' . $xml->cd[$id-1]->prix . '</p>';
            ?>

            <!-- Bouton "Ajouter au panier" -->
            <form action="panier.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="submit" value="Ajouter au panier">
            </form>
        </main>
    </body>
</html>