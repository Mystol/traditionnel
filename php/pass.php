<?php 
    include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soirée traditionnelle HECM</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <nav>
            <div class="logo">Logo</div>
            <ul>
                <li><a href="../index.html">Evènementiel</a></li>
                <!-- <li><a href="#">Mega menu</a></li> -->
                <li><a href="#">Ticket</a></li>
            </ul>
        </nav>
        <form action="pass_add.php" method="post">
            <div><ion-icon name="body-outline"></ion-icon></div>
            <input type="text" name="nom" placeholder="Nom">
            <input type="text" name="prenom" placeholder="Prénom">
            <input type="submit">
        </form>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>