<?php
  $title = $_POST['title'];
  $artist = $_POST['artist'];
  $genre = $_POST['genre'];
  $price = $_POST['price'];
  $album = $_POST['album'];
  $image = $_POST['image'];

  $disk = new SimpleXMLElement('<cd></cd>');
  $disk->addChild('title', $title);
  $disk->addChild('artist', $artist);
  $disk->addChild('genre', $genre);
  $disk->addChild('price', $price);
  $disk->addChild('image', $image);

  $xml = simplexml_load_file('disks.xml');
  $xml->addChild($disk);
  file_put_contents('disks.xml', $xml->asXML());

?>