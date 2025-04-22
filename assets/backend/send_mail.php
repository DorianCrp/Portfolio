<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/../../vendor/autoload.php';  // Remontée vers la racine pour inclure autoload.php

use Dotenv\Dotenv;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Chargement des variables d’environnement
$dotenv = Dotenv::createImmutable(__DIR__ . '/../../');  // Remontée vers la racine pour le fichier .env
$dotenv->load();

// Création de l'instance PHPMailer
$mail = new PHPMailer(true);

try {
    // Paramètres du serveur SMTP
    $mail->isSMTP();
    $mail->Host = $_ENV['SMTP_HOST'];
    $mail->SMTPAuth = true;
    $mail->Username = $_ENV['SMTP_USER'];
    $mail->Password = $_ENV['SMTP_PASS'];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Destinataire
    $mail->setFrom($_ENV['SMTP_USER'], $_POST['name']);
    $mail->addAddress('doriancrepin@gmail.com');  // L'email où tu veux recevoir les messages

    // Contenu du message
    $mail->isHTML(true);
    $mail->Subject = 'Nouveau message de ' . $_POST['name'];
    $mail->Body    = 'Nom : ' . $_POST['name'] . '<br>Email : ' . $_POST['email'] . '<br>Sujet : ' . $_POST['subject'] . '<br>Message : ' . nl2br($_POST['Description']);  // Utilisation de 'Description' ici

    // Envoi de l'email
    $mail->send();

    // Rediriger vers la page de contact avec un paramètre de succès
    header("Location: /../../contact.php?success=1");
    exit();
} catch (Exception $e) {
    // En cas d'erreur, rediriger vers la page de contact avec un paramètre d'erreur
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";  // Affiche l'erreur PHPMailer
    exit();
}
?>
