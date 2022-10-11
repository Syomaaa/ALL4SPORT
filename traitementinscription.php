<?php
session_start();

if (!empty($_POST['user']) && !empty($_POST['mail']) && !empty($_POST['mdp']) && !empty($_POST['mdp2'])) {

if($_POST['mdp'] == $_POST['mdp2']) {
    $mdp = $_POST['mdp'];
    $hash = hash("sha512", $mdp);
    InsertUser($_POST['user'],$_POST['mail'], $hash);
    header ("Location: connexion.php");
} else {
    header ("Location: inscription.php");
}
 }

function InsertUser($user, $mail, $mdp)
{
$insert = "INSERT INTO users(pseudo, mdp, mail) VALUES (:pseudo, :mdp, :mail);";

$bdd = construct_(); // se connecte à ma base de donnée 
$query = $bdd->prepare($insert);
$query->execute(array(
    ":pseudo" => $user,
    ":mail" => $mail,
    ":mdp" => $mdp ));
var_dump($query);

}



function construct_()
{

    $dsn ='mysql:dbname=espace_membres;host=127.0.0.1:8889';

    try {
        $bdd = new PDO ($dsn,'root', 'root');
        return $bdd;
    } catch (PDOException $e) {

        die('DB Error: '.$e->getMessage());
    }

}


?>
