<link rel="stylesheet" href="styles.scss">

<?php

session_start();
require_once("db.php");

$search = $_GET['Rechercher'];

$sql = "select * from fruitslegumes where  Nom like'" . $search . "%'";
$result = mysqli_query($mysqli, $sql);
var_dump($search);


while ($row = mysqli_fetch_array($result)){
    $id = $row["ID_FL"];
?>

<div class="fidget">

    <a href="product.php?id=<?php echo $id ?>"><h1>Produit : <?php echo $row['Nom']; ?></h1></a>

<?php echo $row['Quantite']; ?> <br/>
<?php echo $row['Prix']; ?> <br/>
<?php echo $row['Provenance']; ?> <br/>
<?php echo $row['Conservation']; ?> <br/>
<?php echo $row['Description']; ?> <br/>
<?php
}
?>
</div>