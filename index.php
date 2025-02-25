<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"] ?? ""; //Recupération du nom
    $email = $_POST["email"] ?? ""; // Récuperation de l'e-mail
    $message = $_POST["message"] ?? ""; // Récuperation du message

    $file = "$message.txt";

    $data = "$name $email $message";

    file_put_contents($file, $data);

    // Créer une chaîne contenant les informations à enregistrer
    $data = 'Nom:' . $name . "<br> Email :" . $email ."<br> Message :" . $message . "<br><br>";

    // Ouvrir le fichier en mode ajout
    file_put_contents($file, $data, FILE_APPEND);

    // Ajouter un message de confirmation à la session
    $_SESSION['message'] = "Message envoyé !";

    // Rediriger vers la page du formulaire avec le message de confirmation
    header("Location: index.php");
    exit;
}




/*// Affichage du msg stocké en session
if (isset($_SESSION["message"])) {
    echo "<p>" . htmlspecialchars($_SESSION["message"]) . "</p>";
    //Supp le msg stocké en session
    unset($_SESSION["message"]);
}*/


?>







<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exo PHP 1</title>
</head>
<body>


<form action="form.php" method="post">
    <label for="name">Nom :</label>
    <input type="text" id="name" name="name" required>
    <button type="submit"> Envoyer</button>
</form>

<form action="form.php" method="post">
    <label for="name">E-mail :</label>
    <input type="text" id="name" name="email" required>
    <button type="submit"> Envoyer</button>
</form>

<form action="form.php" method="post">
    <label for="name">Message :</label>
    <input type="text" id="name" name="message" required>
    <button type="submit"> Envoyer</button>
</form>

</body>
</html>
<?php
/*
*/?>