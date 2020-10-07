<?php

$name = $_POST['user_name'];
$lastname = $_POST['user_name2'];
$email = $_POST['user_email'];
$phone = $_POST['user_phone'];
$object = $_POST['form-control'];
$message = $_POST['user_message'];
$errors = '';

if (empty($name)) {
   echo $errors = 'Entrez votre prenom <br/>';

}
if (empty($lastname)) {
   echo $errors ='Entrez votre nom <br/>';
}
if (empty($email)) {
   echo $errors ='Entrez un email ex : ';
   echo $errors = (filter_var('bob@example.com', FILTER_VALIDATE_EMAIL));
}
if (empty($phone)) {
   echo $errors = '</br> Entrez un numero de telephone <br/>';
}
if (empty($object)) {
   echo $errors= 'Choisissez un sujet <br/>';
}
if (empty($message)) {
   echo $errors= 'Ecrivez un message <br/>';
}


echo "<br />";
echo "<br />";


echo "Merci " . " " . $_POST['user_name'] . " " . $_POST['user_name2'] . " de nous avoir contacté à propos de" . " " . $_POST["form-control"];
echo "<br />";
echo "Un de nos conseiller vous contactera soit à l’adresse " . " " . $_POST["user_email"] . " ou par téléphone au " . " " . $_POST["user_phone"] . " " . "dans les plus brefs délais pour traiter votre demande : ";
echo "<br />";
echo $_POST['user_message'];
?>
