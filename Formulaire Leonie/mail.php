<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $lieu = $_POST["lieu"];

    // Adresse e-mail où vous souhaitez recevoir les données du formulaire
    $destinataire = "yanniscrt@gmail.com";

    // Sujet du mail
    $sujet = "Nouveau formulaire de contact";

    // Corps du message
    $message = "Nom: $nom\n";
    $message .= "Prénom: $prenom\n";
    $message .= "E-mail: $email\n";
    $message .= "Lieu: $lieu\n";

    // En-têtes du mail
    $headers = "From: $email";

    // Envoyer l'e-mail
    mail($destinataire, $sujet, $message, $headers);

    // Redirection vers une page de confirmation ou autre
    header("Location: confirmation.html");
    exit;
}
?>