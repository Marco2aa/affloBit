<?php

$dsn = 'mysql:dbname=crypto;host=127.0.0.1';
$user = 'root';



try {
    $GLOBALS['database'] = new PDO($dsn, $user);
    $GLOBALS['database']->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $result = $GLOBALS['database']->query("SELECT 1");
    if($result !== false) {
        echo "Connexion réussie à la base de données.";
    } else {
        echo "La connexion à la base de données a échoué.";
    }
} catch (PDOException $e) {
    error_log("Echec connexion");
}