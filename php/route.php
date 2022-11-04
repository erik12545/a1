<?php 
    //Permet d'afficher les pages par arpport à leur route
    //Ce fichier est utiliser dans la page index.php



    //La variable $url contient l'url :
    $url = $_SERVER['REQUEST_URI'];

    // echo parse_url($url)["query"];
    // var_dump(parse_url($url));


    
    // Pour verifier si un utilisateur est connecter :
    // Verifier si la variable de session user existe
    if(isset($_SESSION['user'])){
        //Affichage selon le chemin en URL :
        $affichage = parse_url($url)["path"];
        //Afficher la navbar seulement quand une session existe :
        require 'vues/navbar.html';
    }else{
        // Si n'existe pas :
        $affichage = "connexion";
    }
    


    switch ($affichage) {
        case '/' :
            require 'vues/accueil.php';
            break;
        case '/lesUtilisateurs' :
            require 'vues/les_users.php';
            break;
        case '/deconnexion' :
            require 'deconnexion.php';
            break;
        case '/notification' :
            require 'vues/notification.php';
            break;
        case 'connexion' :
            require 'vues/connexion.php';
            break;
        default:
            http_response_code(404);
            require 'vues/error404.html';
            break;
    }
    
?>