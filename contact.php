<?php
// On active l'affichage des erreurs
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $service = htmlspecialchars(trim($_POST["service"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    $votre_email_pro = "insightconsulting.dataweb@gmail.com"; 
    
    // L'adresse technique IONOS pour forcer l'envoi
    $email_expediteur = "sh-1097826669@eu.hosting-webspace.io"; 

    // ==========================================
    // 1. EMAIL POUR VOUS (Notification)
    // ==========================================
    $subject_admin = "Nouvelle demande de projet - " . $name . " (" . $service . ")";
    $body_admin = "Nom: $name\nEmail: $email\nService souhaité: $service\n\nMessage:\n$message\n";
    
    $headers_admin = "From: Insight Agency <" . $email_expediteur . ">\r\n";
    $headers_admin .= "Reply-To: " . $email . "\r\n"; 
    $headers_admin .= "MIME-Version: 1.0\r\n"; 
    $headers_admin .= "Content-Type: text/plain; charset=utf-8\r\n"; 
    $headers_admin .= "X-Mailer: PHP/" . phpversion();
    
    mail($votre_email_pro, $subject_admin, $body_admin, $headers_admin);

    // ==========================================
    // 2. EMAIL POUR LE CLIENT (Confirmation)
    // ==========================================
    $subject_client = "Confirmation de votre demande - Insight Agency";
    $body_client = "Bonjour $name,\n\n";
    $body_client .= "Nous avons bien reçu votre demande concernant notre service : $service.\n";
    $body_client .= "Je prendrai le temps de lire votre message et reviendrai vers vous sous 48h.\n\n";
    $body_client .= "Cordialement,\n";
    $body_client .= "Perrin Gaël \nInsight Agency - Data & Web";
    
    $headers_client = "From: Insight Agency <" . $email_expediteur . ">\r\n";
    $headers_client .= "Reply-To: " . $votre_email_pro . "\r\n";
    $headers_client .= "MIME-Version: 1.0\r\n"; 
    $headers_client .= "Content-Type: text/plain; charset=utf-8\r\n"; 
    $headers_client .= "X-Mailer: PHP/" . phpversion();

    mail($email, $subject_client, $body_client, $headers_client);

    // 3. REDIRECTION AVEC SUCCÈS
    header("Location: index.php?status=success#contact");
    exit();
} else {
    header("Location: index.php");
    exit();
}
?>