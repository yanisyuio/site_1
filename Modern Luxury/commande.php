<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finaliser la Commande</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <img class="logo" src="logo.JPG" alt="logo">
    </header>

    <div class="container">
        <form id="orderForm" action="process-command.php" method="post">
            <h1>Finaliser la Commande</h1>

            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>

            <label for="email">E-mail :</label>
            <input type="email" id="email" name="email" required>

            <label for="adresse">Adresse :</label>
            <input type="text" id="adresse" name="adresse" required>

            <label for="codePostal">Code Postal :</label>
            <input type="text" id="codePostal" name="codePostal" required>

            <label for="ville">Ville :</label>
            <input type="text" id="ville" name="ville" required>

            <label for="taille">Taille de la veste :</label>
            <select id="taille" name="taille" required>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
            </select>

        <a href="#"><button type="submit">Envoyer et payer par CB</button></a>
        </form>
    </div>

    <?php

if (isset($_POST['submit'])) {
    // Retrieve data from the form
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];
    $code_postal = $_POST['code_postal'];
    $ville = $_POST['ville'];
    $taille = $_POST['taille'];

    // Send email with the customer's information
    $message = ";
Nom : $nom;
Prénom : $prenom;
E-mail : $email;
Adresse : $adresse;
Code postal : $code_postal;
Ville : $ville;
Taille : $taille;
";
    mail("yanisbordin971@gmail.com", "Commande de veste chauffante", $message);
}
?>

    <footer class="site-footer">
        <div class="contact-info">
            <h3>Contact</h3>
            <p>Email : Illuminate.note@gmail.com</p>
        </div>
    
        <div class="legal-links">
            <h3>Liens Légaux</h3>
            <ul>
                <li><a href="#">Politique de Confidentialité</a></li>
                <li><a href="#">Politique D'Expédition</a></li>
                <li><a href="#">Mention Légales</a></li>
            </ul>
        </div>
    
        <div class="social-media">
            <h3>Suivez-nous</h3>
            <ul>
                <li><a href="#" target="_blank" rel="noopener noreferrer">Instagram</a></li>
                <li><a href="#" target="_blank" rel="noopener noreferrer">TikTok</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>