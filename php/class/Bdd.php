<?php
include 'php/class/DotEnv.php';
$envFile = new DotEnv('./.env');
$envFile->load();

class Bdd
{
    private $dsn;
    private $login;
    private $motDePasse;

    public function __construct(){
        $this->dsn = getenv('BDD_DNS');
        $this->login = getenv('BDD_LOGIN');
        $this->motDePasse = getenv('BDD_MDP');

    }

    private function getDsn(){
        return $this->dsn;
    }

    private function getLogin(){
        return $this->login;
    }

    private function getMotDePasse(){
        return $this->motDePasse;
    }

    //Execution d'une requete sans valeur à proteger :
    //-----------Important-----------
    //Ne pas utiliser pour une requete dons un ou plusieurs champs sont à saisir
    public function requeteBdd($rqt){
        $bdd = new Bdd();
        $dsn = $bdd->getDsn();
        $login = $bdd->getLogin();
        $motDePasse = $bdd->getMotDePasse();

        try{
            // $cnx = pg_connect("host=localhost dbname=dbname user=username password=password");
            // $cnx = new PDO('pgsql:host=localhost;dbname=dbname', 'username', 'password');
            $cnx = new PDO($dsn, $login, $motDePasse,
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        }
        catch (PDOException $e){
            die('Erreur : ' . $e->getMessage());
        }

        $sql = $cnx->prepare($rqt);
        $sql->execute();
        $resultat = $sql->fetchAll(PDO::FETCH_ASSOC);

        return $resultat;
    }




}
?>