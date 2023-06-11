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
        <div class="ticket">
            <div class="tick">
                <div class="tick1">
                    <h4>30 Juin 2023</h4>
                    <h1>Salle des fêtes Griffon d'or</h1>
                    <h3>HECM Calavi Organise</h3>
                    <h2>Soirée traditionnelle</h2>
                    <span>Tous en <br><strong> Pagne</strong></span>
                    <h4 class="num">00000128</h4>
                </div>
                <div class="tick2">
                    <h4 style="margin-bottom: 2em;" class="num">00000128</h4>
                    <?php
                        include("connect.php");
                        $req = $bdd -> prepare("SELECT * FROM user WHERE id = ?"); 
                        $req -> execute(array($_GET['bin']))?>
                        <?php while($donnes = $req -> fetch()) { ?>
                            <h3>Nom : <?php echo $donnes['nom']; ?></h3>
                            <h3>Prenom : <?php echo $donnes['prenom']; ?></h3>
                        <?php }
                        $req -> closeCursor();
                    ?>
                    <span>Tous en pagne</span>
                    <h5>Griffon d'or <br> Soirée traditionnelle <br>HECM | Calavi | Akassato</h5>
                </div>
            </div>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>