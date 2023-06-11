<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soirée traditionnelle HECM</title>
    <link rel="stylesheet" href="../style.css">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
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

        <h3 style="text-align: center;">Registre d'inscription</h3>

        <div class="list">
            <?php
                include("connect.php");
                $req = $bdd -> query("SELECT * FROM user"); ?>
                
                <table>
                <!-- <h3>Registre d'inscription</h3> -->
                    <thead>
                        <tr>
                            <th>N° Ticket</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Pass</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($donnes = $req -> fetch()) { ?>
                            <tr>
                                <td><?php echo $donnes['id']; ?></td>
                                <td><?php echo $donnes['nom']; ?></td>
                                <td><?php echo $donnes['prenom']; ?></td>
                                <td><a href="ticket.php?bin=<?php echo $donnes['id']; ?>">Ticket</a></td>
                            </tr>
                        <?php } ?> 
                    </tbody>
                </table>
                <?php $req -> closeCursor();
            ?>
        </div>
    </div>
</body>
</html>