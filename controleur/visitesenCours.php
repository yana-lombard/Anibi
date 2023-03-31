<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}


// recuperation des donnees GET, POST et SESSION

//appel des fonctions permetant de recupere les donnees utiles a l'affichage

//traitement si necessaire des donnees recuperes

if (isLoggedOn()){ // si l'utilisateur est connecté on redirige vers le controleur monProfil
    $titre = "Visites en Cours";
    include "$racine/vue/entete.html.php";
    include "$racine/vue/vueVisitesenCours.php";
    include "$racine/vue/pied.html.php";
}
else{
    // l'utilisateur n'est pas connecté, on affiche le formulaire de connexion
    // appel du script de vue
    $titre = "Visites en cours";
    include "$racine/vue/entete.html.php";
    include "$racine/vue/vueVisitesenCours.php";
    include "$racine/vue/pied.html.php";
}
