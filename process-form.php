<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "bakernnetwork@gmail.com"; // Remplacez ceci par votre adresse e-mail
    $subject = "Nouveau message de $name";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    // Redirection après l'envoi du formulaire (vous pouvez personnaliser cette URL)
    echo '<script>window.location = "home.html";</script>';
    exit();
}
?>
