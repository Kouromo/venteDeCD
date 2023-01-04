<?php
    $title = $_POST['title'];
    $artist = $_POST['artist'];
    $genre = $_POST['genre'];
    $price = $_POST['price'];
    $album = $_POST['album'];
    //$image = $_POST['image'];

    $filename = '../BD/bd.xml';
    
    // Récupérer le nom de l'image téléchargée
    $image = $_FILES['image']['name'];

    // Définir le dossier de destination
    $target = "../BD/Images/".basename($image);

    // Vérifier que le téléchargement s'est bien passé
    move_uploaded_file($_FILES['image']['tmp_name'], $target);

    // Charger le fichier XML existant
    $xml = simplexml_load_file($filename);
    
    // Récupérer le dernier identifiant utilisé
    $lastId = 0;
    foreach ($xml->cd as $cd) {
        if ((int) $cd->id > $lastId) {
            $lastId = (int) $cd->id;
        }
    }
    
    // Créer un nouvel élément CD à partir de la chaîne vide
    $cd = $xml->addChild('cd');
    
    // Ajouter les données du CD en tant que sous-éléments de l'élément CD
    $cd->addChild('id', $lastId + 1);
    $cd->addChild('titre', $title);
    $cd->addChild('genre', $genre);
    $cd->addChild('image', $image);
    $cd->addChild('auteur', $artist);
    $cd->addChild('prix', $price);
    $cd->addChild('album', $album);
    
    // Enregistrer le fichier XML modifié
    file_put_contents($filename, $xml->asXML());
    
?>