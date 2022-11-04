<?php


    include '../php/fonction/fonctionGlobal.php';
    include '../php/fonction/log.php';


    $login = "thomas";
    $connexion = true;
    $statut = "guest";

    createLogConnexion($login, $connexion, $statut);
    // $file='../log/connexion.log';
    // $contenu=file_get_contents($file);
    // echo $contenu;

    $natureModif = "user creation";
    $infosModif = [
        "user_created" => "Marie Luc",
        "modificateur" => "thomas"
    ];

    createLogModification($natureModif,$infosModif);






?>