<?php
// Activation maximale des erreurs
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<h1>Test d'envoi d'e-mail IONOS</h1>";

// PARAMÈTRES
$destinataire = "perrin.kibiti-pembe.etu@univ-lille.fr"; 
$expediteur = "sh-1097826669@eu.hosting-webspace.io";

$sujet = "TEST ENVOI IONOS : " . date("H:i:s");
$message = "Si tu lis ce message, c'est que la fonction mail() marche !";

// EN-TÊTES BASIQUES
$headers = "From: Test <" . $expediteur . ">\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

echo "<p>Tentative d'envoi de <strong>$expediteur</strong> vers <strong>$destinataire</strong>...</p>";

// ENVOI ET RÉSULTAT
$resultat = mail($destinataire, $sujet, $message, $headers);

if ($resultat) {
    echo "<p style='color:green;'>✅ La fonction mail() a renvoyé TRUE. L'e-mail est parti du serveur IONOS.</p>";
    echo "<p>Vérifiez votre boîte Gmail (et les spams).</p>";
} else {
    echo "<p style='color:red;'>❌ ERREUR : La fonction mail() a renvoyé FALSE. IONOS bloque l'envoi.</p>";
    $error = error_get_last();
    if ($error !== null) {
        echo "<p>Détail de l'erreur PHP : " . $error['message'] . "</p>";
    }
}
?>