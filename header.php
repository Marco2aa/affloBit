<?php
session_start();
if (isset($_SESSION['identifiant']) and !empty($_SESSION['identifiant'])) {
    // connecté
?>
    <h2>Bienvenue</h2><?php echo $_SESSION['identifiant']; ?>
    <div>
        <button onclick="deconnexion()">Déconnexion</button>
    </div>
<?php

} else {
    //deconnecté
?>
    <div>
        <a href="index.php">
            <button>Connexion</button>
        </a>
    </div>
<?php
}
