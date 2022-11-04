<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TSJ</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- Personnal CSS -->
    <link rel="stylesheet" href="css/accueil.css">
    <link rel="stylesheet" href="css/connexion.css">
    <link rel="stylesheet" href="css/error404.css">
</head>
<body>
    <?php
    

    session_start();
    // include 'vues/navbar.html'; 
    include 'php/route.php';

    ?>


    

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script>
        //Demander une confirmation avant de quitter la page :
        // window.onbeforeunload = function (e) {
        //     return confirm("Etes vous sur de vouloir quitter ?");
        // }
    </script>
</body>
</html>