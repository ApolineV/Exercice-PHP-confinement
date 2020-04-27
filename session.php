<?php
session_start();
if($_SESSION["autoriser"]!="oui"){
header("location:login.php");

}
?>

<html>
<head>
<link rel="stylesheet"href="login.php"/>
</head>
<body>
<h1>Acces interdit<a href="deconnexion.php">Deconnexion</a>
</h1>
<div> Bienvenue !</div>
</body>
</html>