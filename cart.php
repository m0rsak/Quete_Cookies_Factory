<?php require 'inc/head.php';
if (!isset($_SESSION["loginname"])) {
  header('location:login.php');
}

if (empty($_SESSION['pecan_nuts']) && empty($_SESSION['chocolate_chips']) && empty($_SESSION['chocolate_cookie']) && empty($_SESSION['mm_cookies'])){
    echo "Vous n'avez séléctionné aucun Cookies";
}else{// N'affichera seulement les cookies selectionnée
    echo "<section class=\"cookies container-fluid\">".
    "<div class=\"row\">".
        "<p>Vous avez sélectionné :</p>";
        if (!empty($_SESSION['pecan_nuts'])){
            echo "<p>- Pecan nuts : </p>".$_SESSION['pecan_nuts'];
        }

        if (!empty($_SESSION['chocolate_chips'])){
            echo "<p>- Pecan nuts : </p>".$_SESSION['chocolate_chips'];
        }

        if (!empty($_SESSION['chocolate_cookie'])){
            echo "<p>- Pecan nuts : </p>".$_SESSION['chocolate_cookie'];
        }

        if (!empty($_SESSION['mm_cookies'])){
            echo "<p>- Pecan nuts : </p>".$_SESSION['mm_cookies'];
        }

        echo "</section>";
}
?>
<?php require 'inc/foot.php'; ?>
