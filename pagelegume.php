<?php
require_once "db.php";
?>

<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE  =edge">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/db2bf29261.js" crossorigin="anonymous"></script>
    <title> Légumes Fruits </title>

</head>
<body>


<?php
include "nav.php";
?>


<div class="frleg">
    <?php

    $sql = "SELECT * FROM `fruitslegumes` WHERE Type = '" . $_GET['id'] . "';";
    $result = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($result)) {
        ?>

        <div class="frlegs">

            <a href="product.php"><img class="frleg_img" src="<?= $row["Image"]; ?>"></a>
            <div class="frleg_name">
                <form action="addpanier.php" method="GET">
                    <input type="hidden" name="idprod" value="<?=$row['ID_FL'];?>"
                    <a href="product.php"><h2><?= $row["Nom"]; ?></h2></a>
                    <p class="frleg_provenance">
                        Provenance : <?= $row["Provenance"]; ?></p>
                    <p class="frleg_achat">
                        Quantité :  <input class="qte_css" type="number" name="qte" value="1" min = "1" max ="10" /> <br/>
                        Prix: <?= $row["Prix"]; ?> €/unité
                        <br><br>
                        ID: <?= $row["ID_FL"]; ?>
                    </p>
                    <input type="submit" value="Ajouter au panier">
                </form>
            </div>

        </div>
        <?php
    }
    ?>
</div>


<!-- Footer section --->

<footer class="pdp">
    <a href="/">
        <i class="fa-brands fa-facebook"></i>
    </a>
    <a href="/">
        <i class="fa-brands fa-twitter"></i>
    </a>
    <a href="/">
        <i class="fa-brands fa-linkedin"></i>
    </a>
    <a href="/">
        <i class="fa-brands fa-instagram"></i>
    </a>

    <hr>
    <section class="pdp_info">
        <ul>
            <li class="item2">
                <a href="/" class="item2">A propos</a>
            </li>
            <li class="item2">
                <a href="/" class="item2">Nous contacter</a>
            </li>
            <li class="item2">
                <a href="/" class="item2">Mentions légales</a>
            </li>
            <li class="item2">
                <a href="/" class="item2">Conditions générales de ventes</a>
            </li>
            <li class="item2">
                <a href="/" class="item2">Politique de confidentialité</a>
            </li>
        </ul>
    </section>
    <div class="mention">
        ©2022 YouPoire Tout droits réservés
    </div>
</footer>


</body>
</html>
