<?php

// Paramètres de l'e-mail
$destinataire = "yanisbordin971@gmail.com";
$sujet = "Test d'envoi d'e-mail";
$corps = "Ceci est un test d'envoi d'e-mail.";

// Envoi de l'e-mail
mail($destinataire, $sujet, $corps);
?>