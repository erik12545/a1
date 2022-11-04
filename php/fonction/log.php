<?php
//Cette page contient les differents fonctions permettant de manipuler les fichiers log
// include 'php/fonction/fonctionGlobal.php';


function createLogConnexion(string $login, bool $connexion, string $statut){
    $ip = getIp();
    $date = date("d.m.Y");
    $heur = date("h:i:s");

    //Chemin du fichier log :
    $logfilepath = "log/connexion.log";

    //Message par defaut si aucun des 2 cas suivant ne se realise :
    $message = "[".$date." : ".$heur." ".$ip."]"." :: erreur dans le code";

    if($connexion){
        //si la connexion est bon :
        $message = "[$date : $heur $ip] :: connexion : $login => $statut";
    }else{
        //en cas d'echec de la connexion
        $message = "[$date : $heur $ip] :: Failed try : $login";
    }

    //remplire le fichier log avec les infos
    //FILE_APPEND permet de remplire le fichier à la suite des autre ligne par consequent sans remplacer les ligne existant
    //le "\n" permet d'ajouter un saut de ligne 
    file_put_contents($logfilepath, $message."\n", FILE_APPEND);
}


//Cette fonction permet de créer des log sur le fichier modification.log :
//La varriable $infos est un dictionary qui contiendra les information sur la modification tel que le modificateur, le concerné...
function createLogModification(string $natureModif, array $infos){
    $ip = getIp();
    $date = date("d.m.Y");
    $heur = date("h:i:s");
    $message = "";

    //Chemin du fichier log :
    $logfilepath = "../log/modification.log";

    switch($natureModif){
        case "acces projet retirer":
            $message = "[$date : $heur $ip] :: $natureModif => ".$infos['projet']." : changed by ".$infos['modificateur']." to ".$infos['user_modifier'];
            break;
        case "acces projet ajouter":
            $message = "[$date : $heur $ip] :: $natureModif => ".$infos['projet']." : changed by ".$infos['modificateur']." to ".$infos['user_modifier'];
            break;
        case "user creation":
            $message = "[$date : $heur $ip] :: $natureModif => ".$infos['user_created']." : created by ".$infos['modificateur'];
            break;
        case "user delete":
            $message = "[$date : $heur $ip] :: $natureModif => ".$infos['user_deleted']." : deleted by ".$infos['modificateur'];
            break;
        case "password reset":
            $message = "[$date : $heur $ip] :: $natureModif => ".$infos['user_modifier']." : changed by ".$infos['modificateur'];
            break;
        case "password changed":
            $message = "[$date : $heur $ip] :: $natureModif => ".$infos['user_modifier']." : changed by ".$infos['modificateur'];
            break;
        default:
            $message = "[".$date." : ".$heur." ".$ip."]"." :: erreur dans le code";
    }


    //remplire le fichier log avec les infos
    //FILE_APPEND permet de remplire le fichier à la suite des autre ligne par consequent sans remplacer les ligne existant
    //le "\n" permet d'ajouter un saut de ligne 
    file_put_contents($logfilepath, $message."\n", FILE_APPEND);
}



?>