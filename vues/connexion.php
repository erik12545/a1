<?php
include 'php/fonction/fonctionGlobal.php';
include 'php/fonction/log.php';
include 'php/class/Gestionnaire.php';
if(!empty($_POST['login']) && !empty($_POST['mdp'])){
    // if(getConnexion($_POST['identifiant'], $_POST['mdp'])){
        // $unUtilisateur = new user();
        // session_start([
        //     "user" => $unUtilisateur,
        // ]);
        // header("Location:/");

    // }else{
        // echo "Informations de connexion incorect";
    // }

    //Pour les tests : 
    $_SESSION['user'] = "jean";
    createLogConnexion("jean", true, "admin");
    header("Location:/");

}
// else{
//     echo "Informations de connexion incorect";
// }
?>
<div class="pageConnexion">
    <div class="titre">
        <h1 class="text-center">Bienvenue sur l'application TSJ</h1>
        <hr>
    </div>


    <div class="d-flex justify-content-center">
        <div class="shadow-lg p-3 mb-5 bg-body rounded col-sm-6 formContainer">
            <h4 class="text-center">Se Connecter</h4>

            <form action="" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Identifiant</label>
                    <input type="text" name="login" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Mots de passe</label>
                    <input type="password" name="mdp" class="form-control" required autocomplete="off">
                </div>
                <button type="submit" class="btn btn-outline-success">Connexion</button>
            </form>

        </div>
    </div>
</div>


