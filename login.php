<?php
session_start();
?>
<?php

$login=$_POST['login'];
$mdp=$_POST["mdp"];
$valider=$POST["valider"];
$erreur="";
    if(isset($valider)){

            if($login=="user" && $mdp=="123"){
                $_SESSION["autoriser"]="oui";
                header("location:session.php");

    }
            else{
            $erreur="Mauvais mdp ou user";
    }
}
?>

<html>
        <body>
            <form name="test" method="post" action="">

                <input type="text" name="login" />  

                <input type="password" name="mdp">
                <input type="sudmit" name="valider" value="valider" />
            </form>

</html>