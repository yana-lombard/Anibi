<?php

function controleurPrincipal($action) {
    $lesActions = array();
    $lesActions["defaut"] = "connexion.php";
    $lesActions["connexion"] = "connexion.php";
    $lesActions["deconnexion"] = "deconnexion.php";
    $lesActions["nouvelleEntree"] = "nouvelleEntree.php";
    $lesActions["parametrageExpos"] = "parametrageExpos.php";
    $lesActions["visitesenCours"] = "visitesenCours.php";


    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } 
    else {
        return $lesActions["defaut"];
    }
}

?>