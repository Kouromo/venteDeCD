<?php
    session_start();

    if (!isset($_SESSION['panier'])) {
        $_SESSION['panier'] = array();
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];

        $_SESSION['panier'][] = array('id' => $id);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="panier.css" />
        <script src="https://kit.fontawesome.com/7c2235d2ba.js" crossorigin="anonymous"></script>
        <script>
            function deleteArticle(id) {
                // Envoie une requête HTTP DELETE pour supprimer l'article
                // Créé un objet XMLHttpRequest
                var xhr = new XMLHttpRequest();
                // Ouvre une requête HTTP DELETE vers la page de suppression en utilisant l'identifiant de l'article comme paramètre de l'URL
                xhr.open('DELETE', 'delete.php?id=' + id);
                // Envoie la requête
                xhr.send();
                // Rafraichit la page courante une fois la requête terminée
                xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    location.reload();
                }
            }
            }
        </script>
        <title>Panier</title>
    </head>
    <body>
        <header>
            <a href = "accueil.php">
                <img class="logo"
                src="logo.png"
                alt="CDSpeed">
                </a>

            <section class="bag-log">
                <a href="panier.php"><i class="fa-solid fa-bag-shopping"></i></a>

                <a href = "login.html" >
                    <button class="favorite styled" type="button">
                        Connexion
                    </button>
                </a>
            </section>
        </header>
        <main>
            <h2>Contenu de votre panier</h2>
            <table>
                <tr>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Prix</th>
                    <th>Supprimer</th>
                </tr>
                <?php
                    $xml = simplexml_load_file('../BD/bd.xml');

                    // Pour chaque article du panier
                    foreach ($_SESSION['panier'] as $article) {
                        // Récupère l'identifiant de l'article dans la variable $id
                        $id = $article['id'];

                        // Utilise l'identifiant de l'article pour récupérer les informations de l'article dans le fichier XML
                        $titre = $xml->cd[$id-1]->titre;
                        $auteur = $xml->cd[$id-1]->auteur;
                        $prix = $xml->cd[$id-1]->prix;

                        // Affiche les informations de l'article dans un tableau
                        echo '<tr>';
                        echo '<td>' . $titre . '</td>';
                        echo '<td>' . $auteur . '</td>';
                        echo '<td>' . $prix . '</td>';
                        echo '<td><a href="#" onclick="deleteArticle(' .$id.')"><i class="fa-solid fa-trash-alt"></i></a></td>';
                        echo '</tr>';
                    }
                ?>
            </table>

            <form action="verification.php" method="post">
                <section>
                    <?php
                        echo 'Entrez votre numéro de carte';
                        echo '<input id="numCarte" type="number" name="numeric_field" maxlength="16">';

                        echo 'Entrez votre CSV';
                        echo '<input id="csv" type="number" name="numeric_field" maxlength="3">';
                    ?>
                </section>
                <input type="submit" value="Envoyer">
            </form>

        </main>
    </body>
</html>