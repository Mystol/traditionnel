<?php

    include("connect.php");

    $req = $bdd->prepare('INSERT INTO user(nom, prenom) VALUES(?, ?)');
    $req->execute(array($_POST['nom'], $_POST['prenom']));

    header('Location: ticket_list.php');
?>