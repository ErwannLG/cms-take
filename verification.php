<?php
require 'connexion.php';
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $username = $conn->quote($_POST['username']);
    $password = $conn->quote($_POST['password']);

    if($username !== "" && $password !== "")
    {
        $requete = 'SELECT count(*) as count FROM log where username = '.$username.' and password = '.$password.';';

        $reponse = $conn->query($requete)->fetch();
        if($reponse['count'] > 0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['username'] = $username;
           header('Location: admin.php');
        }
        else
        {
          header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: login.php');
}
// mysqli_close($dbname); // fermer la connexion
?>
