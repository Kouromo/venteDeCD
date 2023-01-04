<?php
    // Récupère le titre du CD à supprimer de la requête POST
    $titleDelete = $_POST['titleDelete'];
    // Définit le chemin vers le fichier XML
    $filename = '../BD/bd.xml';

    // Charge le fichier XML
    $xml = simplexml_load_file($filename);

    // Trouve le CD avec le titre correspondant et le supprime du document XML
    foreach ($xml->cd as $cd) {
        if ($cd->titre == $titleDelete) {
            $dom = dom_import_simplexml($cd);
            $dom->parentNode->removeChild($dom);
        }
    }

    // Enregistre le document XML modifié dans le fichier
    file_put_contents($filename, $xml->asXML());
?>
