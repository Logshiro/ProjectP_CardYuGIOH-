<?php
/*
 * Description de controleurPrincipal.php
 * 
 * @author Quentin
 * Creation 01/2021
 * Derniere MAJ 05/01/2022
*/
function controleurPrincipal(string $action){
    $lesActions = array();
    $lesActions["defaut"] = "../vue/vue.Acceuil.php";
    $lesActions["Acceuil"] = "../vue/vue.Acceuil.php";
    $lesActions["presentation"] = "../vue/vue.Presentation.php";
    $lesActions["personnages"] = "../vue/vue.TestP.php";
    $lesActions["cartes"] = "../vue/vue.TestCP.php";


  
	 if (array_key_exists ( $action , $lesActions )){
        $resultat= $lesActions[$action];
    }
    else{
        $resultat= $lesActions["defaut"];
    }
    return $resultat;

}

// Définir un titre par défaut et une vidéo de fond
$title = "Yu-Gi-Oh Présentation";
$background = "url('https://i.pinimg.com/originals/75/3e/05/753e05109c13bee51cabaa0dbe8133d6.gif')"; // Fond par défaut

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'Acceuil':
            $title = "Bienvenue sur Yu-Gi-Oh !";
            $background = "url('https://i.pinimg.com/originals/a8/98/10/a89810b65e8357e8bf22f46aeda4631c.gif')"; // Changer l'URL de la vidéo ou de l'image
            break;
        case 'presentation':
            $title = "Présentation du Jeu Yu-Gi-Oh";
            $background = "url('https://i.pinimg.com/originals/75/3e/05/753e05109c13bee51cabaa0dbe8133d6.gif')"; // Vidéo spécifique pour la présentation
            break;
        case 'cartes':
            $title = "Decks à Avoir";
            $background = "url('https://i.pinimg.com/originals/50/fe/fc/50fefcc6319820a74bb04b271bf58116.gif')"; // Vidéo pour les cartes
            break;
        case 'personnages':
            $title = "Les Personnages";
            $background = "url('https://i.pinimg.com/originals/dd/64/6b/dd646b9eac605e8651c935b60f755798.gif')"; // Vidéo des règles
            break;
        default:
            $title = "Yu-Gi-Oh Présentation"; // Titre par défaut si aucune action ne correspond
            $background = "url('https://i.pinimg.com/originals/75/3e/05/753e05109c13bee51cabaa0dbe8133d6.gif')"; // Fond par défaut
            break;
    }
}

?>