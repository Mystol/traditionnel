<?php
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=evenementielhecm', 'root', '');
        // echo "<h1>Connexion réussieeeee</h1>";
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
?>
