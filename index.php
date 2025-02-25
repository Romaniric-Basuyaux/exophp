<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"] ?? ""; //Recupération du nom
    $email = $_POST["email"] ?? ""; // Récuperation de l'e-mail
    $message = $_POST["message"] ?? ""; // Récuperation du message


    $file = "$message.txt";

    $data = "$name $email $message";
    echo file_put_contents($file, $data);

}




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