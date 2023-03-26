<?php
// Récupération des données du formulaire
$nom = $_POST['nom'];
$email = $_POST['email'];
$message = $_POST['message'];

// Construction du message
$sujet = "Nouveau message de " . $nom;
$contenu = "Nom : " . $nom . "\n";
$contenu .= "Email : " . $email . "\n";
$contenu .= "Message : " . $message;

// Envoi de l'e-mail
mail('votre-adresse-email@example.com', $sujet, $contenu);
?>
