<?php
/*
 * Description de index.php
 * fichier demarrage de l'application
 * @author Quentin
 * Creation 01/2025
 * Derniere MAJ 02/01/2025
*/
include_once "getRacine.php";
include_once "$racine/controleur/controleurPrincipal.php";



if (isset($_GET["action"])){
    $action = $_GET["action"];
}
else{
    
    $action = "defaut";
}

$fichier = controleurPrincipal($action);
include_once "$racine/controleur/$fichier";


?>
     