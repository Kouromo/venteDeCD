<?php
session_start();

echo '<html>';
echo '<head>';
echo '<meta charset="UTF-8" />';
echo '<link rel="stylesheet" href="achatTermine.css" />';
echo '<script src="https://kit.fontawesome.com/7c2235d2ba.js" crossorigin="anonymous"></script>';
echo '<title>CDSpeed</title>';
echo '</head>';
echo '<body>';
echo '<header>';
echo '<a href = "accueil.php">';
echo '<img class="logo" src="logo.png" alt="CDSpeed">';
echo '</a>';
echo '<section class="bag-log">';
echo '<a href="panier.php"><i class="fa-solid fa-bag-shopping"></i></a>';
echo '<a href = "login.html">';
echo '<button class="favorite styled" type="button">Connexion</button>';
echo '</a>';
echo '</section>';
echo '</header>';
echo '<main>';
echo '<p>';
echo '<br><br>';
echo 'Merci d\'avoir acheté chez nous ! Votre achat a été enregistré avec succès.';
echo '<br><br>';
echo 'Voici un récapitulatif de votre commande :';
echo '<br><br>';
//echo 'Titres achetés : ';
//echo '<br>';
//echo 'Quantité : ';
//echo '<br>';
//echo 'Montant total : ';
//echo '<br><br>';
echo 'Votre commande vous sera livrée dans les plus brefs délais. N\'hésitez pas à nous contacter si vous avez des questions ou des problèmes concernant votre achat.';
echo ' Nous espérons que vous apprécierez votre nouveau(x) disque(s) !

Cordialement,
CDSpeed';

echo '</p>';
echo '</main>';
echo '</body>';
echo '</html>';



?>