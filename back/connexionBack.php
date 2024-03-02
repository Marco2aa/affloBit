<?php
session_start();
include "DB.php";

if ($_POST['etape'] == "connexion") {
    $identifiant = $_POST['identifiant'];
    $mdp = $_POST['motdepasse'];

    $requete = $GLOBALS['database']->prepare("SELECT * FROM `utilisateur` WHERE `email` = :identifiant");
    $requete->bindParam(':identifiant', $identifiant);
    $requete->execute();
    $user = $requete->fetch(PDO::FETCH_ASSOC);

    if (!empty($user)) {
        if (password_verify($mdp, $user['mdp'])) {
            $_SESSION['identifiant'] = $user['prenom'];
            $resultat = ["msg" => 'Connexion Ok', "numero" => "1"];
        } else {
            $resultat = ["msg" => 'Mot de passe faux', "numero" => "2"];
        }
    } else {
        $resultat = ["msg" => 'Email introuvable', "numero" => "2"];
    }
    echo json_encode($resultat);
} else if ($_POST['etape'] == "deconnexion") {
    session_destroy();
    echo json_encode(1);
}
?>