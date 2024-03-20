<?php
$destinataire = "titouandouine@gmail.com";
$sujet = "Sujet du message";
$message = "Ca va marcher !";

// En-têtes additionnels
$headers = "From: titouan@douine.fr\r\n";


// Envoi du message
if (mail($destinataire, $sujet, $message, $headers)) {
    echo "Le message a été envoyé avec succès à $destinataire";
} else {
    echo "Erreur lors de l'envoi du message.";
}
?>