<?php

include "DB.php";
include "Utilisateur.php";

$nom = $_POST['nom'];
$email = $_POST['email'];
$mdp = $_POST['mdp'];
$mdp2 = $_POST['mdp2'];

if ($mdp == $mdp2) {
    $crypt = password_hash($mdp, PASSWORD_BCRYPT);
    $utilisateur = new Utilisateur();
    $utilisateur->setNom($nom);
    $utilisateur->setEmail($email);
    $utilisateur->setMdp($crypt);
    if ($utilisateur->create()) {
        $msg = "Utilisateur créé";
        $numero = 1;
    } else {
        $msg = "Erreur lors de la création de l'utilisateur";
        $numero = 2;
    }
} else {
    $msg = "Mot de passe non similaire";
    $numero = 2;
}
echo json_encode(array("msg" => $msg, "numero" => $numero));
exit;