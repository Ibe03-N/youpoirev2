<?php
    session_start();
    require_once ("db.php");

    $mail = $_POST["Mail"];
    $mdp = $_POST["Mdp"];

    $mail = addslashes($mail);
    $mdp = addslashes($mdp);

    $sql = "SELECT * FROM utilisateurs WHERE Mail = '" . $mail . "'";
    $result = $mysqli->query($sql);
    $res = mysqli_num_rows($result);

    if ($res == 1)
    {
        $row = mysqli_fetch_array($result);
        $lemdp = $row["Mdp"];

        if (password_verify($mdp, $lemdp)) {

            $id = $row["ID_user"];
            $_SESSION['ID'] = $id;
            header("location: index.htm");

        } else {
            echo "Le mot de passe est incorrect";
        }


    }
    else
        echo "L'email ou le mot de passe est incorrect";
?>

