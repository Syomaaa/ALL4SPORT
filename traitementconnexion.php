<?php
session_start();

function getConnexion() {
    
    /* Connexion à une base MySQL avec l'invocation de pilote */
    $dsn = 'mysql:dbname=espace_membres;host=127.0.0.1:8889';
    
    try { 
        $bdd = new PDO($dsn, "root", "root");
        return $bdd;
    }catch (PDOException $e){
        die ('DB Error :'.$e ->getMessage());
    }
} 



if(!empty($_POST['pseudo'])&& !empty($_POST['mdp']) )
{        
    $user = $_POST['pseudo'];
    $mdp = $_POST['mdp'];

    $hash = hash("sha512",$mdp);
    $sql = "SELECT pseudo FROM users WHERE pseudo = :pseudo and mdp = :pwd";
    $bdd = getConnexion();
    $query = $bdd->prepare($sql);
    $query->execute(array(":pseudo" => $user, ":pwd" => $hash));
    $res = $query->fetch();     

    var_dump($query->errorInfo());
}

if(!empty($res['pseudo'])){
    $_SESSION['pseudo'] = $user;
    echo "Vous etes connecté !";
} 
 else {
    echo "Erreur, le pseudo et le mot de passe ne correspondent pas";

    header ("Refresh: 2;inscription.php");
    exit;
   
}


header('Location: http://localhost:8888/ALL4SPORT/home.php');

?>


