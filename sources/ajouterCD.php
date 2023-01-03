<?php
    $title = $_POST['title'];
    $artist = $_POST['artist'];
    $genre = $_POST['genre'];
    $price = $_POST['price'];
    $album = $_POST['album'];
    $image = $_POST['image'];

    $filename = 'C:\XAMPP\htdocs\venteDeCD\BD\bd.xml';
    
    // Créer un nouvel élément CD à partir de la chaîne vide
    $cd = new SimpleXMLElement('<cd></cd>');
    
    // Ajouter les données du CD en tant que sous-éléments de l'élément CD
    $cd->addChild('titre', $title);
    $cd->addChild('genre', $genre);
    $cd->addChild('image', $image);
    $cd->addChild('auteur', $artist);
    $cd->addChild('prix', $price);
    $cd->addChild('album', $album);
    
    // Charger le fichier XML existant
    $xml = simplexml_load_file($filename);
    
    // Ajouter l'élément CD au fichier XML
    $xml->addChild($cd);
    
    // Enregistrer le fichier XML modifié
    file_put_contents($filename, $xml->asXML());

?>