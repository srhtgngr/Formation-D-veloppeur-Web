<?php
var_dump($_POST);
$email = htmlspecialchars($_POST['mail']);
$password = htmlspecialchars($_POST['password']);
$texte = htmlspecialchars($_POST['texte']);

echo '<br /> votre adresse de messagerie est : '.$email;
echo '<br /> autre info : '.$texte;

$concatenation = $email.$password.$texte;

echo $concatenation;


echo '<!DOCTYPE html>';
echo '<h1>'.$email.'</h1>';
echo '<h1>'.$texte.'</h1>';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>bienvenue</h1>
    <?php
    echo $email;
    ?>

</body>
</html>