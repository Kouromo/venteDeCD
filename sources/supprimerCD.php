<?php
    $titleDelete = $_POST['titleDelete'];
    $filename = '../BD/bd.xml';

    $xml = simplexml_load_file($filename);

    foreach ($xml->cd as $cd) {
        if ($cd->titre == $titleDelete) {
            unset($cd[0]);
        }
    }
    

    file_put_contents($filename, $xml->asXML());
?>